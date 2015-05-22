ui.submenu 
=============


{{memo A sub-menu. }}

The component is a compliment to the menu component and not intended for direct initialization. Check [menu](desktop/menu.md) documentation for more detailed description.

### Constructor

~~~js
	var submenu = webix.ui({
		view:"submenu", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_submenu({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.menu.md">ui.menu</a>, <a href="api/refs/ui.list.md">ui.list</a>, <a href="api/refs/keysnavigation.md">KeysNavigation</a>, <a href="api/refs/datamove.md">DataMove</a>, <a href="api/refs/dragitem.md">DragItem</a>, <a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/selectionmodel.md">SelectionModel</a>, <a href="api/refs/scrollable.md">Scrollable</a>, <a href="api/refs/ui.proto.md">ui.proto</a>, <a href="api/refs/pagingability.md">PagingAbility</a>, <a href="api/refs/datamarks.md">DataMarks</a>, <a href="api/refs/autotooltip.md">AutoTooltip</a>, <a href="api/refs/validatecollection.md">ValidateCollection</a>, <a href="api/refs/renderstack.md">RenderStack</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/copypaste.md">CopyPaste</a>, <a href="api/refs/ui.popup.md">ui.popup</a>, <a href="api/refs/ui.window.md">ui.window</a>, <a href="api/refs/movable.md">Movable</a>, <a href="api/refs/modality.md">Modality</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.submenu_add.md - adds an item to the store
- api/link/ui.submenu_addcss.md - applied CSS class to a component item
- api/link/ui.submenu_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.submenu_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.submenu_bind.md - binds components
- api/link/ui.submenu_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.submenu_callevent.md - calls an inner event
- api/link/ui.submenu_clearall.md - removes all items from the component
- api/link/ui.submenu_clearcss.md - removes css class from all items
- api/link/ui.submenu_clearvalidation.md - removes all validation marks from the component
- api/link/ui.submenu_close.md - removes a window
- api/link/ui.submenu_copy.md - copies an item to the same or another object
- api/link/ui.submenu_count.md - returns the number of currently visible items
- api/link/ui.submenu_customize.md - redefines the "type" property
- api/link/ui.submenu_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.submenu_destructor.md - destructs the calling object
- api/link/ui.submenu_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.submenu_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.submenu_disableitem.md - disables menu item
- api/link/ui.submenu_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.submenu_enableitem.md - enables menu item
- api/link/ui.submenu_exists.md - checks whether an item with the specified id exists
- api/link/ui.submenu_filter.md - filters the component
- api/link/ui.submenu_getbody.md - gets the ui view of the window body
- api/link/ui.submenu_getchildviews.md - returns child views of the calling component
- api/link/ui.submenu_getfirstid.md - returns the ID of the first item
- api/link/ui.submenu_getformview.md - returns master form for the input
- api/link/ui.submenu_gethead.md - gets the ui view of the window header
- api/link/ui.submenu_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.submenu_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.submenu_getitem.md - gets the object of the data item with the specified id
- api/link/ui.submenu_getitemnode.md - returns HTML element of the item
- api/link/ui.submenu_getlastid.md - returns the id of the last item
- api/link/ui.submenu_getmenu.md - gets object of a menu/submenu where an item is located
- api/link/ui.submenu_getmenuitem.md - search for menu item in submenus
- api/link/ui.submenu_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.submenu_getnode.md - returns the main HTML container for the calling object
- api/link/ui.submenu_getpage.md - returns the currently visible page in case of paged view
- api/link/ui.submenu_getpager.md - returns the pager object associated with the component
- api/link/ui.submenu_getparentview.md - returns the parent view of the component
- api/link/ui.submenu_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.submenu_getscrollstate.md - returns the scroll position
- api/link/ui.submenu_getselectedid.md - returns the id(s) of the selected item(s)
- api/link/ui.submenu_getselecteditem.md - returns selected object
- api/link/ui.submenu_getsubmenu.md - gets the submenu object of a menu item (if any)
- api/link/ui.submenu_gettopmenu.md - returns top menu object
- api/link/ui.submenu_gettopparentview.md - returns top parent view
- api/link/ui.submenu_getvisiblecount.md - returns the number of items that can be seen with the current view height
- api/link/ui.submenu_hascss.md - checks if item has specific css class
- api/link/ui.submenu_hasevent.md - checks whether the component has the specified event
- api/link/ui.submenu_hide.md - hides the view
- api/link/ui.submenu_hideitem.md - hides menu item
- api/link/ui.submenu_isenabled.md - checks whether the view is enabled
- api/link/ui.submenu_isselected.md - checks whether the specified item is selected or not
- api/link/ui.submenu_isvisible.md - checks whether the view is visible
- api/link/ui.submenu_load.md - loads data from an external data source.
- api/link/ui.submenu_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/link/ui.submenu_locate.md - gets the id of an item from the specified HTML event
- api/link/ui.submenu_mapevent.md - routes events from one object to another
- api/link/ui.submenu_move.md - moves the specified item to the new position
- api/link/ui.submenu_movebottom.md - moves the specified item to the last position
- api/link/ui.submenu_movedown.md - increases the item index and moves the item to the new position
- api/link/ui.submenu_moveselection.md - moves selection in the specified direction
- api/link/ui.submenu_movetop.md - moves the specified item to the first position
- api/link/ui.submenu_moveup.md - decreases the item index and moves the item to the new position
- api/link/ui.submenu_parse.md - loads data to the component from an inline data source
- api/link/ui.submenu_refresh.md - repaints the whole view or a certain item
- api/link/ui.submenu_remove.md - removes the specified item from datastore
- api/link/ui.submenu_removecss.md - removes CSS class from a component item
- api/link/ui.submenu_render.md - renders the specified item or the whole component
- api/link/ui.submenu_resize.md - adjusts the view to a new size
- api/link/ui.submenu_resizechildren.md - resizes all children of the calling component
- api/link/ui.submenu_scrollto.md - scrolls the data container to a certain position
- api/link/ui.submenu_select.md - selects the specified item(s)
- api/link/ui.submenu_selectall.md - selects all items or the specified range
- api/link/ui.submenu_serialize.md - serializes data to a JSON object
- api/link/ui.submenu_setpage.md - makes the specified page visible (assuming that the pager was defined )
- api/link/ui.submenu_setposition.md - sets window's position
- api/link/ui.submenu_show.md - makes the component visible
- api/link/ui.submenu_showitem.md - scrolls the component to make the specified item visible
- api/link/ui.submenu_sort.md - sorts datastore
- api/link/ui.submenu_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.submenu_unbind.md - breaks "bind" link
- api/link/ui.submenu_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.submenu_unselect.md - removes selection from the specified item
- api/link/ui.submenu_unselectall.md - removes selection from all items
- api/link/ui.submenu_updateitem.md - sets properties of the data item
- api/link/ui.submenu_validate.md - validates one record or all dataset against validation rules
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.submenu_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.submenu_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.submenu_onafterdelete_event.md - fires after item deleting
- api/link/ui.submenu_onafterdrop_event.md - fires after drag-n-drop was finished
- api/link/ui.submenu_onafterload_event.md - fires after server side loading is complete
- api/link/ui.submenu_onafterrender_event.md - occurs immediately after the component has been rendered
- api/link/ui.submenu_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.submenu_onafterselect_event.md - fires after item was selected
- api/link/ui.submenu_onaftersort_event.md - fires after sorting dataset
- api/link/ui.submenu_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.submenu_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.submenu_onbeforedelete_event.md - fires before item deleting
- api/link/ui.submenu_onbeforedrag_event.md - fires before the mouse button is pressed and the cursor is moved over a draggable item
- api/link/ui.submenu_onbeforedragin_event.md - fires before a dragged element is moved over the droppable area
- api/link/ui.submenu_onbeforedrop_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.submenu_onbeforedropout_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.submenu_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.submenu_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.submenu_onbeforeselect_event.md - fires before item selection is started
- api/link/ui.submenu_onbeforeshow_event.md - fires right after show() method is called for the window (popup) and before the window is shown
- api/link/ui.submenu_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.submenu_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.submenu_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.submenu_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.submenu_ondestruct_event.md - occurs when component destroyed
- api/link/ui.submenu_ondragout_event.md - fires when a dragged element is moved outside of the droppable area
- api/link/ui.submenu_onhide_event.md - fires when window is hidden
- api/link/ui.submenu_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.submenu_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.submenu_onitemrender_event.md - for each item rendering, occurs only for items with custom templates
- api/link/ui.submenu_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.submenu_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.submenu_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.submenu_onmenuitemclick_event.md - fires when menu item has been clicked
- api/link/ui.submenu_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.submenu_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.submenu_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.submenu_onpaste_event.md - fires when the user presses CTRL+V keys combination
- api/link/ui.submenu_onselectchange_event.md - fires after selection state was changed
- api/link/ui.submenu_onshow_event.md - fires when window is shown
- api/link/ui.submenu_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.submenu_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.submenu_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.submenu_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.submenu_ontouchmove_event.md - occurs during touch movement
- api/link/ui.submenu_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.submenu_onvalidationerror_event.md - fires when newly loaded/added/edited data fails to pass validation
- api/link/ui.submenu_onvalidationsuccess_event.md - fires after the newlyloaded/added/edited data has passes validation successfully
- api/link/ui.submenu_onviewmove_event.md - fires while view is moving
- api/link/ui.submenu_onviewmoveend_event.md - fires when view has stopped moving
- api/link/ui.submenu_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.submenu_animate_config.md - defines or disables view change animation.
- api/link/ui.submenu_autofit_config.md - adjusts window size to the size of an html node it is initiated in
- api/link/ui.submenu_autofocus_config.md - sets focus on the window the moment it appears on the page
- api/link/ui.submenu_autoheight_config.md - height of view will be adjusted to show all items
- api/link/ui.submenu_autowidth_config.md - width of view will be adjusted to show all items
- api/link/ui.submenu_body_config.md - the content of window body: template or view
- api/link/ui.submenu_borderless_config.md - used to hide the component borders
- api/link/ui.submenu_click_config.md - sets an action happening on a button click
- api/link/ui.submenu_clipboard_config.md - enables/disables clipboard support
- api/link/ui.submenu_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.submenu_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.submenu_data_config.md - JavaScript array containing data for the component
- api/link/ui.submenu_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/ui.submenu_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.submenu_datatype_config.md - the type of loaded data
- api/link/ui.submenu_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.submenu_drag_config.md - enables or disables drag-and-drop
- api/link/ui.submenu_dragscroll_config.md - enables autoscroll of component during drag-n-drop
- api/link/ui.submenu_externaldata_config.md - allows defining custom 'move' logic for the component.
- api/link/ui.submenu_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.submenu_head_config.md - sets the view header
- api/link/ui.submenu_headheight_config.md - defines the header height (43 by default)
- api/link/ui.submenu_height_config.md - sets the height of the component
- api/link/ui.submenu_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.submenu_id_config.md - the component ID
- api/link/ui.submenu_layout_config.md - defines x or y orientation of layout
- api/link/ui.submenu_left_config.md - the left offset of the window
- api/link/ui.submenu_maxheight_config.md - sets the maximum height for the view
- api/link/ui.submenu_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.submenu_minheight_config.md - sets the minimal height for the view
- api/link/ui.submenu_minwidth_config.md - sets the minimal width for the view
- api/link/ui.submenu_modal_config.md - switches window modality
- api/link/ui.submenu_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/link/ui.submenu_move_config.md - makes view movable
- api/link/ui.submenu_multiselect_config.md - 
- api/link/ui.submenu_navigation_config.md - activates the selection keyboard navigation
- api/link/ui.submenu_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.submenu_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.submenu_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.submenu_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.submenu_onmousemove_config.md - attaches a mousemove behaviour for component items with the specified CSS class.
- api/link/ui.submenu_padding_config.md - sets paddings of the chart content
- api/link/ui.submenu_pager_config.md - defines paging configuration ( creates a 'ui.pager' object)
- api/link/ui.submenu_position_config.md - sets position of the window relative to the the screen
- api/link/ui.submenu_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.submenu_relative_config.md - positions a popup window relative to the component it's connected with
- api/link/ui.submenu_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.submenu_rules_config.md - set of validation rules for the component
- api/link/ui.submenu_save_config.md - defines URLs for data saving
- api/link/ui.submenu_scheme_config.md - defines schemes for data processing
- api/link/ui.submenu_scroll_config.md - enables/disables the scroll bar
- api/link/ui.submenu_scrollspeed_config.md - the time during which the component is scrolled to the specified position (in milliseconds)
- api/link/ui.submenu_select_config.md - enables/disables item selection or multiselection in grouplist
- api/link/ui.submenu_submenupos_config.md - aligns submenu towards main menu
- api/link/ui.submenu_submenu_config.md - defines submenu configuration
- api/link/ui.submenu_template_config.md - the component template
- api/link/ui.submenu_templatecopy_config.md - sets the template according to which data will be copied to the clipboard
- api/link/ui.submenu_tooltip_config.md - sets a popup message appearing on pointing a mouse cursor over the dedicated item.
- api/link/ui.submenu_top_config.md - the top offset of a window
- api/link/ui.submenu_type_config.md - object that specifies items presentation
- api/link/ui.submenu_url_config.md - the URL the component will use to load data after its initialization
- api/link/ui.submenu_width_config.md - sets the width of the component
- api/link/ui.submenu_xcount_config.md - defines width of view in items
- api/link/ui.submenu_ycount_config.md - defines height of view in items
- api/link/ui.submenu_zindex_config.md - stack order of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.submenu_$drag_other.md - method called when drag operation initiated
- api/link/ui.submenu_$draghtml_other.md - defines how dragged item will look
- api/link/ui.submenu_$dragin_other.md - method called when item moved on possible drop landing during dnd
- api/link/ui.submenu_$dragmark_other.md - method called during dnd when some item in the component need to be marked as active drop target
- api/link/ui.submenu_$dragout_other.md - method called when item moved out of possible drop landing during dnd
- api/link/ui.submenu_$drop_other.md - method called when item dragged and dropped on valid target
- api/link/ui.submenu_$dropallow_other.md - can be redefine if you need custom drop rules
- api/link/ui.submenu_$getsize_other.md - returns the current size of the component
- api/link/ui.submenu_$height_other.md - current height of the view
- api/link/ui.submenu_$scope_other.md - scope for resolving event and method names
- api/link/ui.submenu_$setsize_other.md - sets the component size
- api/link/ui.submenu_$skin_other.md - method, which will be called when skin defined
- api/link/ui.submenu_$view_other.md - reference to top html element of the view
- api/link/ui.submenu_$width_other.md - current width of the view
- api/link/ui.submenu_config_other.md - all options from initial component configuration
- api/link/ui.submenu_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.submenu_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.submenu_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.submenu_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.submenu_on_mouse_move_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.submenu_type_other.md - set of properties and helpers for item rendering
- api/link/ui.submenu_types_other.md - collection of possible types
}}


@index:
- api/refs/ui.submenu_methods.md
- api/refs/ui.submenu_props.md
- api/refs/ui.submenu_events.md
- api/refs/ui.submenu_others.md

