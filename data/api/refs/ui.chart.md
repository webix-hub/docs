ui.chart 
=============


{{memo A tool  for creating various charts. }}

The library supports the most common chart types:line, spline, area, bar, pie, donut, scatter, radar.
You can customize appearance of a chart through colors, tooltips, templates, scales, labels.
It's possible to present multiple data sets on the same chart.  Check [chart](desktop__chart.md) documentation for more detailed description.

### Constructor

~~~js
	var chart = webix.ui({
		view:"chart", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_chart({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/group.md">Group</a>, <a href="api/refs/autotooltip.md">AutoTooltip</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>

Methods
-------

{{links
- api/link/ui.chart_add.md - adds an item to the store
- api/ui.chart_addseries.md - adds an additional graph to the chart
- api/link/ui.chart_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.chart_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.chart_bind.md - binds components
- api/link/ui.chart_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.chart_callevent.md - calls an inner event
- api/link/ui.chart_clearall.md - removes all items from the component
- api/ui.chart_clearcanvas.md - clears the component canvas
- api/link/ui.chart_count.md - returns the count of items in the table
- api/link/ui.chart_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.chart_destructor.md - destructs the calling object
- api/link/ui.chart_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.chart_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.chart_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.chart_exists.md - checks whether an item with the specified id exists
- api/link/ui.chart_filter.md - filters the component
- api/link/ui.chart_getchildviews.md - returns child views of the calling component
- api/link/ui.chart_getfirstid.md - returns the ID of the first item
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
- api/link/ui.chart_load.md - loads data from an external data source
- api/link/ui.chart_loadnext.md - sends a request to load the specified number of records to the end or to the specified position 
of the component
- api/link/ui.chart_mapevent.md - routes events from one object to another
- api/link/ui.chart_parse.md - loads data to the component from an inline data source
- api/link/ui.chart_refresh.md - repaints the whole view or a certain item
- api/link/ui.chart_remove.md - removes the specified item from datastore
- api/ui.chart_removeallseries.md - removes all series from the chart
- api/ui.chart_render.md - renders the specified item or the whole component
- api/link/ui.chart_resize.md - adjusts the view to a new size
- api/link/ui.chart_serialize.md - serializes data to a json object
- api/link/ui.chart_show.md - makes the component visible
- api/ui.chart_showseries.md - shows the hidden graph in the chart
- api/link/ui.chart_sort.md - sorts datastore
- api/link/ui.chart_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.chart_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.chart_ungroup.md - ungroups data
- api/link/ui.chart_updateitem.md - sets properties of the data item
}}


Events
------

{{links
- api/link/ui.chart_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.chart_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.chart_onafterdelete_event.md - fires after item deleting
- api/link/ui.chart_onafterload_event.md - fires after xml loading is complete
- api/ui.chart_onafterrender_event.md - called after the rendering of calendar is complete.
- api/link/ui.chart_onaftersort_event.md - fires after sorting dataset
- api/link/ui.chart_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.chart_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.chart_onbeforedelete_event.md - fires before item deleting
- api/link/ui.chart_onbeforeload_event.md - occurs immediately before loading XML data has been started
- api/ui.chart_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.chart_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.chart_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.chart_ondatarequest_event.md - fires when data from the server side is requested (part of dynamic loading)
- api/link/ui.chart_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.chart_ondestruct_event.md - occurs when component destroyed
- api/link/ui.chart_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.chart_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.chart_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.chart_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.chart_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.chart_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.chart_onviewresize_event.md - view size was changed by resizer
}}


Properties
----------

{{links
- api/ui.chart_alpha_config.md - defines the opacity of chart items
- api/link/ui.chart_animate_config.md - defines or disables view change animation.
- api/ui.chart_barwidth_config.md - the width of bars
- api/ui.chart_border_config.md - enables/disables the bar borders
- api/ui.chart_bordercolor_config.md - sets the border color of each item in the graph
- api/link/ui.chart_borderless_config.md - used to hide the component borders
- api/ui.chart_cant_config.md - defines the slope angle of 3D pie
- api/ui.chart_color_config.md - defines items colors
- api/link/ui.chart_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.chart_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.chart_data_config.md - an inline dataset that data to the component will be load from.
- api/link/ui.chart_datafeed_config.md - the url to the data source that the component will use to reload data from
- api/link/ui.chart_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.chart_datatype_config.md - the type of loaded data
- api/ui.chart_disablelines_config.md - disapbles graph lines with radar chart
- api/link/ui.chart_disabled_config.md - disables item
- api/ui.chart_eventradius_config.md - sets the radius (in pixels) of the virtual circle which events will fire for items within
- api/ui.chart_fill_config.md - fills the chart area with the specified background color.
- api/ui.chart_fixoverflow_config.md - chart max limit mode
- api/ui.chart_gradient_config.md - specifies the chart gradient
- api/link/ui.chart_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.chart_height_config.md - sets the height of the component
- api/link/ui.chart_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.chart_id_config.md - the component ID
- api/ui.chart_item_config.md - defines markers that present chart's data items.
- api/ui.chart_label_config.md - sets the template for items' labels
- api/ui.chart_labeloffset_config.md - the offset of sector labels from the pie frame
- api/ui.chart_legend_config.md - defines the chart legend
- api/ui.chart_line_config.md - defines chart lines
- api/ui.chart_linecolor_config.md - sets the color for strips dividing the pie sectors
- api/link/ui.chart_maxheight_config.md - sets the maximum height for the view
- api/link/ui.chart_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.chart_minheight_config.md - sets the minimal height for the view
- api/link/ui.chart_minwidth_config.md - sets the minimal width for the view
- api/link/ui.chart_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/ui.chart_offset_config.md - defines whether the first item of the scale will be drawn with the offset equal to the half of the scale's step (relative to the origin of the chart) or not.
- api/link/ui.chart_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.chart_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.chart_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.chart_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.chart_onmousemove_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/ui.chart_origin_config.md - sets the scale origin
- api/ui.chart_padding_config.md - sets paddings of the chart content
- api/ui.chart_pieheight_config.md - the height of the 3d pie
- api/ui.chart_pieinnertext_config.md - sets the template for the pie inner labels
- api/ui.chart_preset_config.md - applies the predefined chart configuration object with the specified name
- api/ui.chart_radius_config.md - the radius of the bar's rounding
- api/link/ui.chart_ready_config.md - a handler that is called just after the page has been completely parsed
- api/link/ui.chart_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.chart_save_config.md - defines urls for datasaving
- api/ui.chart_scale_config.md - 
- api/link/ui.chart_scheme_config.md - defines schemes for data processing
- api/ui.chart_series_config.md - defines graphs presented on the chart
- api/ui.chart_shadow_config.md - enables/disables the pie shadow
- api/link/ui.chart_tooltip_config.md - sets a popup message appearing on pointing a mouse cursor over the dedicated item.
- api/ui.chart_type_config.md - sets the chart type
- api/link/ui.chart_url_config.md - the url of a data feed which will be loaded after component initialization
- api/ui.chart_value_config.md - defines values for the vertical axis
- api/link/ui.chart_width_config.md - sets the width of the component
- api/ui.chart_x_config.md - the horizontal position of the pie center
- api/ui.chart_xaxis_config.md - defines the horizontal axis
- api/ui.chart_xvalue_config.md - a property of the dataset that defines values for the horizontal axis
- api/ui.chart_y_config.md - the vertical position of the pie center
- api/ui.chart_yaxis_config.md - defines the vertical axis
- api/ui.chart_yvalue_config.md - a property of the dataset that defines values for the vertical axis.
}}




Other
-----

{{links
- api/link/ui.chart_$getsize_other.md - returns the current size of the component
- api/link/ui.chart_$height_other.md - current height of the view
- api/link/ui.chart_$setsize_other.md - sets the component size
- api/link/ui.chart_$skin_other.md - method, which will be called when skin defined
- api/link/ui.chart_$view_other.md - reference to top html element of the view
- api/link/ui.chart_$width_other.md - current width of the view
- api/ui.chart_colormap_other.md - collection of coloring strategies
- api/link/ui.chart_config_other.md - all options from initial component configuration
- api/link/ui.chart_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.chart_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.chart_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.chart_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.chart_on_mouse_move_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/ui.chart_presets_other.md - collection of styling presets
}}


@index:
- api/refs/ui.chart_methods.md
- api/refs/ui.chart_props.md
- api/refs/ui.chart_events.md
- api/refs/ui.chart_others.md

