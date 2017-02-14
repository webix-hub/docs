ui.kanban 
=============


{{memo A kanban board for effective organization of team work.. }}

Webix Kanban Board is highly customizable and can be adjusted to your needs with ease. 
Due to its rich API, the widget allows creating Kanban boards of various structure and complexity, 
adding, editing, filtering tasks, tuning their appearance, assigning tasks to the team members, etc.

Check desktop/kanban_board.md documentation for more information.

###Constructor 

~~~js
var kanban = webix.ui({
    view:"kanban", 
    type:"space",
    cols:[
        { header:"Backlog",
            body:{ view:"kanbanlist", status:"new". }},
        { header:"In Progress",
            body:{ view:"kanbanlist", status:"work". }},
        { header:"Done",
            body:{ view:"kanbanlist", status:"done". }}
    ],
    url: "tasks.php"
});
~~~

### Where to start

- [Overview of the Kanban Board Widget](desktop/kanban_board.md)
- [Samples](http://docs.webix.com/samples/63_kanban/index.html)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.headerlayout.md">ui.headerlayout</a>, <a href="api/refs/ui.accordion.md">ui.accordion</a>, <a href="api/refs/ui.layout.md">ui.layout</a>, <a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.kanban_add.md - adds an item to the store
- api/link/ui.kanban_addview.md - add new view to layout-like component
- api/link/ui.kanban_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.kanban_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.kanban_bind.md - binds components
- api/link/ui.kanban_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.kanban_callevent.md - calls an inner event
- api/link/ui.kanban_clearall.md - removes all items from the component
- api/link/ui.kanban_count.md - returns the number of currently visible items
- api/link/ui.kanban_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.kanban_destructor.md - destructs the calling object
- api/link/ui.kanban_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.kanban_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/ui.kanban_eachlist.md - iterates over all lists in Kanban and calls a function for them
- api/link/ui.kanban_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.kanban_exists.md - checks whether an item with the specified id exists
- api/link/ui.kanban_filter.md - filters the component
- api/link/ui.kanban_find.md - returns rows that match the criterion
- api/link/ui.kanban_getchildviews.md - returns child views of the calling component
- api/link/ui.kanban_getfirstid.md - returns the ID of the first item
- api/link/ui.kanban_getformview.md - returns master form for the input
- api/link/ui.kanban_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.kanban_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.kanban_getitem.md - gets the object of the data item with the specified id
- api/link/ui.kanban_getlastid.md - returns the id of the last item
- api/link/ui.kanban_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.kanban_getnode.md - returns the main HTML container for the calling object
- api/ui.kanban_getownerlist.md - returns Kanbanlist view that displays an item
- api/link/ui.kanban_getparentview.md - returns the parent view of the component
- api/link/ui.kanban_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/ui.kanban_getselectedid.md - returns the id of the selected task
- api/link/ui.kanban_gettopparentview.md - returns top parent view
- api/link/ui.kanban_hasevent.md - checks whether the component has the specified event
- api/link/ui.kanban_hide.md - hides the view
- api/link/ui.kanban_index.md - returns the cell index in the layout collection
- api/link/ui.kanban_isenabled.md - checks whether the view is enabled
- api/link/ui.kanban_isvisible.md - checks whether the view is visible
- api/link/ui.kanban_load.md - loads data from an external data source.
- api/link/ui.kanban_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/link/ui.kanban_mapevent.md - routes events from one object to another
- api/link/ui.kanban_parse.md - loads data to the component from an inline data source
- api/link/ui.kanban_reconstruct.md - rebuilds the layout
- api/link/ui.kanban_refresh.md - repaints the whole view or a certain item
- api/link/ui.kanban_remove.md - removes the specified item/items from datastore
- api/link/ui.kanban_removeview.md - removes view from layout-like component
- api/link/ui.kanban_resize.md - adjusts the view to a new size
- api/link/ui.kanban_resizechildren.md - resizes all children of the calling component
- api/ui.kanban_select.md - selects the specified task
- api/link/ui.kanban_serialize.md - serializes data to a JSON object
- api/ui.kanban_setindex.md - 
- api/link/ui.kanban_show.md - makes the component visible
- api/link/ui.kanban_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.kanban_sort.md - sorts datastore
- api/link/ui.kanban_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.kanban_unbind.md - breaks "bind" link
- api/link/ui.kanban_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.kanban_updateitem.md - updates the data item with new properties
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.kanban_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.kanban_onaftercollapse_event.md - fires after an item collapses in the accordion
- api/link/ui.kanban_onafterdelete_event.md - fires after item deleting
- api/link/ui.kanban_onafterexpand_event.md - fires after an item expands in the accordion
- api/link/ui.kanban_onafterload_event.md - fires after data loading is complete
- api/link/ui.kanban_onaftersort_event.md - fires after sorting dataset
- api/ui.kanban_onafterstatuschange_event.md - fires after an item has been dropped into the list with a different status
- api/ui.kanban_onavatarclick_event.md - fires on clicking an avatar in the item
- api/link/ui.kanban_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.kanban_onbeforedelete_event.md - fires before item deleting
- api/link/ui.kanban_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.kanban_onbeforesort_event.md - fires before sorting dataset
- api/ui.kanban_onbeforestatuschange_event.md - fires before an item is going to be dropped into the list with different status
- api/link/ui.kanban_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.kanban_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.kanban_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.kanban_ondestruct_event.md - occurs when component destroyed
- api/ui.kanban_onlistaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/ui.kanban_onlistafterdrop_event.md - fires after drag-n-drop has finished
- api/ui.kanban_onlistafterselect_event.md - fires after an item has been selected
- api/ui.kanban_onlistbeforecontextmenu_event.md - fires on an item right click, before the native context menu is displayed
- api/ui.kanban_onlistbeforedrag_event.md - fires before the mouse button is pressed and the cursor is moved over a draggable item
- api/ui.kanban_onlistbeforedragin_event.md - fires before a dragged element is moved over the droppable list
- api/ui.kanban_onlistbeforedrop_event.md - fires before a dragged element is released over the droppable list
- api/ui.kanban_onlistbeforeselect_event.md - fires before an item selection started
- api/ui.kanban_onlisticonclick_event.md - fires on clicking any icon in the list item
- api/ui.kanban_onlistitemclick_event.md - fires on an item click
- api/ui.kanban_onlistitemdblclick_event.md - fires when an item has been double-clicked
- api/link/ui.kanban_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.kanban_animate_config.md - defines or disables view change animation.
- api/link/ui.kanban_borderless_config.md - used to hide the component borders
- api/link/ui.kanban_collapsed_config.md - 'says' to display initially all accordion cells collapsed
- api/link/ui.kanban_cols_config.md - array of views objects arranged horizontally
- api/link/ui.kanban_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.kanban_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.kanban_data_config.md - JavaScript array containing data for the component
- api/link/ui.kanban_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/ui.kanban_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.kanban_datatype_config.md - the type of loaded data
- api/link/ui.kanban_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.kanban_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.kanban_height_config.md - sets the height of the component
- api/link/ui.kanban_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.kanban_id_config.md - the component ID
- api/link/ui.kanban_isolate_config.md - masks IDs of all inner elements
- api/ui.kanban_listfilter_config.md - a filter for items: defines which items will be included in a certain list
- api/link/ui.kanban_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/link/ui.kanban_maxheight_config.md - sets the maximum height for the view
- api/link/ui.kanban_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.kanban_minheight_config.md - sets the minimal height for the view
- api/link/ui.kanban_minwidth_config.md - sets the minimal width for the view
- api/link/ui.kanban_multi_config.md - enables/disables mode when several panels can be visible at once
- api/link/ui.kanban_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.kanban_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/link/ui.kanban_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/link/ui.kanban_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/link/ui.kanban_panelclass_config.md - returns the name of a css class applied to the accordion panels
- api/link/ui.kanban_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.kanban_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.kanban_responsive_config.md - enables responsive mode for horizontal layout
- api/link/ui.kanban_rows_config.md - array of views objects arranged vertically
- api/link/ui.kanban_save_config.md - defines URLs for data saving
- api/link/ui.kanban_scheme_config.md - defines schemes for data processing
- api/link/ui.kanban_type_config.md - defines the layout borders
- api/link/ui.kanban_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.kanban_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.kanban_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.kanban_$getsize_other.md - returns the current size of the component
- api/link/ui.kanban_$height_other.md - current height of the view
- api/link/ui.kanban_$setsize_other.md - sets the component size
- api/link/ui.kanban_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.kanban_$view_other.md - reference to top html element of the view
- api/link/ui.kanban_$width_other.md - current width of the view
- api/link/ui.kanban_config_other.md - all options from initial component configuration
- api/link/ui.kanban_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.kanban_methods.md
- api/refs/ui.kanban_props.md
- api/refs/ui.kanban_events.md
- api/refs/ui.kanban_others.md

