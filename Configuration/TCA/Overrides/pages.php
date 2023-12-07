<?php

defined('TYPO3') || die ('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::registerPageTSConfigFile('mt_menus', 'Configuration/TsConfig/page.tsconfig', 'Site TSConfig mt_menus');
