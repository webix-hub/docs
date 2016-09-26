ui.daterange 
=============


{{memo A set of calendars that lets a user to select a date range and switch between months and years. }}

DateRange is highly customizable. It supports all date and time formats and is used for selecting dates and times in several calendars at once. 
Check  [DateRange](desktop/daterange.md) documentation for a more detailed description.


### Constructor

~~~js
var daterange = webix.ui({
	view:"daterange",
	calendarCount:4,
	timepicker:true,
	value:{
		start: new Date(), 
		end: webix.Date.add(new Date(), 2, "month")
	}
});	
~~~

### Where to start

- [Overview of the DateRange Control](desktop/daterange.md)
- [Samples](http://docs.webix.com/samples/60_pro/14_daterange/01_daterange.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.layout.md">ui.layout</a>, <a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.daterange_addview.md - add new view to layout-like component
- api/link/ui.daterange_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.daterange_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.daterange_bind.md - binds components
- api/link/ui.daterange_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.daterange_callevent.md - calls an inner event
- api/link/ui.daterange_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.daterange_destructor.md - destructs the calling object
- api/link/ui.daterange_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.daterange_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.daterange_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.daterange_getchildviews.md - returns child views of the calling component
- api/link/ui.daterange_getformview.md - returns master form for the input
- api/link/ui.daterange_getnode.md - returns the main HTML container for the calling object
- api/link/ui.daterange_getparentview.md - returns the parent view of the component
- api/link/ui.daterange_gettopparentview.md - returns top parent view
- api/ui.daterange_getvalue.md - returns the current value of the DateRange
- api/link/ui.daterange_hasevent.md - checks whether the component has the specified event
- api/link/ui.daterange_hide.md - hides the view
- api/link/ui.daterange_index.md - returns the cell index in the layout collection
- api/link/ui.daterange_isenabled.md - checks whether the view is enabled
- api/link/ui.daterange_isvisible.md - checks whether the view is visible
- api/link/ui.daterange_mapevent.md - routes events from one object to another
- api/link/ui.daterange_reconstruct.md - rebuilds the layout
- api/ui.daterange_refresh.md - redraws the DateRange
- api/link/ui.daterange_removeview.md - removes view from layout-like component
- api/link/ui.daterange_resize.md - adjusts the view to a new size
- api/link/ui.daterange_resizechildren.md - resizes all children of the calling component
- api/ui.daterange_setvalue.md - sets a new date range
- api/link/ui.daterange_show.md - makes the component visible
- api/link/ui.daterange_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.daterange_unbind.md - breaks "bind" link
- api/link/ui.daterange_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/ui.daterange_onafterdateselect_event.md - fires after a user has selected a date range
- api/ui.daterange_onbeforedateselect_event.md - fires when a user clicks on the end date of the range, but before the range is selected
- api/link/ui.daterange_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/ui.daterange_onchange_event.md - fires when a user changes month, year or time in selector
- api/ui.daterange_ondateclear_event.md - fires on clicking the [Clear]() button
- api/link/ui.daterange_ondestruct_event.md - occurs when component destroyed
- api/ui.daterange_ontodayset_event.md - fires on clicking the Today button
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.daterange_animate_config.md - defines or disables view change animation.
- api/link/ui.daterange_borderless_config.md - used to hide the component borders
- api/ui.daterange_button_config.md - sets a button at the bottom of DateRange
- api/ui.daterange_calendarcount_config.md - sets the number of calendars to be rendered in the DateRange view
- api/ui.daterange_calendarheight_config.md - sets the height of calendar area in the DateRange view in pixels
- api/link/ui.daterange_cols_config.md - array of views objects arranged horizontally
- api/link/ui.daterange_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.daterange_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.daterange_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.daterange_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.daterange_height_config.md - sets the height of the component
- api/link/ui.daterange_hidden_config.md - defines whether the view will be hidden initially
- api/ui.daterange_icons_config.md - sets an array of icons in the DateRange or hides them
- api/link/ui.daterange_id_config.md - the component ID
- api/link/ui.daterange_isolate_config.md - masks IDs of all inner elements
- api/link/ui.daterange_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/link/ui.daterange_maxheight_config.md - sets the maximum height for the view
- api/link/ui.daterange_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.daterange_minheight_config.md - sets the minimal height for the view
- api/link/ui.daterange_minwidth_config.md - sets the minimal width for the view
- api/link/ui.daterange_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.daterange_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/link/ui.daterange_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/link/ui.daterange_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/link/ui.daterange_responsive_config.md - enables responsive mode for horizontal layout
- api/link/ui.daterange_rows_config.md - array of views objects arranged vertically
- api/ui.daterange_timepicker_config.md - enables clock displaying for time selection
- api/link/ui.daterange_type_config.md - defines the layout borders
- api/ui.daterange_value_config.md - sets the initially selected date range
- api/link/ui.daterange_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.daterange_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.daterange_$getsize_other.md - returns the current size of the component
- api/link/ui.daterange_$height_other.md - current height of the view
- api/link/ui.daterange_$setsize_other.md - sets the component size
- api/link/ui.daterange_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.daterange_$view_other.md - reference to top html element of the view
- api/link/ui.daterange_$width_other.md - current width of the view
- api/link/ui.daterange_config_other.md - all options from initial component configuration
- api/link/ui.daterange_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.daterange_methods.md
- api/refs/ui.daterange_props.md
- api/refs/ui.daterange_events.md
- api/refs/ui.daterange_others.md

