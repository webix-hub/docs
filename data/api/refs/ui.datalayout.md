ui.datalayout 
=============


dummy stub

{{todo replace with real description. }}

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/ui.layout.md">ui.layout</a>, <a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.datalayout_add.md - adds an item to the store
- api/link/ui.datalayout_addview.md - add new view to layout-like component
- api/link/ui.datalayout_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.datalayout_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.datalayout_bind.md - binds components
- api/link/ui.datalayout_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.datalayout_callevent.md - calls an inner event
- api/link/ui.datalayout_clearall.md - removes all items from the component
- api/link/ui.datalayout_count.md - returns the number of currently visible items
- api/link/ui.datalayout_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.datalayout_destructor.md - destructs the calling object
- api/link/ui.datalayout_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.datalayout_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.datalayout_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.datalayout_exists.md - checks whether an item with the specified id exists
- api/link/ui.datalayout_filter.md - filters the component
- api/link/ui.datalayout_find.md - returns rows that match the criterion
- api/link/ui.datalayout_getchildviews.md - returns child views of the calling component
- api/link/ui.datalayout_getfirstid.md - returns the ID of the first item
- api/link/ui.datalayout_getformview.md - returns master form for the input
- api/link/ui.datalayout_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.datalayout_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.datalayout_getitem.md - gets the object of the data item with the specified id
- api/link/ui.datalayout_getlastid.md - returns the id of the last item
- api/link/ui.datalayout_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.datalayout_getnode.md - returns the main HTML container for the calling object
- api/link/ui.datalayout_getparentview.md - returns the parent view of the component
- api/link/ui.datalayout_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.datalayout_gettopparentview.md - returns top parent view
- api/link/ui.datalayout_hasevent.md - checks whether the component has the specified event
- api/link/ui.datalayout_hide.md - hides the view
- api/link/ui.datalayout_index.md - returns the cell index in the layout collection
- api/link/ui.datalayout_isenabled.md - checks whether the view is enabled
- api/link/ui.datalayout_isvisible.md - checks whether the view is visible
- api/link/ui.datalayout_load.md - loads data from an external data source.
- api/link/ui.datalayout_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/link/ui.datalayout_mapevent.md - routes events from one object to another
- api/link/ui.datalayout_parse.md - loads data to the component from an inline data source
- api/link/ui.datalayout_reconstruct.md - rebuilds the layout
- api/link/ui.datalayout_refresh.md - repaints the whole view or a certain item
- api/link/ui.datalayout_remove.md - removes the specified item/items from datastore
- api/link/ui.datalayout_removeview.md - removes view from layout-like component
- api/ui.datalayout_render.md - renders the datalayout content
- api/link/ui.datalayout_resize.md - adjusts the view to a new size
- api/link/ui.datalayout_resizechildren.md - resizes all children of the calling component
- api/link/ui.datalayout_serialize.md - serializes data to a JSON object
- api/link/ui.datalayout_show.md - makes the component visible
- api/link/ui.datalayout_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.datalayout_sort.md - sorts datastore
- api/link/ui.datalayout_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.datalayout_unbind.md - breaks "bind" link
- api/link/ui.datalayout_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.datalayout_updateitem.md - sets properties of the data item
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.datalayout_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.datalayout_onafterdelete_event.md - fires after item deleting
- api/link/ui.datalayout_onafterload_event.md - fires after data loading is complete
- api/link/ui.datalayout_onaftersort_event.md - fires after sorting dataset
- api/link/ui.datalayout_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.datalayout_onbeforedelete_event.md - fires before item deleting
- api/link/ui.datalayout_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.datalayout_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.datalayout_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.datalayout_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.datalayout_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.datalayout_ondestruct_event.md - occurs when component destroyed
- api/link/ui.datalayout_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.datalayout_animate_config.md - defines or disables view change animation.
- api/link/ui.datalayout_borderless_config.md - used to hide the component borders
- api/link/ui.datalayout_cols_config.md - array of views objects arranged horizontally
- api/link/ui.datalayout_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.datalayout_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.datalayout_data_config.md - JavaScript array containing data for the component
- api/link/ui.datalayout_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/ui.datalayout_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.datalayout_datatype_config.md - the type of loaded data
- api/link/ui.datalayout_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.datalayout_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.datalayout_height_config.md - sets the height of the component
- api/link/ui.datalayout_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.datalayout_id_config.md - the component ID
- api/link/ui.datalayout_isolate_config.md - masks IDs of all inner elements
- api/link/ui.datalayout_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/link/ui.datalayout_maxheight_config.md - sets the maximum height for the view
- api/link/ui.datalayout_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.datalayout_minheight_config.md - sets the minimal height for the view
- api/link/ui.datalayout_minwidth_config.md - sets the minimal width for the view
- api/link/ui.datalayout_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.datalayout_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/link/ui.datalayout_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/link/ui.datalayout_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/link/ui.datalayout_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.datalayout_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.datalayout_responsive_config.md - enables responsive mode for horizontal layout
- api/link/ui.datalayout_rows_config.md - array of views objects arranged vertically
- api/link/ui.datalayout_save_config.md - defines URLs for data saving
- api/link/ui.datalayout_scheme_config.md - defines schemes for data processing
- api/link/ui.datalayout_type_config.md - defines the layout borders
- api/link/ui.datalayout_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.datalayout_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.datalayout_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.datalayout_$getsize_other.md - returns the current size of the component
- api/link/ui.datalayout_$height_other.md - current height of the view
- api/link/ui.datalayout_$setsize_other.md - sets the component size
- api/link/ui.datalayout_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.datalayout_$view_other.md - reference to top html element of the view
- api/link/ui.datalayout_$width_other.md - current width of the view
- api/link/ui.datalayout_config_other.md - all options from initial component configuration
- api/link/ui.datalayout_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.datalayout_methods.md
- api/refs/ui.datalayout_props.md
- api/refs/ui.datalayout_events.md
- api/refs/ui.datalayout_others.md

