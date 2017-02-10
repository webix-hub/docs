SpreadSheet What's New
===========================

###Version 4.2

New Features
-------------

- ability to define custom math methods
- cross-sheet math
- string math methods
- header highlighting on cell selection
- shift+key navigation

Updates
-----------

- .recalculate api
- autocorrection of formulas (to upper case, etc)
- compactStyles() (link) method to remove unused styles from sheet styles ([demo](65_spreadsheet/samples/02_api/18_clear_styles.html))
- onBefore/AfterSheetShow (links) events instead of onSheetShow

Fixes
------

- dialogs restore previously selected values
- clearRange() can remove editors and filters
- preserving custom row height for wrapped cells and cells with custom height
- add human readable CSS for preset format (like custom format)
- add text padding not to cover it with dropdown icon
- allow column operations without cell selection
- remove sizes for non-existent items
- block all actions for conditional dialog
- block selection and editor bar
- clear-style removes conditional format
- color marker in color selectors
- column autowidth is never executed
- compatibility with IE edge
- CONCATENATE doesn't not work with separate operands
- default text color
- do not move selection when edit is canceled
- dropdown editors and editbar
- duplicate range names
- editor bar and selection removing
- frozenRows and frozenColumns are shared between sheets
- image autosize fixed
- key navigation for live editor 
- let live editor show formulas only if users enter formula mode ( types "=")
- live editor expects cell reference after math operator only for formulas
- load and import from excel
- logical operations in IF command
- math serialization
- multi-sheet math finalized
- paint editor value in the related cell
- parse sheet structure on adding row/column
- prefill conditional format dialogs in case of multiselection
- preserve not-affected sizes
- preserve selection during context menu call
- prevent from user action for sheet operations in readonly mode
- prevent from removing all rows and all columns
- processing hidden headers, gridlines, rows and columns per sheet
- regression in inline image pasting
- rowCount and columnCount are not calculated correctly
- prevent from header column selection
- selection area during column operations
- serialization of empty values
- spreadsheet reset affects only active sheet
- style cross interference in corner cases
- styling of top area in no-gridlines mode
- undo for hidden columns and rows
- unnecessary focus on dialog closing
- update cell when live editor value changes