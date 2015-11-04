ui.proto 
=============


{{memo The very base class for UI components. }}

The class defines properties, methods, and events related to loading and rendering data. Can serves as the base class while creating custom multi-item components. Not intended for direct initialization. 


### Constructor

~~~js
	var proto = webix.ui({
		view:"proto", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_proto({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/pagingability.md">PagingAbility</a>, <a href="api/refs/datamarks.md">DataMarks</a>, <a href="api/refs/autotooltip.md">AutoTooltip</a>, <a href="api/refs/validatecollection.md">ValidateCollection</a>, <a href="api/refs/renderstack.md">RenderStack</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.proto_add.md - adds an item to the store
- api/link/ui.proto_addcss.md - applied CSS class to a component item
- api/link/ui.proto_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.proto_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.proto_bind.md - binds components
- api/link/ui.proto_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.proto_callevent.md - calls an inner event
- api/link/ui.proto_clearall.md - removes all items from the component
- api/link/ui.proto_clearcss.md - removes css class from all items
- api/link/ui.proto_clearvalidation.md - removes all validation marks from the component
- api/link/ui.proto_count.md - returns the number of currently visible items
- api/link/ui.proto_customize.md - redefines the "type" property
- api/link/ui.proto_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.proto_destructor.md - destructs the calling object
- api/link/ui.proto_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.proto_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.proto_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.proto_exists.md - checks whether an item with the specified id exists
- api/link/ui.proto_filter.md - filters the component
- api/link/ui.proto_find.md - returns rows that match the criterion
- api/link/ui.proto_getchildviews.md - returns child views of the calling component
- api/link/ui.proto_getfirstid.md - returns the ID of the first item
- api/link/ui.proto_getformview.md - returns master form for the input
- api/link/ui.proto_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.proto_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.proto_getitem.md - gets the object of the data item with the specified id
- api/link/ui.proto_getitemnode.md - returns HTML element of the item
- api/link/ui.proto_getlastid.md - returns the id of the last item
- api/link/ui.proto_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.proto_getnode.md - returns the main HTML container for the calling object
- api/link/ui.proto_getpage.md - returns the currently visible page in case of paged view
- api/link/ui.proto_getpager.md - returns the pager object associated with the component
- api/link/ui.proto_getparentview.md - returns the parent view of the component
- api/link/ui.proto_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.proto_gettopparentview.md - returns top parent view
- api/link/ui.proto_hascss.md - checks if item has specific css class
- api/link/ui.proto_hasevent.md - checks whether the component has the specified event
- api/link/ui.proto_hide.md - hides the view
- api/link/ui.proto_isenabled.md - checks whether the view is enabled
- api/link/ui.proto_isvisible.md - checks whether the view is visible
- api/link/ui.proto_load.md - loads data from an external data source.
- api/link/ui.proto_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/link/ui.proto_locate.md - gets the id of an item from the specified HTML event
- api/link/ui.proto_mapevent.md - routes events from one object to another
- api/link/ui.proto_parse.md - loads data to the component from an inline data source
- api/link/ui.proto_refresh.md - repaints the whole view or a certain item
- api/link/ui.proto_remove.md - removes the specified item from datastore
- api/link/ui.proto_removecss.md - removes CSS class from a component item
- api/link/ui.proto_render.md - renders the specified item or the whole component
- api/link/ui.proto_resize.md - adjusts the view to a new size
- api/link/ui.proto_serialize.md - serializes data to a JSON object
- api/link/ui.proto_setpage.md - makes the specified page visible (assuming that the pager was defined )
- api/link/ui.proto_show.md - makes the component visible
- api/link/ui.proto_showitem.md - scrolls the component to make the specified item visible
- api/link/ui.proto_sort.md - sorts datastore
- api/link/ui.proto_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.proto_unbind.md - breaks "bind" link
- api/link/ui.proto_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.proto_updateitem.md - sets properties of the data item
- api/link/ui.proto_validate.md - validates one record or all dataset against validation rules
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.proto_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.proto_onafterdelete_event.md - fires after item deleting
- api/link/ui.proto_onafterload_event.md - fires after data loading is complete
- api/link/ui.proto_onafterrender_event.md - occurs immediately after the component has been rendered
- api/link/ui.proto_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.proto_onaftersort_event.md - fires after sorting dataset
- api/link/ui.proto_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.proto_onbeforedelete_event.md - fires before item deleting
- api/link/ui.proto_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.proto_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.proto_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.proto_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.proto_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.proto_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.proto_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.proto_ondestruct_event.md - occurs when component destroyed
- api/link/ui.proto_onfocus_event.md - fires when a view gets focus
- api/link/ui.proto_onitemrender_event.md - for each item rendering, occurs only for items with custom templates
- api/link/ui.proto_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.proto_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.proto_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.proto_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.proto_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.proto_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.proto_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.proto_ontouchmove_event.md - occurs during touch movement
- api/link/ui.proto_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.proto_onvalidationerror_event.md - fires when newly loaded/added/edited data fails to pass validation
- api/link/ui.proto_onvalidationsuccess_event.md - fires after the newlyloaded/added/edited data has passes validation successfully
- api/link/ui.proto_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.proto_animate_config.md - defines or disables view change animation.
- api/link/ui.proto_borderless_config.md - used to hide the component borders
- api/link/ui.proto_click_config.md - sets an action happening on a button click
- api/link/ui.proto_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.proto_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.proto_data_config.md - JavaScript array containing data for the component
- api/link/ui.proto_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/ui.proto_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.proto_datatype_config.md - the type of loaded data
- api/link/ui.proto_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.proto_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.proto_height_config.md - sets the height of the component
- api/link/ui.proto_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.proto_id_config.md - the component ID
- api/link/ui.proto_maxheight_config.md - sets the maximum height for the view
- api/link/ui.proto_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.proto_minheight_config.md - sets the minimal height for the view
- api/link/ui.proto_minwidth_config.md - sets the minimal width for the view
- api/link/ui.proto_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.proto_pager_config.md - defines paging configuration ( creates a 'ui.pager' object)
- api/link/ui.proto_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.proto_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.proto_rules_config.md - set of validation rules for the component
- api/link/ui.proto_save_config.md - defines URLs for data saving
- api/link/ui.proto_scheme_config.md - defines schemes for data processing
- api/link/ui.proto_template_config.md - the component template
- api/link/ui.proto_tooltip_config.md - sets a popup message appearing on pointing a mouse cursor over the dedicated item.
- api/link/ui.proto_type_config.md - object that specifies items presentation
- api/link/ui.proto_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.proto_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.proto_$getsize_other.md - returns the current size of the component
- api/link/ui.proto_$height_other.md - current height of the view
- api/link/ui.proto_$scope_other.md - scope for resolving event and method names
- api/link/ui.proto_$setsize_other.md - sets the component size
- api/link/ui.proto_$skin_other.md - method, which will be called when skin defined
- api/link/ui.proto_$view_other.md - reference to top html element of the view
- api/link/ui.proto_$width_other.md - current width of the view
- api/link/ui.proto_config_other.md - all options from initial component configuration
- api/link/ui.proto_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.proto_type_other.md - set of properties and helpers for item rendering
- api/link/ui.proto_types_other.md - collection of possible types
}}


@index:
- api/refs/ui.proto_methods.md
- api/refs/ui.proto_props.md
- api/refs/ui.proto_events.md
- api/refs/ui.proto_others.md

