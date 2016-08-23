ui.rangechart 
=============

{{memo A component that allows presenting data of data components in a detailed way. }}

RangeChart inherits from desktop/chart.md and gives the possibility to display in detail some data of a data component limited by frame. This component is useful for controlling and visualizing data of other data components.

Check desktop/range_chart.md documentation for more details

###Constructor 

~~~js
var rangechart = webix.ui({
    view:"rangechart", 
    height: 80, 
    id:"range",
    type:"line",
    value:"#sales#", 
    frameId:"time",
    item: { radius :0 },
    range:{ start:30, end:50 },
    data: data
});
~~~

### Where to start

- [Overview of the RangeChart Widget](desktop/range_chart.md)
- [Samples](http://docs.webix.com/60_pro/12_rangechart/index.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.chart.md">ui.chart</a>, <a href="api/refs/group.md">Group</a>, <a href="api/refs/autotooltip.md">AutoTooltip</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.rangechart_add.md - adds an item to the store
- api/link/ui.rangechart_addseries.md - adds an additional graph to the chart
- api/link/ui.rangechart_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.rangechart_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.rangechart_bind.md - binds components
- api/link/ui.rangechart_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.rangechart_callevent.md - calls an inner event
- api/link/ui.rangechart_clearall.md - removes all items from the component
- api/link/ui.rangechart_clearcanvas.md - clears the component canvas
- api/link/ui.rangechart_count.md - returns the number of currently visible items
- api/link/ui.rangechart_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.rangechart_destructor.md - destructs the calling object
- api/link/ui.rangechart_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.rangechart_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.rangechart_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.rangechart_exists.md - checks whether an item with the specified id exists
- api/link/ui.rangechart_filter.md - filters the component
- api/link/ui.rangechart_find.md - returns rows that match the criterion
- api/link/ui.rangechart_getchildviews.md - returns child views of the calling component
- api/link/ui.rangechart_getfirstid.md - returns the ID of the first item
- api/link/ui.rangechart_getformview.md - returns master form for the input
- api/ui.rangechart_getframedata.md - returns an array of objects that are included into the range
- api/ui.rangechart_getframerange.md - returns the object of the data range selected in the frame
- api/link/ui.rangechart_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.rangechart_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.rangechart_getitem.md - gets the object of the data item with the specified id
- api/link/ui.rangechart_getlastid.md - returns the id of the last item
- api/link/ui.rangechart_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.rangechart_getnode.md - returns the main HTML container for the calling object
- api/link/ui.rangechart_getparentview.md - returns the parent view of the component
- api/link/ui.rangechart_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.rangechart_gettopparentview.md - returns top parent view
- api/link/ui.rangechart_group.md - groups data by the specified data property
- api/link/ui.rangechart_hasevent.md - checks whether the component has the specified event
- api/link/ui.rangechart_hide.md - hides the view
- api/link/ui.rangechart_hideseries.md - hides the chosen graph in the chart with several graphs
- api/link/ui.rangechart_isenabled.md - checks whether the view is enabled
- api/link/ui.rangechart_isvisible.md - checks whether the view is visible
- api/link/ui.rangechart_load.md - loads data from an external data source.
- api/link/ui.rangechart_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/link/ui.rangechart_locate.md - gets the id of an item from the specified HTML event
- api/link/ui.rangechart_mapevent.md - routes events from one object to another
- api/link/ui.rangechart_parse.md - loads data to the component from an inline data source
- api/link/ui.rangechart_refresh.md - repaints the whole view or a certain item
- api/link/ui.rangechart_remove.md - removes the specified item/items from datastore
- api/link/ui.rangechart_removeallseries.md - removes all series from the chart
- api/link/ui.rangechart_render.md - renders the specified item or the whole component
- api/link/ui.rangechart_resize.md - adjusts the view to a new size
- api/link/ui.rangechart_serialize.md - serializes data to a JSON object
- api/ui.rangechart_setframerange.md - sets the data range for the frame
- api/link/ui.rangechart_show.md - makes the component visible
- api/link/ui.rangechart_showseries.md - shows the hidden graph in the chart
- api/link/ui.rangechart_sort.md - sorts datastore
- api/link/ui.rangechart_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.rangechart_unbind.md - breaks "bind" link
- api/link/ui.rangechart_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.rangechart_ungroup.md - ungroups data
- api/link/ui.rangechart_updateitem.md - sets properties of the data item
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.rangechart_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.rangechart_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.rangechart_onafterdelete_event.md - fires after item deleting
- api/link/ui.rangechart_onafterload_event.md - fires after data loading is complete
- api/ui.rangechart_onafterrangechange_event.md - fires after the frame range is changed
- api/link/ui.rangechart_onafterrender_event.md - called after the rendering of calendar is complete.
- api/link/ui.rangechart_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.rangechart_onaftersort_event.md - fires after sorting dataset
- api/link/ui.rangechart_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.rangechart_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.rangechart_onbeforedelete_event.md - fires before item deleting
- api/link/ui.rangechart_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.rangechart_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.rangechart_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.rangechart_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.rangechart_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.rangechart_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.rangechart_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.rangechart_ondestruct_event.md - occurs when component destroyed
- api/link/ui.rangechart_onfocus_event.md - fires when a view gets focus
- api/link/ui.rangechart_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.rangechart_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.rangechart_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.rangechart_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.rangechart_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.rangechart_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.rangechart_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.rangechart_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.rangechart_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.rangechart_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.rangechart_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.rangechart_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.rangechart_ontouchmove_event.md - occurs during touch movement
- api/link/ui.rangechart_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.rangechart_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.rangechart_alpha_config.md - defines the opacity of chart items
- api/link/ui.rangechart_animate_config.md - defines or disables view change animation.
- api/link/ui.rangechart_barwidth_config.md - the width of bars
- api/link/ui.rangechart_border_config.md - enables/disables the bar borders
- api/link/ui.rangechart_bordercolor_config.md - sets the border color of each item in the graph
- api/link/ui.rangechart_borderless_config.md - used to hide the component borders
- api/link/ui.rangechart_cant_config.md - defines the slope angle of 3D pie
- api/link/ui.rangechart_color_config.md - defines items colors
- api/link/ui.rangechart_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.rangechart_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.rangechart_data_config.md - JavaScript array containing data for the component
- api/link/ui.rangechart_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.rangechart_datatype_config.md - the type of loaded data
- api/link/ui.rangechart_disablelines_config.md - disapbles graph lines with radar chart
- api/link/ui.rangechart_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.rangechart_eventradius_config.md - sets the radius (in pixels) of the virtual circle which events will fire for items within
- api/link/ui.rangechart_fill_config.md - fills the chart area with the specified background color.
- api/link/ui.rangechart_fixoverflow_config.md - chart max limit mode
- api/ui.rangechart_frameid_config.md - points to the property in data that will be used for the frame
- api/link/ui.rangechart_gradient_config.md - specifies the chart gradient
- api/link/ui.rangechart_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.rangechart_height_config.md - sets the height of the component
- api/link/ui.rangechart_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.rangechart_id_config.md - the component ID
- api/link/ui.rangechart_item_config.md - defines markers that present chart's data items
- api/link/ui.rangechart_label_config.md - sets the template for items' labels
- api/link/ui.rangechart_labeloffset_config.md - the offset of sector labels from the pie frame
- api/link/ui.rangechart_legend_config.md - defines the chart legend
- api/link/ui.rangechart_line_config.md - defines chart lines
- api/link/ui.rangechart_linecolor_config.md - sets the color for strips dividing the pie sectors
- api/link/ui.rangechart_maxheight_config.md - sets the maximum height for the view
- api/link/ui.rangechart_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.rangechart_minheight_config.md - sets the minimal height for the view
- api/link/ui.rangechart_minwidth_config.md - sets the minimal width for the view
- api/link/ui.rangechart_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/link/ui.rangechart_offset_config.md - defines whether the first item of the scale will be drawn with the offset equal to the half of the scale's step (relative to the origin of the chart) or not.
- api/link/ui.rangechart_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.rangechart_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.rangechart_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.rangechart_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.rangechart_onmousemove_config.md - attaches a mousemove behaviour for component items with the specified CSS class.
- api/link/ui.rangechart_origin_config.md - sets the scale origin
- api/link/ui.rangechart_padding_config.md - sets paddings of the chart content
- api/link/ui.rangechart_pieheight_config.md - the height of the 3d pie
- api/link/ui.rangechart_pieinnertext_config.md - sets the template for the pie inner labels
- api/link/ui.rangechart_preset_config.md - applies the predefined chart configuration object with the specified name
- api/link/ui.rangechart_radius_config.md - the radius of the bar's rounding
- api/ui.rangechart_range_config.md - data range that should be selected in the frame
- api/link/ui.rangechart_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.rangechart_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.rangechart_save_config.md - defines URLs for data saving
- api/link/ui.rangechart_scale_config.md - type of chart scale, logarithic or plain
- api/link/ui.rangechart_scheme_config.md - defines schemes for data processing
- api/link/ui.rangechart_series_config.md - defines graphs presented on the chart
- api/link/ui.rangechart_shadow_config.md - enables/disables the pie shadow
- api/link/ui.rangechart_tooltip_config.md - sets a popup message appearing on pointing a mouse cursor over the dedicated item.
- api/link/ui.rangechart_type_config.md - sets the chart type
- api/link/ui.rangechart_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.rangechart_value_config.md - defines values for the vertical axis
- api/link/ui.rangechart_width_config.md - sets the width of the component
- api/link/ui.rangechart_x_config.md - the horizontal position of the pie center
- api/link/ui.rangechart_xaxis_config.md - defines the horizontal axis
- api/link/ui.rangechart_xvalue_config.md - a property of the dataset that defines values for the horizontal axis
- api/link/ui.rangechart_y_config.md - the vertical position of the pie center
- api/link/ui.rangechart_yaxis_config.md - defines the vertical axis
- api/link/ui.rangechart_yvalue_config.md - a property of the dataset that defines values for the vertical axis.
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.rangechart_$getsize_other.md - returns the current size of the component
- api/link/ui.rangechart_$height_other.md - current height of the view
- api/link/ui.rangechart_$scope_other.md - scope for resolving event and method names
- api/link/ui.rangechart_$setsize_other.md - sets the component size
- api/link/ui.rangechart_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.rangechart_$view_other.md - reference to top html element of the view
- api/link/ui.rangechart_$width_other.md - current width of the view
- api/link/ui.rangechart_colormap_other.md - collection of coloring strategies
- api/link/ui.rangechart_config_other.md - all options from initial component configuration
- api/link/ui.rangechart_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.rangechart_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.rangechart_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.rangechart_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class
- api/link/ui.rangechart_on_mouse_move_other.md - attaches a mouse move behavior for component items with the specified CSS class
- api/link/ui.rangechart_presets_other.md - collection of styling presets
}}


@index:
- api/refs/ui.rangechart_methods.md
- api/refs/ui.rangechart_props.md
- api/refs/ui.rangechart_events.md
- api/refs/ui.rangechart_others.md

@edition:pro