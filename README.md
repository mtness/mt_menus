# MT Menus

TYPO3 extension providing two menu content elements that show the images from the page resources (`media`):

- **Menu with Image from Resources** (`menu_pages_images`): the selected pages.
- **Submenu with Image from Resources** (`menu_subpages_images`): the subpages of the selected pages.

## Compatibility

| MT Menus | TYPO3      | PHP        |
|----------|------------|------------|
| 14.x     | 13.4, 14.x | 8.2 – 8.5  |

## Installation

```bash
composer require markustimtner/mt-menus
```

Include the site set **MT Menus** (`markustimtner/mt-menus`) in your site configuration. Without a site set, the TypoScript is also added globally through `ext_localconf.php`.

The extension depends on `typo3/cms-fluid-styled-content` and uses its `Default` layout.

## Usage

Add a content element from the **Menu** group, select the pages and give the pages an image in their *Resources* tab.

## Customizing

Override the templates and the partial by adding a path with a higher index:

```typoscript
tt_content.menu_pages_images {
	templateRootPaths.30 = EXT:my_sitepackage/Resources/Private/Templates/
	partialRootPaths.30 = EXT:my_sitepackage/Resources/Private/Partials/
	settings {
		maxWidth = 800c
		maxHeight = 450c
	}
}
```

The same works for `tt_content.menu_subpages_images`.

## License

GPL-2.0-or-later
