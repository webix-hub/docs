Version 3.2
=====================

<span class="release_date">released on February 24, 2016</span>

## Breaking Changes
- Datatable methods exportToPDF() and exportToExcel() as well as Pivot methods toPDF() and toExcel() aren't available anymore. 
Use [webix.toPDF()](api/_topdf.md) and [webix.toExcel()](api/_toexcel.md) methods instead. 

- The mechanism of loading Excel files into data components is modified. The "excel" proxy was removed.
Use the "binary" [proxy](desktop/server_proxy.md) object to load files like Excel into data components and the "excel" [datatype](desktop/data_types.md) for parsing Excel files.

Check the [Migration Guide](migration.md#webix3132) for more details.


##New Features

- [Spreadsheet](desktop/spreadsheet.md) widget (PRO edition)
- [RangeChart](desktop/range_chart.md) widget (PRO edition)
- [undo](desktop/undo.md) functionality for all data components
- [export to PDF](desktop/export_pdf.md) for all data components
- [area selection](datatable/area_selection.md) for Datatable and TreeTable


##Updates

- [patch](api/ajax_patch.md) methods for [webix.ajax()](api/refs/ajax.md) module
- [download](api/html_download.md) method for [webix.html](api/refs/html.md) module
- custom xAxis for [Pivot Chart](desktop/pivotchart.md)
- [onViewResize](api/link/ui.window_onviewresize_event.md) event for window
- download functionality for [PDF viewer](desktop/pdfviewer.md) 
- [parse](desktop/pdfviewer.md#pdfviewerapireference) method for PDF viewer
- support for structure without columns in [Pivot Table](desktop/pivot.md)
- [selectAll](api/ui.datatable_selectall.md) and [unselectAll](api/ui.datatable_unselectall.md) methods for datatable
- proxy support for dynamic loading {{sample 15_datatable/16_dyn_loading/07_dyn_proxy.html}}
- dynamic loading support for [MultiCombo](desktop/multicombo.md) suggestions
- support for proxy and editable columns in [File Manager](desktop/file_manager.md)
- "missed values" support in [Pivot Table](desktop/pivot.md)
- [drag](api/link/ui.list_drag_config.md) order for [x-lists](desktop/xlist.md)
- binary [proxy](desktop/server_proxy.md) for reading files as ArrayBuffer
- excel [data driver](desktop/data_types.md) (and datatype) for parsing the contents of Excel files. Used in [Excel viewer](desktop/excelviewer.md) and [Spreadsheet](desktop/spreadsheet.md)
- [pivot] performance improvements
- [kanban] custom layouts
- [kanban] improved drag-n-drop
- [mobile scheduler] improved performance

##Fixes

- header spans during hide and show of datatable columns
- edit operations in datatable and 0 value
- columns filtering in datatable
- incorrect focus for toggle buttons
- history track in case of dynamic loading
- dynamic loading for TreeTable
- call scrollTo after Datatable reload
- get suggested value from Suggest list without selection in it
- getScrollState for Datatable
- area/block selection in 'split' cases
- subrows for dynamic loading in DataTable
- onDataUpdate, onAfterAdd, onAfterDelete events fire after visual changes are applied
- repainting Datatable subview in hidden state
- onAfterAdd is called after added item is drawn
- fix touch inputs
- customCheckbox and customRadio in IE10
- onStoreLoad call added for importData
- style for disabled buttons
- toolbar height in Flat and Compact skins
- double watcher logic in Angular integration
- DP parameters passing to updateItem
- label/id of input elements
- multiday rendering in Mobile Scheduler
- pager size
- filtering by multiple fields in Pivot Table
- tab-click events in Excel Viewer
- update visible selection after color board suggest is displayed
- FileManager selection
- spans rendering after columns number has changed
- onAfterScroll event and non-touch handlers
- onchange event for multitext control
- url in loadBranch
- auto-positioning popup in case of global scroll
- DP parameters passing to updateItem
- label/id of input elements
- proxy.load call
- IE8: vertical text of collapsed items
- clearing hidden canvas
- performance problem with .toExcel
- native selection in views with enabled 'clipboard'
- editing in views with enabled clipboard
- regression in updateFromResponse
- automatic data loading after receiving error response
- clearing hidden canvas
- full-screen for new iOS versions
- newValues: default selection removed
- touch: avoiding resize handling on virtual keyboard for focused inputs
- workaround for iOS Safari bars overlapping in the landscape mode

