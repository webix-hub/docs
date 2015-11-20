ui.menu 
=============


{{memo A menu of individually selectable items. }}

The component can be displayed in 2 modes: static (the menu is fully expanded all the time) and dynamic (only the parent item is static, while its childs are displayed only when the user holds the mouse pointer over the parent). You can configure any nesting level complexity. Check [menu](desktop/menu.md) documentation for more detailed description.

### Constructor

~~~js
	var menu = webix.ui({
		view:"menu", 
		container:"mydiv", 
		...config options will be here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_menu({
		...config options will be here..
	});
~~~

### Where to start

- [Overview of Menu Widget](desktop/menu.md)
- [Samples](http://docs.webix.com/samples/03_menu/index.html)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.list.md">ui.list</a>, <a href="api/refs/keysnavigation.md">KeysNavigation</a>, <a href="api/refs/datamove.md">DataMove</a>, <a href="api/refs/dragitem.md">DragItem</a>, <a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/selectionmodel.md">SelectionModel</a>, <a href="api/refs/scrollable.md">Scrollable</a>, <a href="api/refs/ui.proto.md">ui.proto</a>, <a href="api/refs/pagingability.md">PagingAbility</a>, <a href="api/refs/datamarks.md">DataMarks</a>, <a href="api/refs/autotooltip.md">AutoTooltip</a>, <a href="api/refs/validatecollection.md">ValidateCollection</a>, <a href="api/refs/renderstack.md">RenderStack</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/copypaste.md">CopyPaste</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.menu_add.md - adds an item to the store
- api/link/ui.menu_addcss.md - applied CSS class to a component item
- api/link/ui.menu_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.menu_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.menu_bind.md - binds components
- api/link/ui.menu_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.menu_callevent.md - calls an inner event
- api/link/ui.menu_clearall.md - removes all items from the component
- api/link/ui.menu_clearcss.md - removes css class from all items
- api/link/ui.menu_clearvalidation.md - removes all validation marks from the component
- api/link/ui.menu_copy.md - copies an item to the same or another object
- api/link/ui.menu_count.md - returns the number of currently visible items
- api/link/ui.menu_customize.md - redefines the "type" property
- api/link/ui.menu_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.menu_destructor.md - destructs the calling object
- api/link/ui.menu_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.menu_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/ui.menu_disableitem.md - disables menu item
- api/link/ui.menu_enable.md - enables the calling view that was disabled by the 'disable' method
- api/ui.menu_enableitem.md - enables menu item
- api/link/ui.menu_exists.md - checks whether an item with the specified id exists
- api/link/ui.menu_filter.md - filters the component
- api/link/ui.menu_find.md - returns rows that match the criterion
- api/link/ui.menu_getchildviews.md - returns child views of the calling component
- api/link/ui.menu_getfirstid.md - returns the ID of the first item
- api/link/ui.menu_getformview.md - returns master form for the input
- api/link/ui.menu_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.menu_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.menu_getitem.md - gets the object of the data item with the specified id
- api/link/ui.menu_getitemnode.md - returns HTML element of the item
- api/link/ui.menu_getlastid.md - returns the id of the last item
- api/ui.menu_getmenu.md - gets object of a menu/submenu where an item is located
- api/ui.menu_getmenuitem.md - search for menu item in submenus
- api/link/ui.menu_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.menu_getnode.md - returns the main HTML container for the calling object
- api/link/ui.menu_getpage.md - returns the currently visible page in case of paged view
- api/link/ui.menu_getpager.md - returns the pager object associated with the component
- api/link/ui.menu_getparentview.md - returns the parent view of the component
- api/link/ui.menu_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.menu_getscrollstate.md - returns the scroll position
- api/link/ui.menu_getselectedid.md - returns the id(s) of the selected item(s)
- api/link/ui.menu_getselecteditem.md - returns selected object
- api/ui.menu_getsubmenu.md - gets the submenu object of a menu item (if any)
- api/ui.menu_gettopmenu.md - returns top menu object
- api/link/ui.menu_gettopparentview.md - returns top parent view
- api/link/ui.menu_getvisiblecount.md - returns the number of items that can be seen with the current view height
- api/link/ui.menu_hascss.md - checks if item has specific css class
- api/link/ui.menu_hasevent.md - checks whether the component has the specified event
- api/link/ui.menu_hide.md - hides the view
- api/ui.menu_hideitem.md - hides menu item
- api/link/ui.menu_isenabled.md - checks whether the view is enabled
- api/link/ui.menu_isselected.md - checks whether the specified item is selected or not
- api/link/ui.menu_isvisible.md - checks whether the view is visible
- api/link/ui.menu_load.md - loads data from an external data source.
- api/link/ui.menu_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/link/ui.menu_locate.md - gets the id of an item from the specified HTML event
- api/link/ui.menu_mapevent.md - routes events from one object to another
- api/link/ui.menu_move.md - moves the specified item to the new position
- api/link/ui.menu_movebottom.md - moves the specified item to the last position
- api/link/ui.menu_movedown.md - increases the item index and moves the item to the new position
- api/link/ui.menu_moveselection.md - moves selection in the specified direction
- api/link/ui.menu_movetop.md - moves the specified item to the first position
- api/link/ui.menu_moveup.md - decreases the item index and moves the item to the new position
- api/link/ui.menu_parse.md - loads data to the component from an inline data source
- api/link/ui.menu_refresh.md - repaints the whole view or a certain item
- api/link/ui.menu_remove.md - removes the specified item from datastore
- api/link/ui.menu_removecss.md - removes CSS class from a component item
- api/link/ui.menu_render.md - renders the specified item or the whole component
- api/link/ui.menu_resize.md - adjusts the view to a new size
- api/link/ui.menu_scrollto.md - scrolls the data container to a certain position
- api/link/ui.menu_select.md - selects the specified item(s)
- api/link/ui.menu_selectall.md - selects all items or the specified range
- api/link/ui.menu_serialize.md - serializes data to a JSON object
- api/link/ui.menu_setpage.md - makes the specified page visible (assuming that the pager was defined )
- api/link/ui.menu_show.md - makes the component visible
- api/link/ui.menu_showitem.md - scrolls the component to make the specified item visible
- api/ui.menu_sizetocontent.md - 
- api/link/ui.menu_sort.md - sorts datastore
- api/link/ui.menu_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.menu_unbind.md - breaks "bind" link
- api/link/ui.menu_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.menu_unselect.md - removes selection from the specified item
- api/link/ui.menu_unselectall.md - removes selection from all items
- api/link/ui.menu_updateitem.md - sets properties of the data item
- api/link/ui.menu_validate.md - validates one record or all dataset against validation rules
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.menu_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.menu_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.menu_onafterdelete_event.md - fires after item deleting
- api/link/ui.menu_onafterdrop_event.md - fires after drag-n-drop was finished
- api/link/ui.menu_onafterload_event.md - fires after data loading is complete
- api/link/ui.menu_onafterrender_event.md - occurs immediately after the component has been rendered
- api/link/ui.menu_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.menu_onafterselect_event.md - fires after item was selected
- api/link/ui.menu_onaftersort_event.md - fires after sorting dataset
- api/link/ui.menu_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.menu_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.menu_onbeforedelete_event.md - fires before item deleting
- api/link/ui.menu_onbeforedrag_event.md - fires before the mouse button is pressed and the cursor is moved over a draggable item
- api/link/ui.menu_onbeforedragin_event.md - fires before a dragged element is moved over the droppable area
- api/link/ui.menu_onbeforedrop_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.menu_onbeforedropout_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.menu_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.menu_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.menu_onbeforeselect_event.md - fires before item selection is started
- api/link/ui.menu_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.menu_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.menu_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.menu_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.menu_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.menu_ondestruct_event.md - occurs when component destroyed
- api/link/ui.menu_ondragout_event.md - fires when a dragged element is moved outside of the droppable area
- api/link/ui.menu_onfocus_event.md - fires when a view gets focus
- api/link/ui.menu_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.menu_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.menu_onitemrender_event.md - for each item rendering, occurs only for items with custom templates
- api/link/ui.menu_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.menu_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.menu_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/ui.menu_onmenuitemclick_event.md - fires when menu item has been clicked
- api/link/ui.menu_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.menu_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.menu_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.menu_onpaste_event.md - fires when the user presses CTRL+V keys combination
- api/link/ui.menu_onselectchange_event.md - fires after selection state was changed
- api/link/ui.menu_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.menu_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.menu_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.menu_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.menu_ontouchmove_event.md - occurs during touch movement
- api/link/ui.menu_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.menu_onvalidationerror_event.md - fires when newly loaded/added/edited data fails to pass validation
- api/link/ui.menu_onvalidationsuccess_event.md - fires after the newlyloaded/added/edited data has passes validation successfully
- api/link/ui.menu_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.menu_animate_config.md - defines or disables view change animation.
- api/link/ui.menu_autoheight_config.md - height of view will be adjusted to show all items
- api/link/ui.menu_autowidth_config.md - width of view will be adjusted to show all items
- api/link/ui.menu_borderless_config.md - used to hide the component borders
- api/link/ui.menu_click_config.md - sets an action happening on a button click
- api/link/ui.menu_clipboard_config.md - enables/disables clipboard support
- api/link/ui.menu_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.menu_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.menu_data_config.md - JavaScript array containing data for the component
- api/link/ui.menu_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/ui.menu_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.menu_datatype_config.md - the type of loaded data
- api/link/ui.menu_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.menu_drag_config.md - enables or disables drag-and-drop
- api/link/ui.menu_dragscroll_config.md - enables autoscroll of component during drag-n-drop
- api/link/ui.menu_externaldata_config.md - allows defining custom 'move' logic for the component.
- api/link/ui.menu_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.menu_height_config.md - sets the height of the component
- api/link/ui.menu_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.menu_id_config.md - the component ID
- api/link/ui.menu_layout_config.md - defines x or y orientation of layout
- api/link/ui.menu_maxheight_config.md - sets the maximum height for the view
- api/link/ui.menu_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.menu_minheight_config.md - sets the minimal height for the view
- api/link/ui.menu_minwidth_config.md - sets the minimal width for the view
- api/link/ui.menu_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/link/ui.menu_multiselect_config.md - enables multiselect mode
- api/link/ui.menu_navigation_config.md - activates the selection keyboard navigation
- api/link/ui.menu_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.menu_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.menu_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.menu_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.menu_onmousemove_config.md - attaches a mousemove behaviour for component items with the specified CSS class.
- api/ui.menu_openaction_config.md - alters the way of submenu opening to "click"
- api/link/ui.menu_pager_config.md - defines paging configuration ( creates a 'ui.pager' object)
- api/link/ui.menu_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.menu_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.menu_rules_config.md - set of validation rules for the component
- api/link/ui.menu_save_config.md - defines URLs for data saving
- api/link/ui.menu_scheme_config.md - defines schemes for data processing
- api/link/ui.menu_scroll_config.md - enables/disables the scroll bar
- api/link/ui.menu_scrollspeed_config.md - the time during which the component is scrolled to the specified position (in milliseconds)
- api/link/ui.menu_select_config.md - enables/disables item selection or multiselection in grouplist
- api/ui.menu_submenupos_config.md - aligns submenu towards main menu
- api/ui.menu_submenuconfig_config.md - defines submenu configuration
- api/link/ui.menu_template_config.md - the component template
- api/link/ui.menu_templatecopy_config.md - sets the template according to which data will be copied to the clipboard
- api/link/ui.menu_tooltip_config.md - sets a popup message appearing on pointing a mouse cursor over the dedicated item.
- api/link/ui.menu_type_config.md - object that specifies items presentation
- api/link/ui.menu_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.menu_width_config.md - sets the width of the component
- api/link/ui.menu_xcount_config.md - defines width of view in items
- api/link/ui.menu_ycount_config.md - defines height of view in items
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.menu_$drag_other.md - method called when drag operation initiated
- api/link/ui.menu_$draghtml_other.md - defines how dragged item will look
- api/link/ui.menu_$dragin_other.md - method called when item moved on possible drop landing during dnd
- api/link/ui.menu_$dragmark_other.md - method called during dnd when some item in the component need to be marked as active drop target
- api/link/ui.menu_$dragout_other.md - method called when item moved out of possible drop landing during dnd
- api/link/ui.menu_$drop_other.md - method called when item dragged and dropped on valid target
- api/link/ui.menu_$dropallow_other.md - can be redefine if you need custom drop rules
- api/link/ui.menu_$getsize_other.md - returns the current size of the component
- api/link/ui.menu_$height_other.md - current height of the view
- api/link/ui.menu_$scope_other.md - scope for resolving event and method names
- api/link/ui.menu_$setsize_other.md - sets the component size
- api/link/ui.menu_$skin_other.md - method, which will be called when skin defined
- api/link/ui.menu_$view_other.md - reference to top html element of the view
- api/link/ui.menu_$width_other.md - current width of the view
- api/link/ui.menu_config_other.md - all options from initial component configuration
- api/link/ui.menu_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.menu_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.menu_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.menu_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.menu_on_mouse_move_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.menu_type_other.md - set of properties and helpers for item rendering
- api/link/ui.menu_types_other.md - collection of possible types
}}


@index:
- api/refs/ui.menu_methods.md
- api/refs/ui.menu_props.md
- api/refs/ui.menu_events.md
- api/refs/ui.menu_others.md

