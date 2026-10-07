<?php

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
	// Icon identifier
	'menu_subpages_images' => [
		// Icon provider class
		'provider' => SvgIconProvider::class,
		// The source SVG for the SvgIconProvider
		'source' => 'EXT:mt_menus/Resources/Public/Icons/menu_subpages_images.svg',
	],
	'menu_pages_images' => [
		// Icon provider class
		'provider' => SvgIconProvider::class,
		// The source SVG for the SvgIconProvider
		'source' => 'EXT:mt_menus/Resources/Public/Icons/menu_pages_images.svg',
	],
];