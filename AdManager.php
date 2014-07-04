<?php
/**
 * AdManager - a MediaWiki extension that allows setting an ad zone for
 * individual pages or categories
 *
 * The special page created is 'Special:AdManager', which allows sysops to set
 * the zone for the pages or categories.
 * The correct ad code for adding the zone is automatically added to the
 * correct page.
 *
 * @file
 * @ingroup Extensions
 * @author Ike Hecht
 * @link http://www.mediawiki.org/wiki/Extension:AdManager Documentation
 */
if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

define( 'AD_TABLE', 'ad' );
define( 'AD_ZONES_TABLE', 'adzones' );

// Extension credits that will show up on Special:Version
$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'AdManager',
	'version' => '0.3.1',
	'author' => 'Ike Hecht for WikiWorks',
	'url' => 'https://www.mediawiki.org/wiki/Extension:AdManager',
	'descriptionmsg' => 'admanager-desc',
);

// Lowercase name of the advertising service. Currently supported values are:
// openx
$wgAdManagerService = null;
// For custom code. Insert $1 anywhere that the ad zone should be inserted.
$wgAdManagerCode = null;

$wgMessagesDirs['AdManager'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['AdManager'] = __DIR__ . 'AdManager.i18n.php';
$wgExtensionMessagesFiles['AdManagerAlias'] = __DIR__ . '/AdManager.alias.php';

// This extension uses its own permission type, 'admanager'
$wgAvailableRights[] = 'admanager';
$wgGroupPermissions['sysop']['admanager'] = true;

$wgSpecialPages['AdManagerZones'] = 'SpecialAdManagerZones';
$wgSpecialPages['AdManager'] = 'SpecialAdManager';

$wgAutoloadClasses['SpecialAdManagerZones'] = __DIR__ . '/SpecialAdManagerZones.php';
$wgAutoloadClasses['SpecialAdManager'] = __DIR__ . '/SpecialAdManager.php';
$wgAutoloadClasses['AdManagerHooks'] = __DIR__ . '/AdManager.hooks.php';
$wgAutoloadClasses['AdManagerUtils'] = __DIR__ . '/AdManager.utils.php';

$wgHooks['LoadExtensionSchemaUpdates'][] = 'AdManagerHooks::onSchemaUpdate';
$wgHooks['SkinBuildSidebar'][] = 'AdManagerHooks::SkinBuildSidebar';
$wgHooks['BeforePageDisplay'][] = 'AdManagerHooks::onBeforePageDisplay';

$wgResourceModules['ext.adManager'] = array(
	'styles' => 'ext.adManager.css',
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'AdManager'
);
