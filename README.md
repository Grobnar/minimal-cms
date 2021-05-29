# minimal-cms
Minimal PHP and Bootstrap based CMS


ISSUES

- JSON files require write access.
- In setup.php, redirection to a newly created page is setup to work on localhost, and may require adjustments if used online.
- In setup.php, redirection after deleting a page is setup to work on localhost, and may require adjustments if used online.
- In setup.php, redirection after editing a page is setup to work on localhost, and may require adjustments if used online.
- In setup.php, redirection after deleting a block is setup to work on localhost, and may require adjustments if used online.
- Variables are fragile, overwriting a variable like $title in a template can cause problems whenever it is inserted into a page.
- Duplicate elements can be created when a template cannot be found, in which case it will repeat the previous block.
- $Editable bool is not implemented on checkbox and file type fields.
- Angle brackets in the content blocks must be escaped.


POSSIBLE ADDITIONS

A list of features that could or should be implemented.

- Sitewide Settings.
  Editor with fields for sitewide settings like the favicon.

- Archive.
  Versionning feature that keeps deleted pages saved and tracks changes, enabling reversal.

- Localization.
  Support for language toggles.

- Themes.
  Themes would be user selected stylesheets loaded after the base stylesheets, that give a distinctive look without affecting element layout.

- User System.
  Users, roles and log in system.
  Necessary before any real usage of this CMS.

- Datasets.
  Custom sets of fields, representing content which is independant from pages, such as blog posts and photo galleries.

- Template Variations.
  Alternate php files for a template, providing a different layout and look for a certain block type.

- Interfaces.
  Alternate output besides the webpage, such as JSON output for an API interface.

- Columns.
  Columns would enable users to split up the page, or display multiple smaller elements side by side.

- Confirmation Windows.
  Deleting a page or block should require user confirmation.
