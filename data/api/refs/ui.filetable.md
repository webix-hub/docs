ui.filetable 
=============


dummy stub

{{todo replace with real description. }}

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.datatable.md">ui.datatable</a>, <a href="api/refs/autotooltip.md">AutoTooltip</a>, <a href="api/refs/group.md">Group</a>, <a href="api/refs/datamarks.md">DataMarks</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/mapcollection.md">MapCollection</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/pagingability.md">PagingAbility</a>, <a href="api/refs/tablepaste.md">TablePaste</a>, <a href="api/refs/datastate.md">DataState</a>, <a href="api/refs/editability.md">EditAbility</a>, <a href="api/refs/keysnavigation.md">KeysNavigation</a>, <a href="api/refs/datamove.md">DataMove</a>, <a href="api/refs/dragitem.md">DragItem</a>, <a href="api/refs/validatecollection.md">ValidateCollection</a>, <a href="api/refs/customprint.md">CustomPrint</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.filetable_add.md - adds an item to the store
- api/link/ui.filetable_addcellcss.md - adds a css class to the cell
- api/link/ui.filetable_addcss.md - applied CSS class to a component item
- api/link/ui.filetable_addrowcss.md - adds a css class to the row
- api/link/ui.filetable_addselectarea.md - adds a select area
- api/link/ui.filetable_addspan.md - adds colspan or rowspan to the datatable
- api/link/ui.filetable_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.filetable_adjustcolumn.md - adjusts a column to the width of the content
- api/link/ui.filetable_adjustrowheight.md - autodetect height of rows in datatable
- api/link/ui.filetable_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.filetable_bind.md - binds components
- api/link/ui.filetable_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.filetable_callevent.md - calls an inner event
- api/link/ui.filetable_clearall.md - removes all items from the component
- api/link/ui.filetable_clearcss.md - removes CSS class from all items
- api/link/ui.filetable_clearvalidation.md - removes all validation marks from the component
- api/link/ui.filetable_closesub.md - closes subrow or subview for an item with the given id
- api/link/ui.filetable_collectvalues.md - returns an array of unique values of the specified column
- api/link/ui.filetable_columnid.md - returns the id of the column at the specified index
- api/link/ui.filetable_copy.md - copies an item to the same or another object
- api/link/ui.filetable_count.md - returns the number of currently visible items
- api/link/ui.filetable_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.filetable_destructor.md - destructs the calling object
- api/link/ui.filetable_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.filetable_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.filetable_eachcolumn.md - iterates over all visible columns in the table
- api/link/ui.filetable_eachrow.md - iterates over all rows in the table
- api/link/ui.filetable_edit.md - enables the edit mode for the specified item
- api/link/ui.filetable_editcancel.md - cancels the edit mode and closes all opened editors. The component is still editable
- api/link/ui.filetable_editcell.md - enables the edit mode for the specified cell
- api/link/ui.filetable_editcolumn.md - enables the edit mode for the specified column
- api/link/ui.filetable_editnext.md - closes the current editor and opens one in the next cell of the row
- api/link/ui.filetable_editrow.md - enables the edit mode for the specified row
- api/link/ui.filetable_editstop.md - stops the edit mode and closes all opened editors. The component is still editable
- api/link/ui.filetable_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.filetable_exists.md - checks whether an item with the specified id exists
- api/link/ui.filetable_filter.md - filters the component
- api/link/ui.filetable_filterbyall.md - refilters DataTable by all specified filters
- api/link/ui.filetable_find.md - returns rows that match the criterion
- api/link/ui.filetable_focuseditor.md - moves focus to the active editor
- api/link/ui.filetable_freezerow.md - fixes a row at the top of the datatable "on the fly"
- api/link/ui.filetable_getallselectareas.md - returns an object that contains configuration objects of all select areas in the datatable
- api/link/ui.filetable_getchildviews.md - returns child views of the calling component
- api/link/ui.filetable_getcolumnconfig.md - returns the configuration object of the specified column
- api/link/ui.filetable_getcolumnindex.md - returns the index of the column with the specified id
- api/link/ui.filetable_getcss.md - returns the className of a cell
- api/link/ui.filetable_geteditstate.md - returns info about active editor object
- api/link/ui.filetable_geteditor.md - returns editor object
- api/link/ui.filetable_geteditorvalue.md - returns the value of the active (currently open) editor
- api/link/ui.filetable_getfilter.md - returns the filter object that the component uses to filter the values of the specified column
- api/link/ui.filetable_getfirstid.md - returns the ID of the first item
- api/link/ui.filetable_getformview.md - returns master form for the input
- api/link/ui.filetable_getheadercontent.md - returns set of helpers for header content manipulation
- api/link/ui.filetable_getheadernode.md - returns HTML element of the column's header
- api/link/ui.filetable_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.filetable_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.filetable_getitem.md - gets the object of the data item with the specified id
- api/link/ui.filetable_getitemnode.md - returns HTML element of the item
- api/link/ui.filetable_getlastid.md - returns the id of the last item
- api/link/ui.filetable_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.filetable_getnode.md - returns the main HTML container for the calling object
- api/link/ui.filetable_getpage.md - returns the currently visible page in case of paged view
- api/link/ui.filetable_getpager.md - returns the pager object associated with the component
- api/link/ui.filetable_getparentview.md - returns the parent view of the component
- api/link/ui.filetable_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.filetable_getscrollstate.md - returns the current position of scrolls
- api/link/ui.filetable_getselectarea.md - returns the object of the select area
- api/link/ui.filetable_getselectedid.md - returns the selected elements' ids
- api/link/ui.filetable_getselecteditem.md - gets an object of the selected data item
- api/link/ui.filetable_getspan.md - returns the config array for a span or null, if there are no spans
- api/link/ui.filetable_getstate.md - returns the current state of the view
- api/link/ui.filetable_getsubview.md - returns subview of the item with the given id
- api/link/ui.filetable_gettext.md - returns text value of a cell
- api/link/ui.filetable_gettopparentview.md - returns top parent view
- api/link/ui.filetable_getvisiblecount.md - returns count of visible rows
- api/link/ui.filetable_group.md - groups data by the specified data property
- api/link/ui.filetable_hascss.md - checks if item has specific css class
- api/link/ui.filetable_hasevent.md - checks whether the component has the specified event
- api/link/ui.filetable_hide.md - hides the view
- api/link/ui.filetable_hidecolumn.md - hides the specified column
- api/link/ui.filetable_hideoverlay.md - hides previously defined overlay
- api/link/ui.filetable_iscolumnvisible.md - returns true if column is visible
- api/link/ui.filetable_isenabled.md - checks whether the view is enabled
- api/link/ui.filetable_isvisible.md - checks whether the view is visible
- api/link/ui.filetable_load.md - loads data from an external data source.
- api/link/ui.filetable_loadnext.md - sends a request to load the specified number of records to the end of the client-side dataset or to the specified position
- api/link/ui.filetable_locate.md - converts an HTML node or event object to in-table position
- api/link/ui.filetable_mapcells.md - applies the callback to a range of cells
- api/link/ui.filetable_mapevent.md - routes events from one object to another
- api/link/ui.filetable_marksorting.md - marks the sorted column with a dedicated sign (asc/desc) in the header
- api/link/ui.filetable_move.md - moves the specified item to a new position
- api/link/ui.filetable_movebottom.md - moves the specified item to the last position
- api/link/ui.filetable_movecolumn.md - moves column to different position
- api/link/ui.filetable_movedown.md - increases the item index and moves the item to the new position
- api/link/ui.filetable_moveselection.md - moves selection in the specified direction
- api/link/ui.filetable_movetop.md - moves the specified item to the first position
- api/link/ui.filetable_moveup.md - decreases the item index and moves the item to the new position
- api/link/ui.filetable_opensub.md - opens subrow or subview for an item with the given id
- api/link/ui.filetable_parse.md - loads data to the component from an inline data source
- api/link/ui.filetable_refresh.md - repaints the whole view or a certain item
- api/link/ui.filetable_refreshcolumns.md - refreshes the structure of DataTable
- api/link/ui.filetable_refreshfilter.md - rebuilds list of options in select filter
- api/link/ui.filetable_refreshheadercontent.md - refreshes the header row of DataTable
- api/link/ui.filetable_refreshselectarea.md - refreshes the selected area in the DataTable
- api/link/ui.filetable_registerfilter.md - registers a filter element
- api/link/ui.filetable_remove.md - removes the specified item/items from datastore
- api/link/ui.filetable_removecellcss.md - remove css class from the cell of datatable
- api/link/ui.filetable_removecss.md - removes CSS class from a component item
- api/link/ui.filetable_removerowcss.md - remove css class from the row
- api/link/ui.filetable_removeselectarea.md - removes a select area
- api/link/ui.filetable_removespan.md - removes a rowspan/colspan from the datatable
- api/link/ui.filetable_render.md - renders the specified item or the whole component
- api/link/ui.filetable_resize.md - adjusts the view to a new size
- api/link/ui.filetable_resizesubview.md - adjusts the row's size to the size of a subview
- api/link/ui.filetable_scrollto.md - scrolls the view to the defined position
- api/link/ui.filetable_serialize.md - serializes data to a JSON object
- api/link/ui.filetable_setcolumnwidth.md - sets the width of the specified column
- api/link/ui.filetable_setpage.md - makes the specified page visible (assuming that the pager was defined )
- api/link/ui.filetable_setrowheight.md - sets the height of the specified row
- api/link/ui.filetable_setstate.md - restores the specified state
- api/link/ui.filetable_show.md - makes the component visible
- api/link/ui.filetable_showcell.md - scrolls the table (if needed) to make the specified cell visible
- api/link/ui.filetable_showcolumn.md - shows the column which was previously hidden by method 'hidecolumn'
- api/link/ui.filetable_showcolumnbatch.md - shows or hides a group of columns
- api/link/ui.filetable_showitem.md - 'scrolls' the table to make the specified row visible
- api/link/ui.filetable_showitembyindex.md - 'scrolls' the table to make the specified row visible
- api/link/ui.filetable_showoverlay.md - shows the overlay message over the body of DataTable
- api/link/ui.filetable_sort.md - sorts datastore
- api/link/ui.filetable_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.filetable_unbind.md - breaks "bind" link
- api/link/ui.filetable_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.filetable_ungroup.md - ungroups data
- api/link/ui.filetable_updateitem.md - updates the data item with new properties
- api/link/ui.filetable_validate.md - validates one record or all dataset against the validation rules
- api/link/ui.filetable_validateeditor.md - validates data in currently active editor
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.filetable_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.filetable_onafterareaadd_event.md - fires after a select area was added
- api/link/ui.filetable_onafterarearemove_event.md - fires after a select area was removed
- api/link/ui.filetable_onafterblockselect_event.md - event occurs after block selection
- api/link/ui.filetable_onaftercolumndrop_event.md - fires after the column has been dragged and dropped to the target position
- api/link/ui.filetable_onaftercolumndroporder_event.md - fires after the column order was changed with the help of drag-and-drop
- api/link/ui.filetable_onaftercolumnhide_event.md - fires after a column was hidden in datatable
- api/link/ui.filetable_onaftercolumnshow_event.md - fires when a column is shown in datatable
- api/link/ui.filetable_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.filetable_onafterdelete_event.md - fires after item deleting
- api/link/ui.filetable_onafterdrop_event.md - fires after drag-n-drop was finished
- api/link/ui.filetable_onafterdroporder_event.md - called when dnd reordering is fully finished
- api/link/ui.filetable_onaftereditstart_event.md - fires after edit operation was initiated, editor opened and ready for input
- api/link/ui.filetable_onaftereditstop_event.md - fires after edit operation finished
- api/link/ui.filetable_onafterfilter_event.md - occurs after datatable was filtered
- api/link/ui.filetable_onafterload_event.md - fires after data loading is complete
- api/link/ui.filetable_onafterrender_event.md - occurs each time after the view is rendered
- api/link/ui.filetable_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.filetable_onafterselect_event.md - fires after a cell is selected
- api/link/ui.filetable_onaftersort_event.md - fires after sorting dataset
- api/link/ui.filetable_onafterunselect_event.md - fires after a cell is unselected
- api/link/ui.filetable_onareadrag_event.md - fires when area selection is started
- api/link/ui.filetable_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.filetable_onbeforeareaadd_event.md - fires before a select area is added
- api/link/ui.filetable_onbeforearearemove_event.md - fires before a select area is removed
- api/link/ui.filetable_onbeforeblockselect_event.md - event occurs before block selection
- api/link/ui.filetable_onbeforecolumndrag_event.md - fires the moment you start dragging the column from its source position
- api/link/ui.filetable_onbeforecolumndrop_event.md - fires the moment you drop the column to its target position
- api/link/ui.filetable_onbeforecolumndroporder_event.md - fires the moment you drop the column over the target area
- api/link/ui.filetable_onbeforecolumnhide_event.md - fires before a column is hidden in datatable
- api/link/ui.filetable_onbeforecolumnshow_event.md - fires before a column is shown in datatable
- api/link/ui.filetable_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.filetable_onbeforedelete_event.md - fires before item deleting
- api/link/ui.filetable_onbeforedrag_event.md - fires before the mouse button is pressed and the cursor is moved over a draggable item
- api/link/ui.filetable_onbeforedragin_event.md - fires before a dragged element is moved over the droppable area
- api/link/ui.filetable_onbeforedrop_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.filetable_onbeforedroporder_event.md - called when dnd reordering has been made, but not applied yet
- api/link/ui.filetable_onbeforedropout_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.filetable_onbeforeeditstart_event.md - fires before edit operation is initiated
- api/link/ui.filetable_onbeforeeditstop_event.md - fires before stop edit command is received
- api/link/ui.filetable_onbeforefilter_event.md - called when filtering process is started, but data is not filtered yet
- api/link/ui.filetable_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.filetable_onbeforerender_event.md - occurs each time before the view is rendered
- api/link/ui.filetable_onbeforeselect_event.md - fires before a cell is selected
- api/link/ui.filetable_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.filetable_onbeforeunselect_event.md - fired before a cell is unselected
- api/link/ui.filetable_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.filetable_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.filetable_oncheck_event.md - fires when a checkbox is checked or unchecked in the datatable item
- api/link/ui.filetable_oncollectvalues_event.md - fires after datatable has collected options
- api/link/ui.filetable_oncolumnresize_event.md - fires when width of column was changed
- api/link/ui.filetable_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.filetable_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.filetable_ondestruct_event.md - occurs when component destroyed
- api/link/ui.filetable_ondragout_event.md - fires when a dragged element is moved outside of the droppable area
- api/link/ui.filetable_oneditorchange_event.md - fires when the native onchange event occurs for an HTML input (select, text)
- api/link/ui.filetable_onfocus_event.md - fires when a view gets focus
- api/link/ui.filetable_onheaderclick_event.md - occurs after clicking on header
- api/link/ui.filetable_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.filetable_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.filetable_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.filetable_onliveedit_event.md - occurs when data was changed in the editor
- api/link/ui.filetable_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.filetable_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.filetable_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.filetable_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.filetable_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.filetable_onpaste_event.md - fires when the <a href="api/tablepaste_clipboard_config.md">clipboard</a> is enabled and the user presses CTRL+V keys combination
- api/link/ui.filetable_onresize_event.md - fires when the width or height of DataTable was changed
- api/link/ui.filetable_onrowresize_event.md - fires when height of row was changed
- api/link/ui.filetable_onscrollx_event.md - fires when the user scrolls the table left or right
- api/link/ui.filetable_onscrolly_event.md - fires when the user scrolls the table up or down
- api/link/ui.filetable_onselectchange_event.md - fires when selection is changed in a DataTable
- api/link/ui.filetable_onstructureload_event.md - fires when the structure of DataTable (columns configuration) is initialized
- api/link/ui.filetable_onstructureupdate_event.md - fires when structure of datatable was changed ( column added, hidden or reconfigured )
- api/link/ui.filetable_onsubviewclose_event.md - fires after a subview or a subrow is closed
- api/link/ui.filetable_onsubviewcreate_event.md - fires after a subview was created
- api/link/ui.filetable_onsubviewopen_event.md - fires after a subview or a subrow is opened
- api/link/ui.filetable_onsubviewrender_event.md - fires each time subview is rendered
- api/link/ui.filetable_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.filetable_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.filetable_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.filetable_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.filetable_ontouchmove_event.md - occurs during touch movement
- api/link/ui.filetable_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.filetable_onvalidationerror_event.md - fires when newly loaded/added/edited data fails to pass validation
- api/link/ui.filetable_onvalidationsuccess_event.md - fires after the newlyloaded/added/edited data has passes validation successfully
- api/link/ui.filetable_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.filetable_animate_config.md - defines or disables view change animation.
- api/link/ui.filetable_areaselect_config.md - enables/disables area selection
- api/link/ui.filetable_autoconfig_config.md - datatable adjust configuration to the data
- api/link/ui.filetable_autoheight_config.md - adjusts Datatable size to the its content vertically
- api/link/ui.filetable_autowidth_config.md - adjusts Datatable size to its content horizontally
- api/link/ui.filetable_blockselect_config.md - enables/disables block selection
- api/link/ui.filetable_borderless_config.md - used to hide the component borders
- api/link/ui.filetable_checkboxrefresh_config.md - controls behavior of checkbox editors in grid
- api/link/ui.filetable_clipboard_config.md - enables/disables clipboard support
- api/link/ui.filetable_columnwidth_config.md - defines the default width for columns (in pixels)
- api/link/ui.filetable_columns_config.md - configures columns of the table
- api/link/ui.filetable_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.filetable_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.filetable_data_config.md - JavaScript array containing data for the component
- api/link/ui.filetable_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/ui.filetable_datafetch_config.md - defines the number of records that will be loaded into datatable during the next dynamic loading call
- api/link/ui.filetable_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.filetable_datatype_config.md - the type of loaded data
- api/link/ui.filetable_delimiter_config.md - sets CSV delimiters for clipboard operations
- api/link/ui.filetable_disabled_config.md - indicates whether an item is enabled
- api/link/ui.filetable_drag_config.md - enables or disables drag-and-drop
- api/link/ui.filetable_dragcolumn_config.md - enables drag-and-drop support for columns
- api/link/ui.filetable_dragscroll_config.md - enables autoscroll of component during drag-n-drop
- api/link/ui.filetable_editmath_config.md - enables formular editing
- api/link/ui.filetable_editvalue_config.md - defines which data item is editable (in case of several data item in the cell/line)
- api/link/ui.filetable_editable_config.md - allows/denies editing in the view
- api/link/ui.filetable_editaction_config.md - defines the action on which editors will be opened
- api/link/ui.filetable_externaldata_config.md - allows defining custom 'move' logic for the component.
- api/link/ui.filetable_filtermode_config.md - defines filtering rules in tree-like components
- api/link/ui.filetable_fixedrowheight_config.md - defines whether the height should be fixed for all rows or can vary
- api/link/ui.filetable_footer_config.md - enables/disables the footer in DataTable (disabled, by default)
- api/link/ui.filetable_form_config.md - linked form
- api/link/ui.filetable_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.filetable_header_config.md - enables/disables the header in DataTable (enabled, by default)
- api/link/ui.filetable_headerrowheight_config.md - sets the heigth of the header row
- api/link/ui.filetable_headermenu_config.md - adds a headermenu to control column visibility
- api/link/ui.filetable_height_config.md - sets the height of the component
- api/link/ui.filetable_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.filetable_hover_config.md - css class for a row-hover in the datatable
- api/link/ui.filetable_id_config.md - the component ID
- api/link/ui.filetable_leftsplit_config.md - the number of the fixed columns from the left side of the table (actual for the <a href="datatable/frozen_columns.md">split mode</a> )
- api/link/ui.filetable_livevalidation_config.md - validation during cell editing
- api/link/ui.filetable_loadahead_config.md - sets the number of items that will be loaded on each scroll movement relative to the last item in the scrolling direction
- api/link/ui.filetable_map_config.md - defines data mapping
- api/link/ui.filetable_math_config.md - enables math formulas in DataTable
- api/link/ui.filetable_maxheight_config.md - sets the maximum height for the view
- api/link/ui.filetable_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.filetable_mincolumnheight_config.md - sets the minimum height for a row
- api/link/ui.filetable_mincolumnwidth_config.md - sets the minimum width for a column
- api/link/ui.filetable_minheight_config.md - sets the minimal height for the view
- api/link/ui.filetable_minwidth_config.md - sets the minimal width for the view
- api/link/ui.filetable_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/link/ui.filetable_multiselect_config.md - enables the multi selection mode
- api/link/ui.filetable_navigation_config.md - activates the selection keyboard navigation
- api/link/ui.filetable_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.filetable_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.filetable_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.filetable_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.filetable_onmousemove_config.md - attaches a mousemove behaviour for component items with the specified CSS class.
- api/link/ui.filetable_pager_config.md - defines paging configuration ( creates a 'ui.pager' object)
- api/link/ui.filetable_prerender_config.md - invokes the full rendering of DataTable data
- api/link/ui.filetable_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.filetable_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.filetable_resizecolumn_config.md - enables/disables horizontal resizing of columns
- api/link/ui.filetable_resizerow_config.md - enables/disables vertical resizing of rows
- api/link/ui.filetable_rightsplit_config.md - sets the number of the fixed columns from the right side of the table (actual for the <a href="datatable/frozen_columns.md">split mode</a> )
- api/link/ui.filetable_rowheight_config.md - sets the default height for rows
- api/link/ui.filetable_rowlineheight_config.md - default line height for grid's row
- api/link/ui.filetable_rules_config.md - set of validation rules for the component
- api/link/ui.filetable_save_config.md - defines URLs for data saving
- api/link/ui.filetable_scheme_config.md - defines schemes for data processing
- api/link/ui.filetable_scroll_config.md - enables or disables scroll for the datatable
- api/link/ui.filetable_scrollaligny_config.md - enables/disables scrolling the table just by whole rows (i.e. you won't be allowed to scroll along the full length of rows)
- api/link/ui.filetable_scrollx_config.md - enables/disables horizontal scrolling
- api/link/ui.filetable_scrolly_config.md - enables/disables vertical scrolling
- api/link/ui.filetable_select_config.md - sets the selection mode in DataTable
- api/link/ui.filetable_spans_config.md - array of span configurations for the datatable
- api/link/ui.filetable_subrowheight_config.md - automatically adjusts the subrow's height to the size of the text
- api/link/ui.filetable_subrow_config.md - sets a subrow template
- api/link/ui.filetable_subview_config.md - adds a subview configuration into datatable
- api/link/ui.filetable_templatecopy_config.md - sets the template according to which data will be copied to clipboard from each currently selected cell
- api/link/ui.filetable_tooltip_config.md - sets a popup message appearing on pointing a mouse cursor over the dedicated item
- api/link/ui.filetable_topsplit_config.md - defines the number of rows that will be "frozen" at the top of datatable
- api/link/ui.filetable_type_config.md - used for configuring presentation of items
- api/link/ui.filetable_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.filetable_width_config.md - sets the width of the component
- api/link/ui.filetable_ycount_config.md - defines height of datatable in rows
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.filetable_$customprint_other.md - generates custom HTML to print instead of the widget's HTML and invokes printing
- api/link/ui.filetable_$drag_other.md - method called when drag operation initiated
- api/link/ui.filetable_$draghtml_other.md - defines how dragged item will look
- api/link/ui.filetable_$dragin_other.md - method called when item moved on possible drop landing during dnd
- api/link/ui.filetable_$dragmark_other.md - method called during drag-n-drop, when some item in the component should be marked as an active drop target
- api/link/ui.filetable_$dragout_other.md - method called when item moved out of possible drop landing during dnd
- api/link/ui.filetable_$drop_other.md - method called when item dragged and dropped on valid target
- api/link/ui.filetable_$dropallow_other.md - can be redefined, if you need custom drop rules
- api/link/ui.filetable_$getsize_other.md - returns the current size of the component
- api/link/ui.filetable_$height_other.md - current height of the view
- api/link/ui.filetable_$scope_other.md - scope for resolving event and method names
- api/link/ui.filetable_$setsize_other.md - sets the component size
- api/link/ui.filetable_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.filetable_$touch_other.md - 
- api/link/ui.filetable_$view_other.md - reference to top html element of the view
- api/link/ui.filetable_$width_other.md - current width of the view
- api/link/ui.filetable_config_other.md - all options from initial component configuration
- api/link/ui.filetable_headercontent_other.md - a hash property containing a collection of active elements which can be placed in the header
- api/link/ui.filetable_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.filetable_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.filetable_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.filetable_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class
- api/link/ui.filetable_on_mouse_move_other.md - attaches a mouse move behavior for component items with the specified CSS class
- api/link/ui.filetable_waitdata_other.md - eventual result of an asynchronous operation ('promise' object) for the loaded data
}}


@index:
- api/refs/ui.filetable_methods.md
- api/refs/ui.filetable_props.md
- api/refs/ui.filetable_events.md
- api/refs/ui.filetable_others.md

