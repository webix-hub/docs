ui.dataview 
=============

{{memo A control for displaying data in a tabular format. }}

The component presents a collection of objects according to a user-defined template. Support for various template forms and the possibility to sort, filter data.  Check [dataview](desktop/dataview.md) documentation for more detailed description.


### Constructor

~~~js
var dataview = webix.ui({
	view:"dataview", 
  	id:"dataview1",
    xCount:3,
  	type: {
    	height: 60,
  	},
  	template:"<div class='webix_strong'>#title#</div> Year: #year#, rank: #rank#",
  	data:[
   		{ id:1, title:"The Shawshank Redemption", year:1994, rank:1},
    	{ id:2, title:"The Godfather", year:1972, rank:2},
    	{ id:3, title:"The Godfather: Part II", year:1974, rank:3},
    	{ id:4, title:"The Good, the Bad and the Ugly", year:1966, rank:4}
  	] 
});
~~~

### Where to start

- [Overview of the Dataview Widget](desktop/dataview.md)
- [Samples](http://docs.webix.com/samples/06_dataview/index.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/datamove.md">DataMove</a>, <a href="api/refs/dragitem.md">DragItem</a>, <a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/keysnavigation.md">KeysNavigation</a>, <a href="api/refs/selectionmodel.md">SelectionModel</a>, <a href="api/refs/scrollable.md">Scrollable</a>, <a href="api/refs/ui.proto.md">ui.proto</a>, <a href="api/refs/pagingability.md">PagingAbility</a>, <a href="api/refs/datamarks.md">DataMarks</a>, <a href="api/refs/autotooltip.md">AutoTooltip</a>, <a href="api/refs/validatecollection.md">ValidateCollection</a>, <a href="api/refs/renderstack.md">RenderStack</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/virtualrenderstack.md">VirtualRenderStack</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.dataview_add.md - adds an item to the store
- api/link/ui.dataview_addcss.md - applied CSS class to a component item
- api/link/ui.dataview_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.dataview_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.dataview_bind.md - binds components
- api/link/ui.dataview_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.dataview_callevent.md - calls an inner event
- api/link/ui.dataview_clearall.md - removes all items from the component
- api/link/ui.dataview_clearcss.md - removes CSS class from all items
- api/link/ui.dataview_clearvalidation.md - removes all validation marks from the component
- api/link/ui.dataview_copy.md - copies an item to the same or another object
- api/link/ui.dataview_count.md - returns the number of currently visible items
- api/link/ui.dataview_customize.md - redefines the "type" property
- api/link/ui.dataview_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.dataview_destructor.md - destructs the calling object
- api/link/ui.dataview_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.dataview_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.dataview_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.dataview_exists.md - checks whether an item with the specified id exists
- api/link/ui.dataview_filter.md - filters the component
- api/link/ui.dataview_find.md - returns rows that match the criterion
- api/link/ui.dataview_getchildviews.md - returns child views of the calling component
- api/link/ui.dataview_getfirstid.md - returns the ID of the first item
- api/link/ui.dataview_getformview.md - returns master form for the input
- api/link/ui.dataview_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.dataview_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.dataview_getitem.md - gets the object of the data item with the specified id
- api/link/ui.dataview_getitemnode.md - returns HTML element of the item
- api/link/ui.dataview_getlastid.md - returns the id of the last item
- api/link/ui.dataview_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.dataview_getnode.md - returns the main HTML container for the calling object
- api/link/ui.dataview_getpage.md - returns the currently visible page in case of paged view
- api/link/ui.dataview_getpager.md - returns the pager object associated with the component
- api/link/ui.dataview_getparentview.md - returns the parent view of the component
- api/link/ui.dataview_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.dataview_getscrollstate.md - returns the scroll position
- api/link/ui.dataview_getselectedid.md - returns the id(s) of the selected item(s)
- api/link/ui.dataview_getselecteditem.md - returns selected object
- api/link/ui.dataview_gettopparentview.md - returns top parent view
- api/link/ui.dataview_hascss.md - checks if item has specific css class
- api/link/ui.dataview_hasevent.md - checks whether the component has the specified event
- api/link/ui.dataview_hide.md - hides the view
- api/link/ui.dataview_isenabled.md - checks whether the view is enabled
- api/link/ui.dataview_isselected.md - checks whether the specified item is selected or not
- api/link/ui.dataview_isvisible.md - checks whether the view is visible
- api/link/ui.dataview_load.md - loads data from an external data source.
- api/link/ui.dataview_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/link/ui.dataview_locate.md - gets the id of an item from the specified HTML event
- api/link/ui.dataview_mapevent.md - routes events from one object to another
- api/link/ui.dataview_move.md - moves the specified item to the new position
- api/link/ui.dataview_movebottom.md - moves the specified item to the last position
- api/link/ui.dataview_movedown.md - increases the item index and moves the item to the new position
- api/link/ui.dataview_moveselection.md - moves selection in the specified direction
- api/link/ui.dataview_movetop.md - moves the specified item to the first position
- api/link/ui.dataview_moveup.md - decreases the item index and moves the item to the new position
- api/link/ui.dataview_parse.md - loads data to the component from an inline data source
- api/link/ui.dataview_refresh.md - repaints the whole view or a certain item
- api/link/ui.dataview_remove.md - removes the specified item/items from datastore
- api/link/ui.dataview_removecss.md - removes CSS class from a component item
- api/link/ui.dataview_render.md - renders the specified item or the whole component
- api/link/ui.dataview_resize.md - adjusts the view to a new size
- api/link/ui.dataview_scrollto.md - scrolls the data container to a certain position
- api/link/ui.dataview_select.md - selects the specified item(s)
- api/link/ui.dataview_selectall.md - selects all items or the specified range
- api/link/ui.dataview_serialize.md - serializes data to a JSON object
- api/link/ui.dataview_setpage.md - makes the specified page visible (assuming that the pager was defined )
- api/link/ui.dataview_show.md - makes the component visible
- api/link/ui.dataview_showitem.md - scrolls the component to make the specified item visible
- api/link/ui.dataview_sort.md - sorts datastore
- api/link/ui.dataview_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.dataview_unbind.md - breaks "bind" link
- api/link/ui.dataview_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.dataview_unselect.md - removes selection from the specified item
- api/link/ui.dataview_unselectall.md - removes selection from all items
- api/link/ui.dataview_updateitem.md - updates the data item with new properties
- api/link/ui.dataview_validate.md - validates one record or all dataset against validation rules
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.dataview_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.dataview_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.dataview_onafterdelete_event.md - fires after item deleting
- api/link/ui.dataview_onafterdrop_event.md - fires after drag-n-drop was finished
- api/ui.dataview_onafterdroporder_event.md - called when dnd reordering is fully finished
- api/link/ui.dataview_onafterload_event.md - fires after data loading is complete
- api/link/ui.dataview_onafterrender_event.md - occurs immediately after the component has been rendered
- api/link/ui.dataview_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.dataview_onafterselect_event.md - fires after item was selected
- api/link/ui.dataview_onaftersort_event.md - fires after sorting dataset
- api/link/ui.dataview_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.dataview_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.dataview_onbeforedelete_event.md - fires before item deleting
- api/link/ui.dataview_onbeforedrag_event.md - fires before the mouse button is pressed and the cursor is moved over a draggable item
- api/link/ui.dataview_onbeforedragin_event.md - fires before a dragged element is moved over the droppable area
- api/link/ui.dataview_onbeforedrop_event.md - fires before a dragged element is released over the droppable area
- api/ui.dataview_onbeforedroporder_event.md - called when dnd reordering has been made, but not applied yet
- api/link/ui.dataview_onbeforedropout_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.dataview_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.dataview_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.dataview_onbeforeselect_event.md - fires before item selection is started
- api/link/ui.dataview_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.dataview_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.dataview_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.dataview_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.dataview_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.dataview_ondestruct_event.md - occurs when component destroyed
- api/link/ui.dataview_ondragout_event.md - fires when a dragged element is moved outside of the droppable area
- api/link/ui.dataview_onfocus_event.md - fires when a view gets focus
- api/link/ui.dataview_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.dataview_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.dataview_onitemrender_event.md - for each item rendering, occurs only for items with custom templates
- api/link/ui.dataview_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.dataview_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.dataview_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.dataview_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.dataview_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.dataview_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.dataview_onselectchange_event.md - fires after selection state was changed
- api/link/ui.dataview_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.dataview_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.dataview_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.dataview_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.dataview_ontouchmove_event.md - occurs during touch movement
- api/link/ui.dataview_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.dataview_onvalidationerror_event.md - fires when newly loaded/added/edited data fails to pass validation
- api/link/ui.dataview_onvalidationsuccess_event.md - fires after the newlyloaded/added/edited data has passes validation successfully
- api/link/ui.dataview_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.dataview_animate_config.md - defines or disables view change animation.
- api/ui.dataview_autoheight_config.md - enables autosizing to content
- api/link/ui.dataview_borderless_config.md - used to hide the component borders
- api/link/ui.dataview_click_config.md - sets an action happening on a button click
- api/link/ui.dataview_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.dataview_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.dataview_data_config.md - JavaScript array containing data for the component
- api/link/ui.dataview_datafetch_config.md - defines the number of records that will be loaded during each dynamic loading request
- api/link/ui.dataview_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.dataview_datatype_config.md - the type of loaded data
- api/link/ui.dataview_disabled_config.md - indicates whether an item is enabled
- api/link/ui.dataview_drag_config.md - enables or disables drag-and-drop
- api/link/ui.dataview_dragscroll_config.md - enables autoscroll of component during drag-n-drop
- api/link/ui.dataview_externaldata_config.md - allows defining custom 'move' logic for the component.
- api/link/ui.dataview_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.dataview_height_config.md - sets the height of the component
- api/link/ui.dataview_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.dataview_id_config.md - the component ID
- api/link/ui.dataview_item_config.md - alias to api/renderstack_item_config.md property
- api/link/ui.dataview_loadahead_config.md - how the number of records that need to be loaded in addition to mandatory ones during each dynamic loading request
- api/link/ui.dataview_maxheight_config.md - sets the maximum height for the view
- api/link/ui.dataview_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.dataview_minheight_config.md - sets the minimal height for the view
- api/link/ui.dataview_minwidth_config.md - sets the minimal width for the view
- api/link/ui.dataview_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/link/ui.dataview_multiselect_config.md - enables multiselect mode
- api/link/ui.dataview_navigation_config.md - activates the selection keyboard navigation
- api/link/ui.dataview_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.dataview_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.dataview_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.dataview_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.dataview_onmousemove_config.md - attaches a mousemove behaviour for component items with the specified CSS class.
- api/link/ui.dataview_pager_config.md - defines paging configuration ( creates a 'ui.pager' object)
- api/link/ui.dataview_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.dataview_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.dataview_rules_config.md - set of validation rules for the component
- api/link/ui.dataview_save_config.md - defines URLs for data saving
- api/link/ui.dataview_scheme_config.md - defines schemes for data processing
- api/link/ui.dataview_scroll_config.md - enables/disables the scroll bar
- api/link/ui.dataview_scrollspeed_config.md - the time during which the component is scrolled to the specified position (in milliseconds)
- api/link/ui.dataview_select_config.md - enables/disables item selection or multiselection in grouplist
- api/link/ui.dataview_template_config.md - the component template
- api/link/ui.dataview_tooltip_config.md - sets a popup message appearing on pointing a mouse cursor over the dedicated item
- api/link/ui.dataview_type_config.md - object that specifies items presentation
- api/link/ui.dataview_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.dataview_width_config.md - sets the width of the component
- api/ui.dataview_xcount_config.md - adjusts the view width to display the defined number of items in a row
- api/ui.dataview_ycount_config.md - adjusts the view height to display the defined number of items in a column
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.dataview_$drag_other.md - method called when drag operation initiated
- api/link/ui.dataview_$draghtml_other.md - defines how dragged item will look
- api/link/ui.dataview_$dragin_other.md - method called when item moved on possible drop landing during dnd
- api/link/ui.dataview_$dragmark_other.md - method called during drag-n-drop, when some item in the component should be marked as an active drop target
- api/link/ui.dataview_$dragout_other.md - method called when item moved out of possible drop landing during dnd
- api/link/ui.dataview_$drop_other.md - method called when item dragged and dropped on valid target
- api/link/ui.dataview_$dropallow_other.md - can be redefined, if you need custom drop rules
- api/link/ui.dataview_$getsize_other.md - returns the current size of the component
- api/link/ui.dataview_$height_other.md - current height of the view
- api/link/ui.dataview_$scope_other.md - scope for resolving event and method names
- api/link/ui.dataview_$setsize_other.md - sets the component size
- api/link/ui.dataview_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.dataview_$view_other.md - reference to top html element of the view
- api/link/ui.dataview_$width_other.md - current width of the view
- api/link/ui.dataview_config_other.md - all options from initial component configuration
- api/link/ui.dataview_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.dataview_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.dataview_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.dataview_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class
- api/link/ui.dataview_on_mouse_move_other.md - attaches a mouse move behavior for component items with the specified CSS class
- api/link/ui.dataview_type_other.md - set of properties and helpers for item rendering
- api/link/ui.dataview_types_other.md - collection of possible types
- api/link/ui.dataview_waitdata_other.md - eventual result of an asynchronous operation ('promise' object) for the loaded data
}}


@index:
- api/refs/ui.dataview_methods.md
- api/refs/ui.dataview_props.md
- api/refs/ui.dataview_events.md
- api/refs/ui.dataview_others.md

