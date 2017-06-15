Methods
=======

{{api
- api/link/ui.chart_add.md - adds an item to the store
- api/ui.chart_addseries.md - adds an additional graph to the chart
- api/link/ui.chart_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.chart_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.chart_bind.md - binds components
- api/link/ui.chart_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.chart_callevent.md - calls an inner event
- api/link/ui.chart_clearall.md - removes all items from the component
- api/ui.chart_clearcanvas.md - clears the component canvas
- api/link/ui.chart_count.md - returns the number of currently visible items
- api/link/ui.chart_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.chart_destructor.md - destructs the calling object
- api/link/ui.chart_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.chart_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.chart_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.chart_exists.md - checks whether an item with the specified id exists
- api/link/ui.chart_filter.md - filters the component
- api/link/ui.chart_find.md - returns rows that match the criterion
- api/link/ui.chart_getchildviews.md - returns child views of the calling component
- api/link/ui.chart_getfirstid.md - returns the ID of the first item
- api/link/ui.chart_getformview.md - returns master form for the input
- api/link/ui.chart_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.chart_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.chart_getitem.md - gets the object of the data item with the specified id
- api/link/ui.chart_getlastid.md - returns the id of the last item
- api/link/ui.chart_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.chart_getnode.md - returns the main HTML container for the calling object
- api/link/ui.chart_getparentview.md - returns the parent view of the component
- api/link/ui.chart_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.chart_gettopparentview.md - returns top parent view
- api/link/ui.chart_group.md - groups data by the specified data property
- api/link/ui.chart_hasevent.md - checks whether the component has the specified event
- api/link/ui.chart_hide.md - hides the view
- api/ui.chart_hideseries.md - hides the chosen graph in the chart with several graphs
- api/link/ui.chart_isenabled.md - checks whether the view is enabled
- api/link/ui.chart_isvisible.md - checks whether the view is visible
- api/link/ui.chart_load.md - loads data from an external data source.
- api/link/ui.chart_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/ui.chart_locate.md - gets the id of an item from the specified HTML event
- api/link/ui.chart_mapevent.md - routes events from one object to another
- api/link/ui.chart_parse.md - loads data to the component from an inline data source
- api/link/ui.chart_refresh.md - repaints the whole view or a certain item
- api/link/ui.chart_remove.md - removes the specified item/items from datastore
- api/ui.chart_removeallseries.md - removes all series from the chart
- api/ui.chart_render.md - renders the specified item or the whole component
- api/link/ui.chart_resize.md - adjusts the view to a new size
- api/link/ui.chart_serialize.md - serializes data to a JSON object
- api/link/ui.chart_show.md - makes the component visible
- api/ui.chart_showseries.md - shows the hidden graph in the chart
- api/link/ui.chart_sort.md - sorts datastore
- api/link/ui.chart_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.chart_unbind.md - breaks "bind" link
- api/link/ui.chart_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.chart_ungroup.md - ungroups data
- api/link/ui.chart_updateitem.md - updates the data item with new properties
}}

@index:
- api/link/ui.chart_add.md
- api/ui.chart_addseries.md
- api/link/ui.chart_adjust.md
- api/link/ui.chart_attachevent.md
- api/link/ui.chart_bind.md
- api/link/ui.chart_blockevent.md
- api/link/ui.chart_callevent.md
- api/link/ui.chart_clearall.md
- api/ui.chart_clearcanvas.md
- api/link/ui.chart_count.md
- api/link/ui.chart_define.md
- api/link/ui.chart_destructor.md
- api/link/ui.chart_detachevent.md
- api/link/ui.chart_disable.md
- api/link/ui.chart_enable.md
- api/link/ui.chart_exists.md
- api/link/ui.chart_filter.md
- api/link/ui.chart_find.md
- api/link/ui.chart_getchildviews.md
- api/link/ui.chart_getfirstid.md
- api/link/ui.chart_getformview.md
- api/link/ui.chart_getidbyindex.md
- api/link/ui.chart_getindexbyid.md
- api/link/ui.chart_getitem.md
- api/link/ui.chart_getlastid.md
- api/link/ui.chart_getnextid.md
- api/link/ui.chart_getnode.md
- api/link/ui.chart_getparentview.md
- api/link/ui.chart_getprevid.md
- api/link/ui.chart_gettopparentview.md
- api/link/ui.chart_group.md
- api/link/ui.chart_hasevent.md
- api/link/ui.chart_hide.md
- api/ui.chart_hideseries.md
- api/link/ui.chart_isenabled.md
- api/link/ui.chart_isvisible.md
- api/link/ui.chart_load.md
- api/link/ui.chart_loadnext.md
- api/ui.chart_locate.md
- api/link/ui.chart_mapevent.md
- api/link/ui.chart_parse.md
- api/link/ui.chart_refresh.md
- api/link/ui.chart_remove.md
- api/ui.chart_removeallseries.md
- api/ui.chart_render.md
- api/link/ui.chart_resize.md
- api/link/ui.chart_serialize.md
- api/link/ui.chart_show.md
- api/ui.chart_showseries.md
- api/link/ui.chart_sort.md
- api/link/ui.chart_sync.md
- api/link/ui.chart_unbind.md
- api/link/ui.chart_unblockevent.md
- api/link/ui.chart_ungroup.md
- api/link/ui.chart_updateitem.md




@seolinktop: [html5 library](https://webix.com)
@seolink: [javascript graph visualization](https://webix.com/widget/charts/)