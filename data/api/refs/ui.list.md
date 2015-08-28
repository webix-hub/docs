ui.list 
=============


{{memo A regular list of items. }}

The component serves as the base class that defines properties, methods, and events common for all list-type controls. Check [list](desktop/list.md) documentation for more detailed description.

### Constructor

~~~js
	var list = webix.ui({
		view:"list", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_list({
		...config options goes here..
	});
~~~

### Where to start

- [Overview of List Widget](desktop/list.md)
- [Samples](http://docs.webix.com/samples/05_list/index.html)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/keysnavigation.md">KeysNavigation</a>, <a href="api/refs/datamove.md">DataMove</a>, <a href="api/refs/dragitem.md">DragItem</a>, <a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/selectionmodel.md">SelectionModel</a>, <a href="api/refs/scrollable.md">Scrollable</a>, <a href="api/refs/ui.proto.md">ui.proto</a>, <a href="api/refs/pagingability.md">PagingAbility</a>, <a href="api/refs/datamarks.md">DataMarks</a>, <a href="api/refs/autotooltip.md">AutoTooltip</a>, <a href="api/refs/validatecollection.md">ValidateCollection</a>, <a href="api/refs/renderstack.md">RenderStack</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/copypaste.md">CopyPaste</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.list_add.md - adds an item to the store
- api/link/ui.list_addcss.md - applied CSS class to a component item
- api/link/ui.list_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.list_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.list_bind.md - binds components
- api/link/ui.list_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.list_callevent.md - calls an inner event
- api/link/ui.list_clearall.md - removes all items from the component
- api/link/ui.list_clearcss.md - removes css class from all items
- api/link/ui.list_clearvalidation.md - removes all validation marks from the component
- api/link/ui.list_copy.md - copies an item to the same or another object
- api/link/ui.list_count.md - returns the number of currently visible items
- api/link/ui.list_customize.md - redefines the "type" property
- api/link/ui.list_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.list_destructor.md - destructs the calling object
- api/link/ui.list_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.list_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.list_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.list_exists.md - checks whether an item with the specified id exists
- api/link/ui.list_filter.md - filters the component
- api/link/ui.list_find.md - returns rows that match the criterion
- api/link/ui.list_getchildviews.md - returns child views of the calling component
- api/link/ui.list_getfirstid.md - returns the ID of the first item
- api/link/ui.list_getformview.md - returns master form for the input
- api/link/ui.list_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.list_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.list_getitem.md - gets the object of the data item with the specified id
- api/link/ui.list_getitemnode.md - returns HTML element of the item
- api/link/ui.list_getlastid.md - returns the id of the last item
- api/link/ui.list_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.list_getnode.md - returns the main HTML container for the calling object
- api/link/ui.list_getpage.md - returns the currently visible page in case of paged view
- api/link/ui.list_getpager.md - returns the pager object associated with the component
- api/link/ui.list_getparentview.md - returns the parent view of the component
- api/link/ui.list_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.list_getscrollstate.md - returns the scroll position
- api/link/ui.list_getselectedid.md - returns the id(s) of the selected item(s)
- api/link/ui.list_getselecteditem.md - returns selected object
- api/link/ui.list_gettopparentview.md - returns top parent view
- api/ui.list_getvisiblecount.md - returns the number of items that can be seen with the current view height
- api/link/ui.list_hascss.md - checks if item has specific css class
- api/link/ui.list_hasevent.md - checks whether the component has the specified event
- api/link/ui.list_hide.md - hides the view
- api/link/ui.list_isenabled.md - checks whether the view is enabled
- api/link/ui.list_isselected.md - checks whether the specified item is selected or not
- api/link/ui.list_isvisible.md - checks whether the view is visible
- api/link/ui.list_load.md - loads data from an external data source.
- api/link/ui.list_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/link/ui.list_locate.md - gets the id of an item from the specified HTML event
- api/link/ui.list_mapevent.md - routes events from one object to another
- api/link/ui.list_move.md - moves the specified item to the new position
- api/link/ui.list_movebottom.md - moves the specified item to the last position
- api/link/ui.list_movedown.md - increases the item index and moves the item to the new position
- api/link/ui.list_moveselection.md - moves selection in the specified direction
- api/link/ui.list_movetop.md - moves the specified item to the first position
- api/link/ui.list_moveup.md - decreases the item index and moves the item to the new position
- api/link/ui.list_parse.md - loads data to the component from an inline data source
- api/link/ui.list_refresh.md - repaints the whole view or a certain item
- api/link/ui.list_remove.md - removes the specified item from datastore
- api/link/ui.list_removecss.md - removes CSS class from a component item
- api/link/ui.list_render.md - renders the specified item or the whole component
- api/link/ui.list_resize.md - adjusts the view to a new size
- api/link/ui.list_scrollto.md - scrolls the data container to a certain position
- api/link/ui.list_select.md - selects the specified item(s)
- api/link/ui.list_selectall.md - selects all items or the specified range
- api/link/ui.list_serialize.md - serializes data to a JSON object
- api/link/ui.list_setpage.md - makes the specified page visible (assuming that the pager was defined )
- api/link/ui.list_show.md - makes the component visible
- api/link/ui.list_showitem.md - scrolls the component to make the specified item visible
- api/link/ui.list_sort.md - sorts datastore
- api/link/ui.list_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.list_unbind.md - breaks "bind" link
- api/link/ui.list_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.list_unselect.md - removes selection from the specified item
- api/link/ui.list_unselectall.md - removes selection from all items
- api/link/ui.list_updateitem.md - sets properties of the data item
- api/link/ui.list_validate.md - validates one record or all dataset against validation rules
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.list_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.list_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.list_onafterdelete_event.md - fires after item deleting
- api/link/ui.list_onafterdrop_event.md - fires after drag-n-drop was finished
- api/link/ui.list_onafterload_event.md - fires after server side loading is complete
- api/link/ui.list_onafterrender_event.md - occurs immediately after the component has been rendered
- api/link/ui.list_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.list_onafterselect_event.md - fires after item was selected
- api/link/ui.list_onaftersort_event.md - fires after sorting dataset
- api/link/ui.list_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.list_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.list_onbeforedelete_event.md - fires before item deleting
- api/link/ui.list_onbeforedrag_event.md - fires before the mouse button is pressed and the cursor is moved over a draggable item
- api/link/ui.list_onbeforedragin_event.md - fires before a dragged element is moved over the droppable area
- api/link/ui.list_onbeforedrop_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.list_onbeforedropout_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.list_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.list_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.list_onbeforeselect_event.md - fires before item selection is started
- api/link/ui.list_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.list_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.list_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.list_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.list_ondestruct_event.md - occurs when component destroyed
- api/link/ui.list_ondragout_event.md - fires when a dragged element is moved outside of the droppable area
- api/link/ui.list_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.list_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.list_onitemrender_event.md - for each item rendering, occurs only for items with custom templates
- api/link/ui.list_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.list_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.list_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.list_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.list_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.list_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.list_onpaste_event.md - fires when the user presses CTRL+V keys combination
- api/link/ui.list_onselectchange_event.md - fires after selection state was changed
- api/link/ui.list_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.list_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.list_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.list_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.list_ontouchmove_event.md - occurs during touch movement
- api/link/ui.list_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.list_onvalidationerror_event.md - fires when newly loaded/added/edited data fails to pass validation
- api/link/ui.list_onvalidationsuccess_event.md - fires after the newlyloaded/added/edited data has passes validation successfully
- api/link/ui.list_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.list_animate_config.md - defines or disables view change animation.
- api/ui.list_autoheight_config.md - height of view will be adjusted to show all items
- api/ui.list_autowidth_config.md - width of view will be adjusted to show all items
- api/link/ui.list_borderless_config.md - used to hide the component borders
- api/link/ui.list_click_config.md - sets an action happening on a button click
- api/link/ui.list_clipboard_config.md - enables/disables clipboard support
- api/link/ui.list_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.list_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.list_data_config.md - JavaScript array containing data for the component
- api/link/ui.list_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/ui.list_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.list_datatype_config.md - the type of loaded data
- api/link/ui.list_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.list_drag_config.md - enables or disables drag-and-drop
- api/link/ui.list_dragscroll_config.md - enables autoscroll of component during drag-n-drop
- api/link/ui.list_externaldata_config.md - allows defining custom 'move' logic for the component.
- api/link/ui.list_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.list_height_config.md - sets the height of the component
- api/link/ui.list_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.list_id_config.md - the component ID
- api/ui.list_layout_config.md - defines x or y orientation of layout
- api/link/ui.list_maxheight_config.md - sets the maximum height for the view
- api/link/ui.list_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.list_minheight_config.md - sets the minimal height for the view
- api/link/ui.list_minwidth_config.md - sets the minimal width for the view
- api/link/ui.list_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/link/ui.list_multiselect_config.md - enables multiselect mode
- api/link/ui.list_navigation_config.md - activates the selection keyboard navigation
- api/link/ui.list_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.list_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.list_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.list_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.list_onmousemove_config.md - attaches a mousemove behaviour for component items with the specified CSS class.
- api/link/ui.list_pager_config.md - defines paging configuration ( creates a 'ui.pager' object)
- api/link/ui.list_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.list_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.list_rules_config.md - set of validation rules for the component
- api/link/ui.list_save_config.md - defines URLs for data saving
- api/link/ui.list_scheme_config.md - defines schemes for data processing
- api/link/ui.list_scroll_config.md - enables/disables the scroll bar
- api/link/ui.list_scrollspeed_config.md - the time during which the component is scrolled to the specified position (in milliseconds)
- api/link/ui.list_select_config.md - enables/disables item selection or multiselection in grouplist
- api/link/ui.list_template_config.md - the component template
- api/link/ui.list_templatecopy_config.md - sets the template according to which data will be copied to the clipboard
- api/link/ui.list_tooltip_config.md - sets a popup message appearing on pointing a mouse cursor over the dedicated item.
- api/link/ui.list_type_config.md - object that specifies items presentation
- api/link/ui.list_url_config.md - the URL the component will use to load data after its initialization
- api/link/ui.list_width_config.md - sets the width of the component
- api/ui.list_xcount_config.md - defines width of view in items
- api/ui.list_ycount_config.md - defines height of view in items
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.list_$drag_other.md - method called when drag operation initiated
- api/link/ui.list_$draghtml_other.md - defines how dragged item will look
- api/link/ui.list_$dragin_other.md - method called when item moved on possible drop landing during dnd
- api/link/ui.list_$dragmark_other.md - method called during dnd when some item in the component need to be marked as active drop target
- api/link/ui.list_$dragout_other.md - method called when item moved out of possible drop landing during dnd
- api/link/ui.list_$drop_other.md - method called when item dragged and dropped on valid target
- api/link/ui.list_$dropallow_other.md - can be redefine if you need custom drop rules
- api/link/ui.list_$getsize_other.md - returns the current size of the component
- api/link/ui.list_$height_other.md - current height of the view
- api/link/ui.list_$scope_other.md - scope for resolving event and method names
- api/link/ui.list_$setsize_other.md - sets the component size
- api/link/ui.list_$skin_other.md - method, which will be called when skin defined
- api/link/ui.list_$view_other.md - reference to top html element of the view
- api/link/ui.list_$width_other.md - current width of the view
- api/link/ui.list_config_other.md - all options from initial component configuration
- api/link/ui.list_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.list_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.list_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.list_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.list_on_mouse_move_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.list_type_other.md - set of properties and helpers for item rendering
- api/link/ui.list_types_other.md - collection of possible types
}}


@index:
- api/refs/ui.list_methods.md
- api/refs/ui.list_props.md
- api/refs/ui.list_events.md
- api/refs/ui.list_others.md

