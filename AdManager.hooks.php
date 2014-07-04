<?php
final class AdManagerHooks {
	static $catList = array();

	/**
	 * Schema update to set up the needed database tables.
	 */
	public static function onSchemaUpdate( DatabaseUpdater $updater ) {
		$updater->addExtensionTable(
			AD_TABLE, __DIR__ . '/AdManager.sql', true
		);
		$updater->addExtensionTable(
			AD_ZONES_TABLE, __DIR__ . '/AdManager.sql', true
		);

		return true;
	}

	/**
	 * Recursively walks through tree array.
	 * Creates array containing each input's level.
	 * (array_walk_recursive doesn't like when the value is an array)
	 * A lower count indicates a closer ancestor to the page, that is
	 * supercategories are assigned higher numbers than subcategories
	 */
	private static function assignLevel( $value, $catName, $count = 0 ) {
		$count++;

		if ( !empty( $value ) ) {
			array_walk( $value, 'self::assignLevel', $count );
		}

		self::$catList[$catName] = $count;
	}

	// Pop some ads at the bottom of the sidebar
	public static function SkinBuildSidebar( $skin, &$sidebar ) {
		global $wgAdManagerService, $wgAdManagerCode;

		$fullTableName = AD_TABLE;
		$dbr = wfGetDB( DB_SLAVE );
		if ( !$dbr->tableExists( $fullTableName ) ) {
			return $sidebar;
		}

		$title = $skin->getTitle();

		// check if an ad zone was set for this page.
		$thisPageID = $title->getArticleID();
		if ( $thisPageID <= 0 ) {
			return $sidebar;
		}

		$thisPageAdZonesDB = $dbr->select(
			$fullTableName, array( 'ad_zone' ),
			"ad_page_id = $thisPageID AND ad_page_is_category IS NOT TRUE", __METHOD__
		);

		$thisPageAdZones = array();
		if ( $thisPageAdZonesDB->numRows() !== 0 ) { // If there's a page zone set, it gets precedence.
			while ( $row = $thisPageAdZonesDB->fetchObject() ) {
				$thisPageAdZones[] = $row->ad_zone;
			}
		} else {
			// check if an ad zone was set for any of this page's categories
			$allCategories = $dbr->select(
				$fullTableName, array( 'ad_page_id', 'ad_zone' ),
				'ad_page_is_category IS TRUE', __METHOD__
			);

			$thisCategoryIDS = $title->getParentCategoryTree();
			array_walk( $thisCategoryIDS, 'self::assignLevel' );
			asort( self::$catList ); // give precedence to the closest ancestors

			if ( !empty( self::$catList ) ) {
				// find first match in this page's catlist that exists in the database
				foreach ( self::$catList as $catNameNamespaced => $level ) {
					$catName = Title::newFromText( $catNameNamespaced )->getText(); // strips Category: prefix
					$catID = Category::newFromName( $catName )->getID();
					$firstMatch = $dbr->select(
						$fullTableName, array( 'ad_zone' ),
						"ad_page_id = $catID AND ad_page_is_category IS TRUE", __METHOD__
					);
					if ( $firstMatch->numRows() !== 0 ) {
						break;
					}
				}

				while ( $row = $firstMatch->fetchObject() ) {
					$thisPageAdZones[] = $row->ad_zone;
				}
			}
		}

		// And finally, pop those ads in
		if ( empty( $thisPageAdZones ) ) { // No zone set for this page or its categories
			return true;
		}

		if ( in_array( null, $thisPageAdZones ) ) { // An entry in this array was set to "None" so show no ads
			return true;
		}

		if ( $wgAdManagerService == 'openx' ) {
			$wgAdManagerCode = "<a href='http://d1.openx.org/ck.php?cb=91238047' target='_blank'><img src='http://d1.openx.org/avw.php?zoneid=$1&amp;cb=1378957897235' border='0' alt='' /></a>";
		}

		// Other ad services can be added here, with the same format as above

		if ( !isset( $wgAdManagerCode ) ) {
			return true; // TODO: show error
		}

		$adNumber = 0;
		foreach ( $thisPageAdZones as $thisPageAdZone ) {
			$adNumber++;
			// Allows admins to use any ad service or inclusion code they
			// desire by inserting in LocalSettings.php
			$out = str_replace( '$1', $thisPageAdZone, $wgAdManagerCode );
			$sidebar["AdManager$adNumber"] = $out;
		}

		return true;
	}

	public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {
		$out->addModules( 'ext.adManager' );
	}
}
