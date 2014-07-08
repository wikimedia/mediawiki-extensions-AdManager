<?php
final class AdManagerHooks {

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
	 * Pop some ads at the bottom of the sidebar
	 *
	 * @global string $wgAdManagerService
	 * @global string $wgAdManagerCode
	 * @param Skin $skin
	 * @param array $sidebar
	 * @return boolean
	 */
	public static function SkinBuildSidebar( $skin, &$sidebar ) {
		if ( !AdManager::tableExists() ) {
			return true;
		}

		$thisPageAdZones = AdManager::getAdZonesFor( $skin->getTitle() );

		if ( empty( $thisPageAdZones ) ) { // No zone set for this page or its categories
			return true;
		}

		$adManagerCode = AdManager::getAdManagerCode();
		if ( !isset( $adManagerCode ) ) {
			return true; // TODO: show error
		}

		$adNumber = 0;
		foreach ( $thisPageAdZones as $thisPageAdZone ) {
			$adNumber++;
			$out = str_replace( '$1', $thisPageAdZone, $adManagerCode );
			$sidebar["AdManager$adNumber"] = $out;
		}

		return true;
	}

	public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {
		$out->addModules( 'ext.adManager' );
	}
}
