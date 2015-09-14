ui.treetable 
=============


{{memo A control for presenting tree in a grid cell. }}

The component is used to integrate a tree into an editable grid. There is a support for  in-line node editing, drag-and-drop, filtering, checkboxes etc. Check [treetable](desktop/treetable.md) documentation for more detailed description.

### Constructor

~~~js
	var treetable = webix.ui({
		view:"treetable", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_treetable({
		...config options goes here..
	});
~~~

### Where to start

- [Overview of Treetable Widget](desktop/treetable.md)
- [Samples](http://docs.webix.com/samples/15_datatable/index.html)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/treeapi.md">TreeAPI</a>, <a href="api/refs/treestatecheckbox.md">TreeStateCheckbox</a>, <a href="api/refs/treedataloader.md">TreeDataLoader</a>, <a href="api/refs/treestore.md">TreeStore</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/ui.datatable.md">ui.datatable</a>, <a href="api/refs/autotooltip.md">AutoTooltip</a>, <a href="api/refs/group.md">Group</a>, <a href="api/refs/datamarks.md">DataMarks</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/mapcollection.md">MapCollection</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/pagingability.md">PagingAbility</a>, <a href="api/refs/tablepaste.md">TablePaste</a>, <a href="api/refs/datastate.md">DataState</a>, <a href="api/refs/editability.md">EditAbility</a>, <a href="api/refs/keysnavigation.md">KeysNavigation</a>, <a href="api/refs/datamove.md">DataMove</a>, <a href="api/refs/dragitem.md">DragItem</a>, <a href="api/refs/validatecollection.md">ValidateCollection</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.treetable_add.md - adds an item to the store
- api/link/ui.treetable_addcellcss.md - adds a css class to the cell
- api/link/ui.treetable_addcss.md - applied CSS class to a component item
- api/link/ui.treetable_addrowcss.md - adds a css class to the row
- api/link/ui.treetable_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.treetable_adjustcolumn.md - adjusts a column to the width of the content
- api/link/ui.treetable_adjustrowheight.md - autodetect height of rows in datatable
- api/link/ui.treetable_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.treetable_bind.md - binds components
- api/link/ui.treetable_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.treetable_callevent.md - calls an inner event
- api/link/ui.treetable_checkall.md - check all items in tree
- api/link/ui.treetable_checkitem.md - checks the checkbox it the tree item
- api/link/ui.treetable_clearall.md - removes all items from the component
- api/link/ui.treetable_clearcss.md - removes css class from all items
- api/link/ui.treetable_clearvalidation.md - removes all validation marks from the component
- api/link/ui.treetable_close.md - closes the branch with the specified id
- api/link/ui.treetable_closeall.md - closes all branches in the tree
- api/link/ui.treetable_collectvalues.md - returns an array of unique values of the specified column
- api/link/ui.treetable_columnid.md - returns the id of the column at the specified index
- api/link/ui.treetable_copy.md - copies an item to the same or another object
- api/link/ui.treetable_count.md - returns the number of currently visible items
- api/link/ui.treetable_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.treetable_destructor.md - destructs the calling object
- api/link/ui.treetable_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.treetable_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.treetable_eachcolumn.md - iterates over all visible columns in the table
- api/link/ui.treetable_eachrow.md - iterates over all rows in the table
- api/link/ui.treetable_edit.md - enables the edit mode for the specified item
- api/link/ui.treetable_editcancel.md - cancels the edit mode and closes all opened editors. The component is still editable
- api/link/ui.treetable_editcell.md - enables the edit mode for the specified cell
- api/link/ui.treetable_editcolumn.md - enables the edit mode for the specified column
- api/link/ui.treetable_editnext.md - closes the current editor and opens one in the next cell of the row
- api/link/ui.treetable_editrow.md - enables the edit mode for the specified row
- api/link/ui.treetable_editstop.md - stops the edit mode and closes all opened editors. The component is still editable
- api/link/ui.treetable_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.treetable_exists.md - checks whether an item with the specified id exists
- api/link/ui.treetable_exporttoexcel.md - exports data to an Excel file
- api/link/ui.treetable_exporttopdf.md - exports data to a PDF file
- api/link/ui.treetable_filter.md - filters the component
- api/link/ui.treetable_filterbyall.md - refilters DataTable by all specified filters
- api/link/ui.treetable_find.md - returns rows that match the criterion
- api/link/ui.treetable_focuseditor.md - moves focus to the active editor
- api/link/ui.treetable_getbranchindex.md - gets index of the node in a specific branch
- api/link/ui.treetable_getchecked.md - returns ids of the checked items
- api/link/ui.treetable_getchildviews.md - returns child views of the calling component
- api/link/ui.treetable_getcolumnconfig.md - returns the configuration object of the specified column
- api/link/ui.treetable_getcolumnindex.md - returns the index of the column with the specified id
- api/link/ui.treetable_geteditstate.md - returns info about active editor object
- api/link/ui.treetable_geteditor.md - returns editor object
- api/link/ui.treetable_geteditorvalue.md - returns the value of the active (currently open) editor
- api/link/ui.treetable_getfilter.md - returns the filter object that the component uses to filter the values of the specified column
- api/link/ui.treetable_getfirstchildid.md - gets the ID of the first child of the specified branch
- api/link/ui.treetable_getfirstid.md - returns the ID of the first item
- api/link/ui.treetable_getformview.md - returns master form for the input
- api/link/ui.treetable_getheadercontent.md - returns set of helpers for header content manipulation
- api/link/ui.treetable_getheadernode.md - returns HTML element of the column's header
- api/link/ui.treetable_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.treetable_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.treetable_getitem.md - gets the object of the data item with the specified id
- api/link/ui.treetable_getitemnode.md - returns HTML element of the item
- api/link/ui.treetable_getlastid.md - returns the id of the last item
- api/link/ui.treetable_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.treetable_getnextsiblingid.md - returns the id of the next sibling of the specified node
- api/link/ui.treetable_getnode.md - returns the main HTML container for the calling object
- api/link/ui.treetable_getopenitems.md - returns ids of the opened branches
- api/link/ui.treetable_getpage.md - returns the currently visible page in case of paged view
- api/link/ui.treetable_getpager.md - returns the pager object associated with the component
- api/link/ui.treetable_getparentid.md - get the ID of the parent node of the specified item
- api/link/ui.treetable_getparentview.md - returns the parent view of the component
- api/link/ui.treetable_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.treetable_getprevsiblingid.md - returns the id of the previous sibling of the specified node
- api/link/ui.treetable_getscrollstate.md - returns the current position of scrolls
- api/link/ui.treetable_getselectedid.md - returns the selected cells
- api/link/ui.treetable_getselecteditem.md - gets an object of the selected data item
- api/link/ui.treetable_getstate.md - returns the current state of the view
- api/link/ui.treetable_gettext.md - returns text value of a cell
- api/link/ui.treetable_gettopparentview.md - returns top parent view
- api/link/ui.treetable_getvisiblecount.md - returns count of visible rows
- api/link/ui.treetable_group.md - groups data by the specified data property
- api/link/ui.treetable_hascss.md - checks if item has specific css class
- api/link/ui.treetable_hasevent.md - checks whether the component has the specified event
- api/link/ui.treetable_hide.md - hides the view
- api/link/ui.treetable_hidecolumn.md - hides the specified column
- api/link/ui.treetable_hideoverlay.md - hides previously defined overlay
- api/link/ui.treetable_isbranch.md - checks whether the node has any children
- api/link/ui.treetable_isbranchopen.md - checks whether the specified branch is open or closed
- api/link/ui.treetable_ischecked.md - checks whether the specified node is checked
- api/link/ui.treetable_iscolumnvisible.md - returns true if column is visible
- api/link/ui.treetable_isenabled.md - checks whether the view is enabled
- api/link/ui.treetable_isvisible.md - checks whether the view is visible
- api/link/ui.treetable_load.md - loads data from an external data source.
- api/link/ui.treetable_loadbranch.md - loads data to the specified branch, as direct children of the node with the id provided
- api/link/ui.treetable_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/link/ui.treetable_locate.md - converts an HTML node or event object to in-table position
- api/link/ui.treetable_mapcells.md - applies the callback to a range of cells
- api/link/ui.treetable_mapevent.md - routes events from one object to another
- api/link/ui.treetable_marksorting.md - marks the sorted column with a dedicated sign (asc/desc) in the header
- api/link/ui.treetable_move.md - moves the specified item to a new position
- api/link/ui.treetable_movebottom.md - moves the specified item to the last position
- api/link/ui.treetable_movecolumn.md - moves column to different position
- api/link/ui.treetable_movedown.md - increases the item index and moves the item to the new position
- api/link/ui.treetable_moveselection.md - moves selection in the specified direction
- api/link/ui.treetable_movetop.md - moves the specified item to the first position
- api/link/ui.treetable_moveup.md - decreases the item index and moves the item to the new position
- api/link/ui.treetable_open.md - opens the branch with the specified id
- api/link/ui.treetable_openall.md - opens all branches in the tree
- api/link/ui.treetable_parse.md - loads data to the component from an inline data source
- api/link/ui.treetable_refresh.md - repaints the whole view or a certain item
- api/link/ui.treetable_refreshcolumns.md - refreshes the structure of DataTable
- api/link/ui.treetable_refreshfilter.md - rebuilds list of options in select filter
- api/link/ui.treetable_refreshheadercontent.md - refreshes the header row of DataTable
- api/link/ui.treetable_registerfilter.md - registers a filter element
- api/link/ui.treetable_remove.md - removes the specified item from datastore
- api/link/ui.treetable_removecellcss.md - remove css class from the cell of datatable
- api/link/ui.treetable_removecss.md - removes CSS class from a component item
- api/link/ui.treetable_removerowcss.md - remove css class from the row
- api/link/ui.treetable_render.md - renders the specified item or the whole component
- api/link/ui.treetable_resize.md - adjusts the view to a new size
- api/link/ui.treetable_scrollto.md - scrolls the view to the defined position
- api/link/ui.treetable_serialize.md - serializes data to a JSON object
- api/link/ui.treetable_setcolumnwidth.md - sets the width of the specified column
- api/link/ui.treetable_setpage.md - makes the specified page visible (assuming that the pager was defined )
- api/link/ui.treetable_setrowheight.md - sets the height of the specified row
- api/link/ui.treetable_setstate.md - restores the specified state
- api/link/ui.treetable_show.md - makes the component visible
- api/link/ui.treetable_showcell.md - scrolls the table (if needed) to make the specified cell visible
- api/link/ui.treetable_showcolumn.md - shows the column which was previously hidden by method 'hidecolumn'
- api/link/ui.treetable_showcolumnbatch.md - shows or hides a group of columns
- api/link/ui.treetable_showitem.md - 'scrolls' the table to make the specified row visible
- api/link/ui.treetable_showitembyindex.md - 'scrolls' the table to make the specified row visible
- api/link/ui.treetable_showoverlay.md - shows the overlay message over the body of DataTable
- api/link/ui.treetable_sort.md - sorts datastore
- api/link/ui.treetable_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.treetable_unbind.md - breaks "bind" link
- api/link/ui.treetable_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.treetable_uncheckall.md - uncheck all items in the tree
- api/link/ui.treetable_uncheckitem.md - unchecks the checkbox in the tree item
- api/link/ui.treetable_ungroup.md - ungroups data
- api/link/ui.treetable_updateitem.md - sets properties of the data item
- api/link/ui.treetable_validate.md - validates one record or all dataset against validation rules
- api/link/ui.treetable_validateeditor.md - validates data in currently active editor
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.treetable_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.treetable_onafterblockselect_event.md - event occurs after block selection
- api/link/ui.treetable_onafterclose_event.md - fires after the branch has been closed
- api/link/ui.treetable_onaftercolumndrop_event.md - fires after the column has been dragged and dropped to the target position
- api/link/ui.treetable_onaftercolumndroporder_event.md - fires after the column order was changed with the help of drag-and-drop
- api/link/ui.treetable_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.treetable_onafterdelete_event.md - fires after item deleting
- api/link/ui.treetable_onafterdrop_event.md - fires after drag-n-drop was finished
- api/link/ui.treetable_onaftereditstart_event.md - fires after edit operation was initiated, editor opened and ready for input
- api/link/ui.treetable_onaftereditstop_event.md - fires after edit operation finished
- api/link/ui.treetable_onafterfilter_event.md - occurs after datatable was filtered
- api/link/ui.treetable_onafterload_event.md - fires after server side loading is complete
- api/link/ui.treetable_onafteropen_event.md - fires after the branch has been opened
- api/link/ui.treetable_onafterrender_event.md - occurs each time after the view is rendered
- api/link/ui.treetable_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.treetable_onafterselect_event.md - fires after a cell is selected
- api/link/ui.treetable_onaftersort_event.md - fires after sorting dataset
- api/link/ui.treetable_onafterunselect_event.md - fires after a cell is unselected
- api/link/ui.treetable_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.treetable_onbeforeblockselect_event.md - event occurs before block selection
- api/link/ui.treetable_onbeforeclose_event.md - fires the moment you attempt to close the tree branch
- api/link/ui.treetable_onbeforecolumndrag_event.md - fires the monent you start dragging the column from its source potition
- api/link/ui.treetable_onbeforecolumndrop_event.md - fires the moment you drop the column to its target position
- api/link/ui.treetable_onbeforecolumndroporder_event.md - fires the moment you drop the column over the target area
- api/link/ui.treetable_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.treetable_onbeforedelete_event.md - fires before item deleting
- api/link/ui.treetable_onbeforedrag_event.md - fires before the mouse button is pressed and the cursor is moved over a draggable item
- api/link/ui.treetable_onbeforedragin_event.md - fires before a dragged element is moved over the droppable area
- api/link/ui.treetable_onbeforedrop_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.treetable_onbeforedropout_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.treetable_onbeforeeditstart_event.md - fires before edit operation is initiated
- api/link/ui.treetable_onbeforeeditstop_event.md - fires before stop edit command is received
- api/link/ui.treetable_onbeforefilter_event.md - called when filtering process is started, but data is not filtered yet
- api/link/ui.treetable_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.treetable_onbeforeopen_event.md - fires the moment you attempt to open the tree branch
- api/link/ui.treetable_onbeforerender_event.md - occurs each time before the view is rendered
- api/link/ui.treetable_onbeforeselect_event.md - fires before a cell is selected
- api/link/ui.treetable_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.treetable_onbeforeunselect_event.md - fired before a cell is unselected
- api/link/ui.treetable_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.treetable_oncheck_event.md - fires when a checkbox is checked or unchecked in the datatable item
- api/link/ui.treetable_oncolumnresize_event.md - fires when width of column was changed
- api/link/ui.treetable_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.treetable_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.treetable_ondestruct_event.md - occurs when component destroyed
- api/link/ui.treetable_ondragout_event.md - fires when a dragged element is moved outside of the droppable area
- api/link/ui.treetable_onheaderclick_event.md - occurs after clicking on header
- api/link/ui.treetable_onitemcheck_event.md - fires when you check an item in tree and treetable
- api/link/ui.treetable_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.treetable_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.treetable_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.treetable_onliveedit_event.md - occurs when data was changed in the editor
- api/link/ui.treetable_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.treetable_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.treetable_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.treetable_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.treetable_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.treetable_onresize_event.md - fires when the width or height of DataTable was changed
- api/link/ui.treetable_onrowresize_event.md - fires when height of row was changed
- api/link/ui.treetable_onscrollx_event.md - fires when the user scrolls the table left or right
- api/link/ui.treetable_onscrolly_event.md - fires when the user scrolls the table up or down
- api/link/ui.treetable_onselectchange_event.md - fires when selection is changed in a DataTable
- api/link/ui.treetable_onstructureload_event.md - fires when the structure of DataTable (columns configuration) is initialized
- api/link/ui.treetable_onstructureupdate_event.md - fires when structure of datatable was changed ( column added, hidden or reconfigured )
- api/ui.treetable_onsubviewrender_event.md - 
- api/link/ui.treetable_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.treetable_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.treetable_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.treetable_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.treetable_ontouchmove_event.md - occurs during touch movement
- api/link/ui.treetable_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.treetable_onvalidationerror_event.md - fires when newly loaded/added/edited data fails to pass validation
- api/link/ui.treetable_onvalidationsuccess_event.md - fires after the newlyloaded/added/edited data has passes validation successfully
- api/link/ui.treetable_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.treetable_animate_config.md - defines or disables view change animation.
- api/link/ui.treetable_autoconfig_config.md - datatable adjust configuration to the data
- api/link/ui.treetable_autoheight_config.md - adjusts DataTable to the parent container size vertically
- api/link/ui.treetable_autowidth_config.md - adjusts DataTable to the parent container size horizontally
- api/link/ui.treetable_blockselect_config.md - enables/disables block selection
- api/link/ui.treetable_borderless_config.md - used to hide the component borders
- api/link/ui.treetable_checkboxrefresh_config.md - controls behavior of checkbox editors in grid
- api/link/ui.treetable_clipboard_config.md - enables/disables clipboard support
- api/link/ui.treetable_columnwidth_config.md - defines the default width for columns (in pixels)
- api/link/ui.treetable_columns_config.md - configures columns of the table
- api/link/ui.treetable_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.treetable_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.treetable_data_config.md - JavaScript array containing data for the component
- api/link/ui.treetable_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/ui.treetable_datafetch_config.md - defines the number of records that will be loaded into datatable during the next dynamic loading call
- api/link/ui.treetable_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.treetable_datatype_config.md - the type of loaded data
- api/link/ui.treetable_delimiter_config.md - sets CSV delimiters for clipboard operations
- api/link/ui.treetable_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.treetable_drag_config.md - enables or disables drag-and-drop
- api/link/ui.treetable_dragcolumn_config.md - enables drag-and-drop support for columns
- api/link/ui.treetable_dragscroll_config.md - enables autoscroll of component during drag-n-drop
- api/link/ui.treetable_editmath_config.md - enables formular editing
- api/link/ui.treetable_editvalue_config.md - defines which data item is editable (in case of several data item in the cell/line)
- api/link/ui.treetable_editable_config.md - allows/denies editing in the view
- api/link/ui.treetable_editaction_config.md - defines the action on which editors will be opened
- api/link/ui.treetable_externaldata_config.md - allows defining custom 'move' logic for the component.
- api/link/ui.treetable_filtermode_config.md - defines filtering rules in tree-like components
- api/link/ui.treetable_fixedrowheight_config.md - defines whether the height should be fixed for all rows or can vary
- api/link/ui.treetable_footer_config.md - enables/disables the footer in DataTable (disabled, by default)
- api/link/ui.treetable_form_config.md - linked form
- api/link/ui.treetable_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.treetable_header_config.md - enables/disables the header in DataTable (enabled, by default)
- api/link/ui.treetable_headerrowheight_config.md - sets the heigth of the header row
- api/link/ui.treetable_headermenu_config.md - adds a headermenu to control column visibility
- api/link/ui.treetable_height_config.md - sets the height of the component
- api/link/ui.treetable_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.treetable_hover_config.md - css class for a row-hover in the datatable
- api/link/ui.treetable_id_config.md - the component ID
- api/link/ui.treetable_leftsplit_config.md - the number of the fixed columns from the left side of the table (actual for the <a href="datatable/frozen_columns.md">split mode</a> )
- api/link/ui.treetable_livevalidation_config.md - validation during cell editing
- api/link/ui.treetable_loadahead_config.md - sets the number of items that will be loaded on each scroll movement relative to the last item in the scrolling direction
- api/link/ui.treetable_map_config.md - defines data mapping
- api/link/ui.treetable_math_config.md - enables math formulas in DataTable
- api/link/ui.treetable_maxheight_config.md - sets the maximum height for the view
- api/link/ui.treetable_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.treetable_mincolumnheight_config.md - sets the minimum height for a row
- api/link/ui.treetable_mincolumnwidth_config.md - sets the minimum width for a column
- api/link/ui.treetable_minheight_config.md - sets the minimal height for the view
- api/link/ui.treetable_minwidth_config.md - sets the minimal width for the view
- api/link/ui.treetable_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/link/ui.treetable_multiselect_config.md - enables the multi selection mode
- api/link/ui.treetable_navigation_config.md - activates the selection keyboard navigation
- api/link/ui.treetable_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.treetable_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.treetable_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.treetable_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.treetable_onmousemove_config.md - attaches a mousemove behaviour for component items with the specified CSS class.
- api/link/ui.treetable_pager_config.md - defines paging configuration ( creates a 'ui.pager' object)
- api/link/ui.treetable_prerender_config.md - invokes the full rendering of DataTable data
- api/link/ui.treetable_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.treetable_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.treetable_resizecolumn_config.md - enables/disables horizontal resizing of columns
- api/link/ui.treetable_resizerow_config.md - enables/disables vertical resizing of rows
- api/link/ui.treetable_rightsplit_config.md - sets the number of the fixed columns from the right side of the table (actual for the <a href="datatable/frozen_columns.md">split mode</a> )
- api/link/ui.treetable_rowheight_config.md - sets the default height for rows
- api/link/ui.treetable_rowlineheight_config.md - default line height for grid's row
- api/link/ui.treetable_rules_config.md - set of validation rules for the component
- api/link/ui.treetable_save_config.md - defines URLs for data saving
- api/link/ui.treetable_scheme_config.md - defines schemes for data processing
- api/link/ui.treetable_scroll_config.md - enables or disables scroll for the datatable
- api/link/ui.treetable_scrollaligny_config.md - enables/disables scrolling the table just by whole rows (i.e. you won't be allowed to scroll along the full length of rows)
- api/link/ui.treetable_scrollx_config.md - enables/disables horizontal scrolling
- api/link/ui.treetable_scrolly_config.md - enables/disables vertical scrolling
- api/link/ui.treetable_select_config.md - sets the selection mode in DataTable
- api/link/ui.treetable_spans_config.md - array of span configurations for the datatable
- api/link/ui.treetable_subrowheight_config.md - 
- api/link/ui.treetable_subrow_config.md - 
- api/link/ui.treetable_subview_config.md - 
- api/link/ui.treetable_threestate_config.md - defines three-state checkboxes for the tree. Flase by default.
- api/link/ui.treetable_tooltip_config.md - sets a popup message appearing on pointing a mouse cursor over the dedicated item.
- api/link/ui.treetable_type_config.md - used for configuring presentation of items
- api/link/ui.treetable_url_config.md - the URL the component will use to load data after its initialization
- api/link/ui.treetable_width_config.md - sets the width of the component
- api/link/ui.treetable_ycount_config.md - defines height of datatable in rows
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.treetable_$drag_other.md - method called when drag operation initiated
- api/link/ui.treetable_$draghtml_other.md - defines how dragged item will look
- api/link/ui.treetable_$dragin_other.md - method called when item moved on possible drop landing during dnd
- api/link/ui.treetable_$dragmark_other.md - method called during dnd when some item in the component need to be marked as active drop target
- api/link/ui.treetable_$dragout_other.md - method called when item moved out of possible drop landing during dnd
- api/link/ui.treetable_$drop_other.md - method called when item dragged and dropped on valid target
- api/link/ui.treetable_$dropallow_other.md - can be redefine if you need custom drop rules
- api/link/ui.treetable_$getsize_other.md - returns the current size of the component
- api/link/ui.treetable_$height_other.md - current height of the view
- api/link/ui.treetable_$scope_other.md - scope for resolving event and method names
- api/link/ui.treetable_$setsize_other.md - sets the component size
- api/link/ui.treetable_$skin_other.md - method, which will be called when skin defined
- api/link/ui.treetable_$view_other.md - reference to top html element of the view
- api/link/ui.treetable_$width_other.md - current width of the view
- api/link/ui.treetable_config_other.md - all options from initial component configuration
- api/link/ui.treetable_headercontent_other.md - a hash property containing a collection of active elements which can be placed in the header
- api/link/ui.treetable_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.treetable_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.treetable_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.treetable_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.treetable_on_mouse_move_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.treetable_waitdata_other.md - eventual result of an asynchronous operation ('promise' object) for the loaded data
}}


@index:
- api/refs/ui.treetable_methods.md
- api/refs/ui.treetable_props.md
- api/refs/ui.treetable_events.md
- api/refs/ui.treetable_others.md

