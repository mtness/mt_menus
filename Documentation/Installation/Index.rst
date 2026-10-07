..  _installation:

============
Installation
============

Install the extension with Composer:

..  code-block:: bash

    composer require markustimtner/mt-menus

Include the site set :guilabel:`MT Menus` (:code:`markustimtner/mt-menus`) as a
dependency of your site or sitepackage set.

Without a site set the TypoScript is added globally by :file:`ext_localconf.php`.

The extension requires :composer:`typo3/cms-fluid-styled-content` and uses its
:code:`Default` layout.
