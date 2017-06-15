ui.datatable 
=============

{{memo An editable table  that can easily display huge data sets. }}

The component is full of various possibilities: filtering, sorting, pagination, editing, navigation, drag-and-drop, internationalization, export to PDF, Excel etc. It also provides the dynamic mode for handling thousands of records in a fast way.
  Check [datatable](datatable/index.md) documentation for more detailed description.

### Constructor

~~~js
var datatable = webix.ui({
	view:"datatable", 
  	columns:[
    	{ id:"rank",	header:"", 				width:50},
    	{ id:"title",	header:"Film title",	width:200},
    	{ id:"year",	header:"Released", 		width:80},
    	{ id:"votes",	header:"Votes", 		width:100}
  	],
  	data: [
    	{ id:1, title:"The Shawshank Redemption", year:1994, votes:678790, rank:1},
    	{ id:2, title:"The Godfather", year:1972, votes:511495, rank:2}
  	]
});	
~~~

### Where to start

- [Overview of the DataTable Widget](datatable/index.md)
- [Samples](http://docs.webix.com/samples/15_datatable/index.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/autotooltip.md">AutoTooltip</a>, <a href="api/refs/group.md">Group</a>, <a href="api/refs/datamarks.md">DataMarks</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/mapcollection.md">MapCollection</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/pagingability.md">PagingAbility</a>, <a href="api/refs/tablepaste.md">TablePaste</a>, <a href="api/refs/datastate.md">DataState</a>, <a href="api/refs/editability.md">EditAbility</a>, <a href="api/refs/keysnavigation.md">KeysNavigation</a>, <a href="api/refs/datamove.md">DataMove</a>, <a href="api/refs/dragitem.md">DragItem</a>, <a href="api/refs/validatecollection.md">ValidateCollection</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.datatable_add.md - adds an item to the store
- api/ui.datatable_addcellcss.md - adds a css class to the cell
- api/link/ui.datatable_addcss.md - applied CSS class to a component item
- api/ui.datatable_addrowcss.md - adds a css class to the row
- api/ui.datatable_addselectarea.md - adds a select area
- api/ui.datatable_addspan.md - adds colspan or rowspan to the datatable
- api/link/ui.datatable_adjust.md - adjusts the component to the size of the parent HTML container
- api/ui.datatable_adjustcolumn.md - adjusts a column to the width of the content
- api/ui.datatable_adjustrowheight.md - autodetect height of rows in datatable
- api/link/ui.datatable_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.datatable_bind.md - binds components
- api/link/ui.datatable_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.datatable_callevent.md - calls an inner event
- api/link/ui.datatable_clearall.md - removes all items from the component
- api/link/ui.datatable_clearcss.md - removes CSS class from all items
- api/ui.datatable_clearselection.md - clears selection
- api/link/ui.datatable_clearvalidation.md - removes all validation marks from the component
- api/ui.datatable_closesub.md - closes subrow or subview for an item with the given id
- api/ui.datatable_collectvalues.md - returns an array of unique values of the specified column
- api/ui.datatable_columnid.md - returns the id of the column at the specified index
- api/link/ui.datatable_copy.md - copies an item to the same or another object
- api/link/ui.datatable_count.md - returns the number of currently visible items
- api/link/ui.datatable_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.datatable_destructor.md - destructs the calling object
- api/link/ui.datatable_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.datatable_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/ui.datatable_eachcolumn.md - iterates over all visible columns in the table
- api/ui.datatable_eachrow.md - iterates over all rows in the table
- api/link/ui.datatable_edit.md - enables the edit mode for the specified item
- api/link/ui.datatable_editcancel.md - cancels the edit mode and closes all opened editors. The component is still editable
- api/ui.datatable_editcell.md - enables the edit mode for the specified cell
- api/ui.datatable_editcolumn.md - enables the edit mode for the specified column
- api/link/ui.datatable_editnext.md - closes the current editor and opens one in the next cell of the row
- api/ui.datatable_editrow.md - enables the edit mode for the specified row
- api/link/ui.datatable_editstop.md - stops the edit mode and closes all opened editors. The component is still editable
- api/link/ui.datatable_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.datatable_exists.md - checks whether an item with the specified id exists
- api/link/ui.datatable_filter.md - filters the component
- api/ui.datatable_filterbyall.md - refilters DataTable by all specified filters
- api/link/ui.datatable_find.md - returns rows that match the criterion
- api/link/ui.datatable_focuseditor.md - moves focus to the active editor
- api/ui.datatable_freezerow.md - fixes a row at the top of the datatable "on the fly"
- api/ui.datatable_getallselectareas.md - returns an object that contains configuration objects of all select areas in the datatable
- api/link/ui.datatable_getchildviews.md - returns child views of the calling component
- api/ui.datatable_getcolumnconfig.md - returns the configuration object of the specified column
- api/ui.datatable_getcolumnindex.md - returns the index of the column with the specified id
- api/ui.datatable_getcss.md - returns the className of a cell
- api/link/ui.datatable_geteditstate.md - returns info about active editor object
- api/link/ui.datatable_geteditor.md - returns editor object
- api/link/ui.datatable_geteditorvalue.md - returns the value of the active (currently open) editor
- api/ui.datatable_getfilter.md - returns the filter object that the component uses to filter the values of the specified column
- api/link/ui.datatable_getfirstid.md - returns the ID of the first item
- api/link/ui.datatable_getformview.md - returns master form for the input
- api/ui.datatable_getheadercontent.md - returns set of helpers for header content manipulation
- api/ui.datatable_getheadernode.md - returns HTML element of the column's header
- api/link/ui.datatable_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.datatable_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.datatable_getitem.md - gets the object of the data item with the specified id
- api/ui.datatable_getitemnode.md - returns HTML element of the item
- api/link/ui.datatable_getlastid.md - returns the id of the last item
- api/link/ui.datatable_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.datatable_getnode.md - returns the main HTML container for the calling object
- api/link/ui.datatable_getpage.md - returns the currently visible page in case of paged view
- api/link/ui.datatable_getpager.md - returns the pager object associated with the component
- api/link/ui.datatable_getparentview.md - returns the parent view of the component
- api/link/ui.datatable_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/ui.datatable_getscrollstate.md - returns the current position of scrolls
- api/ui.datatable_getselectarea.md - returns the object of the select area
- api/ui.datatable_getselectedid.md - returns the selected elements' ids
- api/ui.datatable_getselecteditem.md - gets an object of the selected data item
- api/ui.datatable_getspan.md - returns the config array for a span or null, if there are no spans
- api/link/ui.datatable_getstate.md - returns the current state of the view
- api/ui.datatable_getsubview.md - returns subview of the item with the given id
- api/ui.datatable_gettext.md - returns text value of a cell
- api/link/ui.datatable_gettopparentview.md - returns top parent view
- api/ui.datatable_getvisiblecount.md - returns count of visible rows
- api/link/ui.datatable_group.md - groups data by the specified data property
- api/link/ui.datatable_hascss.md - checks if item has specific css class
- api/link/ui.datatable_hasevent.md - checks whether the component has the specified event
- api/link/ui.datatable_hide.md - hides the view
- api/ui.datatable_hidecolumn.md - hides the specified column
- api/ui.datatable_hideoverlay.md - hides previously defined overlay
- api/ui.datatable_iscolumnvisible.md - returns true if column is visible
- api/link/ui.datatable_isenabled.md - checks whether the view is enabled
- api/ui.datatable_isselected.md - returns true if related record is selected
- api/link/ui.datatable_isvisible.md - checks whether the view is visible
- api/link/ui.datatable_load.md - loads data from an external data source.
- api/link/ui.datatable_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/ui.datatable_locate.md - converts an HTML node or event object to in-table position
- api/ui.datatable_mapcells.md - applies the callback to a range of cells
- api/link/ui.datatable_mapevent.md - routes events from one object to another
- api/ui.datatable_mapselection.md - executes some custom method for all cells in the currently selected block
- api/ui.datatable_marksorting.md - marks the sorted column with a dedicated sign (asc/desc) in the header
- api/link/ui.datatable_move.md - moves the specified item to a new position
- api/link/ui.datatable_movebottom.md - moves the specified item to the last position
- api/ui.datatable_movecolumn.md - moves column to different position
- api/link/ui.datatable_movedown.md - increases the item index and moves the item to the new position
- api/link/ui.datatable_moveselection.md - moves selection in the specified direction
- api/link/ui.datatable_movetop.md - moves the specified item to the first position
- api/link/ui.datatable_moveup.md - decreases the item index and moves the item to the new position
- api/ui.datatable_opensub.md - opens subrow or subview for an item with the given id
- api/link/ui.datatable_parse.md - loads data to the component from an inline data source
- api/link/ui.datatable_refresh.md - repaints the whole view or a certain item
- api/ui.datatable_refreshcolumns.md - refreshes the structure of DataTable
- api/ui.datatable_refreshfilter.md - rebuilds list of options in select filter
- api/ui.datatable_refreshheadercontent.md - refreshes the header row of DataTable
- api/ui.datatable_refreshselectarea.md - refreshes the selected area in the DataTable
- api/ui.datatable_registerfilter.md - registers a filter element
- api/link/ui.datatable_remove.md - removes the specified item/items from datastore
- api/ui.datatable_removecellcss.md - remove css class from the cell of datatable
- api/link/ui.datatable_removecss.md - removes CSS class from a component item
- api/ui.datatable_removerowcss.md - remove css class from the row
- api/ui.datatable_removeselectarea.md - removes a select area
- api/ui.datatable_removespan.md - removes a rowspan/colspan from the datatable
- api/ui.datatable_render.md - renders the specified item or the whole component
- api/link/ui.datatable_resize.md - adjusts the view to a new size
- api/ui.datatable_resizesubview.md - adjusts the row's size to the size of a subview
- api/ui.datatable_scrollto.md - scrolls the view to the defined position
- api/ui.datatable_select.md - selects the specified element
- api/ui.datatable_selectall.md - selects all cells in the DataTable
- api/ui.datatable_selectrange.md - selects the specified range of elements
- api/link/ui.datatable_serialize.md - serializes data to a JSON object
- api/ui.datatable_setcolumnwidth.md - sets the width of the specified column
- api/link/ui.datatable_setpage.md - makes the specified page visible (assuming that the pager was defined )
- api/ui.datatable_setrowheight.md - sets the height of the specified row
- api/link/ui.datatable_setstate.md - restores the specified state
- api/link/ui.datatable_show.md - makes the component visible
- api/ui.datatable_showcell.md - scrolls the table (if needed) to make the specified cell visible
- api/ui.datatable_showcolumn.md - shows the column which was previously hidden by method 'hidecolumn'
- api/ui.datatable_showcolumnbatch.md - shows or hides a group of columns
- api/ui.datatable_showitem.md - 'scrolls' the table to make the specified row visible
- api/ui.datatable_showitembyindex.md - 'scrolls' the table to make the specified row visible
- api/ui.datatable_showoverlay.md - shows the overlay message over the body of DataTable
- api/link/ui.datatable_sort.md - sorts datastore
- api/link/ui.datatable_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.datatable_unbind.md - breaks "bind" link
- api/link/ui.datatable_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.datatable_ungroup.md - ungroups data
- api/ui.datatable_unselect.md - cancels selection of the specified element
- api/ui.datatable_unselectall.md - unselects all selected cells in a datatble
- api/link/ui.datatable_updateitem.md - updates the data item with new properties
- api/link/ui.datatable_validate.md - validates one record or all dataset against validation rules
- api/link/ui.datatable_validateeditor.md - validates data in currently active editor
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.datatable_onafteradd_event.md - fires after adding item to datastore
- api/ui.datatable_onafterareaadd_event.md - fires after a select area was added
- api/ui.datatable_onafterarearemove_event.md - fires after a select area was removed
- api/ui.datatable_onafterblockselect_event.md - event occurs after block selection
- api/ui.datatable_onaftercolumndrop_event.md - fires after the column has been dragged and dropped to the target position
- api/ui.datatable_onaftercolumndroporder_event.md - fires after the column order was changed with the help of drag-and-drop
- api/ui.datatable_onaftercolumnhide_event.md - fires after a column was hidden in datatable
- api/ui.datatable_onaftercolumnshow_event.md - fires when a column is shown in datatable
- api/link/ui.datatable_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.datatable_onafterdelete_event.md - fires after item deleting
- api/link/ui.datatable_onafterdrop_event.md - fires after drag-n-drop was finished
- api/ui.datatable_onafterdroporder_event.md - called when dnd reordering is fully finished
- api/link/ui.datatable_onaftereditstart_event.md - fires after edit operation was initiated, editor opened and ready for input
- api/link/ui.datatable_onaftereditstop_event.md - fires after edit operation finished
- api/ui.datatable_onafterfilter_event.md - occurs after datatable was filtered
- api/link/ui.datatable_onafterload_event.md - fires after data loading is complete
- api/ui.datatable_onafterrender_event.md - occurs each time after the view is rendered
- api/link/ui.datatable_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/ui.datatable_onafterselect_event.md - fires after a cell is selected
- api/link/ui.datatable_onaftersort_event.md - fires after sorting dataset
- api/ui.datatable_onafterunselect_event.md - fires after a cell is unselected
- api/ui.datatable_onareadrag_event.md - fires when area selection is started
- api/link/ui.datatable_onbeforeadd_event.md - fires before adding item to datastore
- api/ui.datatable_onbeforeareaadd_event.md - fires before a select area is added
- api/ui.datatable_onbeforearearemove_event.md - fires before a select area is removed
- api/ui.datatable_onbeforeblockselect_event.md - event occurs before block selection
- api/ui.datatable_onbeforecolumndrag_event.md - fires the moment you start dragging the column from its source position
- api/ui.datatable_onbeforecolumndrop_event.md - fires the moment you drop the column to its target position
- api/ui.datatable_onbeforecolumndroporder_event.md - fires the moment you drop the column over the target area
- api/ui.datatable_onbeforecolumnhide_event.md - fires before a column is hidden in datatable
- api/ui.datatable_onbeforecolumnshow_event.md - fires before a column is shown in datatable
- api/link/ui.datatable_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.datatable_onbeforedelete_event.md - fires before item deleting
- api/link/ui.datatable_onbeforedrag_event.md - fires before the mouse button is pressed and the cursor is moved over a draggable item
- api/link/ui.datatable_onbeforedragin_event.md - fires before a dragged element is moved over the droppable area
- api/link/ui.datatable_onbeforedrop_event.md - fires before a dragged element is released over the droppable area
- api/ui.datatable_onbeforedroporder_event.md - called when dnd reordering has been made, but not applied yet
- api/link/ui.datatable_onbeforedropout_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.datatable_onbeforeeditstart_event.md - fires before edit operation is initiated
- api/link/ui.datatable_onbeforeeditstop_event.md - fires before stop edit command is received
- api/ui.datatable_onbeforefilter_event.md - called when filtering process is started, but data is not filtered yet
- api/link/ui.datatable_onbeforeload_event.md - occurs immediately before data loading has been started
- api/ui.datatable_onbeforerender_event.md - occurs each time before the view is rendered
- api/ui.datatable_onbeforeselect_event.md - fires before a cell is selected
- api/link/ui.datatable_onbeforesort_event.md - fires before sorting dataset
- api/ui.datatable_onbeforeunselect_event.md - fired before a cell is unselected
- api/link/ui.datatable_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.datatable_onblur_event.md - fires when focus is moved out of the view
- api/ui.datatable_oncheck_event.md - fires when a checkbox is checked or unchecked in the datatable item
- api/ui.datatable_oncollectvalues_event.md - fires after datatable has collected options
- api/ui.datatable_oncolumnresize_event.md - fires when width of column was changed
- api/link/ui.datatable_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.datatable_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.datatable_ondestruct_event.md - occurs when component destroyed
- api/link/ui.datatable_ondragout_event.md - fires when a dragged element is moved outside of the droppable area
- api/ui.datatable_oneditorchange_event.md - fires when the native onchange event occurs for an HTML input (select, text)
- api/link/ui.datatable_onfocus_event.md - fires when a view gets focus
- api/ui.datatable_onheaderclick_event.md - occurs after clicking on header
- api/link/ui.datatable_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.datatable_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.datatable_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.datatable_onliveedit_event.md - occurs when data was changed in the editor
- api/link/ui.datatable_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.datatable_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.datatable_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.datatable_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.datatable_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/ui.datatable_onresize_event.md - fires when the width or height of DataTable was changed
- api/ui.datatable_onrowresize_event.md - fires when height of row was changed
- api/ui.datatable_onscrollx_event.md - fires when the user scrolls the table left or right
- api/ui.datatable_onscrolly_event.md - fires when the user scrolls the table up or down
- api/ui.datatable_onselectchange_event.md - fires when selection is changed in a DataTable
- api/ui.datatable_onstructureload_event.md - fires when the structure of DataTable (columns configuration) is initialized
- api/ui.datatable_onstructureupdate_event.md - fires when structure of datatable was changed ( column added, hidden or reconfigured )
- api/ui.datatable_onsubviewclose_event.md - fires after a subview or a subrow is closed
- api/ui.datatable_onsubviewcreate_event.md - fires after a subview was created
- api/ui.datatable_onsubviewopen_event.md - fires after a subview or a subrow is opened
- api/ui.datatable_onsubviewrender_event.md - fires each time subview is rendered
- api/link/ui.datatable_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.datatable_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.datatable_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.datatable_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.datatable_ontouchmove_event.md - occurs during touch movement
- api/link/ui.datatable_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.datatable_onvalidationerror_event.md - fires when newly loaded/added/edited data fails to pass validation
- api/link/ui.datatable_onvalidationsuccess_event.md - fires after the newlyloaded/added/edited data has passes validation successfully
- api/link/ui.datatable_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.datatable_animate_config.md - defines or disables view change animation.
- api/ui.datatable_areaselect_config.md - enables/disables area selection
- api/ui.datatable_autoconfig_config.md - datatable adjust configuration to the data
- api/ui.datatable_autoheight_config.md - adjusts Datatable size to the its content vertically
- api/ui.datatable_autowidth_config.md - adjusts Datatable size to its content horizontally
- api/ui.datatable_blockselect_config.md - enables/disables block selection
- api/link/ui.datatable_borderless_config.md - used to hide the component borders
- api/ui.datatable_checkboxrefresh_config.md - controls behavior of checkbox editors in grid
- api/link/ui.datatable_clipboard_config.md - enables/disables clipboard support
- api/ui.datatable_columnwidth_config.md - defines the default width for columns (in pixels)
- api/ui.datatable_columns_config.md - configures columns of the table
- api/link/ui.datatable_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.datatable_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.datatable_data_config.md - JavaScript array containing data for the component
- api/link/ui.datatable_datafeed_config.md - the URL that the component will use to reload data during binding
- api/ui.datatable_datafetch_config.md - defines the number of records that will be loaded into datatable during the next dynamic loading call
- api/link/ui.datatable_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.datatable_datatype_config.md - the type of loaded data
- api/link/ui.datatable_delimiter_config.md - sets CSV delimiters for clipboard operations
- api/link/ui.datatable_disabled_config.md - indicates whether an item is enabled
- api/link/ui.datatable_drag_config.md - enables or disables drag-and-drop
- api/ui.datatable_dragcolumn_config.md - enables drag-and-drop support for columns
- api/link/ui.datatable_dragscroll_config.md - enables autoscroll of component during drag-n-drop
- api/ui.datatable_editmath_config.md - enables formular editing
- api/link/ui.datatable_editvalue_config.md - defines which data item is editable (in case of several data item in the cell/line)
- api/link/ui.datatable_editable_config.md - allows/denies editing in the view
- api/link/ui.datatable_editaction_config.md - defines the action on which editors will be opened
- api/link/ui.datatable_externaldata_config.md - allows defining custom 'move' logic for the component.
- api/ui.datatable_filtermode_config.md - defines filtering rules in tree-like components
- api/ui.datatable_fixedrowheight_config.md - defines whether the height should be fixed for all rows or can vary
- api/ui.datatable_footer_config.md - enables/disables the footer in DataTable (disabled, by default)
- api/link/ui.datatable_form_config.md - linked form
- api/link/ui.datatable_gravity_config.md - sets the view gravity (1 by default)
- api/ui.datatable_header_config.md - enables/disables the header in DataTable (enabled, by default)
- api/ui.datatable_headerrowheight_config.md - sets the heigth of the header row
- api/ui.datatable_headermenu_config.md - adds a headermenu to control column visibility
- api/link/ui.datatable_height_config.md - sets the height of the component
- api/link/ui.datatable_hidden_config.md - defines whether the view will be hidden initially
- api/ui.datatable_hover_config.md - css class for a row-hover in the datatable
- api/link/ui.datatable_id_config.md - the component ID
- api/ui.datatable_leftsplit_config.md - the number of the fixed columns from the left side of the table (actual for the <a href="datatable/frozen_columns.md">split mode</a> )
- api/ui.datatable_livevalidation_config.md - validation during cell editing
- api/ui.datatable_loadahead_config.md - sets the number of items that will be loaded on each scroll movement relative to the last item in the scrolling direction
- api/link/ui.datatable_map_config.md - defines data mapping
- api/ui.datatable_math_config.md - enables math formulas in DataTable
- api/link/ui.datatable_maxheight_config.md - sets the maximum height for the view
- api/link/ui.datatable_maxwidth_config.md - sets the maximum width for the view
- api/ui.datatable_mincolumnheight_config.md - sets the minimum height for a row
- api/ui.datatable_mincolumnwidth_config.md - sets the minimum width for a column
- api/link/ui.datatable_minheight_config.md - sets the minimal height for the view
- api/link/ui.datatable_minwidth_config.md - sets the minimal width for the view
- api/link/ui.datatable_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/ui.datatable_multiselect_config.md - enables the multi selection mode
- api/link/ui.datatable_navigation_config.md - activates the selection keyboard navigation
- api/link/ui.datatable_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.datatable_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.datatable_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.datatable_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.datatable_onmousemove_config.md - attaches a mousemove behaviour for component items with the specified CSS class.
- api/link/ui.datatable_pager_config.md - defines paging configuration ( creates a 'ui.pager' object)
- api/ui.datatable_prerender_config.md - invokes the full rendering of DataTable data
- api/link/ui.datatable_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.datatable_removemissed_config.md - defines how to treat items in case of reloading
- api/ui.datatable_resizecolumn_config.md - enables/disables horizontal resizing of columns
- api/ui.datatable_resizerow_config.md - enables/disables vertical resizing of rows
- api/ui.datatable_rightsplit_config.md - sets the number of the fixed columns from the right side of the table (actual for the <a href="datatable/frozen_columns.md">split mode</a> )
- api/ui.datatable_rowheight_config.md - sets the default height for rows
- api/ui.datatable_rowlineheight_config.md - default line height for grid's row
- api/link/ui.datatable_rules_config.md - set of validation rules for the component
- api/link/ui.datatable_save_config.md - defines URLs for data saving
- api/link/ui.datatable_scheme_config.md - defines schemes for data processing
- api/ui.datatable_scroll_config.md - enables or disables scroll for the datatable
- api/ui.datatable_scrollaligny_config.md - enables/disables scrolling the table just by whole rows (i.e. you won't be allowed to scroll along the full length of rows)
- api/ui.datatable_scrollx_config.md - enables/disables horizontal scrolling
- api/ui.datatable_scrolly_config.md - enables/disables vertical scrolling
- api/ui.datatable_select_config.md - sets the selection mode in DataTable
- api/ui.datatable_spans_config.md - array of span configurations for the datatable
- api/ui.datatable_subrowheight_config.md - automatically adjusts the subrow's height to the size of the text
- api/ui.datatable_subrow_config.md - sets a subrow template
- api/ui.datatable_subview_config.md - adds a subview configuration into datatable
- api/link/ui.datatable_tooltip_config.md - sets a popup message appearing on pointing a mouse cursor over the dedicated item
- api/ui.datatable_topsplit_config.md - defines the number of rows that will be "frozen" at the top of datatable
- api/ui.datatable_type_config.md - used for configuring presentation of items
- api/link/ui.datatable_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.datatable_width_config.md - sets the width of the component
- api/ui.datatable_ycount_config.md - defines height of datatable in rows
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.datatable_$drag_other.md - method called when drag operation initiated
- api/link/ui.datatable_$draghtml_other.md - defines how dragged item will look
- api/link/ui.datatable_$dragin_other.md - method called when item moved on possible drop landing during dnd
- api/link/ui.datatable_$dragmark_other.md - method called during drag-n-drop, when some item in the component should be marked as an active drop target
- api/link/ui.datatable_$dragout_other.md - method called when item moved out of possible drop landing during dnd
- api/link/ui.datatable_$drop_other.md - method called when item dragged and dropped on valid target
- api/link/ui.datatable_$dropallow_other.md - can be redefined, if you need custom drop rules
- api/link/ui.datatable_$getsize_other.md - returns the current size of the component
- api/link/ui.datatable_$height_other.md - current height of the view
- api/link/ui.datatable_$scope_other.md - scope for resolving event and method names
- api/link/ui.datatable_$setsize_other.md - sets the component size
- api/link/ui.datatable_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.datatable_$view_other.md - reference to top html element of the view
- api/link/ui.datatable_$width_other.md - current width of the view
- api/link/ui.datatable_config_other.md - all options from initial component configuration
- api/ui.datatable_headercontent_other.md - a hash property containing a collection of active elements which can be placed in the header
- api/link/ui.datatable_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.datatable_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.datatable_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.datatable_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class
- api/link/ui.datatable_on_mouse_move_other.md - attaches a mouse move behavior for component items with the specified CSS class
- api/link/ui.datatable_waitdata_other.md - eventual result of an asynchronous operation ('promise' object) for the loaded data
}}


@metadescr: This page describes methods, events and properties that you can use while working with the datatable UI widget to configure filtering, sorting and other features.
@doctitle: DataTable UI widget API reference: methods, events, properties etc.

@index:

- api/refs/ui.datatable_methods.md
- api/refs/ui.datatable_props.md
- api/refs/ui.datatable_events.md
- api/refs/ui.datatable_others.md

@seolinktop: [popular javascript framework](https://webix.com)
@seolink: [javascript datagrid library](https://webix.com/widget/datatable/)