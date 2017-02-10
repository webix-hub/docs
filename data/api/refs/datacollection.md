DataCollection 
=============

{{memo View-less component that stores a collection of non-hierarchical data. }}

~~~js
var store = new webix.DataCollection({ url:"data.php" });
~~~



<div class='h2'>Methods</div>

{{api
- api/link/datacollection_add.md - adds an item to the store
- api/link/datacollection_addbind.md - adds one more bound target
- api/link/datacollection_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/datacollection_bind.md - binds components
- api/link/datacollection_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/datacollection_callevent.md - calls an inner event
- api/link/datacollection_clearall.md - removes all items from the component
- api/link/datacollection_clearvalidation.md - removes all validation marks from the component
- api/link/datacollection_copy.md - copies an item to the same or another object
- api/link/datacollection_count.md - returns the number of currently visible items
- api/link/datacollection_define.md - redefines a single configuration property (or a hash of properties)
- api/link/datacollection_destructor.md - destructs the calling object
- api/link/datacollection_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/datacollection_exists.md - checks whether an item with the specified id exists
- api/link/datacollection_filter.md - filters the component
- api/link/datacollection_find.md - returns rows that match the criterion
- api/link/datacollection_getbinddata.md - fills the target object with data
- api/link/datacollection_getcursor.md - returns the current cursor position.
- api/link/datacollection_getfirstid.md - returns the ID of the first item
- api/link/datacollection_getidbyindex.md - returns the id of the item with the specified index
- api/link/datacollection_getindexbyid.md - returns the index of the item with the specified id
- api/link/datacollection_getitem.md - gets the object of the data item with the specified id
- api/link/datacollection_getlastid.md - returns the id of the last item
- api/link/datacollection_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/datacollection_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/datacollection_hasevent.md - checks whether the component has the specified event
- api/link/datacollection_ignoreundo.md - 
- api/datacollection_isvisible.md - returns true if current view is visible
- api/link/datacollection_load.md - loads data from an external data source.
- api/link/datacollection_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/link/datacollection_mapevent.md - routes events from one object to another
- api/link/datacollection_move.md - moves the specified item to the new position
- api/link/datacollection_movebottom.md - moves the specified item to the last position
- api/link/datacollection_movedown.md - increases the item index and moves the item to the new position
- api/link/datacollection_movetop.md - moves the specified item to the first position
- api/link/datacollection_moveup.md - decreases the item index and moves the item to the new position
- api/link/datacollection_parse.md - loads data to the component from an inline data source
- api/link/datacollection_refresh.md - repaints the whole view or a certain item
- api/link/datacollection_refreshcursor.md - force repainting of all bound components with current cursor value
- api/link/datacollection_remove.md - removes the specified item/items from datastore
- api/link/datacollection_removebind.md - disables data binding
- api/link/datacollection_removeundo.md - 
- api/link/datacollection_savebatch.md - makes simultaneous saving several components
- api/link/datacollection_serialize.md - serializes data to a JSON object
- api/link/datacollection_setbinddata.md - moves data from master to child
- api/link/datacollection_setcursor.md - sets the position of the cursor
- api/link/datacollection_sort.md - sorts datastore
- api/link/datacollection_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/datacollection_unbind.md - breaks "bind" link
- api/link/datacollection_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/datacollection_undo.md - 
- api/link/datacollection_updateitem.md - updates the data item with new properties
- api/link/datacollection_validate.md - validates one record or all dataset against validation rules
}}


<div class='h2'>Events</div>


{{api
- api/link/datacollection_onafteradd_event.md - fires after adding item to datastore
- api/link/datacollection_onaftercursorchange_event.md - fires after the cursor changes its position.
- api/link/datacollection_onafterdelete_event.md - fires after item deleting
- api/link/datacollection_onafterload_event.md - fires after data loading is complete
- api/link/datacollection_onaftersort_event.md - fires after sorting dataset
- api/link/datacollection_onbeforeadd_event.md - fires before adding item to datastore
- api/link/datacollection_onbeforecursorchange_event.md - fires before the cursor changes its position.
- api/link/datacollection_onbeforedelete_event.md - fires before item deleting
- api/link/datacollection_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/datacollection_onbeforesort_event.md - fires before sorting dataset
- api/link/datacollection_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/datacollection_onbindupdate_event.md - fires when data is changed in the child and 'save()' is called to update the master.
- api/link/datacollection_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/datacollection_ondataupdate_event.md - fires when data item is in update process
- api/link/datacollection_ondestruct_event.md - occurs when component destroyed
- api/link/datacollection_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/datacollection_onvalidationerror_event.md - fires when newly loaded/added/edited data fails to pass validation
- api/link/datacollection_onvalidationsuccess_event.md - fires after the newlyloaded/added/edited data has passes validation successfully
}}


<div class='h2'>Properties</div>

{{api
- api/link/datacollection_data_config.md - JavaScript array containing data for the component
- api/link/datacollection_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/datacollection_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/datacollection_datatype_config.md - the type of loaded data
- api/link/datacollection_defaultdata_config.md - the property stores data which is displayed in the child when no records are selected in the  master.
- api/link/datacollection_externaldata_config.md - allows defining custom 'move' logic for the component.
- api/link/datacollection_id_config.md - the component ID
- api/link/datacollection_map_config.md - defines data mapping
- api/link/datacollection_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/datacollection_ready_config.md - event handler called just after the component has been completely initialized
- api/link/datacollection_removemissed_config.md - defines how to treat items in case of reloading
- api/link/datacollection_rules_config.md - set of validation rules for the component
- api/link/datacollection_save_config.md - defines URLs for data saving
- api/link/datacollection_scheme_config.md - defines schemes for data processing
- api/link/datacollection_undo_config.md - 
- api/link/datacollection_url_config.md - the URL which the component will use to load data after its initialization
}}





<div class='h2'>Other</div>


{{api
- api/link/datacollection_config_other.md - all options from initial component configuration
- api/link/datacollection_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/datacollection_methods.md
- api/refs/datacollection_props.md
- api/refs/datacollection_events.md
- api/refs/datacollection_others.md

