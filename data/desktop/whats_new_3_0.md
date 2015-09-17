Version 3.0
=====================

<span class="release_date">released on July 22, 2015</span>

## New features

- [add] placeholder for multiselect
- [add] "suggest" property support for suggest-based filters (richSelectFilter, multiSelectFilter, multiComboFilter, datepickerFilter) in datatable, which allows for filter customization
- [add] serverMultiSelectFilter
- [add] "onHeaderInit" event for PivotTable
- [add] menuFilter and batch="item" for menu items in File Manager
- [add] excelview and excel proxy
- [add] export to Excell for all data views
- [add] export to png for all views
- [add] PDF viewer
- [add] "tooltip" for Property view
- [add] subviews and subrows in Datatable
- [add] "editable" property of ColorPicker
- [add] .move api to DataCollection and TreeCollection
- [add] "resize" property for window; bringing a window to the front on click
- [add] search results clearing on opening folder in File Manager
- [add] .open support second parameter, open all parents in Tree
- [add] noselect styling for certain views / view elements
- [add] datatype for uploader view ( ability to use a custom response format )
- [add] .find API for all data components
- [add] dynamic loading for file manager
- [add] scopes for backbone integration
- [add] %c as ISO 8601 date format within Date helper
- [add] onafterscroll event for scrollable views
- [add] "branch" loading mode for file manager

##Updates

- [update] any positive json response fires "onAfterUpload" event. To indicate an error, return {"status":"error"}
- [update] webix.require returns promise
- [update] ignore refreshFilter for not existing filters
- [update] BackBone integration - remove dependance on underscrore
- [update] data binding for tree-like components
- [update] ability to use data updates in TreeStore
- [update] block selection for path elements in File Manager
- [update] remove layoutConfig from carousel


##Fixes

- case of window destruction from "onHide" handler
- calculation of layout cells during browser resizing
- calling mouse event handling for html elements that are outside columns in datatable
- displaying chart tooltips in case of series overlap
- not all hotkeys work correctly
- adjust columns in treetable
- adjustRowHeight in hidden containers
- getDirtyValues for complex data
- tab navigation for checkbox and radio
- DataTable: calling mouse event handling for html elements that are outside columns
- total column, footer and data formatting in Pivot Table
- custom scroll styling
- open dynamic folders in File Manager
- closing editor popups after clicking on control in the popup view
- webix.storage.cookie doesn't escape special chars
- find doesn't search in closed nodes in tree
- destroy options collection on master component destruction
- resize autoheight textarea
- height of datatable header in case of split and small screen width
- unnecessary closing of popup editor in datatable
- select options as array
- parsing of select options for components that don't use map collection (tree, dataview, list)
- XHR in IE
- webix.require do not recognize full http paths
- styling of selected row after validation in the datatable
- grouping performance in Pivot
- anyOnly uploader and full-screen body style
- incorrect work of showItem method
- secure cookies for https
- export to excel in FireFox
- week number calculation in calendar
- selection within disabled date range in calendar
- refreshing data in select-based filters on options load
- scrolling view with borders
- autosizing columns with filter in the datatable header 
- incorrect scroll state in datatable after refreshColumns() call
- folder opening and noFileCache in File Manager
- navigation fixes
- dataFeed and "post" proxy
- id of newly added item in case of synchronous data saving
- scrolling view with borders (customscroll)
- incorrect landing for dragOut event
- native context can't be used with inline editors
- custom scroll and accordion panels
- suggest ignores template for returned value
- headermenu and colspans in grid
- export doesn't include summ values from a footer
- data binding in property view
- conflict between updateFromResponse and new ID in DataProcessor
- incorrect focus after hiding window
- IE9 and node selection
- blur and focus with htmlform
- extra requests during dynamic loading in tree
- importData doesn't work with missed properties
- sending two Content-Type headers during loading
- FileManager: multiple-file upload in old IEs
- onStructureUpdate event in datatable occurs a bit erlier
- Fix filemanager edit
- refreshing items in tree after adding into an empty folder
- webix.require do not recognize full http paths
- cell selection mode and colspans in datatable
- using the popup element as part of WebivView during integration with BackBone
- ie8 upload
- tooltip do not disapears in some cases
- regression in block-selection visualization in datatable
- not applying new options collection after changing structure of datatable
- using clearAll against grouped component
- suggest doesn't use template when used against HTML input
- incorrect processing of null values by richselect
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








