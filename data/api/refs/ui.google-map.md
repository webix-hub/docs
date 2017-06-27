ui.google-map 
=============


{{memo A datastore-based widget for rendering geographical data with Google Maps. }}

GoogleMap widget allows working with geographical data using Webix and Google Map API. 
This widget is based on View and inherits API from DataStore.

Check desktop/googlemap.md documentation for more details.

### Constructor

~~~js
var googlemap = webix.ui({
    //provide your own Google API key
    key:"AIzaSyAi0oVNVO-e603aUY8SILdD4v9bVBkmiTg",
    view:"google-map",
    id:"map",
    zoom:6,
    center:[ 48.724, 8.215 ]
});
~~~

### Where to start

- [Overview of the GoogleMap Widget](desktop/googlemap.md)
- [Samples](http://docs.webix.com/samples/34_googlemap/index.html)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.google-map_add.md - adds an item to the store
- api/link/ui.google-map_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.google-map_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.google-map_bind.md - binds components
- api/link/ui.google-map_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.google-map_callevent.md - calls an inner event
- api/link/ui.google-map_clearall.md - removes all items from the component
- api/link/ui.google-map_count.md - returns the number of currently visible items
- api/link/ui.google-map_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.google-map_destructor.md - destructs the calling object
- api/link/ui.google-map_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.google-map_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.google-map_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.google-map_exists.md - checks whether an item with the specified id exists
- api/link/ui.google-map_filter.md - filters the component
- api/link/ui.google-map_find.md - returns rows that match the criterion
- api/link/ui.google-map_getchildviews.md - returns child views of the calling component
- api/link/ui.google-map_getfirstid.md - returns the ID of the first item
- api/link/ui.google-map_getformview.md - returns master form for the input
- api/link/ui.google-map_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.google-map_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.google-map_getitem.md - gets the object of the data item with the specified id
- api/link/ui.google-map_getlastid.md - returns the id of the last item
- api/ui.google-map_getmap.md - returns a GoogleMap map object
- api/link/ui.google-map_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.google-map_getnode.md - returns the main HTML container for the calling object
- api/link/ui.google-map_getparentview.md - returns the parent view of the component
- api/link/ui.google-map_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.google-map_gettopparentview.md - returns top parent view
- api/link/ui.google-map_hasevent.md - checks whether the component has the specified event
- api/link/ui.google-map_hide.md - hides the view
- api/link/ui.google-map_isenabled.md - checks whether the view is enabled
- api/link/ui.google-map_isvisible.md - checks whether the view is visible
- api/link/ui.google-map_load.md - loads data from an external data source.
- api/link/ui.google-map_loadnext.md - sends a request to load the specified number of records to the end of the client-side dataset or to the specified position
- api/link/ui.google-map_mapevent.md - routes events from one object to another
- api/link/ui.google-map_parse.md - loads data to the component from an inline data source
- api/link/ui.google-map_refresh.md - repaints the whole view or a certain item
- api/link/ui.google-map_remove.md - removes the specified item/items from datastore
- api/ui.google-map_render.md - renders a map
- api/link/ui.google-map_resize.md - adjusts the view to a new size
- api/link/ui.google-map_serialize.md - serializes data to a JSON object
- api/link/ui.google-map_show.md - makes the component visible
- api/link/ui.google-map_sort.md - sorts datastore
- api/link/ui.google-map_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.google-map_unbind.md - breaks "bind" link
- api/link/ui.google-map_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.google-map_updateitem.md - updates the data item with new properties
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.google-map_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.google-map_onafterdelete_event.md - fires after item deleting
- api/link/ui.google-map_onafterload_event.md - fires after data loading is complete
- api/link/ui.google-map_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.google-map_onaftersort_event.md - fires after sorting dataset
- api/link/ui.google-map_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.google-map_onbeforedelete_event.md - fires before item deleting
- api/link/ui.google-map_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.google-map_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.google-map_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.google-map_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.google-map_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.google-map_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.google-map_ondestruct_event.md - occurs when component destroyed
- api/link/ui.google-map_onfocus_event.md - fires when a view gets focus
- api/ui.google-map_onheatmaprender_event.md - fires when a heatmap is rendered
- api/link/ui.google-map_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.google-map_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.google-map_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.google-map_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.google-map_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.google-map_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.google-map_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.google-map_ontouchmove_event.md - occurs during touch movement
- api/link/ui.google-map_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.google-map_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.google-map_animate_config.md - defines or disables view change animation.
- api/link/ui.google-map_borderless_config.md - used to hide the component borders
- api/ui.google-map_center_config.md - sets the center of the map
- api/link/ui.google-map_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.google-map_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.google-map_data_config.md - JavaScript array containing data for the component
- api/link/ui.google-map_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/ui.google-map_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.google-map_datatype_config.md - the type of loaded data
- api/link/ui.google-map_disabled_config.md - indicates whether an item is enabled
- api/link/ui.google-map_gravity_config.md - sets the view gravity (1 by default)
- api/ui.google-map_heatmapconfig_config.md - defines the heatmap configuration, contains various Google API properties
- api/link/ui.google-map_height_config.md - sets the height of the component
- api/link/ui.google-map_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.google-map_id_config.md - the component ID
- api/ui.google-map_layertype_config.md - sets the type of a map layer
- api/ui.google-map_maptype_config.md - sets the Google map type
- api/link/ui.google-map_maxheight_config.md - sets the maximum height for the view
- api/link/ui.google-map_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.google-map_minheight_config.md - sets the minimal height for the view
- api/link/ui.google-map_minwidth_config.md - sets the minimal width for the view
- api/link/ui.google-map_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.google-map_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.google-map_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.google-map_save_config.md - defines URLs for data saving
- api/link/ui.google-map_scheme_config.md - defines schemes for data processing
- api/link/ui.google-map_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.google-map_width_config.md - sets the width of the component
- api/ui.google-map_zoom_config.md - defines the resolution of map objects displaying
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.google-map_$getsize_other.md - returns the current size of the component
- api/link/ui.google-map_$height_other.md - current height of the view
- api/ui.google-map_$onload_other.md - default action on data loading
- api/link/ui.google-map_$scope_other.md - scope for resolving event and method names
- api/link/ui.google-map_$setsize_other.md - sets the component size
- api/link/ui.google-map_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.google-map_$view_other.md - reference to top html element of the view
- api/link/ui.google-map_$width_other.md - current width of the view
- api/link/ui.google-map_config_other.md - all options from initial component configuration
- api/link/ui.google-map_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.google-map_waitdata_other.md - eventual result of an asynchronous operation ('promise' object) for the loaded data
}}

@metadescr: This documentation page contains descriptions of each method, property and event that you can use while working with the Google map ui widget.
@doctitle: The Google map UI widget API reference: methods, properties, etc.

@index:
- api/refs/ui.google-map_methods.md
- api/refs/ui.google-map_props.md
- api/refs/ui.google-map_events.md
- api/refs/ui.google-map_others.md



@seolinktop: [web ui framework](https://webix.com)
@seolink: [google maps javascript](https://webix.com/widget/maps/)