<?php
class SpecialAdManagerZones extends SpecialPage {

	/**
	 * Constructor -- set up the new special page
	 */
	public function __construct() {
		parent::__construct( 'AdManagerZones', 'admanager' );
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

		$fullTableName = AD_ZONES_TABLE;
		$dbr = wfGetDB( DB_SLAVE );
		if ( AdManagerUtils::checkForAndDisplayError( $dbr->tableExists( $fullTableName ),
				'admanager_notable' ) ) {
			return;
		}

		$this->doSpecialAdManagerZones();
	}

	function doSpecialAdManagerZones() {
		$request = $this->getRequest();

		$errors = array();

		if ( $request->getCheck( 'submitted' ) ) {
			$this->zones = explode( "\n", trim( $request->getVal( 'zones' ) ) );
			foreach ( $this->zones as $zone ) {
				$zone = trim( $zone );
				if ( !is_numeric( $zone ) ) {
					$errors['admanager_zonenotnumber'][] = $zone;
				}
			}
			if ( empty( $errors ) ) {
				$this->addZones();
			}
		}

		$this->showForm( $errors );
	}

	function addZones() {
		$out = $this->getOutput();
		$zones = $this->zones;

		$dbw = wfGetDB( DB_MASTER );
		$fullTableName = AD_ZONES_TABLE;

		$dbw->delete( $fullTableName, '*', __METHOD__ );
		$text = "<div class=\"successbox\">\n";
		foreach ( $zones as $zone ) {
			if ( $zone ) {
				$dbw->insert(
					$fullTableName, array( 'ad_zone_id' => $zone ), __METHOD__
				);
				$text .= '* ' . $this->msg( 'admanager_addedzone' )->text() . " $zone";
			}
		}
		$text .= "</div><br clear=\"both\" />";
		$out->addWikiText( $text );
	}

	function showForm( array $errors ) {
		$out = $this->getOutput();

		if ( empty( $errors ) ) {
			$out->addWikiMsg( 'admanagerzones_docu' );
		} else {
			$text = "<div class=\"errorbox\">\n";
			foreach ( $errors as $message => $pageTitles ) {
				foreach ( $pageTitles as $pageTitle ) {
					$text .= $this->msg( $message, $pageTitle )->text() . '<br />';
				}
			}
			$text .= "</div><br clear=\"both\" />";
			$out->addWikiText( $text );
		}

		$fullTableName = AD_ZONES_TABLE;
		$dbr = wfGetDB( DB_SLAVE );
		$current = $dbr->select(
			$fullTableName, array( '*' ), array(), __METHOD__
		);

		// Fetch current table into array
		$currentArray = array();
		while ( $currentRow = $current->fetchObject() ) {
			$currentArray[] = $currentRow->ad_zone_id;
		}

		$display = '';
		foreach ( $currentArray as $zone ) {
			$display .= "$zone\n";
		}

		$text = Xml::openElement( 'form',
				array( 'id' => 'admanagerzones', 'action' => $this->getPageTitle()->getFullURL(),
				'method' => 'post' ) ) . "\n" .
			AdManagerUtils::hiddenField( 'title',
				$this->getPageTitle()->getPrefixedText() ) .
			AdManagerUtils::hiddenField( 'submitted', 1 );
		$text .= Xml::textarea( 'zones', $display, 25, 20,
				array( 'style' => 'width: auto; margin-bottom: 1em;' ) );
		$text .= Xml::element( 'br' );
		$text .= Xml::submitButton( $this->msg( 'admanager_submit' )->text() );
		$text .= Xml::closeElement( 'form' );
		$text .= Xml::element( 'br' );

		$out->addHTML( $text );

		$out->addWikiMsg( 'admanager_gotoads' );
	}
}
