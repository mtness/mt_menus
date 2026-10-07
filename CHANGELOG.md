# Changelog

## 14.0.0

- Compatible with TYPO3 13.4 and 14, PHP 8.2 or newer.
- Added site set `markustimtner/mt-menus`.
- Fixed: images of pages were looked up in `tt_content`; the `FilesProcessor` now reads `pages.media`.
- Fixed: output of title, subtitle and abstract is escaped again.
- Fixed: the page title uses the navigation title when set.
- Image size is configurable with `settings.maxWidth` and `settings.maxHeight` (default `495c` x `305c`).
- Both templates share the partial `Menu.html`.
- Backend form: palettes for appearance, language, access and notes, own label for the page field.
- Added German translation.
- Removed the unused database field `pages.grid_class`.
- Composer and `ext_emconf.php` declare all dependencies.
