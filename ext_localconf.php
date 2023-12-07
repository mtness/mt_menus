<?php
defined('TYPO3') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
	'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:mt_menus/Configuration/TSconfig/Page/menu.tsconfig">'
);

call_user_func(function()
{
   $extensionKey = 'mt_menus';

   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
      $extensionKey,
      'setup',
      "@import 'EXT:mt_menus/Configuration/TypoScript/setup.typoscript'"
   );
});