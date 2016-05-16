ui.datepicker 
=============


{{memo A control that allows the user to select a date. }}

 The control combines an editable text field with a drop-down calendar. Supports all date and time formats. Besides the days of the month, it can display hour and minite selectors. Check [datepicker](desktop/datepicker.md) documentation for more detailed description.

### Constructor

~~~js
var datepicker = webix.ui({
 	view:"datepicker", 
  	date:new Date(2012, 6, 8), 
  	label:'Date', 
  	timepicker:true,
  	width:300
});
~~~

### Where to start

- [Overview of the Datepicker Control](desktop/datepicker.md)
- [Samples](http://docs.webix.com/samples/13_form/01_controls/13_datepicker.html)


<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.text.md">ui.text</a>, <a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.datepicker_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.datepicker_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.datepicker_bind.md - binds components
- api/link/ui.datepicker_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.datepicker_blur.md - removes the focus from the control
- api/link/ui.datepicker_callevent.md - calls an inner event
- api/link/ui.datepicker_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.datepicker_destructor.md - destructs the calling object
- api/link/ui.datepicker_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.datepicker_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.datepicker_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.datepicker_focus.md - sets focus to the control
- api/link/ui.datepicker_getchildviews.md - returns child views of the calling component
- api/link/ui.datepicker_getformview.md - returns master form for the input
- api/link/ui.datepicker_getinputnode.md - gets the HTML element related to the component
- api/link/ui.datepicker_getnode.md - returns the main HTML container for the calling object
- api/link/ui.datepicker_getparentview.md - returns the parent view of the component
- api/ui.datepicker_getpopup.md - returns popup element of the input
- api/ui.datepicker_gettext.md - gets actual text value from the control's input
- api/link/ui.datepicker_gettopparentview.md - returns top parent view
- api/link/ui.datepicker_getvalue.md - returns the current value of the control
- api/link/ui.datepicker_hasevent.md - checks whether the component has the specified event
- api/link/ui.datepicker_hide.md - hides the view
- api/link/ui.datepicker_isenabled.md - checks whether the view is enabled
- api/link/ui.datepicker_isvisible.md - checks whether the view is visible
- api/link/ui.datepicker_mapevent.md - routes events from one object to another
- api/link/ui.datepicker_refresh.md - repaints the component
- api/link/ui.datepicker_render.md - renders the specified item or the whole component
- api/link/ui.datepicker_resize.md - adjusts the view to a new size
- api/link/ui.datepicker_setbottomtext.md - sets the input label at the bottom of it
- api/link/ui.datepicker_setvalue.md - sets a new value for the component
- api/link/ui.datepicker_show.md - makes the component visible
- api/link/ui.datepicker_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.datepicker_unbind.md - breaks "bind" link
- api/link/ui.datepicker_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.datepicker_validate.md - validates value of input
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.datepicker_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.datepicker_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.datepicker_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.datepicker_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.datepicker_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.datepicker_onchange_event.md - fires when the value of the control is changed
- api/link/ui.datepicker_ondestruct_event.md - occurs when component destroyed
- api/link/ui.datepicker_onfocus_event.md - fires when a view gets focus
- api/link/ui.datepicker_onitemclick_event.md - fires after the control has been clicked
- api/link/ui.datepicker_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.datepicker_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.datepicker_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.datepicker_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.datepicker_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.datepicker_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.datepicker_ontouchmove_event.md - occurs during touch movement
- api/link/ui.datepicker_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.datepicker_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.datepicker_align_config.md - the alignment of the control within the parent container
- api/link/ui.datepicker_animate_config.md - defines or disables view change animation.
- api/link/ui.datepicker_attributes_config.md - sets a hash of HTML input attributes that will be parsed for the Webix input control
- api/link/ui.datepicker_autowidth_config.md - adjusts button to its text content
- api/link/ui.datepicker_borderless_config.md - used to hide the component borders
- api/link/ui.datepicker_bottomlabel_config.md - sets a label under a control
- api/link/ui.datepicker_bottompadding_config.md - sets the bottom offset of the control input
- api/link/ui.datepicker_click_config.md - click action handler
- api/link/ui.datepicker_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.datepicker_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.datepicker_disabled_config.md - indicates whether an item is enabled or not
- api/ui.datepicker_editable_config.md - allows entering characters in datepicker input, false by default
- api/ui.datepicker_format_config.md - sets date format in the control
- api/link/ui.datepicker_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.datepicker_height_config.md - sets the height of the component
- api/link/ui.datepicker_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.datepicker_hotkey_config.md - sets a hotkey that triggers button clicking
- api/link/ui.datepicker_icon_config.md - sets an icon into the control
- api/ui.datepicker_icons_config.md - shows "Today" and "Clear" icons for calendar and datepicker popup
- api/link/ui.datepicker_id_config.md - the component ID
- api/link/ui.datepicker_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.datepicker_inputpadding_config.md - padding of text in the input
- api/link/ui.datepicker_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.datepicker_invalidmessage_config.md - sets the text of a validation message
- api/link/ui.datepicker_label_config.md - the text label of the control
- api/link/ui.datepicker_labelposition_config.md - positions label in relation to the control
- api/link/ui.datepicker_labelwidth_config.md - the width of the label
- api/link/ui.datepicker_maxheight_config.md - sets the maximum height for the view
- api/link/ui.datepicker_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.datepicker_minheight_config.md - sets the minimal height for the view
- api/link/ui.datepicker_minwidth_config.md - sets the minimal width for the view
- api/link/ui.datepicker_name_config.md - name of the control
- api/link/ui.datepicker_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.datepicker_placeholder_config.md - placeholder text for the input area
- api/link/ui.datepicker_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.datepicker_readonly_config.md - configures readonly mode for the input
- api/link/ui.datepicker_relatedaction_config.md - action to call when value of cell changes
- api/link/ui.datepicker_relatedview_config.md - id of view, that will be affected by relatedAction operation
- api/link/ui.datepicker_required_config.md - marks field as required
- api/ui.datepicker_stringresult_config.md - if the parameter is set to true, the method getValue returns data as string (otherwise, as object)
- api/link/ui.datepicker_suggest_config.md - links suggest list to the input
- api/link/ui.datepicker_tabfocus_config.md - defines whether the control will be included in the tab navigation order
- api/ui.datepicker_text_config.md - visible text in the related input
- api/ui.datepicker_timeicon_config.md - sets an icon for time in the datepicker
- api/ui.datepicker_timepicker_config.md - enables optional timepicker in the calendar
- api/link/ui.datepicker_tooltip_config.md - tooltip for the input
- api/link/ui.datepicker_type_config.md - the type of the control
- api/link/ui.datepicker_validate_config.md - adds validation to the field
- api/link/ui.datepicker_validateevent_config.md - on which event validation fires
- api/link/ui.datepicker_value_config.md - sets the initial value for a control
- api/link/ui.datepicker_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.datepicker_$getsize_other.md - returns the current size of the component
- api/link/ui.datepicker_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.datepicker_$height_other.md - current height of the view
- api/link/ui.datepicker_$render_other.md - code called after rending control
- api/link/ui.datepicker_$rendericon_other.md - renders icon for the control
- api/link/ui.datepicker_$renderinput_other.md - called each time when component need to paint control's input
- api/link/ui.datepicker_$renderlabel_other.md - renders html for the label
- api/link/ui.datepicker_$scope_other.md - scope for resolving event and method names
- api/link/ui.datepicker_$setsize_other.md - sets the component size
- api/link/ui.datepicker_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.datepicker_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.datepicker_$view_other.md - reference to top html element of the view
- api/link/ui.datepicker_$width_other.md - current width of the view
- api/link/ui.datepicker_config_other.md - all options from initial component configuration
- api/link/ui.datepicker_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.datepicker_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.datepicker_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.datepicker_methods.md
- api/refs/ui.datepicker_props.md
- api/refs/ui.datepicker_events.md
- api/refs/ui.datepicker_others.md

