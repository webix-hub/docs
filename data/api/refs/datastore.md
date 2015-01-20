DataStore 
=============

{{memo Core of all operations for data-collection based components. }}




<div class='h2'>Methods</div>

{{api
- api/datastore_add.md - adds an item to the store
- api/datastore_addmark.md - allows setting custom flag for a data item.
- api/link/datastore_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/datastore_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/datastore_callevent.md - calls an inner event
- api/datastore_changeid.md - changes the id of a data item
- api/datastore_clearall.md - removes all items from the component
- api/datastore_clearmark.md - removes mark from all items in store
- api/datastore_count.md - returns the number of currently visible items
- api/datastore_destructor.md - destroy datastore
- api/link/datastore_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/datastore_each.md - iterates through the collection of data items
- api/datastore_exists.md - checks whether an item with the specified id exists
- api/datastore_filter.md - filters the component
- api/datastore_getfirstid.md - returns the ID of the first item
- api/datastore_getidbyindex.md - returns the id of the item with the specified index
- api/datastore_getindexbyid.md - returns the index of the item with the specified id
- api/datastore_getindexrange.md - gets ids of items in the specified index range
- api/datastore_getitem.md - gets the object of the data item with the specified id
- api/datastore_getlastid.md - returns the id of the last item
- api/datastore_getmark.md - returns mark value by record id and mark name
- api/datastore_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/datastore_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/datastore_getrange.md - gets ids of items in the specified range
- api/link/datastore_hasevent.md - checks whether the component has the specified event
- api/datastore_id.md - gets the id of a data item
- api/datastore_importdata.md - import data from different datastore
- api/link/datastore_mapevent.md - routes events from one object to another
- api/datastore_move.md - moves the specified item to the new position
- api/datastore_provideapi.md - assigns methods (and events) of DataStore to an object
- api/datastore_refresh.md - repaints the whole view or a certain item
- api/datastore_remove.md - removes the specified item from datastore
- api/datastore_removemark.md - removes a flag set for the specified item
- api/datastore_scheme.md - sets hash of default values for properties
- api/datastore_serialize.md - serializes data to a json object
- api/datastore_setdriver.md - defines type of used data driver
- api/datastore_silent.md - code that you pass here as the parameter will not be affected by 'onStoreUpdated' event handler
- api/datastore_sort.md - sorts datastore
- api/datastore_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/datastore_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/datastore_unsync.md - breaks "sync" link
- api/datastore_updateitem.md - sets properties of the data item
}}


<div class='h2'>Events</div>


{{api
- api/datastore_onafteradd_event.md - fires after adding item to datastore
- api/datastore_onafterdelete_event.md - fires after item deleting
- api/datastore_onafterfilter_event.md - fires after DataStore was filtered
- api/datastore_onaftersort_event.md - fires after sorting dataset
- api/datastore_onbeforeadd_event.md - fires before adding item to datastore
- api/datastore_onbeforedelete_event.md - fires before item deleting
- api/datastore_onbeforefilter_event.md - fires before datatable filtering
- api/datastore_onbeforesort_event.md - fires before sorting dataset
- api/datastore_onclearall_event.md - fires after datastore was cleared
- api/datastore_ondataupdate_event.md - fires when data item is in update process
- api/datastore_onidchange_event.md - event fires when id of record changed
- api/datastore_onparse_event.md - fires when data is ready to be processed by component
- api/datastore_onserverconfig_event.md - fires when the component loads data containing the config tag (key) inside.
- api/datastore_onserveroptions_event.md - fires when client side api loads sub-collection from server side
- api/datastore_onstoreload_event.md - fires after data is loaded from external resource
- api/datastore_onstoreupdated_event.md - fires after data is changed in datastore
- api/datastore_onsyncapply_event.md - fires the moment sync() method is applied
}}


<div class='h2'>Properties</div>

{{api
- api/link/datastore_on_config.md - allows attaching custom handlers to inner events of the component
}}





<div class='h2'>Other</div>


{{api
- api/datastore_driver_other.md - defines data driver - methods and properties for data parsing
- api/datastore_name_other.md - indicates the name of the component (a read-only property)
- api/datastore_order_other.md - returns an array of IDs of the displayable items
- api/datastore_pull_other.md - returns the hash of data items (where the key is the item id).
}}


@index:
- api/refs/datastore_methods.md
- api/refs/datastore_props.md
- api/refs/datastore_events.md
- api/refs/datastore_others.md

