ui.counter 
=============


{{memo A spin box, aka an up-down control. }}

The control allows users to precisely change numeric data. It provides up/down buttons that increment or decrement the value with a predefined step. Check [counter](desktop/controls.md#counter) documentation for more detailed description.

### Constructor

~~~js
	var counter = webix.ui({
		view:"counter", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_counter({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.text.md">ui.text</a>, <a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.counter_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.counter_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.counter_bind.md - binds components
- api/link/ui.counter_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.counter_blur.md - removes the focus from the control
- api/link/ui.counter_callevent.md - calls an inner event
- api/link/ui.counter_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.counter_destructor.md - destructs the calling object
- api/link/ui.counter_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.counter_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.counter_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.counter_focus.md - sets focus to the control
- api/link/ui.counter_getchildviews.md - returns child views of the calling component
- api/link/ui.counter_getformview.md - returns master form for the input
- api/link/ui.counter_getinputnode.md - gets the HTML element related to the component
- api/link/ui.counter_getnode.md - returns the main HTML container for the calling object
- api/link/ui.counter_getparentview.md - returns the parent view of the component
- api/link/ui.counter_gettopparentview.md - returns top parent view
- api/link/ui.counter_getvalue.md - returns the current value of the control
- api/link/ui.counter_hasevent.md - checks whether the component has the specified event
- api/link/ui.counter_hide.md - hides the view
- api/link/ui.counter_isenabled.md - checks whether the view is enabled
- api/link/ui.counter_isvisible.md - checks whether the view is visible
- api/link/ui.counter_mapevent.md - routes events from one object to another
- api/ui.counter_next.md - set next value in counter input
- api/ui.counter_prev.md - set previous value in counter input
- api/link/ui.counter_refresh.md - repaints the component
- api/link/ui.counter_render.md - renders the specified item or the whole component
- api/link/ui.counter_resize.md - adjusts the view to a new size
- api/link/ui.counter_setvalue.md - sets a new value for the component
- api/ui.counter_shift.md - adds value to the counter
- api/link/ui.counter_show.md - makes the component visible
- api/link/ui.counter_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.counter_unbind.md - breaks "bind" link
- api/link/ui.counter_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.counter_validate.md - validates value of input
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.counter_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.counter_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.counter_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.counter_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.counter_onchange_event.md - fires when the value of the control is changed
- api/link/ui.counter_ondestruct_event.md - occurs when component destroyed
- api/link/ui.counter_onitemclick_event.md - fires after the control has been clicked
- api/link/ui.counter_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.counter_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.counter_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.counter_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.counter_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.counter_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.counter_ontouchmove_event.md - occurs during touch movement
- api/link/ui.counter_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.counter_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.counter_align_config.md - the alignment of the control within the parent container
- api/link/ui.counter_animate_config.md - defines or disables view change animation.
- api/link/ui.counter_attributes_config.md - sets an hash of HTML input attributes that will be parsed for the Webix input control
- api/link/ui.counter_borderless_config.md - used to hide the component borders
- api/link/ui.counter_click_config.md - click action handler
- api/link/ui.counter_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.counter_content_config.md - the id or node, whose content will be moved to the view
- api/link/ui.counter_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.counter_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.counter_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.counter_height_config.md - sets the height of the component
- api/link/ui.counter_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.counter_hotkey_config.md - sets a hotkey that triggers button clicking
- api/link/ui.counter_id_config.md - the component ID
- api/link/ui.counter_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.counter_inputpadding_config.md - padding of text in the input
- api/link/ui.counter_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.counter_label_config.md - the text label of the control
- api/link/ui.counter_labelposition_config.md - positions label above the control
- api/link/ui.counter_labelwidth_config.md - the width of the label
- api/ui.counter_max_config.md - the maximum value of the control
- api/link/ui.counter_maxheight_config.md - sets the maximum height for the view
- api/link/ui.counter_maxwidth_config.md - sets the maximum width for the view
- api/ui.counter_min_config.md - the minimum value of the control
- api/link/ui.counter_minheight_config.md - sets the minimal height for the view
- api/link/ui.counter_minwidth_config.md - sets the minimal width for the view
- api/link/ui.counter_name_config.md - name of the control
- api/link/ui.counter_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.counter_placeholder_config.md - placeholder text for the input
- api/link/ui.counter_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.counter_readonly_config.md - configures readonly mode for the input
- api/link/ui.counter_relatedaction_config.md - action to call when value of cell changes
- api/link/ui.counter_relatedview_config.md - id of view, that will be affected by relatedAction operation
- api/link/ui.counter_required_config.md - marks field as required
- api/ui.counter_step_config.md - the step of the control (the difference between two successive values)
- api/link/ui.counter_suggest_config.md - links suggest list to the input
- api/link/ui.counter_tabfocus_config.md - defines whether the control will be included in the tab navigation order
- api/link/ui.counter_template_config.md - the component template
- api/link/ui.counter_tooltip_config.md - tooltip for the input
- api/link/ui.counter_type_config.md - the type of the control
- api/link/ui.counter_validate_config.md - adds validation to the field
- api/link/ui.counter_validateevent_config.md - on which event validation fires
- api/link/ui.counter_value_config.md - sets the initial value for a control
- api/link/ui.counter_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.counter_$getsize_other.md - returns the current size of the component
- api/link/ui.counter_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.counter_$height_other.md - current height of the view
- api/link/ui.counter_$render_other.md - code called after rending control
- api/link/ui.counter_$rendericon_other.md - renders icon for the control
- api/link/ui.counter_$renderinput_other.md - renders html for the input
- api/link/ui.counter_$renderlabel_other.md - renders html for the label
- api/link/ui.counter_$scope_other.md - scope for resolving event and method names
- api/link/ui.counter_$setsize_other.md - sets the component size
- api/link/ui.counter_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.counter_$skin_other.md - method, which will be called when skin defined
- api/link/ui.counter_$view_other.md - reference to top html element of the view
- api/link/ui.counter_$width_other.md - current width of the view
- api/link/ui.counter_config_other.md - all options from initial component configuration
- api/link/ui.counter_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.counter_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.counter_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.counter_methods.md
- api/refs/ui.counter_props.md
- api/refs/ui.counter_events.md
- api/refs/ui.counter_others.md

