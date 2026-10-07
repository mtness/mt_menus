<?php

defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// Add the CType "Menu of Subpages with Images"
ExtensionManagementUtility::addTcaSelectItem(
	'tt_content',
	'CType',
	[
		'label' => 'LLL:EXT:mt_menus/Resources/Private/Language/locallang.xlf:submenu',
		'value' => 'menu_subpages_images',
		'icon' => 'menu_subpages_images',
		'group' => 'menu',
	],
	'menu_subpages',
	'after'
);
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['menu_subpages_images'] = 'menu_subpages_images';

// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['menu_subpages_images'] = [
	'showitem' => '
		--palette--;;headers,
		pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
	',
];

// Add the CType "Menu of Pages with Images"
ExtensionManagementUtility::addTcaSelectItem(
	'tt_content',
	'CType',
	[
		'label' => 'LLL:EXT:mt_menus/Resources/Private/Language/locallang.xlf:menu',
		'value' => 'menu_pages_images',
		'icon' => 'menu_pages_images',
		'group' => 'menu',
	],
	'menu_pages',
	'after'
);
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['menu_pages_images'] = 'menu_pages_images';

// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['menu_pages_images'] = [
	'showitem' => '
		--palette--;;headers,
		pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
	',
];