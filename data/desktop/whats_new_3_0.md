Version 3.0
=====================

<span class="release_date">released on September 22, 2015</span>

##New features

- [Excel viewer](desktop/excelviewer.md)
- [PDF viewer](desktop/pdfviewer.md)
- [export to Excel](desktop/data_components_export.md) for all data views
- [export to PNG](desktop/export_png.md) for all views
- [subviews](datatable/subviews.md) and [subrows](datatable/subrows.md) for Datatable
- [serverMultiSelectFilter](datatable/filtering.md) for Datatable
- ability to [resize](api/ui.window_resize_config.md) windows;
- [any server side response](desktop/uploader_serverside.md) except for {"status":"error"} defines successful uploading for Uploader
- [dynamic loading](file_manager/loading_data.md#dynamicloading) in two modes for File Manager
- [onAfterScroll](api/scrollable_onafterscroll_event.md) event for all scrollable components

##Updates

- ability to set [datatype](desktop/data_types.md) of server side response for [Uploader](desktop/file_upload.md)
- [move API](api/refs/datamove.md) for DataCollection and TreeCollection
- [placeholder](api/link/ui.multiselect_placeholder_config.md) for Multiselect
- suggest property for [richSelectFilter, multiSelectFilter, multiComboFilter, datepickerFilter](datatable/filtering.md) filters in datatable, which makes them configurable
- [tooltip](api/link/ui.property_tooltip_config.md) for Property view
- [editable](api/link/ui.colorpicker_editable_config.md) property for ColorPicker
- [find()](api/datastore_find.md) method for all data components
- [open()](api/link/ui.tree_open.md) method for Tree supports second parameter to allow opening all parent of the item
- %c as ISO 8601 date format within [Date](api/refs/date.md) module
- [webix.require()](api/_require.md) returns promise
- ignore [refreshFilter()](api/ui.datatable_refreshfilter.md) for not existing filters
- scopes for [Backbone integration](desktop/backbone.md) 
- dependence on Underscore is removed from [BackBone integration](desktop/backbone.md) 
- [data binding](desktop/data_binding.md) for tree-like components
- ability to use data updates in [TreeStore](api/refs/treestore.md)
- remove layoutConfig from [carousel](desktop/carousel.md)
- promise as parameter of [onBeforeAjax](desktop/dataprocessor.md#sendingheaderswithdataprocessorbasedrequests) event
- prevent selection styling for certain views / view elements
- onHeaderInit event for [Pivot Table](desktop/pivot.md)
- [menuFilter and separate menus](file_manager/configuration.md#actionsmenu) for items and clear space in [File Manager](desktop/file_manager.md)
- search results clearing on opening folder in [File Manager](desktop/file_manager.md)
- block selection for path elements in File [File Manager](desktop/file_manager.md)


##Fixes

- case of window destruction from "onHide" handler
- calculation of layout cells during browser resizing
- calling mouse event handling for html elements that are outside columns in datatable
- displaying chart tooltips in case of series overlap
- not all hotkeys work correctly
- adjust columns in TreeTable
- adjustRowHeight in hidden containers
- getDirtyValues for complex data
- tab navigation for checkbox and radio
- DataTable: calling mouse event handling for html elements that are outside columns
- total column, footer and data formatting in Pivot Table
- custom scroll styling
- open dynamic folders in File Manager
- closing editor popup after clicking on control in the popup view
- webix.storage.cookie doesn't escape special chars
- find doesn't search in closed nodes in tree
- destroy options collection on master component destruction
- resize autoheight textarea
- height of datatable header in case of split and small screen width
- unnecessary closing of popup editor in datatable
- select options as array
- parsing of select options for components that don't use map collection (tree, dataview, list)
- XHR in IE
- webix.require do not recognize full HTTP paths
- styling of selected row after validation in the datatable
- grouping performance in Pivot
- uploader and full-screen body style
- incorrect work of showItem method
- secure cookies for HTTPS
- export to excel in FireFox
- week number calculation in calendar
- selection within disabled date range in calendar
- refreshing data in select-based filters on options load
- scrolling view with borders
- auto sizing columns with filter in the datatable header 
- incorrect scroll state in datatable after refreshColumns() call
- folder opening and noFileCache in File Manager
- navigation fixes
- dataFeed and "post" proxy
- id of newly added item in case of synchronous data saving
- scrolling view with borders (custom scroll)
- incorrect landing for dragOut event
- native context can't be used with inline editors
- custom scroll and accordion panels
- suggest ignores template for returned value
- headermenu and colspans in grid
- export doesn't include sum values from a footer
- data binding in property view
- conflict between updateFromResponse and new ID in DataProcessor
- incorrect focus after hiding window
- IE9 and node selection
- blur and focus with htmlform
- extra requests during dynamic loading in tree
- importData doesn't work with missed properties
- sending two Content-Type headers during loading
- FileManager: multiple-file upload in old IE
- onStructureUpdate event in datatable occurs a bit earlier
- fix FileManager edit
- refreshing items in tree after adding into an empty folder
- webix.require do not recognize full HTTP paths
- cell selection mode and colspans in datatable
- using the popup element as part of WebivView during integration with BackBone
- IE8 upload
- tooltip do not disappears in some cases
- regression in block-selection visualization in datatable
- not applying new options collection after changing structure of datatable
- using clearAll against grouped component
- suggest doesn't use template when used against HTML input
- incorrect processing of null values by rich select
- event starts in lists templates for all-day events in scheduler
- scroll in datatable blocks other touch scroll components
- not-preserving text in filter input after server side filtering in datatable
- unnecessary checks in Backbone View
- SVG elements and locate() in datatable
- position of added items in filtered state
- changing cursor in case of open editor
- get list selection as an array in multiselect
- top positioning for filtered popup in multiselect
- clearing selection on file deleting in File Manager








