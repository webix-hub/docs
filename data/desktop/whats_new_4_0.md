Version 4.0
===========

<span class="release_date">released on September 27, 2016</span>

Breaking Changes
-------------------

- The mechanism of loading PDF files into the [PDFViewer](desktop/pdfviewer.md) component is modified. From version 4.0 PDF Viewer uses Webix data loader combined with "binary" [proxy](desktop/server_proxy.md), which allows using standard loading events.
- Tab navigation over Webix application is switched on by default. It cannot be controlled by UIManager any more. 

Check the [Migration Guide](migration.md#webix3440) for more details.

New Features
--------------------

- [SpreadSheet](desktop/spreadsheet.md) complex widget to replace the previous one
- [Accessibility](desktop/accessibility.md): 
	- High contrast "contrast" skin {{sample 16_skins/15_contrast.html }}
	- Specific markup for screen reading software
	- Full [keyboard navigation](desktop/uimanager.md#builtinkeyboardevents)
- Responsive features: 
	- [Flex layouts](desktop/responsive_layout.md#flexlayout)
    - [Extra API for responsive layouts and inner widgets](desktop/responsive_layout.md#responsivelayoutsapi)	 
    - [Advanced options for widget alignment](desktop/alignment.md)
- [Angular 2 compatibility](desktop/angular.md#angular2compatibility) as part of [Angular JS integration](desktop/angular.md)
- [DateRangePicker](desktop/daterangepicker.md) and related controls ([DateRange](desktop/daterange.md), [DateRangeFilter](datatable/filtering.md#daterange))
- [GoogleMap](desktop/googlemap.md) as data component

Updates
-------------------

- [PDF Viewer](desktop/pdfviewer.md): 
	- navigation and zooming on touch devices
    - scale property and ability to dynamically change it
    - Webix loading pattern via "binary" [proxy](desktop/server_proxy.md)
- Export to PDF: ability to set a [custom font file](desktop/export_pdf.md#exportingdataoffline)
- [urlData](api/ui.uploader_urldata_config.md) parameter for Uploader
- MultiText allows customizing sub fields with [subConfig](api/ui.multitext_subconfig_config.md) property
- [DataDrivers](helpers/data_drivers.md#methodsofdatadriver): public access to the properties returned by .getInfo() method
- Better control over data move (drag-n-drop): [externalData](api/datamove_externaldata_config.md) property function receives the original data as a third parameter
- moveSelection() method for [Calendar](api/ui.calendar_moveselection.md) and [Colorboard](api/ui.colorboard_moveselection.md)
- new methods in the webix.html helper module: [removeStyle()](api/html_removestyle.md) and [triggerEvent()](api/html_triggerevent.md)
- for data widgets, Calendar and Colorboard [navigation](api/keysnavigation_navigation_config.md) settings is enabled by default

Fixes
------------------

- hotkey fails for initially hidden elements
- line-height in Datatable subviews
- MultiCombo: do not show additional line if tagMode is disabled
- updateItem (refresh) call on onChange event for ActiveContent elements
- prevent from button action in readonly Counter
- rendering value for combo in ActiveContent
- autosizing for Dataview items
- Suggest show selection after it is rendered
- style of focused Select box
- Organogram lines styling
- issues with .addView() in isolated Layout 
- PDF viewer events (onAfterLoad, onPageRender) trigger in the correct time 
- Tree and TreeTable: adding items in closed branch
- memory leaks for form controls
- config.text for combo with rich html options
- scroll in DataTable on Safari
- prevent from "undefined" class in Calendar day css
- dragColumn and onBeforeColumnDropOrder
- dragscroll and topSplit
- clearing "mousemove" timeout
- collect options in built-in filters by ID not value
- white background of paging animation removed
- remove for TreeStore supports an array of IDs
- tab navigation and disabled Richselect  and controls based on it
- Uploader sets status 'client' for file which uploading was aborted
- DataTable frozen rows and drag-n-drop
- "order" drag-n-drop in scrollable Tree and TreeTable
- values of activeContent
- destruct activeContent views on master destruction
- Uploader check icon 