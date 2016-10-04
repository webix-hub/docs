ui.daterangepicker 
=============


{{memo A control that allows the user to select a date range.. }}

The control combines an editable text field with a set of drop-down calendars. It supports all date and time formats. 
Besides the days of the month, it can display hour and minute selectors. 
Check [DateRangePicker](desktop/daterangepicker.md) documentation for a more detailed description.

### Constructor

~~~js
var daterangepicker = webix.ui({
	view:"daterangepicker",
	name:"default", 
	width:500, 
	label:"Default",
	value:{start: new Date(), end: webix.Date.add(new Date(), 1, "month")}
});	
~~~

### Where to start

- [Overview of the DateRange Control](desktop/daterangepicker.md)
- [Samples](http://docs.webix.com/samples/60_pro/02_form/09_daterangepicker.html)



<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.datepicker.md">ui.datepicker</a>, <a href="api/refs/ui.text.md">ui.text</a>, <a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.daterangepicker_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.daterangepicker_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.daterangepicker_bind.md - binds components
- api/link/ui.daterangepicker_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.daterangepicker_blur.md - removes the focus from the control
- api/link/ui.daterangepicker_callevent.md - calls an inner event
- api/link/ui.daterangepicker_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.daterangepicker_destructor.md - destructs the calling object
- api/link/ui.daterangepicker_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.daterangepicker_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.daterangepicker_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.daterangepicker_focus.md - sets focus to the control
- api/link/ui.daterangepicker_getchildviews.md - returns child views of the calling component
- api/link/ui.daterangepicker_getformview.md - returns master form for the input
- api/link/ui.daterangepicker_getinputnode.md - gets the HTML element related to the component
- api/link/ui.daterangepicker_getnode.md - returns the main HTML container for the calling object
- api/link/ui.daterangepicker_getparentview.md - returns the parent view of the component
- api/link/ui.daterangepicker_getpopup.md - returns popup element of the input
- api/link/ui.daterangepicker_gettext.md - gets actual text value from the control's input
- api/link/ui.daterangepicker_gettopparentview.md - returns top parent view
- api/link/ui.daterangepicker_getvalue.md - returns the current value of the control
- api/link/ui.daterangepicker_hasevent.md - checks whether the component has the specified event
- api/link/ui.daterangepicker_hide.md - hides the view
- api/link/ui.daterangepicker_isenabled.md - checks whether the view is enabled
- api/link/ui.daterangepicker_isvisible.md - checks whether the view is visible
- api/link/ui.daterangepicker_mapevent.md - routes events from one object to another
- api/link/ui.daterangepicker_refresh.md - repaints the component
- api/link/ui.daterangepicker_render.md - renders the specified item or the whole component
- api/link/ui.daterangepicker_resize.md - adjusts the view to a new size
- api/link/ui.daterangepicker_setbottomtext.md - sets the input label at the bottom of it
- api/link/ui.daterangepicker_setvalue.md - sets a new value for the component
- api/link/ui.daterangepicker_show.md - makes the component visible
- api/link/ui.daterangepicker_sync.md - allows you to sync two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.daterangepicker_unbind.md - breaks "bind" link
- api/link/ui.daterangepicker_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.daterangepicker_validate.md - validates value of input
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.daterangepicker_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.daterangepicker_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.daterangepicker_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.daterangepicker_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.daterangepicker_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.daterangepicker_onchange_event.md - fires when the value of the control is changed
- api/link/ui.daterangepicker_ondestruct_event.md - occurs when component destroyed
- api/link/ui.daterangepicker_onfocus_event.md - fires when a view gets focus
- api/link/ui.daterangepicker_onitemclick_event.md - fires after the control has been clicked
- api/link/ui.daterangepicker_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.daterangepicker_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.daterangepicker_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.daterangepicker_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.daterangepicker_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.daterangepicker_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.daterangepicker_ontouchmove_event.md - occurs during touch movement
- api/link/ui.daterangepicker_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.daterangepicker_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.daterangepicker_align_config.md - the alignment of the control within the parent container
- api/link/ui.daterangepicker_animate_config.md - defines or disables view change animation.
- api/link/ui.daterangepicker_attributes_config.md - sets a hash of HTML input attributes that will be parsed for the Webix input control
- api/link/ui.daterangepicker_autowidth_config.md - adjusts button to its text content
- api/link/ui.daterangepicker_borderless_config.md - used to hide the component borders
- api/link/ui.daterangepicker_bottomlabel_config.md - sets a label under a control
- api/link/ui.daterangepicker_bottompadding_config.md - sets the bottom offset of the control input
- api/link/ui.daterangepicker_click_config.md - click action handler
- api/link/ui.daterangepicker_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.daterangepicker_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.daterangepicker_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.daterangepicker_editable_config.md - allows entering characters in datepicker input, false by default
- api/link/ui.daterangepicker_format_config.md - sets date format in the control
- api/link/ui.daterangepicker_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.daterangepicker_height_config.md - sets the height of the component
- api/link/ui.daterangepicker_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.daterangepicker_hotkey_config.md - sets a hotkey that triggers button clicking
- api/link/ui.daterangepicker_icon_config.md - sets an icon into the control
- api/link/ui.daterangepicker_icons_config.md - shows "Today" and "Clear" icons for calendar and datepicker popup
- api/link/ui.daterangepicker_id_config.md - the component ID
- api/link/ui.daterangepicker_inputalign_config.md - the alignment of an input towards its container
- api/link/ui.daterangepicker_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.daterangepicker_inputpadding_config.md - padding of text in the input
- api/link/ui.daterangepicker_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.daterangepicker_invalid_config.md - specifies, whether the control is valid/invalid after validation
- api/link/ui.daterangepicker_invalidmessage_config.md - sets the text of a validation message
- api/link/ui.daterangepicker_label_config.md - the text label of the control
- api/link/ui.daterangepicker_labelalign_config.md - the alignment of a label towards its container
- api/link/ui.daterangepicker_labelposition_config.md - positions label in relation to the control
- api/link/ui.daterangepicker_labelwidth_config.md - the width of the label
- api/link/ui.daterangepicker_maxheight_config.md - sets the maximum height for the view
- api/link/ui.daterangepicker_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.daterangepicker_minheight_config.md - sets the minimal height for the view
- api/link/ui.daterangepicker_minwidth_config.md - sets the minimal width for the view
- api/link/ui.daterangepicker_name_config.md - name of the control
- api/link/ui.daterangepicker_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.daterangepicker_pattern_config.md - a formatting pattern applied to a text input
- api/link/ui.daterangepicker_placeholder_config.md - placeholder text for the input area
- api/link/ui.daterangepicker_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.daterangepicker_readonly_config.md - configures readonly mode for the input
- api/link/ui.daterangepicker_relatedaction_config.md - action to call when value of cell changes
- api/link/ui.daterangepicker_relatedview_config.md - id of view, that will be affected by relatedAction operation
- api/link/ui.daterangepicker_required_config.md - marks field as required
- api/link/ui.daterangepicker_stringresult_config.md - if the parameter is set to true, the method getValue returns data as string (otherwise, as object)
- api/link/ui.daterangepicker_suggest_config.md - links suggest list to the input
- api/link/ui.daterangepicker_timeicon_config.md - sets an icon for time in the datepicker
- api/link/ui.daterangepicker_timepicker_config.md - enables optional timepicker in the calendar
- api/link/ui.daterangepicker_tooltip_config.md - tooltip for the input
- api/link/ui.daterangepicker_type_config.md - the type of the control
- api/link/ui.daterangepicker_validate_config.md - adds validation to the field
- api/link/ui.daterangepicker_validateevent_config.md - on which event validation fires
- api/link/ui.daterangepicker_value_config.md - sets the initial value for a control
- api/link/ui.daterangepicker_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/ui.daterangepicker_$cssname_other.md - name of the widget which css you want to inherit for a custom widget
- api/link/ui.daterangepicker_$getsize_other.md - returns the current size of the component
- api/link/ui.daterangepicker_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.daterangepicker_$height_other.md - current height of the view
- api/link/ui.daterangepicker_$render_other.md - code called after rending control
- api/link/ui.daterangepicker_$rendericon_other.md - renders icon for the control
- api/link/ui.daterangepicker_$renderinput_other.md - called each time when component need to paint control's input
- api/link/ui.daterangepicker_$renderlabel_other.md - renders html for the label
- api/link/ui.daterangepicker_$scope_other.md - scope for resolving event and method names
- api/link/ui.daterangepicker_$setsize_other.md - sets the component size
- api/link/ui.daterangepicker_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.daterangepicker_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.daterangepicker_$view_other.md - reference to top html element of the view
- api/link/ui.daterangepicker_$width_other.md - current width of the view
- api/link/ui.daterangepicker_config_other.md - all options from initial component configuration
- api/link/ui.daterangepicker_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.daterangepicker_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.daterangepicker_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.daterangepicker_methods.md
- api/refs/ui.daterangepicker_props.md
- api/refs/ui.daterangepicker_events.md
- api/refs/ui.daterangepicker_others.md

