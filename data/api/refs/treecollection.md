TreeCollection 
=============

{{memo View-less component that stores a collection of hierarchical data. }}

~~~js
var store = new webix.TreeCollection({ url:"tree.php" });
~~~



<div class='h2'>Methods</div>

{{api
- api/link/treecollection_add.md - adds an item to the store
- api/link/treecollection_addbind.md - adds one more bound target
- api/link/treecollection_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/treecollection_bind.md - binds components
- api/link/treecollection_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/treecollection_callevent.md - calls an inner event
- api/link/treecollection_clearall.md - removes all items from the component
- api/link/treecollection_clearvalidation.md - removes all validation marks from the component
- api/link/treecollection_copy.md - copies an item to the same or another object
- api/link/treecollection_count.md - returns the number of currently visible items
- api/link/treecollection_define.md - redefines a single configuration property (or a hash of properties)
- api/link/treecollection_destructor.md - destructs the calling object
- api/link/treecollection_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/treecollection_exists.md - checks whether an item with the specified id exists
- api/link/treecollection_filter.md - filters the component
- api/link/treecollection_find.md - returns rows that match the criterion
- api/link/treecollection_getbinddata.md - fills the target object with data
- api/link/treecollection_getbranchindex.md - gets index of the node in a specific branch
- api/link/treecollection_getcursor.md - returns the current cursor position.
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
- api/link/treecollection_hasevent.md - checks whether the component has the specified event
- api/link/treecollection_isbranch.md - checks whether the node has any children
- api/link/treecollection_isvisible.md - returns true if current view is visible
- api/link/treecollection_load.md - loads data from an external data source.
- api/link/treecollection_loadbranch.md - loads data to the specified branch, as direct children of the node with the id provided
- api/link/treecollection_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/link/treecollection_mapevent.md - routes events from one object to another
- api/link/treecollection_move.md - moves the specified item to the new position
- api/link/treecollection_movebottom.md - moves the specified item to the last position
- api/link/treecollection_movedown.md - increases the item index and moves the item to the new position
- api/link/treecollection_movetop.md - moves the specified item to the first position
- api/link/treecollection_moveup.md - decreases the item index and moves the item to the new position
- api/link/treecollection_parse.md - loads data to the component from an inline data source
- api/link/treecollection_refresh.md - repaints the whole view or a certain item
- api/link/treecollection_refreshcursor.md - force repainting of all bound components with current cursor value
- api/link/treecollection_remove.md - removes the specified item/items from datastore
- api/link/treecollection_removebind.md - disables data binding
- api/link/treecollection_savebatch.md - makes simultaneous saving several components
- api/link/treecollection_serialize.md - serializes data to a JSON object
- api/link/treecollection_setbinddata.md - moves data from master to child
- api/link/treecollection_setcursor.md - sets the position of the cursor
- api/link/treecollection_sort.md - sorts datastore
- api/link/treecollection_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/treecollection_unbind.md - breaks "bind" link
- api/link/treecollection_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/treecollection_updateitem.md - sets properties of the data item
- api/link/treecollection_validate.md - validates one record or all dataset against validation rules
}}


<div class='h2'>Events</div>


{{api
- api/link/treecollection_onafteradd_event.md - fires after adding item to datastore
- api/link/treecollection_onaftercursorchange_event.md - fires after the cursor changes its position.
- api/link/treecollection_onafterdelete_event.md - fires after item deleting
- api/link/treecollection_onafterload_event.md - fires after data loading is complete
- api/link/treecollection_onaftersort_event.md - fires after sorting dataset
- api/link/treecollection_onbeforeadd_event.md - fires before adding item to datastore
- api/link/treecollection_onbeforecursorchange_event.md - fires before the cursor changes its position.
- api/link/treecollection_onbeforedelete_event.md - fires before item deleting
- api/link/treecollection_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/treecollection_onbeforesort_event.md - fires before sorting dataset
- api/link/treecollection_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/treecollection_onbindupdate_event.md - fires when data is changed in the child and 'save()' is called to update the master.
- api/link/treecollection_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/treecollection_ondataupdate_event.md - fires when data item is in update process
- api/link/treecollection_ondestruct_event.md - occurs when component destroyed
- api/link/treecollection_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/treecollection_onvalidationerror_event.md - fires when newly loaded/added/edited data fails to pass validation
- api/link/treecollection_onvalidationsuccess_event.md - fires after the newlyloaded/added/edited data has passes validation successfully
}}


<div class='h2'>Properties</div>

{{api
- api/link/treecollection_data_config.md - JavaScript array containing data for the component
- api/link/treecollection_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/treecollection_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/treecollection_datatype_config.md - the type of loaded data
- api/link/treecollection_defaultdata_config.md - the property stores data which is displayed in the child when no records are selected in the  master.
- api/link/treecollection_externaldata_config.md - allows defining custom 'move' logic for the component.
- api/link/treecollection_filtermode_config.md - defines the pattern for tree item filtering
- api/link/treecollection_id_config.md - the component ID
- api/link/treecollection_map_config.md - defines data mapping
- api/link/treecollection_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/treecollection_ready_config.md - event handler called just after the component has been completely initialized
- api/link/treecollection_removemissed_config.md - defines how to treat items in case of reloading
- api/link/treecollection_rules_config.md - set of validation rules for the component
- api/link/treecollection_save_config.md - defines URLs for data saving
- api/link/treecollection_scheme_config.md - defines schemes for data processing
- api/link/treecollection_url_config.md - the URL which the component will use to load data after its initialization
}}





<div class='h2'>Other</div>


{{api
- api/link/treecollection_config_other.md - all options from initial component configuration
- api/link/treecollection_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/treecollection_methods.md
- api/refs/treecollection_props.md
- api/refs/treecollection_events.md
- api/refs/treecollection_others.md

