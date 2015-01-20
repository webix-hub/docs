ui.contextmenu 
=============


{{memo A context menu. }}

The component presents a pop-up menu that is displayed when the user clicks the right mouse button in the client area. You can configure any nesting level complexity. Check [contextmenu](desktop/contextmenu.md) documentation for more detailed description.

### Constructor

~~~js
	var contextmenu = webix.ui({
		view:"contextmenu", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_contextmenu({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/contexthelper.md">ContextHelper</a>, <a href="api/refs/ui.submenu.md">ui.submenu</a>, <a href="api/refs/ui.menu.md">ui.menu</a>, <a href="api/refs/ui.list.md">ui.list</a>, <a href="api/refs/keysnavigation.md">KeysNavigation</a>, <a href="api/refs/datamove.md">DataMove</a>, <a href="api/refs/dragitem.md">DragItem</a>, <a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/selectionmodel.md">SelectionModel</a>, <a href="api/refs/scrollable.md">Scrollable</a>, <a href="api/refs/ui.proto.md">ui.proto</a>, <a href="api/refs/pagingability.md">PagingAbility</a>, <a href="api/refs/datamarks.md">DataMarks</a>, <a href="api/refs/autotooltip.md">AutoTooltip</a>, <a href="api/refs/validatecollection.md">ValidateCollection</a>, <a href="api/refs/renderstack.md">RenderStack</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/copypaste.md">CopyPaste</a>, <a href="api/refs/ui.popup.md">ui.popup</a>, <a href="api/refs/ui.window.md">ui.window</a>, <a href="api/refs/movable.md">Movable</a>, <a href="api/refs/modality.md">Modality</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.contextmenu_add.md - adds an item to the store
- api/link/ui.contextmenu_addcss.md - applied CSS class to a component item
- api/link/ui.contextmenu_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.contextmenu_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.contextmenu_attachto.md - attaches a context menu to webix component
- api/link/ui.contextmenu_bind.md - binds components
- api/link/ui.contextmenu_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.contextmenu_callevent.md - calls an inner event
- api/link/ui.contextmenu_clearall.md - removes all items from the component
- api/link/ui.contextmenu_clearcss.md - removes css class from all items
- api/link/ui.contextmenu_clearvalidation.md - removes all validation marks from the component
- api/link/ui.contextmenu_close.md - removes a window
- api/link/ui.contextmenu_copy.md - copies an item to the same or another object
- api/link/ui.contextmenu_count.md - returns the count of items in the table
- api/link/ui.contextmenu_customize.md - redefines the "type" property
- api/link/ui.contextmenu_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.contextmenu_destructor.md - destructs the calling object
- api/link/ui.contextmenu_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.contextmenu_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.contextmenu_disableitem.md - disables menu item
- api/link/ui.contextmenu_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.contextmenu_enableitem.md - enables menu item
- api/link/ui.contextmenu_exists.md - checks whether an item with the specified id exists
- api/link/ui.contextmenu_filter.md - filters the component
- api/link/ui.contextmenu_getbody.md - gets the ui view of the window body
- api/link/ui.contextmenu_getchildviews.md - returns child views of the calling component
- api/link/ui.contextmenu_getcontext.md - gets the master area for contextmenu
- api/link/ui.contextmenu_getfirstid.md - returns the ID of the first item
- api/link/ui.contextmenu_getformview.md - returns master form for the input
- api/link/ui.contextmenu_gethead.md - gets the ui view of the window header
- api/link/ui.contextmenu_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.contextmenu_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.contextmenu_getitem.md - gets the object of the data item with the specified id
- api/link/ui.contextmenu_getitemnode.md - returns html element of the item
- api/link/ui.contextmenu_getlastid.md - returns the id of the last item
- api/link/ui.contextmenu_getmenuitem.md - search for menu item in submenus
- api/link/ui.contextmenu_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.contextmenu_getnode.md - returns the main HTML container for the calling object
- api/link/ui.contextmenu_getpage.md - returns the currently visible page in case of paged view
- api/link/ui.contextmenu_getpager.md - returns the pager object associated with the component
- api/link/ui.contextmenu_getparentview.md - returns the parent view of the component
- api/link/ui.contextmenu_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.contextmenu_getscrollstate.md - returns the scroll position
- api/link/ui.contextmenu_getselectedid.md - returns the id(s) of the selected item(s)
- api/link/ui.contextmenu_getselecteditem.md - returns selected object
- api/link/ui.contextmenu_getsubmenu.md - gets the submenu object within menu component
- api/link/ui.contextmenu_gettopmenu.md - returns top menu object
- api/link/ui.contextmenu_gettopparentview.md - returns top parent view
- api/link/ui.contextmenu_getvisiblecount.md - returns the number of items that can be seen with the current view height
- api/link/ui.contextmenu_hascss.md - checks if item has specific css class
- api/link/ui.contextmenu_hasevent.md - checks whether the component has the specified event
- api/link/ui.contextmenu_hide.md - hides the view
- api/link/ui.contextmenu_hideitem.md - hides menu item
- api/link/ui.contextmenu_isenabled.md - checks whether the view is enabled
- api/link/ui.contextmenu_isselected.md - checks whether the specified item is selected or not
- api/link/ui.contextmenu_isvisible.md - checks whether the view is visible
- api/link/ui.contextmenu_load.md - loads data from an external data source
- api/link/ui.contextmenu_loadnext.md - sends a request to load the specified number of records to the end or to the specified position
- api/link/ui.contextmenu_locate.md - gets the id of an item from the specified HTML event
- api/link/ui.contextmenu_mapevent.md - routes events from one object to another
- api/link/ui.contextmenu_move.md - moves the specified item to the new position
- api/link/ui.contextmenu_movebottom.md - moves the specified item to the last position
- api/link/ui.contextmenu_movedown.md - increases the item index and moves the item to the new position
- api/link/ui.contextmenu_moveselection.md - moves selection in the specified direction
- api/link/ui.contextmenu_movetop.md - moves the specified item to the first position
- api/link/ui.contextmenu_moveup.md - decreases the item index and moves the item to the new position
- api/link/ui.contextmenu_parse.md - loads data to the component from an inline data source
- api/link/ui.contextmenu_refresh.md - repaints the whole view or a certain item
- api/link/ui.contextmenu_remove.md - removes the specified item from datastore
- api/link/ui.contextmenu_removecss.md - removes CSS class from a component item
- api/link/ui.contextmenu_render.md - renders the specified item or the whole component
- api/link/ui.contextmenu_resize.md - adjusts the view to a new size
- api/link/ui.contextmenu_resizechildren.md - resizes all children of the calling component
- api/link/ui.contextmenu_scrollto.md - scrolls the data container to a certain position
- api/link/ui.contextmenu_select.md - selects the specified item(s)
- api/link/ui.contextmenu_selectall.md - selects all items or the specified range
- api/link/ui.contextmenu_serialize.md - serializes data to a json object
- api/link/ui.contextmenu_setpage.md - makes the specified page visible (assuming that the pager was defined )
- api/link/ui.contextmenu_setposition.md - sets window's position
- api/link/ui.contextmenu_show.md - makes the component visible
- api/link/ui.contextmenu_showitem.md - scrolls the component to make the specified item visible
- api/link/ui.contextmenu_sort.md - sorts datastore
- api/link/ui.contextmenu_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.contextmenu_unbind.md - breaks "bind" link
- api/link/ui.contextmenu_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.contextmenu_unselect.md - removes selection from the specified item
- api/link/ui.contextmenu_unselectall.md - removes selection from all items
- api/link/ui.contextmenu_updateitem.md - sets properties of the data item
- api/link/ui.contextmenu_validate.md - validates one record or all dataset against validation rules
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.contextmenu_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.contextmenu_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.contextmenu_onafterdelete_event.md - fires after item deleting
- api/link/ui.contextmenu_onafterdrop_event.md - fires after drag-n-drop was finished
- api/link/ui.contextmenu_onafterload_event.md - fires after server side loading is complete
- api/link/ui.contextmenu_onafterrender_event.md - occurs immediately after the component has been rendered
- api/link/ui.contextmenu_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.contextmenu_onafterselect_event.md - fires after item was selected
- api/link/ui.contextmenu_onaftersort_event.md - fires after sorting dataset
- api/link/ui.contextmenu_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.contextmenu_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.contextmenu_onbeforedelete_event.md - fires before item deleting
- api/link/ui.contextmenu_onbeforedrag_event.md - fires before the mouse button is pressed and the cursor is moved over a draggable item
- api/link/ui.contextmenu_onbeforedragin_event.md - fires before a dragged element is moved over the droppable area
- api/link/ui.contextmenu_onbeforedrop_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.contextmenu_onbeforedropout_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.contextmenu_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.contextmenu_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.contextmenu_onbeforeselect_event.md - fires before item selection is started
- api/link/ui.contextmenu_onbeforeshow_event.md - fires the moment context menu is called
- api/link/ui.contextmenu_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.contextmenu_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.contextmenu_ondatarequest_event.md - fires when data from the server side is requested (part of dynamic loading)
- api/link/ui.contextmenu_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.contextmenu_ondestruct_event.md - occurs when component destroyed
- api/link/ui.contextmenu_ondragout_event.md - fires when a dragged element is moved outside of the droppable area
- api/link/ui.contextmenu_onhide_event.md - fires when window is hidden
- api/link/ui.contextmenu_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.contextmenu_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.contextmenu_onitemrender_event.md - for each item rendering, occurs only for items with custom templates
- api/link/ui.contextmenu_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.contextmenu_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.contextmenu_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.contextmenu_onmenuitemclick_event.md - fires when menu item has been clicked
- api/link/ui.contextmenu_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.contextmenu_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.contextmenu_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.contextmenu_onpaste_event.md - fires when the user presses CTRL+V keys combination
- api/link/ui.contextmenu_onselectchange_event.md - fires after selection state was changed
- api/link/ui.contextmenu_onshow_event.md - fires when window is shown
- api/link/ui.contextmenu_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.contextmenu_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.contextmenu_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.contextmenu_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.contextmenu_ontouchmove_event.md - occurs during touch movement
- api/link/ui.contextmenu_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.contextmenu_onvalidationerror_event.md - fires when newly loaded/added/edited data fails to pass validation
- api/link/ui.contextmenu_onvalidationsuccess_event.md - fires after the newlyloaded/added/edited data has passes validation successfully
- api/link/ui.contextmenu_onviewmove_event.md - fires while view is moving
- api/link/ui.contextmenu_onviewmoveend_event.md - fires when view has stopped moving
- api/link/ui.contextmenu_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.contextmenu_animate_config.md - defines or disables view change animation.
- api/link/ui.contextmenu_autofit_config.md - adjusts window size to the size of an html node it is initiated in
- api/link/ui.contextmenu_autofocus_config.md - sets focus on the window the moment it appears on the page
- api/link/ui.contextmenu_autoheight_config.md - height of view will be adjusted to show all items
- api/link/ui.contextmenu_autowidth_config.md - width of view will be adjusted to show all items
- api/link/ui.contextmenu_body_config.md - the content of window body: template or view
- api/link/ui.contextmenu_borderless_config.md - used to hide the component borders
- api/link/ui.contextmenu_click_config.md - sets an action happening on a button click
- api/link/ui.contextmenu_clipboard_config.md - enables/disables clipboard support
- api/link/ui.contextmenu_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.contextmenu_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.contextmenu_data_config.md - an inline dataset that data to the component will be load from.
- api/link/ui.contextmenu_datafeed_config.md - the url that the component will use to reload data during binding
- api/link/ui.contextmenu_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.contextmenu_datatype_config.md - the type of loaded data
- api/link/ui.contextmenu_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.contextmenu_drag_config.md - enables or disables drag-and-drop
- api/link/ui.contextmenu_dragscroll_config.md - enables autoscroll of component during drag-n-drop
- api/link/ui.contextmenu_externaldata_config.md - allows defining custom 'move' logic for the component.
- api/link/ui.contextmenu_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.contextmenu_head_config.md - sets the view header
- api/link/ui.contextmenu_headheight_config.md - defines the header height (43 by default)
- api/link/ui.contextmenu_height_config.md - sets the height of the component
- api/link/ui.contextmenu_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.contextmenu_id_config.md - the component ID
- api/link/ui.contextmenu_layout_config.md - defines x or y orientation of layout
- api/link/ui.contextmenu_left_config.md - the left offset of the window
- api/link/ui.contextmenu_master_config.md - the area for which context object in inited
- api/link/ui.contextmenu_maxheight_config.md - sets the maximum height for the view
- api/link/ui.contextmenu_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.contextmenu_minheight_config.md - sets the minimal height for the view
- api/link/ui.contextmenu_minwidth_config.md - sets the minimal width for the view
- api/link/ui.contextmenu_modal_config.md - switches window modality
- api/link/ui.contextmenu_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/link/ui.contextmenu_move_config.md - makes view movable
- api/link/ui.contextmenu_navigation_config.md - activates the selection keyboard navigation
- api/link/ui.contextmenu_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.contextmenu_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.contextmenu_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.contextmenu_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.contextmenu_onmousemove_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.contextmenu_padding_config.md - sets paddings of the chart content
- api/link/ui.contextmenu_pager_config.md - defines paging configuration ( creates a 'ui.pager' object)
- api/link/ui.contextmenu_position_config.md - sets position of the window relative to the the screen
- api/link/ui.contextmenu_ready_config.md - a handler that is called just after the page has been completely parsed
- api/link/ui.contextmenu_relative_config.md - positions a popup window relative to the component it's connected with
- api/link/ui.contextmenu_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.contextmenu_rules_config.md - set of validation rules for the component
- api/link/ui.contextmenu_save_config.md - defines urls for datasaving
- api/link/ui.contextmenu_scheme_config.md - defines schemes for data processing
- api/link/ui.contextmenu_scroll_config.md - enables/disables the scroll bar
- api/link/ui.contextmenu_scrollspeed_config.md - the time during which the component is scrolled to the specified position (in milliseconds)
- api/link/ui.contextmenu_select_config.md - enables/disables item selection or multiselection in grouplist
- api/link/ui.contextmenu_submenupos_config.md - aligns submenu towards main menu
- api/link/ui.contextmenu_submenu_config.md - defines submenu configuration
- api/link/ui.contextmenu_template_config.md - the component template
- api/link/ui.contextmenu_templatecopy_config.md - sets the template according to which data will be copied to the clipboard
- api/link/ui.contextmenu_tooltip_config.md - sets a popup message appearing on pointing a mouse cursor over the dedicated item.
- api/link/ui.contextmenu_top_config.md - the top offset of a window
- api/link/ui.contextmenu_type_config.md - object that specifies items presentation
- api/link/ui.contextmenu_url_config.md - the url the component will use to load data after its initialization
- api/link/ui.contextmenu_width_config.md - sets the width of the component
- api/link/ui.contextmenu_xcount_config.md - defines width of view in items
- api/link/ui.contextmenu_ycount_config.md - defines height of view in items
- api/link/ui.contextmenu_zindex_config.md - stack order of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.contextmenu_$drag_other.md - method called when drag operation initiated
- api/link/ui.contextmenu_$draghtml_other.md - defines how dragged item will look
- api/link/ui.contextmenu_$dragin_other.md - method called when item moved on possible drop landing during dnd
- api/link/ui.contextmenu_$dragmark_other.md - method called during dnd when some item in the component need to be marked as active drop target
- api/link/ui.contextmenu_$dragout_other.md - method called when item moved out of possible drop landing during dnd
- api/link/ui.contextmenu_$drop_other.md - method called when item dragged and dropped on valid target
- api/link/ui.contextmenu_$dropallow_other.md - can be redefine if you need custom drop rules
- api/link/ui.contextmenu_$getsize_other.md - returns the current size of the component
- api/link/ui.contextmenu_$height_other.md - current height of the view
- api/link/ui.contextmenu_$scope_other.md - scope for resolving event and method names
- api/link/ui.contextmenu_$setsize_other.md - sets the component size
- api/link/ui.contextmenu_$skin_other.md - method, which will be called when skin defined
- api/link/ui.contextmenu_$view_other.md - reference to top html element of the view
- api/link/ui.contextmenu_$width_other.md - current width of the view
- api/link/ui.contextmenu_config_other.md - all options from initial component configuration
- api/link/ui.contextmenu_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.contextmenu_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.contextmenu_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.contextmenu_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.contextmenu_on_mouse_move_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.contextmenu_type_other.md - set of properties and helpers for item rendering
- api/link/ui.contextmenu_types_other.md - collection of possible types
}}


@index:
- api/refs/ui.contextmenu_methods.md
- api/refs/ui.contextmenu_props.md
- api/refs/ui.contextmenu_events.md
- api/refs/ui.contextmenu_others.md

