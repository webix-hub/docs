ui.pivot 
=============


{{memo A datatable with advanced filtering capabilities. }}

Webix Pivot allows quickly processing huge complex datasets and creating clear reports on their basis. 
You can easily customize this component and proceed with comparing, filtering and sorting data - all within one table.

Check desktop/pivot.md documentation for more information.

###Constructor 

~~~js
var pivot = webix.ui({
	view:"pivot",
	structure: {
		rows: ["form", "name"],
        columns: ["year"],
        values: [
            { name: "gdp", operation: "sum"},
            { name: "oil", operation: "sum"}
        ],
        filters: []
	},
	data: pivot_data
});
~~~

### Where to start

- [Overview of the Pivot Widget](desktop/pivot.md)
- [Samples](http://docs.webix.com/samples/61_pivot/index.html)


<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/idspace.md">IdSpace</a>, <a href="api/refs/ui.layout.md">ui.layout</a>, <a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.pivot_add.md - adds an item to the store
- api/ui.pivot_addoperation.md - adds a custom data operation
- api/link/ui.pivot_addview.md - adds a new view to a layout-like component
- api/link/ui.pivot_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.pivot_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.pivot_bind.md - binds components
- api/link/ui.pivot_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.pivot_callevent.md - calls an inner event
- api/link/ui.pivot_clearall.md - removes all items from the component
- api/ui.pivot_configure.md - opens the pivot configuration window
- api/link/ui.pivot_count.md - returns the number of currently visible items
- api/link/ui.pivot_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.pivot_destructor.md - destroy datastore
- api/link/ui.pivot_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.pivot_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.pivot_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.pivot_exists.md - checks whether an item with the specified id exists
- api/link/ui.pivot_filter.md - filters the component
- api/link/ui.pivot_find.md - returns rows that match the criterion
- api/link/ui.pivot_getchildviews.md - returns child views of the calling component
- api/ui.pivot_getconfigwindow.md - returns the object of the window with pivot configuration
- api/ui.pivot_getfields.md - returns an object with fields configurations
- api/ui.pivot_getfilterview.md - returns the object of the toolbar with filters
- api/link/ui.pivot_getfirstid.md - returns the ID of the first item
- api/link/ui.pivot_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.pivot_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.pivot_getitem.md - gets the object of the data item with the specified id
- api/link/ui.pivot_getlastid.md - returns the id of the last item
- api/link/ui.pivot_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.pivot_getnode.md - returns the main HTML container for the calling object
- api/link/ui.pivot_getparentview.md - returns the parent view of the component
- api/link/ui.pivot_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/ui.pivot_getstructure.md - returns the current pivot configuration
- api/link/ui.pivot_gettopparentview.md - returns top parent view
- api/link/ui.pivot_hasevent.md - checks whether the component has the specified event
- api/link/ui.pivot_hide.md - hides the view
- api/link/ui.pivot_index.md - returns the cell index in the layout collection
- api/link/ui.pivot_innerid.md - returns the inner ID of an item by its public (real) ID
- api/link/ui.pivot_isenabled.md - checks whether the view is enabled
- api/link/ui.pivot_isvisible.md - checks whether the view is visible
- api/link/ui.pivot_load.md - loads data from an external data source.
- api/link/ui.pivot_mapevent.md - routes events from one object to another
- api/link/ui.pivot_parse.md - loads data to the component from an inline data source
- api/link/ui.pivot_reconstruct.md - rebuilds the layout
- api/link/ui.pivot_refresh.md - repaints the whole view or a certain item
- api/link/ui.pivot_remove.md - removes the specified item/items from datastore
- api/link/ui.pivot_removeview.md - removes view from layout-like component
- api/ui.pivot_render.md - renders a pivot on the page
- api/link/ui.pivot_resize.md - adjusts the view to a new size
- api/link/ui.pivot_resizechildren.md - resizes all children of the called component
- api/link/ui.pivot_serialize.md - serializes data to a JSON object
- api/ui.pivot_setstructure.md - sets the pivot structure
- api/link/ui.pivot_show.md - makes the component visible
- api/link/ui.pivot_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.pivot_sort.md - sorts datastore
- api/link/ui.pivot_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.pivot_ui.md - allows creating new ui, the id of which will be locked in the parent id space
- api/link/ui.pivot_unbind.md - breaks "bind" link
- api/link/ui.pivot_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.pivot_updateitem.md - updates the data item with new properties
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.pivot_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.pivot_onafterdelete_event.md - fires after item deleting
- api/link/ui.pivot_onafterload_event.md - fires after data loading is complete
- api/link/ui.pivot_onaftersort_event.md - fires after sorting dataset
- api/link/ui.pivot_onbeforeadd_event.md - fires before adding item to datastore
- api/ui.pivot_onbeforeapply_event.md - fires on the "Apply" button click
- api/ui.pivot_onbeforecancel_event.md - fires when the "Cancel" button is clicked in the filters popup
- api/link/ui.pivot_onbeforedelete_event.md - fires before item deleting
- api/link/ui.pivot_onbeforeload_event.md - occurs immediately before data loading has been started
- api/ui.pivot_onbeforerender_event.md - fires just before the pivot is rendered
- api/link/ui.pivot_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.pivot_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.pivot_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.pivot_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.pivot_ondestruct_event.md - occurs when component destroyed
- api/ui.pivot_onfilterchange_event.md - fires when values are changed in filter fields on toolbar
- api/ui.pivot_onfiltercreate_event.md - fires each time a filter is created
- api/ui.pivot_onheaderinit_event.md - fires when pivot header is initialized
- api/ui.pivot_onitemclick_event.md - fires when an item is clicked
- api/link/ui.pivot_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/ui.pivot_onpopup_event.md - fires after a configuration window for Pivot is created
- api/ui.pivot_onviewinit_event.md - fires before inner view initialization
- api/ui.pivot_onwebworkerend_event.md - fires when web worker has finished the task
- api/ui.pivot_onwebworkerstart_event.md - fires when web worker starts working
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.pivot_animate_config.md - defines or disables view change animation.
- api/link/ui.pivot_borderless_config.md - used to hide the component borders
- api/link/ui.pivot_cols_config.md - array of views objects arranged horizontally
- api/ui.pivot_columnwidth_config.md - defines the default width for columns (in pixels)
- api/link/ui.pivot_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.pivot_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.pivot_data_config.md - JavaScript array containing data for the component
- api/link/ui.pivot_datatype_config.md - the type of loaded data
- api/link/ui.pivot_disabled_config.md - indicates whether an item is enabled
- api/ui.pivot_externalprocessing_config.md - enables external data processing in Pivot
- api/ui.pivot_fieldmap_config.md - defines custom labels for fields
- api/ui.pivot_filterlabelalign_config.md - sets the horizontal alignment of the filters' labels in Pivot Chart
- api/ui.pivot_filterlabelwidth_config.md - sets the width of the filters' labels
- api/ui.pivot_filtermap_config.md - specifies fields for filtering (see the details)
- api/ui.pivot_filterminwidth_config.md - sets the minimal width of filters (both input and label) in the pivot header
- api/ui.pivot_filterplaceholder_config.md - sets a placeholder for the filter input
- api/ui.pivot_filterwidth_config.md - sets the width of filters (both input and label) in the pivot header
- api/ui.pivot_footer_config.md - calculates the total sum per column
- api/ui.pivot_format_config.md - specifies the format function for displaying data in all columns
- api/link/ui.pivot_gravity_config.md - sets the view gravity (1 by default)
- api/ui.pivot_headertemplate_config.md - sets the function that fires for each columns' header and returns header text
- api/link/ui.pivot_height_config.md - sets the height of the component
- api/link/ui.pivot_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.pivot_id_config.md - the component ID
- api/link/ui.pivot_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/ui.pivot_max_config.md - enables/disables GREEN highlighting of a cell(s) with the biggest value in a row
- api/link/ui.pivot_maxheight_config.md - sets the maximum height for the view
- api/link/ui.pivot_maxwidth_config.md - sets the maximum width for the view
- api/ui.pivot_min_config.md - enables/disables RED highlighting of a cell(s) with the least value in a row
- api/link/ui.pivot_minheight_config.md - sets the minimal height for the view
- api/link/ui.pivot_minwidth_config.md - sets the minimal width for the view
- api/link/ui.pivot_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.pivot_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/link/ui.pivot_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/link/ui.pivot_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/ui.pivot_popup_config.md - an object with the properties of the configuration popup
- api/ui.pivot_profile_config.md - enables profiling (for development stage)
- api/ui.pivot_readonly_config.md - disables the possibility to change pivot configuration settings
- api/ui.pivot_readonlytitle_config.md - sets some text in the right top corner instead of the link that opens the popup for configuring pivot
- api/link/ui.pivot_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.pivot_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.pivot_responsive_config.md - enables responsive mode for horizontal layout
- api/link/ui.pivot_rows_config.md - array of views objects arranged vertically
- api/link/ui.pivot_scheme_config.md - defines schemes for data processing
- api/ui.pivot_structure_config.md - defines initial display and analysis pattern
- api/ui.pivot_totalcolumn_config.md - calculates the total sum for each row
- api/link/ui.pivot_type_config.md - defines the layout borders
- api/link/ui.pivot_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.pivot_visiblebatch_config.md - sets the batch that will be shown initially
- api/ui.pivot_webworker_config.md - sets the path to the web worker source file
- api/link/ui.pivot_width_config.md - sets the width of the component
- api/ui.pivot_yscalewidth_config.md - sets the width of the first column
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.pivot_$$_other.md - locates sub-item by id
- api/ui.pivot_$divider_other.md - a string that is used in Pivot calculations
- api/link/ui.pivot_$getsize_other.md - returns the current size of the component
- api/link/ui.pivot_$height_other.md - current height of the view
- api/link/ui.pivot_$setsize_other.md - sets the component size
- api/link/ui.pivot_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.pivot_$view_other.md - reference to top html element of the view
- api/link/ui.pivot_$width_other.md - current width of the view
- api/link/ui.pivot_config_other.md - all options from initial component configuration
- api/link/ui.pivot_name_other.md - indicates the name of the component (a read-only property)
- api/ui.pivot_operations_other.md - gets an object with possible mathematical operations in Pivot
- api/link/ui.pivot_waitdata_other.md - eventual result of an asynchronous operation ('promise' object) for the loaded data
}}


@index:
- api/refs/ui.pivot_methods.md
- api/refs/ui.pivot_props.md
- api/refs/ui.pivot_events.md
- api/refs/ui.pivot_others.md

