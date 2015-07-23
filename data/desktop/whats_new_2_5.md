Version 2.5
=====================


##New Features

- Support of Microsoft Edge, default browser of the upcoming Windows 10
- Ability to disable time periods for Calendar widget
- Ability to populate Form, Toolbar and Property sheet with complex data
- [Swimlanes in Kanban widget](kanban__configuration.html#creatingswimlanes) to vizualize separate work flows
- Total column and footer (both with sum counters) for Pivot widget


##Updates

- resize() method for CustomScroll
- second parameter for Datatable refreshColumns() method
- preserve mode for Datatable selectRange() method
- "box" and "select" modes for Datatable blockSelect property
- Datatable showColumnBatch() method extended
- format and map config options for Datatable and Datacollection
- timeout to ajax API
- markInvalid() method for Form
- applyChanges() method for UIManager
- tab/enter processing and values order for Multiselect
- Pivot configuration window: fields are copied into "Filters" sector (not moved)
- Pivot Table and Chart: "id" has been excluded from "fields" list
- updated design and layout of Pivot configuration window 
- style improvement, and  first letter capitalizing for Pivot Chart
- using webix.ui for view moving, top and nested
- auto closing on click ofr Tooltip
- updated design of disabled dates background in Calendar

##Fixes

- Filemanager upload
- multiselect selecting items on suggest showing for multiselect
- datatable column adjustment and dynamic loading
- settings fixed height to accordion items
- customScroll repainting in tree and treetable
- repainting dataview after changing xCount or yCount values
- accordion with hidden panels
- customscroll not adjust self after resize
- layout reconstruct() method doesn't work in case of hidden cells
- incorrect data binding in case of long page loading time for Angular
- workaround for Chrome updates: sizing of scrollable area
- uploading files into an empty folder
- block-selection for datatable in edit mode
- incorrect resizing of x-scroll in hidden state
- refreshing data widget after deleting all items from the last page
- parsing "%y" to correct year
- repainting UI in case of angular integration
- toObject() doesn't called for external proxies
- suggest selection
- label vertical align
- keyboard navigation for datatable in paging mode
- loading select editors from array of objects
- upload target
- copy item from plain to hierarchical view
- importing data without "id" during sync
- chart series definition; default line color; stacked bar rendering
- scrolling to selected value in suggest list
- label vertical align
- replacing layout/body structure with the new one that contains the same ids
- apply input values on resize
- buttons right-click handling
- unnecessary scrolling for datatable with huge rowspans
- footer styling and paging sizes for datatable
- slider step processing
- content-type for ajax calls
- tree lines in Flat skin
- Safari vscroll in dataTable
- IE checkbox dblclick
- list filtering in Combo
- dateFilter filter and empty records
- ability to cancel and enable scroll within datatable
- templateStart for grouplist and unitlist
- disabling views with scrolls
- input width and label position top
- input rendering in form controls
- checkbox double
- aminations in datatable
- chrome: frozen columns and column resize
- checkbox double
- text selection while using a custom scrolls
- datatable sizes
- Chrome resize
- combos in one column layout
- regression in restoring scroll state in datatable
- display native context menu on a page with Webix context menu
- bottomPadding and invalidMessage
- textarea sizing
- processing headers without sorting
- avoiding errors when refresh() that is called before render()
- repainting changes in the hidden view
- styling of disabled buttons












