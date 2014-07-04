<?php
class SpecialAdManager extends SpecialPage {
	const NUM_BLANK_ROWS = 5;
	const BLANK = '----';

	/**
	 * Constructor -- set up the new special page
	 */
	public function __construct() {
		parent::__construct( 'AdManager', 'admanager' );
	}

	/**
	 * Show the special page
	 *
	 * @param $query Mixed: parameter passed to the special page or null
	 */
	public function execute( $query ) {
		$out = $this->getOutput();
		$user = $this->getUser();

		// Check that the user is allowed to access this special page
		if ( !$user->isAllowed( 'admanager' ) ) {
			$out->permissionRequired( 'admanager' );
			return;
		}

		// Show a message if the database is in read-only mode
		if ( wfReadOnly() ) {
			$out->readOnlyPage();
			return;
		}

		// If user is blocked, s/he doesn't need to access this page
		if ( $user->isBlocked() ) {
			$out->blockedPage( false );
			return false;
		}

		// Set the page title, robot policies, etc.
		$this->setHeaders();
		$out->addModuleStyles( 'mediawiki.special' );

		$dbr = wfGetDB( DB_SLAVE );
		$fullTableName = AD_TABLE;
		$fullTableNameZones = AD_ZONES_TABLE;
		if (
			AdManagerUtils::checkForAndDisplayError(
				$dbr->tableExists( $fullTableName ) &&
				$dbr->tableExists( $fullTableNameZones ), 'admanager_notable'
			)
		) {
			return;
		}

		$currentZones = $dbr->select(
			$fullTableNameZones, array( '*' ), array(), __METHOD__
		);
		if ( AdManagerUtils::checkForAndDisplayError( $currentZones->numRows() > 0,
				'admanager_noAdManagerZones' ) ) {
			return;
		}

		// Fetch current zones table into array
		$this->adManagerZones = array();
		while ( $currentRow = $currentZones->fetchObject() ) {
			$this->adManagerZones[] = $currentRow->ad_zone_id;
		}

		$this->adManagerZones[] = self::BLANK;

		$this->doSpecialAdManager();
	}

	function doSpecialAdManager() {
		$request = $this->getRequest();

		$errors = array();

		$this->target['Page'] = array();
		$this->target['Category'] = array();

		if ( $request->getCheck( 'submitted' ) ) {
			// Load user input and do error checking
			$tableTypes = array( 'Page', 'Category' );
			foreach ( $this->adManagerZones as $zone ) {
				foreach ( $tableTypes as $tableType ) {
					$titles = explode( "\n",
						trim( $request->getVal( "textarea_{$zone}_{$tableType}" ) ) );

					foreach ( $titles as $title ) {
						$title = trim( $title );
						if ( !$title ) {
							continue;
						}

						if ( $tableType == 'Page' ) {
							$pageObject = Title::newFromText( trim( $title ) );
							if ( !$pageObject->exists() ) {
								$errors['admanager_invalidtargetpage'][] = $title;
							} else {
								$this->target['Page'][$zone][] = $title;
							}
						} else {
							$categoryObject = Category::newFromName( $title );
							if ( !$categoryObject->getID() ) {
								$errors['admanager_invalidtargetcategory'][] = $title;
							} else {
								$this->target['Category'][$zone][] = $title;
							}
						}
					}
				}
			}

			if ( empty( $errors ) ) {
				$this->addZoneToTitle();
				return;
			}
		}

		$this->showForm( $errors );
	}

	function addZoneToTitle() {
		$out = $this->getOutput();

		$dbw = wfGetDB( DB_MASTER );
		$fullTableName = AD_TABLE;

		$dbw->delete( $fullTableName, '*', __METHOD__ );

		$tableTypes = array( 'Page', 'Category' );
		foreach ( $tableTypes as $tableType ) {
			foreach ( $this->target[$tableType] as $targetZoneID => $titlesArray ) {
				if ( $targetZoneID == self::BLANK ) {
					$targetZoneID = NULL;
				}
				foreach ( $titlesArray as $title ) {
					// Depending on fields being processed, lookup either the
					// text's Page ID or Category ID
					if ( $tableType == 'Page' ) {
						$targetPageID = Title::newFromText( $title )->getArticleID();
					} else {
						$targetPageID = Category::newFromName( $title )->getID();
					}
					$dbw->insert(
						$fullTableName,
						array(
						'ad_page_id' => $targetPageID,
						'ad_zone' => $targetZoneID,
						'ad_page_is_category' => ( $tableType == 'Category' ? true : false )
						), __METHOD__
					);
				}
			}
		}

		$out->wrapWikiMsg( "<div class=\"successbox\" style=\"margin-right:3em;\">$1</div>",
			'admanager_added' );
		$out->addWikiText( '<br clear="both" />' . $this->msg( 'admanager_return' )->text() );
	}

	function showForm( array $errors ) {
		$out = $this->getOutput();

		if ( empty( $errors ) ) {
			$out->addWikiMsg( 'admanager_docu' );
		} else {
			$text = "<div class=\"errorbox\">\n";
			foreach ( $errors as $message => $pageTitles ) {
				foreach ( $pageTitles as $pageTitle ) {
					$text .= $this->msg( $message, $pageTitle )->text() . "<br />";
				}
			}
			$text .= "</div><br clear=\"both\" />";
			$out->addWikiText( $text );
		}

		$text = Xml::openElement( 'form',
				array( 'id' => 'admanager', 'action' => $this->getPageTitle()->getFullURL(),
				'method' => 'post' ) ) . "\n" .
			AdManagerUtils::hiddenField( 'title',
				$this->getPageTitle()->getPrefixedText() ) .
			AdManagerUtils::hiddenField( 'submitted', 1 );

		$this->currentData['Page'] = $this->getCurrentData( 'Page' );
		$this->currentData['Category'] = $this->getCurrentData( 'Category' );

		foreach ( $this->adManagerZones as $zone ) {
			// Check if this is the "NOAD" zone
			if ( $zone == self::BLANK ) {
				$zoneText = $this->msg( 'admanager_noads' )->text();
			} else {
				$zoneText = $zone;
			}
			$text .= '<h2> ' . $this->msg( 'admanager_zonenum', $zoneText )->text() . ' </h2>';
			$text .= '<div style="float:left; margin-right: 6em;">';
			$text .= $this->drawTable( 'Page', $zone );
			$text .= '</div><div style="float: left;">';
			$text .= $this->drawTable( 'Category', $zone );
			$text .= '</div> <br clear="all">';
		}
		$text .= Xml::element( 'br' );
		$text .= Xml::submitButton( $this->msg( 'admanager_submit' )->text() );
		$text .= Xml::closeElement( 'form' );
		$text .= Xml::element( 'br' );
		$out->addHTML( $text );
		$out->addWikiMsg( 'admanager_gotozones' );
	}

	function getCurrentData( $tableType ) {
		$fullTableName = AD_TABLE;
		$dbr = wfGetDB( DB_SLAVE );
		$current = $dbr->select(
			$fullTableName,
			array(
			'ad_id', 'ad_page_id', 'ad_zone', 'ad_page_is_category'
			),
			'ad_page_is_category IS ' . ( $tableType == 'Page' ? 'NOT ' : '' ) . 'TRUE',
			__METHOD__
		);

		// Fetch current table into array
		$currentArray = array();
		while ( $currentRow = $current->fetchObject() ) {
			$currentArray[] = array(
				// Depending on if we're fetching pages or categories, match the ID to the appropriate Title
				'ad_page_name' => ( $tableType == 'Page' ? Title::newFromID( $currentRow->ad_page_id )->getFullText() : Category::newFromID( $currentRow->ad_page_id )->getName() ),
				'ad_zone' => ( $currentRow->ad_zone ? $currentRow->ad_zone : self::BLANK ) //if ad_zone is null, it's the "NOAD" zone
			);
		}

		return $currentArray;
	}

	function drawTable( $tableType, $currentZone ) {
		$request = $this->getRequest();

		$page_label = $this->msg( "admanager_label$tableType" )->text();

		$text = <<<END
			<table class="table$tableType">
		<tr>
			<th>$page_label</th>
		</tr>

END;

		$display = '';
		if ( $request->getCheck( 'submitted' ) ) {
			$display = $request->getVal( "textarea_{$currentZone}_{$tableType}" );
		} else {
			foreach ( $this->currentData[$tableType] as $entry ) {
				if ( $entry['ad_zone'] == $currentZone ) {
					$display .= $entry['ad_page_name'] . "\n";
				}
			}
		}

		$text .= '<tr><td>' . Xml::textarea( "textarea_{$currentZone}_{$tableType}",
				$display, 30, 12, array( 'style' => 'width: auto;' ) );
		$text .= '</td></tr></table>';

		return $text;
	}
}
