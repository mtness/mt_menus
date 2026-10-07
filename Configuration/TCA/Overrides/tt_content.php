<?php

defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$showItem = '
	--div--;core.form.tabs:general,
		--palette--;;headers,
		pages;LLL:EXT:mt_menus/Resources/Private/Language/locallang.xlf:pages,
	--div--;core.form.tabs:appearance,
		--palette--;;frames,
		--palette--;;appearanceLinks,
	--div--;core.form.tabs:language,
		--palette--;;language,
	--div--;core.form.tabs:access,
		--palette--;;hidden,
		--palette--;;access,
	--div--;core.form.tabs:notes,
		rowDescription,
	--div--;core.form.tabs:extended,
';

// CType "Menu of Subpages with Images"
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
$GLOBALS['TCA']['tt_content']['types']['menu_subpages_images'] = [
	'showitem' => $showItem,
];

// CType "Menu of Pages with Images"
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
$GLOBALS['TCA']['tt_content']['types']['menu_pages_images'] = [
	'showitem' => $showItem,
];
