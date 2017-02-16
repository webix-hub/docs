DataLoader 
=============

{{memo Loads and processes data into a component.. }}



<div class='h2'>Methods</div>

{{api
- api/link/dataloader_add.md - adds an item to the store
- api/link/dataloader_clearall.md - removes all items from the component
- api/link/dataloader_count.md - returns the number of currently visible items
- api/link/dataloader_exists.md - checks whether an item with the specified id exists
- api/link/dataloader_filter.md - filters the component
- api/link/dataloader_find.md - returns rows that match the criterion
- api/link/dataloader_getfirstid.md - returns the ID of the first item
- api/link/dataloader_getidbyindex.md - returns the id of the item with the specified index
- api/link/dataloader_getindexbyid.md - returns the index of the item with the specified id
- api/link/dataloader_getitem.md - gets the object of the data item with the specified id
- api/link/dataloader_getlastid.md - returns the id of the last item
- api/link/dataloader_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/dataloader_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/dataloader_load.md - loads data from an external data source.
- api/dataloader_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/link/dataloader_parse.md - loads data to the component from an inline data source
- api/link/dataloader_refresh.md - repaints the whole view or a certain item
- api/link/dataloader_remove.md - removes the specified item/items from datastore
- api/link/dataloader_serialize.md - serializes data to a JSON object
- api/link/dataloader_sort.md - sorts datastore
- api/link/dataloader_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/dataloader_updateitem.md - updates the data item with new properties
}}


<div class='h2'>Events</div>


{{api
- api/link/dataloader_onafteradd_event.md - fires after adding item to datastore
- api/link/dataloader_onafterdelete_event.md - fires after item deleting
- api/link/dataloader_onafterload_event.md - fires after data loading is complete
- api/link/dataloader_onaftersort_event.md - fires after sorting dataset
- api/link/dataloader_onbeforeadd_event.md - fires before adding item to datastore
- api/link/dataloader_onbeforedelete_event.md - fires before item deleting
- api/link/dataloader_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/dataloader_onbeforesort_event.md - fires before sorting dataset
- api/dataloader_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/dataloader_ondataupdate_event.md - fires when data item is in update process
- api/link/dataloader_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
}}


<div class='h2'>Properties</div>

{{api
- api/link/dataloader_data_config.md - JavaScript array containing data for the component
- api/link/dataloader_datafeed_config.md - the URL that the component will use to reload data during binding
- api/dataloader_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/dataloader_datatype_config.md - the type of loaded data
- api/dataloader_ready_config.md - event handler called just after the component has been completely initialized
- api/dataloader_removemissed_config.md - defines how to treat items in case of reloading
- api/dataloader_save_config.md - defines URLs for data saving
- api/dataloader_scheme_config.md - defines schemes for data processing
- api/link/dataloader_url_config.md - the URL which the component will use to load data after its initialization
}}





<div class='h2'>Other</div>


{{api
- api/dataloader_waitdata_other.md - 
}}


@index:
- api/refs/dataloader_methods.md
- api/refs/dataloader_props.md
- api/refs/dataloader_events.md
- api/refs/dataloader_others.md

