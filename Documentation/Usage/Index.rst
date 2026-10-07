..  _usage:

=====
Usage
=====

Content elements
================

Both content elements are in the group :guilabel:`Menu`:

*   :guilabel:`Menu with Image from Resources` (:code:`menu_pages_images`)
    shows the selected pages.
*   :guilabel:`Submenu with Image from Resources` (:code:`menu_subpages_images`)
    shows the subpages of the selected pages.

The image is the first file in the :guilabel:`Resources` tab of each page.
Title, subtitle and abstract of the page are shown below it.

Configuration
=============

..  code-block:: typoscript

    tt_content.menu_pages_images {
        templateRootPaths.30 = EXT:my_sitepackage/Resources/Private/Templates/
        partialRootPaths.30 = EXT:my_sitepackage/Resources/Private/Partials/
        settings {
            maxWidth = 800c
            maxHeight = 450c
        }
    }

The same options exist for :typoscript:`tt_content.menu_subpages_images`.
