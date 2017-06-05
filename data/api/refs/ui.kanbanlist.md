ui.kanbanlist 
=============


dummy stub

{{todo replace with real description. }}

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.dataview.md">ui.dataview</a>, <a href="api/refs/datamove.md">DataMove</a>, <a href="api/refs/dragitem.md">DragItem</a>, <a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/keysnavigation.md">KeysNavigation</a>, <a href="api/refs/selectionmodel.md">SelectionModel</a>, <a href="api/refs/scrollable.md">Scrollable</a>, <a href="api/refs/ui.proto.md">ui.proto</a>, <a href="api/refs/pagingability.md">PagingAbility</a>, <a href="api/refs/datamarks.md">DataMarks</a>, <a href="api/refs/autotooltip.md">AutoTooltip</a>, <a href="api/refs/validatecollection.md">ValidateCollection</a>, <a href="api/refs/renderstack.md">RenderStack</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/virtualrenderstack.md">VirtualRenderStack</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.kanbanlist_add.md - adds an item to the store
- api/link/ui.kanbanlist_addcss.md - applied CSS class to a component item
- api/link/ui.kanbanlist_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.kanbanlist_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.kanbanlist_bind.md - binds components
- api/link/ui.kanbanlist_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.kanbanlist_callevent.md - calls an inner event
- api/link/ui.kanbanlist_clearall.md - removes all items from the component
- api/link/ui.kanbanlist_clearcss.md - removes CSS class from all items
- api/link/ui.kanbanlist_clearvalidation.md - removes all validation marks from the component
- api/link/ui.kanbanlist_copy.md - copies an item to the same or another object
- api/link/ui.kanbanlist_count.md - returns the number of currently visible items
- api/link/ui.kanbanlist_customize.md - redefines the "type" property
- api/link/ui.kanbanlist_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.kanbanlist_destructor.md - destructs the calling object
- api/link/ui.kanbanlist_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.kanbanlist_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/ui.kanbanlist_eachotherlist.md - 
- api/link/ui.kanbanlist_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.kanbanlist_exists.md - checks whether an item with the specified id exists
- api/link/ui.kanbanlist_filter.md - filters the component
- api/link/ui.kanbanlist_find.md - returns rows that match the criterion
- api/link/ui.kanbanlist_getchildviews.md - returns child views of the calling component
- api/link/ui.kanbanlist_getfirstid.md - returns the ID of the first item
- api/link/ui.kanbanlist_getformview.md - returns master form for the input
- api/link/ui.kanbanlist_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.kanbanlist_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.kanbanlist_getitem.md - gets the object of the data item with the specified id
- api/link/ui.kanbanlist_getitemnode.md - returns HTML element of the item
- api/link/ui.kanbanlist_getlastid.md - returns the id of the last item
- api/link/ui.kanbanlist_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.kanbanlist_getnode.md - returns the main HTML container for the calling object
- api/link/ui.kanbanlist_getpage.md - returns the currently visible page in case of paged view
- api/link/ui.kanbanlist_getpager.md - returns the pager object associated with the component
- api/link/ui.kanbanlist_getparentview.md - returns the parent view of the component
- api/link/ui.kanbanlist_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.kanbanlist_getscrollstate.md - returns the scroll position
- api/link/ui.kanbanlist_getselectedid.md - returns the id(s) of the selected item(s)
- api/link/ui.kanbanlist_getselecteditem.md - returns selected object
- api/link/ui.kanbanlist_gettopparentview.md - returns top parent view
- api/link/ui.kanbanlist_hascss.md - checks if item has specific css class
- api/link/ui.kanbanlist_hasevent.md - checks whether the component has the specified event
- api/link/ui.kanbanlist_hide.md - hides the view
- api/link/ui.kanbanlist_isenabled.md - checks whether the view is enabled
- api/link/ui.kanbanlist_isselected.md - checks whether the specified item is selected or not
- api/link/ui.kanbanlist_isvisible.md - checks whether the view is visible
- api/link/ui.kanbanlist_load.md - loads data from an external data source.
- api/link/ui.kanbanlist_loadnext.md - sends a request to load the specified number of records to the end of the client-side dataset or to the specified position
- api/link/ui.kanbanlist_locate.md - gets the id of an item from the specified HTML event
- api/link/ui.kanbanlist_mapevent.md - routes events from one object to another
- api/link/ui.kanbanlist_move.md - moves the specified item to the new position
- api/link/ui.kanbanlist_movebottom.md - moves the specified item to the last position
- api/link/ui.kanbanlist_movedown.md - increases the item index and moves the item to the new position
- api/link/ui.kanbanlist_moveselection.md - moves selection in the specified direction
- api/link/ui.kanbanlist_movetop.md - moves the specified item to the first position
- api/link/ui.kanbanlist_moveup.md - decreases the item index and moves the item to the new position
- api/link/ui.kanbanlist_parse.md - loads data to the component from an inline data source
- api/link/ui.kanbanlist_refresh.md - repaints the whole view or a certain item
- api/link/ui.kanbanlist_remove.md - removes the specified item/items from datastore
- api/link/ui.kanbanlist_removecss.md - removes CSS class from a component item
- api/link/ui.kanbanlist_render.md - renders the specified item or the whole component
- api/link/ui.kanbanlist_resize.md - adjusts the view to a new size
- api/link/ui.kanbanlist_scrollto.md - scrolls the data container to a certain position
- api/link/ui.kanbanlist_select.md - selects the specified item(s)
- api/link/ui.kanbanlist_selectall.md - selects all items or the specified range
- api/link/ui.kanbanlist_serialize.md - serializes data to a JSON object
- api/link/ui.kanbanlist_setpage.md - makes the specified page visible (assuming that the pager was defined )
- api/link/ui.kanbanlist_show.md - makes the component visible
- api/link/ui.kanbanlist_showitem.md - scrolls the component to make the specified item visible
- api/link/ui.kanbanlist_sort.md - sorts datastore
- api/link/ui.kanbanlist_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.kanbanlist_unbind.md - breaks "bind" link
- api/link/ui.kanbanlist_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.kanbanlist_unselect.md - removes selection from the specified item
- api/link/ui.kanbanlist_unselectall.md - removes selection from all items
- api/link/ui.kanbanlist_updateitem.md - updates the data item with new properties
- api/link/ui.kanbanlist_validate.md - validates one record or all dataset against the validation rules
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.kanbanlist_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.kanbanlist_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.kanbanlist_onafterdelete_event.md - fires after item deleting
- api/link/ui.kanbanlist_onafterdrop_event.md - fires after drag-n-drop was finished
- api/link/ui.kanbanlist_onafterdroporder_event.md - called when dnd reordering is fully finished
- api/link/ui.kanbanlist_onafterload_event.md - fires after data loading is complete
- api/link/ui.kanbanlist_onafterrender_event.md - occurs immediately after the component has been rendered
- api/link/ui.kanbanlist_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.kanbanlist_onafterselect_event.md - fires after item was selected
- api/link/ui.kanbanlist_onaftersort_event.md - fires after sorting dataset
- api/link/ui.kanbanlist_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.kanbanlist_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.kanbanlist_onbeforedelete_event.md - fires before item deleting
- api/link/ui.kanbanlist_onbeforedrag_event.md - fires before the mouse button is pressed and the cursor is moved over a draggable item
- api/link/ui.kanbanlist_onbeforedragin_event.md - fires before a dragged element is moved over the droppable area
- api/link/ui.kanbanlist_onbeforedrop_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.kanbanlist_onbeforedroporder_event.md - called when dnd reordering has been made, but not applied yet
- api/link/ui.kanbanlist_onbeforedropout_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.kanbanlist_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.kanbanlist_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.kanbanlist_onbeforeselect_event.md - fires before item selection is started
- api/link/ui.kanbanlist_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.kanbanlist_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.kanbanlist_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.kanbanlist_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.kanbanlist_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.kanbanlist_ondestruct_event.md - occurs when component destroyed
- api/link/ui.kanbanlist_ondragout_event.md - fires when a dragged element is moved outside of the droppable area
- api/link/ui.kanbanlist_onfocus_event.md - fires when a view gets focus
- api/link/ui.kanbanlist_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.kanbanlist_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.kanbanlist_onitemrender_event.md - for each item rendering, occurs only for items with custom templates
- api/link/ui.kanbanlist_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.kanbanlist_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.kanbanlist_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.kanbanlist_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.kanbanlist_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.kanbanlist_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.kanbanlist_onselectchange_event.md - fires after selection state was changed
- api/link/ui.kanbanlist_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.kanbanlist_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.kanbanlist_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.kanbanlist_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.kanbanlist_ontouchmove_event.md - occurs during touch movement
- api/link/ui.kanbanlist_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.kanbanlist_onvalidationerror_event.md - fires when newly loaded/added/edited data fails to pass validation
- api/link/ui.kanbanlist_onvalidationsuccess_event.md - fires after the newlyloaded/added/edited data has passes validation successfully
- api/link/ui.kanbanlist_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.kanbanlist_animate_config.md - defines or disables view change animation.
- api/link/ui.kanbanlist_autoheight_config.md - enables autosizing to content
- api/link/ui.kanbanlist_borderless_config.md - used to hide the component borders
- api/link/ui.kanbanlist_click_config.md - sets an action happening on a button click
- api/ui.kanbanlist_clipboard_config.md - 
- api/link/ui.kanbanlist_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.kanbanlist_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.kanbanlist_data_config.md - JavaScript array containing data for the component
- api/link/ui.kanbanlist_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/ui.kanbanlist_datafetch_config.md - defines the number of records that will be loaded during each dynamic loading request
- api/link/ui.kanbanlist_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.kanbanlist_datatype_config.md - the type of loaded data
- api/link/ui.kanbanlist_disabled_config.md - indicates whether an item is enabled
- api/link/ui.kanbanlist_drag_config.md - enables or disables drag-and-drop
- api/link/ui.kanbanlist_dragscroll_config.md - enables autoscroll of component during drag-n-drop
- api/link/ui.kanbanlist_externaldata_config.md - allows defining custom 'move' logic for the component.
- api/link/ui.kanbanlist_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.kanbanlist_height_config.md - sets the height of the component
- api/link/ui.kanbanlist_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.kanbanlist_id_config.md - the component ID
- api/link/ui.kanbanlist_item_config.md - alias to api/renderstack_item_config.md property
- api/ui.kanbanlist_layout_config.md - 
- api/link/ui.kanbanlist_maxheight_config.md - sets the maximum height for the view
- api/link/ui.kanbanlist_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.kanbanlist_minheight_config.md - sets the minimal height for the view
- api/link/ui.kanbanlist_minwidth_config.md - sets the minimal width for the view
- api/link/ui.kanbanlist_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/link/ui.kanbanlist_multiselect_config.md - enables multiselect mode
- api/link/ui.kanbanlist_navigation_config.md - activates the selection keyboard navigation
- api/link/ui.kanbanlist_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.kanbanlist_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.kanbanlist_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.kanbanlist_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.kanbanlist_onmousemove_config.md - attaches a mousemove behaviour for component items with the specified CSS class.
- api/link/ui.kanbanlist_pager_config.md - defines paging configuration ( creates a 'ui.pager' object)
- api/ui.kanbanlist_prerender_config.md - 
- api/link/ui.kanbanlist_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.kanbanlist_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.kanbanlist_rules_config.md - set of validation rules for the component
- api/link/ui.kanbanlist_save_config.md - defines URLs for data saving
- api/link/ui.kanbanlist_scheme_config.md - defines schemes for data processing
- api/link/ui.kanbanlist_scroll_config.md - enables/disables the scroll bar
- api/link/ui.kanbanlist_scrollspeed_config.md - the time during which the component is scrolled to the specified position (in milliseconds)
- api/link/ui.kanbanlist_select_config.md - enables/disables item selection or multiselection in grouplist
- api/link/ui.kanbanlist_template_config.md - the component template
- api/link/ui.kanbanlist_tooltip_config.md - sets a popup message appearing on pointing a mouse cursor over the dedicated item
- api/link/ui.kanbanlist_type_config.md - object that specifies items presentation
- api/link/ui.kanbanlist_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.kanbanlist_width_config.md - sets the width of the component
- api/link/ui.kanbanlist_xcount_config.md - adjusts the view width to display the defined number of items in a row
- api/link/ui.kanbanlist_ycount_config.md - adjusts the view height to display the defined number of items in a column
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.kanbanlist_$drag_other.md - method called when drag operation initiated
- api/ui.kanbanlist_$dragcreate_other.md - 
- api/ui.kanbanlist_$dragdestroy_other.md - 
- api/link/ui.kanbanlist_$draghtml_other.md - defines how dragged item will look
- api/link/ui.kanbanlist_$dragin_other.md - method called when item moved on possible drop landing during dnd
- api/link/ui.kanbanlist_$dragmark_other.md - method called during drag-n-drop, when some item in the component should be marked as an active drop target
- api/link/ui.kanbanlist_$dragout_other.md - method called when item moved out of possible drop landing during dnd
- api/ui.kanbanlist_$dragpos_other.md - 
- api/link/ui.kanbanlist_$drop_other.md - method called when item dragged and dropped on valid target
- api/link/ui.kanbanlist_$dropallow_other.md - can be redefined, if you need custom drop rules
- api/link/ui.kanbanlist_$getsize_other.md - returns the current size of the component
- api/link/ui.kanbanlist_$height_other.md - current height of the view
- api/ui.kanbanlist_$kanban_other.md - 
- api/link/ui.kanbanlist_$scope_other.md - scope for resolving event and method names
- api/link/ui.kanbanlist_$setsize_other.md - sets the component size
- api/link/ui.kanbanlist_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.kanbanlist_$view_other.md - reference to top html element of the view
- api/link/ui.kanbanlist_$width_other.md - current width of the view
- api/link/ui.kanbanlist_config_other.md - all options from initial component configuration
- api/link/ui.kanbanlist_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.kanbanlist_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.kanbanlist_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.kanbanlist_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class
- api/link/ui.kanbanlist_on_mouse_move_other.md - attaches a mouse move behavior for component items with the specified CSS class
- api/link/ui.kanbanlist_type_other.md - set of properties and helpers for item rendering
- api/link/ui.kanbanlist_types_other.md - collection of possible types
- api/link/ui.kanbanlist_waitdata_other.md - eventual result of an asynchronous operation ('promise' object) for the loaded data
}}


@index:
- api/refs/ui.kanbanlist_methods.md
- api/refs/ui.kanbanlist_props.md
- api/refs/ui.kanbanlist_events.md
- api/refs/ui.kanbanlist_others.md

