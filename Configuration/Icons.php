<?php

# from here:
# https://docs.typo3.org/m/typo3/reference-coreapi/main/en-us/ApiOverview/Icon/Index.html

# declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
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
	'mybitmapicon' => [
		'provider' => BitmapIconProvider::class,
		// The source bitmap file
		'source' => 'EXT:my_extension/Resources/Public/Icons/mybitmap.png',
		// All icon providers provide the possibility to register an icon that spins
		'spinning' => true,
	],
];