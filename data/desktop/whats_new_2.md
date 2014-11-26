Version 2.0
==============

### Major features
- [Promises API for all ajax operations](helpers/ajax_operations.md)
- [Progress bars and overlays](desktop/progress.md)
- Improved keyboard navigation
- [Extra locales](desktop/localization.md#builtinlocales) added
- Package includes source map files
- [pro] PRO edition includes [Pivot component](desktop/pivot.md)
- [pro] [Multiselect](desktop/controls.md#multiselect) and [multitext](desktop/controls.md#multitext) inputs
- [pro] [Advanced editors](desktop/edit.md) for DataTable and Property views 
- [pro] [Datasuggest](desktop/datasuggest) and [Gridsuggest](desktop/gridsuggest.md) views for form controls and editing;
- [pro] [Colspans and Rowspans in DataTable](datatable/rowspans_colspans.md)
- [pro] [Column menu](datatable/headermenu.md) in DataTable
- [pro] [Grouped columns](datatable/columns_configuration.md#groupingcolumns) in DataTable
- [pro] [Advanced filters](datatable/filtering.md) for DataTable
- [pro] Optional [header rotating](datatable/headers_footers.md#rotatedheaderfooter) in DataTable
- [pro] Optional [custom scrollbars](desktop/scroll_control.md#webixcustomscroll)
- [pro] Extra 300 locales

If you are updating from Webix 1.x - please check the migration.md

### Minor features
- [custom height for header lines in datatable](datatable/headers_footers.md#customheightforheaderandfooter)
- dark style for carousel
- [getState api](api/dataprocessor_getstate.md) for dataprocessor
- onViewMove and onViewMoveEnd events to movable
- [optional close button for tabs](desktop/controls.md#tabbar)
- [password editor](desktop/edit.md)
- [simple way to add icons to tabs](desktop/controls.md#tabbar)
- [storage.clear](api/storage.local_clear.md) for all models
- if id for data object was not provided, value will be used as id
- onMenuItemClick can block menu hiding
- overlay works for all components
- parse can accept raw ajax response and webix components
- [suggest](desktop/suggest.md) for text editors


### Fixes

- ability to define popup as raw json config
- active style for danger button
- zero border radius in Safari
- accordion labels
- active content
- adjust doesn't work for columns with string template
- adjustRowHeight in grid with dynamic loading
- bar chart border correction
- changing master id doesn't work for bind forms
- closing popup editors after editor closing
- custom suggest types in combo and richselect
- datatable lost sorting marker after column resize
- datepicker in grid and empty value
- icon sizes
- icon tabs vertical align
- IE8 compatibility
- incorrect header size after setColumnWidth call
- isBranch API fixed
- loading xml data into template
- popup closes after click on button in the list
- regression in suggest and edit configuration
- right split recalculation
- serializing state of hidden filters in datatable
- series in case of custom x-axis
- series in chart with custom scale
- sizing of carosel after adding|deleting extra views
- slashes in templates
- space mode ignores borderless setting of layout
- text wrapping in the rich select control
- textarea and label styles
- type $css property for unitlist
- yCount and context menu
