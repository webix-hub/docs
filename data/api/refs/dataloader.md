DataLoader 
=============

{{memo Loads and process data in to component. }}




Methods
-------

{{links
- api/link/dataloader_add.md - adds an item to the store
- api/link/dataloader_clearall.md - removes all items from the component
- api/link/dataloader_count.md - returns the count of items in the table
- api/link/dataloader_exists.md - checks whether an item with the specified id exists
- api/link/dataloader_filter.md - filters the component
- api/link/dataloader_getfirstid.md - returns the ID of the first item
- api/link/dataloader_getidbyindex.md - returns the id of the item with the specified index
- api/link/dataloader_getindexbyid.md - returns the index of the item with the specified id
- api/link/dataloader_getitem.md - gets the object of the data item with the specified id
- api/link/dataloader_getlastid.md - returns the id of the last item
- api/link/dataloader_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/dataloader_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/dataloader_load.md - loads data from an external data source
- api/dataloader_loadnext.md - sends a request to load the specified number of records to the end or to the specified position 
of the component
- api/link/dataloader_parse.md - loads data to the component from an inline data source
- api/link/dataloader_refresh.md - repaints the whole view or a certain item
- api/link/dataloader_remove.md - removes the specified item from datastore
- api/link/dataloader_serialize.md - serializes data to a json object
- api/link/dataloader_sort.md - sorts datastore
- api/link/dataloader_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/dataloader_updateitem.md - sets properties of the data item
}}


Events
------

{{links
- api/link/dataloader_onafteradd_event.md - fires after adding item to datastore
- api/link/dataloader_onafterdelete_event.md - fires after item deleting
- api/link/dataloader_onafterload_event.md - fires after xml loading is complete
- api/link/dataloader_onaftersort_event.md - fires after sorting dataset
- api/link/dataloader_onbeforeadd_event.md - fires before adding item to datastore
- api/link/dataloader_onbeforedelete_event.md - fires before item deleting
- api/link/dataloader_onbeforeload_event.md - occurs immediately before loading XML data has been started
- api/link/dataloader_onbeforesort_event.md - fires before sorting dataset
- api/dataloader_ondatarequest_event.md - fires when data from the server side is requested (part of dynamic loading)
- api/link/dataloader_ondataupdate_event.md - fires when data item is in update process
- api/link/dataloader_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
}}


Properties
----------

{{links
- api/link/dataloader_data_config.md - an inline dataset that data to the component will be load from.
- api/link/dataloader_datafeed_config.md - the url to the data source that the component will use to reload data from
- api/dataloader_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/dataloader_datatype_config.md - the type of loaded data
- api/dataloader_ready_config.md - a handler that is called just after the page has been completely parsed
- api/dataloader_removemissed_config.md - defines how to treat items in case of reloading
- api/dataloader_save_config.md - defines urls for datasaving
- api/dataloader_scheme_config.md - defines schemes for data processing
- api/link/dataloader_url_config.md - the url of a data feed which will be loaded after component initialization
}}




@index:
- api/refs/dataloader_methods.md
- api/refs/dataloader_props.md
- api/refs/dataloader_events.md

