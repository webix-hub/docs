ui.flexdatalayout 
=============


dummy stub

{{todo replace with real description. }}

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.datalayout.md">ui.datalayout</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/ui.layout.md">ui.layout</a>, <a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.flexdatalayout_add.md - adds an item to the store
- api/link/ui.flexdatalayout_addview.md - add new view to layout-like component
- api/link/ui.flexdatalayout_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.flexdatalayout_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.flexdatalayout_bind.md - binds components
- api/link/ui.flexdatalayout_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.flexdatalayout_callevent.md - calls an inner event
- api/link/ui.flexdatalayout_clearall.md - removes all items from the component
- api/link/ui.flexdatalayout_count.md - returns the number of currently visible items
- api/link/ui.flexdatalayout_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.flexdatalayout_destructor.md - destructs the calling object
- api/link/ui.flexdatalayout_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.flexdatalayout_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.flexdatalayout_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.flexdatalayout_exists.md - checks whether an item with the specified id exists
- api/link/ui.flexdatalayout_filter.md - filters the component
- api/link/ui.flexdatalayout_find.md - returns rows that match the criterion
- api/link/ui.flexdatalayout_getchildviews.md - returns child views of the calling component
- api/link/ui.flexdatalayout_getfirstid.md - returns the ID of the first item
- api/link/ui.flexdatalayout_getformview.md - returns master form for the input
- api/link/ui.flexdatalayout_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.flexdatalayout_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.flexdatalayout_getitem.md - gets the object of the data item with the specified id
- api/link/ui.flexdatalayout_getlastid.md - returns the id of the last item
- api/link/ui.flexdatalayout_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.flexdatalayout_getnode.md - returns the main HTML container for the calling object
- api/link/ui.flexdatalayout_getparentview.md - returns the parent view of the component
- api/link/ui.flexdatalayout_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.flexdatalayout_gettopparentview.md - returns top parent view
- api/link/ui.flexdatalayout_hasevent.md - checks whether the component has the specified event
- api/link/ui.flexdatalayout_hide.md - hides the view
- api/link/ui.flexdatalayout_ignoreundo.md - 
- api/link/ui.flexdatalayout_index.md - returns the cell index in the layout collection
- api/link/ui.flexdatalayout_isenabled.md - checks whether the view is enabled
- api/link/ui.flexdatalayout_isvisible.md - checks whether the view is visible
- api/link/ui.flexdatalayout_load.md - loads data from an external data source.
- api/link/ui.flexdatalayout_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/link/ui.flexdatalayout_mapevent.md - routes events from one object to another
- api/link/ui.flexdatalayout_parse.md - loads data to the component from an inline data source
- api/link/ui.flexdatalayout_reconstruct.md - rebuilds the layout
- api/link/ui.flexdatalayout_refresh.md - repaints the whole view or a certain item
- api/link/ui.flexdatalayout_remove.md - removes the specified item/items from datastore
- api/link/ui.flexdatalayout_removeundo.md - 
- api/link/ui.flexdatalayout_removeview.md - removes view from layout-like component
- api/link/ui.flexdatalayout_render.md - renders the datalayout content
- api/link/ui.flexdatalayout_resize.md - adjusts the view to a new size
- api/link/ui.flexdatalayout_resizechildren.md - resizes all children of the calling component
- api/link/ui.flexdatalayout_serialize.md - serializes data to a JSON object
- api/link/ui.flexdatalayout_show.md - makes the component visible
- api/link/ui.flexdatalayout_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.flexdatalayout_sort.md - sorts datastore
- api/link/ui.flexdatalayout_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.flexdatalayout_unbind.md - breaks "bind" link
- api/link/ui.flexdatalayout_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.flexdatalayout_undo.md - 
- api/link/ui.flexdatalayout_updateitem.md - updates the data item with new properties
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.flexdatalayout_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.flexdatalayout_onafterdelete_event.md - fires after item deleting
- api/link/ui.flexdatalayout_onafterload_event.md - fires after data loading is complete
- api/link/ui.flexdatalayout_onaftersort_event.md - fires after sorting dataset
- api/link/ui.flexdatalayout_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.flexdatalayout_onbeforedelete_event.md - fires before item deleting
- api/link/ui.flexdatalayout_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.flexdatalayout_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.flexdatalayout_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.flexdatalayout_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.flexdatalayout_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.flexdatalayout_ondestruct_event.md - occurs when component destroyed
- api/link/ui.flexdatalayout_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.flexdatalayout_animate_config.md - defines or disables view change animation.
- api/link/ui.flexdatalayout_borderless_config.md - used to hide the component borders
- api/link/ui.flexdatalayout_cols_config.md - array of views objects arranged horizontally
- api/link/ui.flexdatalayout_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.flexdatalayout_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.flexdatalayout_data_config.md - JavaScript array containing data for the component
- api/link/ui.flexdatalayout_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/ui.flexdatalayout_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.flexdatalayout_datatype_config.md - the type of loaded data
- api/link/ui.flexdatalayout_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.flexdatalayout_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.flexdatalayout_height_config.md - sets the height of the component
- api/link/ui.flexdatalayout_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.flexdatalayout_id_config.md - the component ID
- api/link/ui.flexdatalayout_isolate_config.md - masks IDs of all inner elements
- api/link/ui.flexdatalayout_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/link/ui.flexdatalayout_maxheight_config.md - sets the maximum height for the view
- api/link/ui.flexdatalayout_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.flexdatalayout_minheight_config.md - sets the minimal height for the view
- api/link/ui.flexdatalayout_minwidth_config.md - sets the minimal width for the view
- api/link/ui.flexdatalayout_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.flexdatalayout_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/link/ui.flexdatalayout_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/link/ui.flexdatalayout_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/link/ui.flexdatalayout_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.flexdatalayout_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.flexdatalayout_responsive_config.md - enables responsive mode for horizontal layout
- api/link/ui.flexdatalayout_rows_config.md - array of views objects arranged vertically
- api/link/ui.flexdatalayout_save_config.md - defines URLs for data saving
- api/link/ui.flexdatalayout_scheme_config.md - defines schemes for data processing
- api/link/ui.flexdatalayout_type_config.md - defines the layout borders
- api/link/ui.flexdatalayout_undo_config.md - 
- api/link/ui.flexdatalayout_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.flexdatalayout_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.flexdatalayout_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.flexdatalayout_$getsize_other.md - returns the current size of the component
- api/link/ui.flexdatalayout_$height_other.md - current height of the view
- api/link/ui.flexdatalayout_$setsize_other.md - sets the component size
- api/link/ui.flexdatalayout_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.flexdatalayout_$view_other.md - reference to top html element of the view
- api/link/ui.flexdatalayout_$width_other.md - current width of the view
- api/link/ui.flexdatalayout_config_other.md - all options from initial component configuration
- api/link/ui.flexdatalayout_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.flexdatalayout_methods.md
- api/refs/ui.flexdatalayout_props.md
- api/refs/ui.flexdatalayout_events.md
- api/refs/ui.flexdatalayout_others.md

