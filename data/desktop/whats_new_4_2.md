Version 4.2
=============

<span class="release_date">released on February 23, 2017</span>

See also What's New of complex widgets:

- [SpreadSheet](spreadsheet/whats_new.md)
- [Pivot](pivot/whats_new.md) 

Breaking Changes
------------------

- Access to [third-party components'](desktop/extensions.md) objects (charts, maps, scheduler) has changed. 
Now the only way to receive the component's object is to call the related **getChart/getMap/getEditor/getScheduler()** method.

It is also possible to force this method return a promise by passing the *true* parameter. The promise will resolve when the chart, map, editor 
or scheduler is loaded and ready to use.

- One of the [third-party components](desktop/extensions.md) has changed its name. Now we have an updated HereMap instead of the NokiaMap. 

Check the [Migration Guide](migration.md#webix4042) for more details.

New Features
------------

- [Vue.js integration](desktop/vue.md)
- [updated functionality of SpreadSheet](spreadsheet/whats_new.md#newfeatures): 
	- enhanced math
    - visual improvements 
    - key navigation 
- [possibility to run Pivot with web workers](pivot/webworkers.md) 
- [possibility to run Webix and complex widgets via NPM](tutorials/start_coding.md#package_managers) 
- [serverDateRangeFilter](datatable/filtering.md#serverdaterange) added for DataTable filtering (PRO version)
- [ability of the Uploader widget to upload folders with files](desktop/configuring_uploader.md#uploadingfolders)  
- [export to CSV](desktop/export_csv.md) 


Updates
----------

- integration with [DHTMLX v5.0 components](https://github.com/webix-hub/components/tree/master/dhtmlx) in addition to DHTMLX v3.6 integration.
- [color options for Gage control](desktop/gage.md#settingcustomcolors) 
- Pager events (api/ui.pager_onbeforepagechange_event.md / api/ui.pager_onafterpagechange_event.md) 
- [refreshSelectArea()](api/ui.datatable_refreshselectarea.md) in DataTable 
- plainOutput option for data export 
- [using FormData with webix.ajax](helpers/ajax_operations.md) 
- [$init is called during $group processing](desktop/data_scheme.md) 
- areaselect for datatable with shift+keynav 
- enhanced accessibility of Calendar component: 
	- date-related ARIA labels
    - possibility to [provide custom ARIA labels for day cells](api/ui.calendar_daytemplate_config.md)
- [saving extra data with bound form](desktop/binding_details.md#savingextradatawiththeboundform)
- webix.jsonp returns promise
- enhanced accessibility for Mobile Scheduler


Fixes
-------

- Datatable header autosize calculation
- text autosize calculation
- regression in property updating
- call master.refreshFilter on options update only if possible
- show initial tab for tabview
- let datatable cells preserve fixed height in subview mode
- spline chart and zero values
- sizing of layout after inner size changes
- richSelectFilter API in hidden column in IE
- template and tree can have incorrect x-scroll after resize
- addOption for segmented and tabbar should refresh the control
- height calculation for vertical radio with top label and radio with new lines
- debug version: warn that donut is not supported by Rangechart
- Here-map sample to replace Nokia-map
- suggest should not select list items during navigation - it is handled by moveSelection
- clipboard regression due to accessibility
- tooltip $view links to a non-existent element
- paint branch if a child checkbox is checked
- aria label for html content in editor
- rendering frame for initially hidden chart
- don't draw labels for not rendered bars (0 value)
- mind container borders when adjusting
- scrolling of grouped rows, subrows and subviews with prerender in datatable
- $setValue doesn't change value of input, blurring sets value
- add escaped headers/footer to export scheme, required for pdf
- clear loading markers and xhr on destruction
- dragleave event fires for all child nodes of drop zone
- Uploader's hover can interfere with file drag-n-drop 
- Uploader recognizes any status code below 400 as successful
- better handling of key navigation during multiple and area selection in DataTable
- set and move selection during key navigation only for views with data
- area selection fails on filtering
- DataTable getHeaderNode() should return HTML for columns in left and right splits
- keep on drag-n-drop if an item has been dragged to the empty area of DataTable
- regression in editNext() for Webix GPL version
- regression in registerFilter() with non-existing column id 
- server-side filtering and onBeforeFilter event
- check rendered columns when setting state of DataTable with left/right splits 
- clear filters silently during setting state - to prevent from filtering until the new state is set 
- clear specific invalid CSS during clearing all validation in DataTable 
- no resize when virtual keyboard popups, fix Chrome issue with scrolling to focused input issue
- check column visibility before making datatable cell focusable 
- moveSelection() should not try to select data in empty data components
- let the only item in a data component remain focusable regardless of selection
- json.parseDates behaviour is more consistent
- id is not autogenerated during importData call
- clear dynamic loading flags when aborting server calls 
- mind string "0" when setting $parent of the topmost item 
- actualize chart sizes for RangeChart during resizing
- add unique names for Radio input fields in the group if none were provided 
- escape ARIA label for controls while rendering 
- UI Toggle requires a label for changing the value
- regression in Tabbar and IE8
- refresh Tabbar if an option in the "more" list is selected
- using show(true) for view inside of window
- regression with spacer and align property
- Accordion with resizer
- localization: empty objects and strings overwrite default locale values 
- webix.copy should not process regular expressions (e.g. in input patterns)
- DataView: define maximum elements dimensions for Firefox, IE and Safari 
- editor in the Tree adjusts to node
- wrong navigation direction in DateRange with adjacent December and January months
- Gage height and font-size
- Gage styles fix for IE
- RichText overflow fix
- don't include x-axis title into modifications with dynamic chart
- cleanup logic to PDFViewer for better memory usage
- block mouse event handler for already destroyed views
- align:absolute ignores right and bottom positions
