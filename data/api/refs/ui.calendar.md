ui.calendar 
=============


{{memo A single-month calendar that allows users to select dates and move to the next/previous month. }}

The control supports all date and time formats. Besides the days of the month, it can display day headings for the week days, the week number, a title with the month name and year, hour and minite selectors. Customizable and mostly used as a flat calendar. Check [calendar](desktop/calendar.md) documentation for more detailed description.

### Constructor

~~~js
	var calendar = webix.ui({
		view:"calendar", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_calendar({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.calendar_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.calendar_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.calendar_bind.md - binds components
- api/link/ui.calendar_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.calendar_callevent.md - calls an inner event
- api/link/ui.calendar_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.calendar_destructor.md - destructs the calling object
- api/link/ui.calendar_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.calendar_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.calendar_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.calendar_getchildviews.md - returns child views of the calling component
- api/link/ui.calendar_getformview.md - returns master form for the input
- api/link/ui.calendar_getnode.md - returns the main HTML container for the calling object
- api/link/ui.calendar_getparentview.md - returns the parent view of the component
- api/ui.calendar_getselecteddate.md - gets the current selected date
- api/link/ui.calendar_gettopparentview.md - returns top parent view
- api/ui.calendar_getvalue.md - returns the current value of the component
- api/ui.calendar_getvisibledate.md - gets  visible date
- api/link/ui.calendar_hasevent.md - checks whether the component has the specified event
- api/link/ui.calendar_hide.md - hides the view
- api/link/ui.calendar_isenabled.md - checks whether the view is enabled
- api/link/ui.calendar_isvisible.md - checks whether the view is visible
- api/ui.calendar_locate.md - gets the id of an item from the specified HTML event
- api/link/ui.calendar_mapevent.md - routes events from one object to another
- api/ui.calendar_refresh.md - repaints the component
- api/ui.calendar_render.md - renders the specified item or the whole component
- api/link/ui.calendar_resize.md - adjusts the view to a new size
- api/ui.calendar_selectdate.md - selects the specified date
- api/ui.calendar_setvalue.md - sets a new value for the component
- api/link/ui.calendar_show.md - makes the component visible
- api/ui.calendar_showcalendar.md - makes the specified date displayed in the calendar
- api/link/ui.calendar_unbind.md - breaks "bind" link
- api/link/ui.calendar_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.calendar_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/ui.calendar_onafterdateselect_event.md - fires after a user has selected a date
- api/ui.calendar_onaftermonthchange_event.md - called after month in selector is changed.
- api/ui.calendar_onafterrender_event.md - called after the rendering of calendar is complete.
- api/link/ui.calendar_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/ui.calendar_onafterzoom_event.md - 
- api/link/ui.calendar_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/ui.calendar_onbeforedateselect_event.md - fires when a user clicks on a date but before it is selected in the calendar
- api/ui.calendar_onbeforemonthchange_event.md - triggered immediately before month in selector is changed.
- api/ui.calendar_onbeforerender_event.md - triggered immediately before rendering of calendar is started.
- api/ui.calendar_onbeforezoom_event.md - 
- api/link/ui.calendar_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/ui.calendar_onchange_event.md - fired when a user changes month, year or time in selector.
- api/ui.calendar_ondateselect_event.md - fires when a user selects a date.
- api/link/ui.calendar_ondestruct_event.md - occurs when component destroyed
- api/link/ui.calendar_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.calendar_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.calendar_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.calendar_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.calendar_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.calendar_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.calendar_onrotate_event.md - occurs on screen rotating
- api/link/ui.calendar_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.calendar_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.calendar_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.calendar_ontouchmove_event.md - occurs during touch movement
- api/link/ui.calendar_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.calendar_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.calendar_animate_config.md - defines or disables view change animation.
- api/ui.calendar_blockdates_config.md - defines the selectable range
- api/link/ui.calendar_borderless_config.md - used to hide the component borders
- api/ui.calendar_calendarheader_config.md - the format for the title with the month name and year
- api/ui.calendar_calendartime_config.md - defines calendar time format (with timepicker enabled)
- api/ui.calendar_calendarweekheader_config.md - specifies the label for the column with weeks numbers
- api/ui.calendar_cellheight_config.md - the height of the cell with day (36)
- api/link/ui.calendar_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.calendar_css_config.md - the name of a css class that will be applied to the view container
- api/ui.calendar_date_config.md - sets the initial date of the calendar (particularly month and year).
- api/ui.calendar_daytemplate_config.md - defines a template for a calendar day cell
- api/link/ui.calendar_disabled_config.md - disables item
- api/ui.calendar_events_config.md - sets an additional css class that will be applied to days
- api/link/ui.calendar_gravity_config.md - sets the view gravity (1 by default)
- api/ui.calendar_headerheight_config.md - total height of the area not taken by calendar body
- api/link/ui.calendar_height_config.md - sets the height of the component
- api/link/ui.calendar_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.calendar_id_config.md - the component ID
- api/ui.calendar_maxdate_config.md - set man limit for selected date
- api/link/ui.calendar_maxheight_config.md - sets the maximum height for the view
- api/link/ui.calendar_maxwidth_config.md - sets the maximum width for the view
- api/ui.calendar_mindate_config.md - set min limit for selected date
- api/link/ui.calendar_minheight_config.md - sets the minimal height for the view
- api/link/ui.calendar_minwidth_config.md - sets the minimal width for the view
- api/ui.calendar_minutestep_config.md - step of time selector
- api/ui.calendar_monthselect_config.md - enables the ability to select month by clicking the "month" panel
- api/link/ui.calendar_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/ui.calendar_navigation_config.md - enables/disables month navigation in header - the possibility to change months (true)
- api/link/ui.calendar_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.calendar_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.calendar_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.calendar_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.calendar_onmousemove_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/ui.calendar_select_config.md - enables date selection within the calendar.
- api/ui.calendar_skipemptyweeks_config.md - enables/disables displaying empty weeks (true)
- api/ui.calendar_timepicker_config.md - enables clock for time selection
- api/ui.calendar_timepickerheight_config.md - sets height of timepicker area
- api/ui.calendar_weekheader_config.md - enables/disables additional header with week days (false)
- api/ui.calendar_weeknumber_config.md - enables/disables additional left column with weeks' numbers (false)
- api/link/ui.calendar_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.calendar_$getsize_other.md - returns the current size of the component
- api/link/ui.calendar_$height_other.md - current height of the view
- api/link/ui.calendar_$scope_other.md - scope for resolving event and method names
- api/link/ui.calendar_$setsize_other.md - sets the component size
- api/link/ui.calendar_$skin_other.md - method, which will be called when skin defined
- api/link/ui.calendar_$view_other.md - reference to top html element of the view
- api/link/ui.calendar_$width_other.md - current width of the view
- api/link/ui.calendar_config_other.md - all options from initial component configuration
- api/link/ui.calendar_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.calendar_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.calendar_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.calendar_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.calendar_on_mouse_move_other.md - attaches a dblclick behavior for component items with the specified CSS class.
}}


@index:
- api/refs/ui.calendar_methods.md
- api/refs/ui.calendar_props.md
- api/refs/ui.calendar_events.md
- api/refs/ui.calendar_others.md

