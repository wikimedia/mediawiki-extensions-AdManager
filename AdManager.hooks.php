<?php
final class AdManagerHooks {

	/**
	 * Schema update to set up the needed database tables.
	 */
	public static function onSchemaUpdate( DatabaseUpdater $updater ) {
		$updater->addExtensionTable(
			AdManager::getTableName(), __DIR__ . '/AdManager.sql', true
		);
		$updater->addExtensionTable(
			AdManagerZones::getTableName(), __DIR__ . '/AdManager.sql', true
		);

		return true;
	}

	/**
	 * Pop some ads at the bottom of the sidebar
	 *
	 * @global string $wgAdManagerPlacement
	 * @param Skin $skin
	 * @param array $sidebar
	 * @return boolean
	 */
	public static function SkinBuildSidebar( $skin, &$sidebar ) {
		global $wgAdManagerPlacement;

		if ( $wgAdManagerPlacement != 'sidebar' ) {
			return true;
		}

		$adsOut = AdManager::getAdOutputFor( $skin->getTitle() );
		foreach ( $adsOut as $adNumber => $adOut ) {
			$sidebar["AdManager$adNumber"] = $adOut;
		}

		return true;
	}

	/**
	 * Pop some ads into the start of the content area
	 *
	 * @global string $wgAdManagerPlacement
	 * @param OutputPage $out
	 * @param Skin $skin
	 * @return boolean
	 */
	public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {
		$out->addModules( 'ext.adManager' );

		global $wgAdManagerPlacement;
		if ( $wgAdManagerPlacement != 'content' ) {
			return true;
		}

		$adsOut = AdManager::getAdOutputFor( $skin->getTitle() );
		foreach ( $adsOut as $adNumber => $adOut ) {
			$out->prependHTML( Html::rawelement( 'div',
					array( 'id' => "AdManager-content-$adNumber", 'class' => 'AdManager-content' ), $adOut ) );
		}

		return true;
	}
}
