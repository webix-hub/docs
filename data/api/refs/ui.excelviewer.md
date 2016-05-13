ui.excelviewer 
=============


dummy stub

{{todo replace with real description. }}

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.datatable.md">ui.datatable</a>, <a href="api/refs/autotooltip.md">AutoTooltip</a>, <a href="api/refs/group.md">Group</a>, <a href="api/refs/datamarks.md">DataMarks</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/mapcollection.md">MapCollection</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/pagingability.md">PagingAbility</a>, <a href="api/refs/tablepaste.md">TablePaste</a>, <a href="api/refs/datastate.md">DataState</a>, <a href="api/refs/editability.md">EditAbility</a>, <a href="api/refs/keysnavigation.md">KeysNavigation</a>, <a href="api/refs/datamove.md">DataMove</a>, <a href="api/refs/dragitem.md">DragItem</a>, <a href="api/refs/validatecollection.md">ValidateCollection</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.excelviewer_add.md - adds an item to the store
- api/link/ui.excelviewer_addcellcss.md - adds a css class to the cell
- api/link/ui.excelviewer_addcss.md - applied CSS class to a component item
- api/link/ui.excelviewer_addrowcss.md - adds a css class to the row
- api/link/ui.excelviewer_addspan.md - adds colspan or rowspan to the datatable
- api/link/ui.excelviewer_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.excelviewer_adjustcolumn.md - adjusts a column to the width of the content
- api/link/ui.excelviewer_adjustrowheight.md - autodetect height of rows in datatable
- api/link/ui.excelviewer_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.excelviewer_bind.md - binds components
- api/link/ui.excelviewer_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.excelviewer_callevent.md - calls an inner event
- api/link/ui.excelviewer_clearall.md - removes all items from the component
- api/link/ui.excelviewer_clearcss.md - removes css class from all items
- api/link/ui.excelviewer_clearvalidation.md - removes all validation marks from the component
- api/link/ui.excelviewer_closesub.md - closes subrow or subview for an item with the given id
- api/link/ui.excelviewer_collectvalues.md - returns an array of unique values of the specified column
- api/link/ui.excelviewer_columnid.md - returns the id of the column at the specified index
- api/link/ui.excelviewer_copy.md - copies an item to the same or another object
- api/link/ui.excelviewer_count.md - returns the number of currently visible items
- api/link/ui.excelviewer_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.excelviewer_destructor.md - destructs the calling object
- api/link/ui.excelviewer_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.excelviewer_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.excelviewer_eachcolumn.md - iterates over all visible columns in the table
- api/link/ui.excelviewer_eachrow.md - iterates over all rows in the table
- api/link/ui.excelviewer_edit.md - enables the edit mode for the specified item
- api/link/ui.excelviewer_editcancel.md - cancels the edit mode and closes all opened editors. The component is still editable
- api/link/ui.excelviewer_editcell.md - enables the edit mode for the specified cell
- api/link/ui.excelviewer_editcolumn.md - enables the edit mode for the specified column
- api/link/ui.excelviewer_editnext.md - closes the current editor and opens one in the next cell of the row
- api/link/ui.excelviewer_editrow.md - enables the edit mode for the specified row
- api/link/ui.excelviewer_editstop.md - stops the edit mode and closes all opened editors. The component is still editable
- api/link/ui.excelviewer_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.excelviewer_exists.md - checks whether an item with the specified id exists
- api/link/ui.excelviewer_filter.md - filters the component
- api/link/ui.excelviewer_filterbyall.md - refilters DataTable by all specified filters
- api/link/ui.excelviewer_find.md - returns rows that match the criterion
- api/link/ui.excelviewer_focuseditor.md - moves focus to the active editor
- api/link/ui.excelviewer_getchildviews.md - returns child views of the calling component
- api/link/ui.excelviewer_getcolumnconfig.md - returns the configuration object of the specified column
- api/link/ui.excelviewer_getcolumnindex.md - returns the index of the column with the specified id
- api/link/ui.excelviewer_geteditstate.md - returns info about active editor object
- api/link/ui.excelviewer_geteditor.md - returns editor object
- api/link/ui.excelviewer_geteditorvalue.md - returns the value of the active (currently open) editor
- api/link/ui.excelviewer_getfilter.md - returns the filter object that the component uses to filter the values of the specified column
- api/link/ui.excelviewer_getfirstid.md - returns the ID of the first item
- api/link/ui.excelviewer_getformview.md - returns master form for the input
- api/link/ui.excelviewer_getheadercontent.md - returns set of helpers for header content manipulation
- api/link/ui.excelviewer_getheadernode.md - returns HTML element of the column's header
- api/link/ui.excelviewer_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.excelviewer_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.excelviewer_getitem.md - gets the object of the data item with the specified id
- api/link/ui.excelviewer_getitemnode.md - returns HTML element of the item
- api/link/ui.excelviewer_getlastid.md - returns the id of the last item
- api/link/ui.excelviewer_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.excelviewer_getnode.md - returns the main HTML container for the calling object
- api/link/ui.excelviewer_getpage.md - returns the currently visible page in case of paged view
- api/link/ui.excelviewer_getpager.md - returns the pager object associated with the component
- api/link/ui.excelviewer_getparentview.md - returns the parent view of the component
- api/link/ui.excelviewer_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.excelviewer_getscrollstate.md - returns the current position of scrolls
- api/link/ui.excelviewer_getselectedid.md - returns the selected elements' ids
- api/link/ui.excelviewer_getselecteditem.md - gets an object of the selected data item
- api/link/ui.excelviewer_getspan.md - returns the config array for a span or null, if there are no spans
- api/link/ui.excelviewer_getstate.md - returns the current state of the view
- api/link/ui.excelviewer_getsubview.md - returns subview of the item with the given id
- api/link/ui.excelviewer_gettext.md - returns text value of a cell
- api/link/ui.excelviewer_gettopparentview.md - returns top parent view
- api/link/ui.excelviewer_getvisiblecount.md - returns count of visible rows
- api/link/ui.excelviewer_group.md - groups data by the specified data property
- api/link/ui.excelviewer_hascss.md - checks if item has specific css class
- api/link/ui.excelviewer_hasevent.md - checks whether the component has the specified event
- api/link/ui.excelviewer_hide.md - hides the view
- api/link/ui.excelviewer_hidecolumn.md - hides the specified column
- api/link/ui.excelviewer_hideoverlay.md - hides previously defined overlay
- api/link/ui.excelviewer_iscolumnvisible.md - returns true if column is visible
- api/link/ui.excelviewer_isenabled.md - checks whether the view is enabled
- api/link/ui.excelviewer_isvisible.md - checks whether the view is visible
- api/link/ui.excelviewer_load.md - loads data from an external data source.
- api/link/ui.excelviewer_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/link/ui.excelviewer_locate.md - converts an HTML node or event object to in-table position
- api/link/ui.excelviewer_mapcells.md - applies the callback to a range of cells
- api/link/ui.excelviewer_mapevent.md - routes events from one object to another
- api/link/ui.excelviewer_marksorting.md - marks the sorted column with a dedicated sign (asc/desc) in the header
- api/link/ui.excelviewer_move.md - moves the specified item to a new position
- api/link/ui.excelviewer_movebottom.md - moves the specified item to the last position
- api/link/ui.excelviewer_movecolumn.md - moves column to different position
- api/link/ui.excelviewer_movedown.md - increases the item index and moves the item to the new position
- api/link/ui.excelviewer_moveselection.md - moves selection in the specified direction
- api/link/ui.excelviewer_movetop.md - moves the specified item to the first position
- api/link/ui.excelviewer_moveup.md - decreases the item index and moves the item to the new position
- api/link/ui.excelviewer_opensub.md - opens subrow or subview for an item with the given id
- api/link/ui.excelviewer_parse.md - loads data to the component from an inline data source
- api/link/ui.excelviewer_refresh.md - repaints the whole view or a certain item
- api/link/ui.excelviewer_refreshcolumns.md - refreshes the structure of DataTable
- api/link/ui.excelviewer_refreshfilter.md - rebuilds list of options in select filter
- api/link/ui.excelviewer_refreshheadercontent.md - refreshes the header row of DataTable
- api/link/ui.excelviewer_registerfilter.md - registers a filter element
- api/link/ui.excelviewer_remove.md - removes the specified item/items from datastore
- api/link/ui.excelviewer_removecellcss.md - remove css class from the cell of datatable
- api/link/ui.excelviewer_removecss.md - removes CSS class from a component item
- api/link/ui.excelviewer_removerowcss.md - remove css class from the row
- api/link/ui.excelviewer_removespan.md - removes a rowspan/colspan from the datatable
- api/link/ui.excelviewer_render.md - renders the specified item or the whole component
- api/link/ui.excelviewer_resize.md - adjusts the view to a new size
- api/link/ui.excelviewer_resizesubview.md - adjusts the row's size to the size of a subview
- api/link/ui.excelviewer_scrollto.md - scrolls the view to the defined position
- api/link/ui.excelviewer_serialize.md - serializes data to a JSON object
- api/link/ui.excelviewer_setcolumnwidth.md - sets the width of the specified column
- api/link/ui.excelviewer_setpage.md - makes the specified page visible (assuming that the pager was defined )
- api/link/ui.excelviewer_setrowheight.md - sets the height of the specified row
- api/link/ui.excelviewer_setstate.md - restores the specified state
- api/link/ui.excelviewer_show.md - makes the component visible
- api/link/ui.excelviewer_showcell.md - scrolls the table (if needed) to make the specified cell visible
- api/link/ui.excelviewer_showcolumn.md - shows the column which was previously hidden by method 'hidecolumn'
- api/link/ui.excelviewer_showcolumnbatch.md - shows or hides a group of columns
- api/link/ui.excelviewer_showitem.md - 'scrolls' the table to make the specified row visible
- api/link/ui.excelviewer_showitembyindex.md - 'scrolls' the table to make the specified row visible
- api/link/ui.excelviewer_showoverlay.md - shows the overlay message over the body of DataTable
- api/ui.excelviewer_showsheet.md - 
- api/link/ui.excelviewer_sort.md - sorts datastore
- api/link/ui.excelviewer_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.excelviewer_unbind.md - breaks "bind" link
- api/link/ui.excelviewer_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.excelviewer_ungroup.md - ungroups data
- api/link/ui.excelviewer_updateitem.md - sets properties of the data item
- api/link/ui.excelviewer_validate.md - validates one record or all dataset against validation rules
- api/link/ui.excelviewer_validateeditor.md - validates data in currently active editor
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.excelviewer_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.excelviewer_onafterareaadd_event.md - fires after a select area was added
- api/link/ui.excelviewer_onafterarearemove_event.md - fires after a select area was removed
- api/link/ui.excelviewer_onafterblockselect_event.md - event occurs after block selection
- api/link/ui.excelviewer_onaftercolumndrop_event.md - fires after the column has been dragged and dropped to the target position
- api/link/ui.excelviewer_onaftercolumndroporder_event.md - fires after the column order was changed with the help of drag-and-drop
- api/link/ui.excelviewer_onaftercolumnhide_event.md - fires after a column was hidden in datatable
- api/link/ui.excelviewer_onaftercolumnshow_event.md - fires when a column is shown in datatable
- api/link/ui.excelviewer_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.excelviewer_onafterdelete_event.md - fires after item deleting
- api/link/ui.excelviewer_onafterdrop_event.md - fires after drag-n-drop was finished
- api/link/ui.excelviewer_onaftereditstart_event.md - fires after edit operation was initiated, editor opened and ready for input
- api/link/ui.excelviewer_onaftereditstop_event.md - fires after edit operation finished
- api/link/ui.excelviewer_onafterfilter_event.md - occurs after datatable was filtered
- api/link/ui.excelviewer_onafterload_event.md - fires after data loading is complete
- api/link/ui.excelviewer_onafterrender_event.md - occurs each time after the view is rendered
- api/link/ui.excelviewer_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.excelviewer_onafterselect_event.md - fires after a cell is selected
- api/link/ui.excelviewer_onaftersort_event.md - fires after sorting dataset
- api/link/ui.excelviewer_onafterunselect_event.md - fires after a cell is unselected
- api/link/ui.excelviewer_onareadrag_event.md - fires when area selection is started
- api/link/ui.excelviewer_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.excelviewer_onbeforeareaadd_event.md - fires before a select area is added
- api/link/ui.excelviewer_onbeforearearemove_event.md - fires before a select area is removed
- api/link/ui.excelviewer_onbeforeblockselect_event.md - event occurs before block selection
- api/link/ui.excelviewer_onbeforecolumndrag_event.md - fires the monent you start dragging the column from its source potition
- api/link/ui.excelviewer_onbeforecolumndrop_event.md - fires the moment you drop the column to its target position
- api/link/ui.excelviewer_onbeforecolumndroporder_event.md - fires the moment you drop the column over the target area
- api/link/ui.excelviewer_onbeforecolumnhide_event.md - fires before a column is hidden in datatable
- api/link/ui.excelviewer_onbeforecolumnshow_event.md - fires before a column is shown in datatable
- api/link/ui.excelviewer_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.excelviewer_onbeforedelete_event.md - fires before item deleting
- api/link/ui.excelviewer_onbeforedrag_event.md - fires before the mouse button is pressed and the cursor is moved over a draggable item
- api/link/ui.excelviewer_onbeforedragin_event.md - fires before a dragged element is moved over the droppable area
- api/link/ui.excelviewer_onbeforedrop_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.excelviewer_onbeforedropout_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.excelviewer_onbeforeeditstart_event.md - fires before edit operation is initiated
- api/link/ui.excelviewer_onbeforeeditstop_event.md - fires before stop edit command is received
- api/link/ui.excelviewer_onbeforefilter_event.md - called when filtering process is started, but data is not filtered yet
- api/link/ui.excelviewer_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.excelviewer_onbeforerender_event.md - occurs each time before the view is rendered
- api/link/ui.excelviewer_onbeforeselect_event.md - fires before a cell is selected
- api/link/ui.excelviewer_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.excelviewer_onbeforeunselect_event.md - fired before a cell is unselected
- api/link/ui.excelviewer_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.excelviewer_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.excelviewer_oncheck_event.md - fires when a checkbox is checked or unchecked in the datatable item
- api/link/ui.excelviewer_oncollectvalues_event.md - fires after datatable has collected options
- api/link/ui.excelviewer_oncolumnresize_event.md - fires when width of column was changed
- api/ui.excelviewer_oncolumnresizeaction_event.md - 
- api/link/ui.excelviewer_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.excelviewer_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.excelviewer_ondestruct_event.md - occurs when component destroyed
- api/link/ui.excelviewer_ondragout_event.md - fires when a dragged element is moved outside of the droppable area
- api/link/ui.excelviewer_onfocus_event.md - fires when a view gets focus
- api/link/ui.excelviewer_onheaderclick_event.md - occurs after clicking on header
- api/link/ui.excelviewer_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.excelviewer_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.excelviewer_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.excelviewer_onliveedit_event.md - occurs when data was changed in the editor
- api/link/ui.excelviewer_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.excelviewer_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.excelviewer_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.excelviewer_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.excelviewer_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.excelviewer_onresize_event.md - fires when the width or height of DataTable was changed
- api/link/ui.excelviewer_onrowresize_event.md - fires when height of row was changed
- api/link/ui.excelviewer_onscrollx_event.md - fires when the user scrolls the table left or right
- api/link/ui.excelviewer_onscrolly_event.md - fires when the user scrolls the table up or down
- api/link/ui.excelviewer_onselectchange_event.md - fires when selection is changed in a DataTable
- api/link/ui.excelviewer_onstructureload_event.md - fires when the structure of DataTable (columns configuration) is initialized
- api/link/ui.excelviewer_onstructureupdate_event.md - fires when structure of datatable was changed ( column added, hidden or reconfigured )
- api/link/ui.excelviewer_onsubviewclose_event.md - fires after a subview or a subrow is closed
- api/link/ui.excelviewer_onsubviewcreate_event.md - fires after a subview was created
- api/link/ui.excelviewer_onsubviewopen_event.md - fires after a subview or a subrow is opened
- api/link/ui.excelviewer_onsubviewrender_event.md - fires each time subview is rendered
- api/link/ui.excelviewer_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.excelviewer_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.excelviewer_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.excelviewer_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.excelviewer_ontouchmove_event.md - occurs during touch movement
- api/link/ui.excelviewer_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.excelviewer_onvalidationerror_event.md - fires when newly loaded/added/edited data fails to pass validation
- api/link/ui.excelviewer_onvalidationsuccess_event.md - fires after the newlyloaded/added/edited data has passes validation successfully
- api/link/ui.excelviewer_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.excelviewer_animate_config.md - defines or disables view change animation.
- api/link/ui.excelviewer_areaselect_config.md - enables/disables area selection
- api/link/ui.excelviewer_autoconfig_config.md - datatable adjust configuration to the data
- api/link/ui.excelviewer_autoheight_config.md - adjusts Datatable size to the its content vertically
- api/link/ui.excelviewer_autowidth_config.md - adjusts Datatable size to its content horizontally
- api/link/ui.excelviewer_blockselect_config.md - enables/disables block selection
- api/link/ui.excelviewer_borderless_config.md - used to hide the component borders
- api/link/ui.excelviewer_checkboxrefresh_config.md - controls behavior of checkbox editors in grid
- api/link/ui.excelviewer_clipboard_config.md - enables/disables clipboard support
- api/link/ui.excelviewer_columnwidth_config.md - defines the default width for columns (in pixels)
- api/link/ui.excelviewer_columns_config.md - configures columns of the table
- api/link/ui.excelviewer_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.excelviewer_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.excelviewer_data_config.md - JavaScript array containing data for the component
- api/link/ui.excelviewer_datafetch_config.md - defines the number of records that will be loaded into datatable during the next dynamic loading call
- api/link/ui.excelviewer_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.excelviewer_datatype_config.md - the type of loaded data
- api/link/ui.excelviewer_delimiter_config.md - sets CSV delimiters for clipboard operations
- api/link/ui.excelviewer_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.excelviewer_drag_config.md - enables or disables drag-and-drop
- api/link/ui.excelviewer_dragcolumn_config.md - enables drag-and-drop support for columns
- api/link/ui.excelviewer_dragscroll_config.md - enables autoscroll of component during drag-n-drop
- api/link/ui.excelviewer_editmath_config.md - enables formular editing
- api/link/ui.excelviewer_editvalue_config.md - defines which data item is editable (in case of several data item in the cell/line)
- api/link/ui.excelviewer_editable_config.md - allows/denies editing in the view
- api/link/ui.excelviewer_editaction_config.md - defines the action on which editors will be opened
- api/ui.excelviewer_excelheader_config.md - 
- api/link/ui.excelviewer_externaldata_config.md - allows defining custom 'move' logic for the component.
- api/link/ui.excelviewer_filtermode_config.md - defines filtering rules in tree-like components
- api/link/ui.excelviewer_fixedrowheight_config.md - defines whether the height should be fixed for all rows or can vary
- api/link/ui.excelviewer_footer_config.md - enables/disables the footer in DataTable (disabled, by default)
- api/link/ui.excelviewer_form_config.md - linked form
- api/link/ui.excelviewer_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.excelviewer_header_config.md - enables/disables the header in DataTable (enabled, by default)
- api/link/ui.excelviewer_headerrowheight_config.md - sets the heigth of the header row
- api/link/ui.excelviewer_headermenu_config.md - adds a headermenu to control column visibility
- api/link/ui.excelviewer_height_config.md - sets the height of the component
- api/link/ui.excelviewer_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.excelviewer_hover_config.md - css class for a row-hover in the datatable
- api/link/ui.excelviewer_id_config.md - the component ID
- api/link/ui.excelviewer_leftsplit_config.md - the number of the fixed columns from the left side of the table (actual for the <a href="datatable/frozen_columns.md">split mode</a> )
- api/link/ui.excelviewer_livevalidation_config.md - validation during cell editing
- api/link/ui.excelviewer_loadahead_config.md - sets the number of items that will be loaded on each scroll movement relative to the last item in the scrolling direction
- api/link/ui.excelviewer_map_config.md - defines data mapping
- api/link/ui.excelviewer_math_config.md - enables math formulas in DataTable
- api/link/ui.excelviewer_maxheight_config.md - sets the maximum height for the view
- api/link/ui.excelviewer_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.excelviewer_mincolumnheight_config.md - sets the minimum height for a row
- api/link/ui.excelviewer_mincolumnwidth_config.md - sets the minimum width for a column
- api/link/ui.excelviewer_minheight_config.md - sets the minimal height for the view
- api/link/ui.excelviewer_minwidth_config.md - sets the minimal width for the view
- api/link/ui.excelviewer_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/link/ui.excelviewer_multiselect_config.md - enables the multi selection mode
- api/link/ui.excelviewer_navigation_config.md - activates the selection keyboard navigation
- api/link/ui.excelviewer_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.excelviewer_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.excelviewer_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.excelviewer_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.excelviewer_onmousemove_config.md - attaches a mousemove behaviour for component items with the specified CSS class.
- api/link/ui.excelviewer_pager_config.md - defines paging configuration ( creates a 'ui.pager' object)
- api/link/ui.excelviewer_prerender_config.md - invokes the full rendering of DataTable data
- api/link/ui.excelviewer_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.excelviewer_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.excelviewer_resizecolumn_config.md - enables/disables horizontal resizing of columns
- api/link/ui.excelviewer_resizerow_config.md - enables/disables vertical resizing of rows
- api/link/ui.excelviewer_rightsplit_config.md - sets the number of the fixed columns from the right side of the table (actual for the <a href="datatable/frozen_columns.md">split mode</a> )
- api/link/ui.excelviewer_rowheight_config.md - sets the default height for rows
- api/link/ui.excelviewer_rowlineheight_config.md - default line height for grid's row
- api/link/ui.excelviewer_rules_config.md - set of validation rules for the component
- api/link/ui.excelviewer_save_config.md - defines URLs for data saving
- api/link/ui.excelviewer_scheme_config.md - defines schemes for data processing
- api/link/ui.excelviewer_scroll_config.md - enables or disables scroll for the datatable
- api/link/ui.excelviewer_scrollaligny_config.md - enables/disables scrolling the table just by whole rows (i.e. you won't be allowed to scroll along the full length of rows)
- api/link/ui.excelviewer_scrollx_config.md - enables/disables horizontal scrolling
- api/link/ui.excelviewer_scrolly_config.md - enables/disables vertical scrolling
- api/link/ui.excelviewer_select_config.md - sets the selection mode in DataTable
- api/link/ui.excelviewer_spans_config.md - array of span configurations for the datatable
- api/link/ui.excelviewer_subrowheight_config.md - automatically adjusts the subrow's height to the size of the text
- api/link/ui.excelviewer_subrow_config.md - sets a subrow template
- api/link/ui.excelviewer_subview_config.md - adds a subview configuration into datatable
- api/ui.excelviewer_toolbar_config.md - 
- api/link/ui.excelviewer_tooltip_config.md - sets a popup message appearing on pointing a mouse cursor over the dedicated item.
- api/link/ui.excelviewer_type_config.md - used for configuring presentation of items
- api/link/ui.excelviewer_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.excelviewer_width_config.md - sets the width of the component
- api/link/ui.excelviewer_ycount_config.md - defines height of datatable in rows
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.excelviewer_$drag_other.md - method called when drag operation initiated
- api/link/ui.excelviewer_$draghtml_other.md - defines how dragged item will look
- api/link/ui.excelviewer_$dragin_other.md - method called when item moved on possible drop landing during dnd
- api/link/ui.excelviewer_$dragmark_other.md - method called during dnd when some item in the component need to be marked as active drop target
- api/link/ui.excelviewer_$dragout_other.md - method called when item moved out of possible drop landing during dnd
- api/link/ui.excelviewer_$drop_other.md - method called when item dragged and dropped on valid target
- api/link/ui.excelviewer_$dropallow_other.md - can be redefine if you need custom drop rules
- api/link/ui.excelviewer_$getsize_other.md - returns the current size of the component
- api/link/ui.excelviewer_$height_other.md - current height of the view
- api/ui.excelviewer_$onload_other.md - 
- api/link/ui.excelviewer_$scope_other.md - scope for resolving event and method names
- api/link/ui.excelviewer_$setsize_other.md - sets the component size
- api/link/ui.excelviewer_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.excelviewer_$view_other.md - reference to top html element of the view
- api/link/ui.excelviewer_$width_other.md - current width of the view
- api/link/ui.excelviewer_config_other.md - all options from initial component configuration
- api/link/ui.excelviewer_headercontent_other.md - a hash property containing a collection of active elements which can be placed in the header
- api/link/ui.excelviewer_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.excelviewer_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.excelviewer_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.excelviewer_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class
- api/link/ui.excelviewer_on_mouse_move_other.md - attaches a mouse move behavior for component items with the specified CSS class
- api/link/ui.excelviewer_waitdata_other.md - eventual result of an asynchronous operation ('promise' object) for the loaded data
}}


@index:
- api/refs/ui.excelviewer_methods.md
- api/refs/ui.excelviewer_props.md
- api/refs/ui.excelviewer_events.md
- api/refs/ui.excelviewer_others.md

