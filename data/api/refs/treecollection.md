TreeCollection 
=============


{{memo Non-ui component for hierarchical data. }}

~~~js
var store = new webix.TreeCollection({ url:"tree.php" });
~~~


Methods
-------

{{links
- api/link/treecollection_add.md - adds an item to the store
- api/link/treecollection_attachevent.md - 
- api/link/treecollection_bind.md - binds components
- api/link/treecollection_blockevent.md - 
- api/link/treecollection_callevent.md - 
- api/link/treecollection_clearall.md - removes all items from the component
- api/link/treecollection_clearvalidation.md - removes all validation marks from the component
- api/link/treecollection_count.md - returns the count of items in the table
- api/link/treecollection_define.md - redefines a single configuration property (or a hash of properties)
- api/link/treecollection_detachevent.md - 
- api/link/treecollection_exists.md - checks whether an item with the specified id exists
- api/link/treecollection_filter.md - filters the component
- api/link/treecollection_getbranchindex.md - gets index of the node in a specific branch
- api/link/treecollection_getfirstchildid.md - gets the ID of the first child of the specified branch
- api/link/treecollection_getfirstid.md - returns the ID of the first item
- api/link/treecollection_getidbyindex.md - returns the id of the item with the specified index
- api/link/treecollection_getindexbyid.md - returns the index of the item with the specified id
- api/link/treecollection_getitem.md - gets the object of the data item with the specified id
- api/link/treecollection_getlastid.md - returns the id of the last item
- api/link/treecollection_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/treecollection_getnextsiblingid.md - returns the id of the next sibling of the specified node
- api/link/treecollection_getparentid.md - get the ID of the parent node of the specified item
- api/link/treecollection_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/treecollection_getprevsiblingid.md - returns the id of the previous sibling of the specified node
- api/link/treecollection_hasevent.md - 
- api/link/treecollection_isbranch.md - checks whether the node has any children
- api/link/treecollection_isvisible.md - returns true if current view is visible
- api/link/treecollection_load.md - loads data from an external data source
- api/link/treecollection_loadbranch.md - loads data to the specified branch
- api/link/treecollection_loadnext.md - not implmented, do nothing
- api/link/treecollection_mapevent.md - 
- api/link/treecollection_parse.md - loads data to the component from an inline data source
- api/link/treecollection_refresh.md - repaints the whole view or a certain item
- api/link/treecollection_remove.md - removes the specified item from datastore
- api/link/treecollection_serialize.md - serializes data to a json object
- api/link/treecollection_sort.md - sorts datastore
- api/link/treecollection_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/treecollection_unblockevent.md - 
- api/link/treecollection_updateitem.md - sets properties of the data item
- api/link/treecollection_validate.md - validates one record or all dataset against validation rules
}}


Events
------

{{links
- api/link/treecollection_onafteradd_event.md - fires after adding item to datastore
- api/link/treecollection_onafterdelete_event.md - fires after item deleting
- api/link/treecollection_onafterload_event.md - fires after xml loading is complete
- api/link/treecollection_onaftersort_event.md - fires after sorting dataset
- api/link/treecollection_onbeforeadd_event.md - fires before adding item to datastore
- api/link/treecollection_onbeforedelete_event.md - fires before item deleting
- api/link/treecollection_onbeforeload_event.md - occurs immediately before loading XML data has been started
- api/link/treecollection_onbeforesort_event.md - fires before sorting dataset
- api/link/treecollection_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/treecollection_ondatarequest_event.md - called before exucuting auto-loading data call
- api/link/treecollection_ondataupdate_event.md - fires when data item is in update process
- api/link/treecollection_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/treecollection_onvalidationerror_event.md - fires when newly loaded/added/edited data fails to pass validation
- api/link/treecollection_onvalidationsuccess_event.md - fires after the newlyloaded/added/edited data has passes validation successfully
}}


Properties
----------

{{links
- api/link/treecollection_data_config.md - an inline dataset that data to the component will be load from.
- api/link/treecollection_datafeed_config.md - the url to the data source that the component will use to reload data from
- api/link/treecollection_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/treecollection_datatype_config.md - the type of loaded data
- api/link/treecollection_filtermode_config.md - defines the pattern for tree item filtering
- api/link/treecollection_id_config.md - the component ID
- api/link/treecollection_on_config.md - 
- api/link/treecollection_ready_config.md - a handler that is called just after the page has been completely parsed
- api/link/treecollection_removemissed_config.md - defines how to treat items in case of reloading
- api/link/treecollection_rules_config.md - set of validation rules for the component
- api/link/treecollection_save_config.md - defines urls for datasaving
- api/link/treecollection_scheme_config.md - defines schemes for data processing
- api/link/treecollection_url_config.md - the url of a data feed which will be loaded after component initialization
}}




Other
-----

{{links
- api/link/treecollection_config_other.md - all options from initial component configuration
- api/link/treecollection_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/treecollection_methods.md
- api/refs/treecollection_props.md
- api/refs/treecollection_events.md
- api/refs/treecollection_others.md

