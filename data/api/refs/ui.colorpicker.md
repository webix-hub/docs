ui.colorpicker 
=============


{{memo A control for selecting a color from a swatch palette. }}

The component handles RGB, HSL, and hex formats and allows setting custom colors blocks. Check [colorpicker](desktop__controls.md#colorpicker) documentation for more detailed description.

### Constructor

~~~js
	var colorpicker = webix.ui({
		view:"colorpicker", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_colorpicker({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.datepicker.md">ui.datepicker</a>, <a href="api/refs/ui.text.md">ui.text</a>, <a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>

Methods
-------

{{links
- api/link/ui.colorpicker_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.colorpicker_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.colorpicker_bind.md - binds components
- api/link/ui.colorpicker_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.colorpicker_blur.md - removes the focus from the control
- api/link/ui.colorpicker_callevent.md - calls an inner event
- api/link/ui.colorpicker_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.colorpicker_destructor.md - destructs the calling object
- api/link/ui.colorpicker_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.colorpicker_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.colorpicker_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.colorpicker_focus.md - sets focus to the control
- api/link/ui.colorpicker_getchildviews.md - returns child views of the calling component
- api/link/ui.colorpicker_getformview.md - returns master form for the input
- api/link/ui.colorpicker_getinputnode.md - gets the HTML element related to the component
- api/link/ui.colorpicker_getnode.md - returns the main HTML container for the calling object
- api/link/ui.colorpicker_getparentview.md - returns the parent view of the component
- api/link/ui.colorpicker_getpopup.md - return popup element of the input
- api/link/ui.colorpicker_gettopparentview.md - returns top parent view
- api/link/ui.colorpicker_getvalue.md - returns the current value of the control
- api/link/ui.colorpicker_hasevent.md - checks whether the component has the specified event
- api/link/ui.colorpicker_hide.md - hides the view
- api/link/ui.colorpicker_isenabled.md - checks whether the view is enabled
- api/link/ui.colorpicker_isvisible.md - checks whether the view is visible
- api/link/ui.colorpicker_mapevent.md - routes events from one object to another
- api/link/ui.colorpicker_refresh.md - repaints the component
- api/link/ui.colorpicker_render.md - renders the specified item or the whole component
- api/link/ui.colorpicker_resize.md - adjusts the view to a new size
- api/link/ui.colorpicker_setvalue.md - sets a new value for the component
- api/link/ui.colorpicker_show.md - makes the component visible
- api/link/ui.colorpicker_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.colorpicker_unbind.md - breaks "bind" link
- api/link/ui.colorpicker_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.colorpicker_validate.md - validates value of input
}}


Events
------

{{links
- api/link/ui.colorpicker_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.colorpicker_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.colorpicker_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.colorpicker_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.colorpicker_onchange_event.md - fires when the value of the control is changed
- api/link/ui.colorpicker_ondestruct_event.md - occurs when component destroyed
- api/link/ui.colorpicker_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.colorpicker_onrotate_event.md - occurs on screen rotating
- api/link/ui.colorpicker_onswipex_event.md - 
- api/link/ui.colorpicker_onswipey_event.md - 
- api/link/ui.colorpicker_ontouchend_event.md - 
- api/link/ui.colorpicker_ontouchmove_event.md - 
- api/link/ui.colorpicker_ontouchstart_event.md - 
- api/link/ui.colorpicker_onviewresize_event.md - view size was changed by resizer
}}


Properties
----------

{{links
- api/link/ui.colorpicker_align_config.md - the alignment of the control within the parent container
- api/link/ui.colorpicker_animate_config.md - defines or disables view change animation.
- api/link/ui.colorpicker_attributes_config.md - sets an hash of HTML input attributes that will be parsed for the Webix input control
- api/link/ui.colorpicker_borderless_config.md - used to hide the component borders
- api/link/ui.colorpicker_click_config.md - click action handler
- api/link/ui.colorpicker_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.colorpicker_content_config.md - the id or node, whose content will be moved to the view
- api/link/ui.colorpicker_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.colorpicker_disabled_config.md - disables item
- api/link/ui.colorpicker_format_config.md - sets date format in the control
- api/link/ui.colorpicker_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.colorpicker_height_config.md - sets the height of the component
- api/link/ui.colorpicker_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.colorpicker_hotkey_config.md - sets a hotkey that triggers button clicking
- api/link/ui.colorpicker_icon_config.md - sets an icon type
- api/link/ui.colorpicker_id_config.md - the component ID
- api/link/ui.colorpicker_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.colorpicker_inputpadding_config.md - padding of text in the input
- api/link/ui.colorpicker_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.colorpicker_label_config.md - the text label of the control
- api/link/ui.colorpicker_labelposition_config.md - positions label above the control
- api/link/ui.colorpicker_labelwidth_config.md - the width of the label
- api/link/ui.colorpicker_maxheight_config.md - sets the maximum height for the view
- api/link/ui.colorpicker_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.colorpicker_minheight_config.md - sets the minimal height for the view
- api/link/ui.colorpicker_minwidth_config.md - sets the minimal width for the view
- api/link/ui.colorpicker_name_config.md - name of the control
- api/link/ui.colorpicker_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.colorpicker_placeholder_config.md - placeholder text for the input
- api/link/ui.colorpicker_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.colorpicker_readonly_config.md - configures readonly mode for the input
- api/link/ui.colorpicker_relatedaction_config.md - action to call when value of cell changes
- api/link/ui.colorpicker_relatedview_config.md - id of view, that will be affected by relatedAction operation
- api/link/ui.colorpicker_required_config.md - marks field as required
- api/link/ui.colorpicker_stringresult_config.md - if the parameter is set to true, the method getValue returns data as string (otherwise, as object)
- api/link/ui.colorpicker_suggest_config.md - links suggest list to the input
- api/link/ui.colorpicker_tabfocus_config.md - defines whether the control will be included in the tab navigation order
- api/link/ui.colorpicker_template_config.md - the component template
- api/link/ui.colorpicker_timepicker_config.md - enables optional timepicker in the calendar
- api/link/ui.colorpicker_tooltip_config.md - tooltip for the input
- api/link/ui.colorpicker_type_config.md - the type of the control
- api/link/ui.colorpicker_validate_config.md - adds validation to the field
- api/link/ui.colorpicker_validateevent_config.md - on which event validation fires
- api/link/ui.colorpicker_value_config.md - sets the initial value for a control
- api/link/ui.colorpicker_width_config.md - sets the width of the component
}}




Other
-----

{{links
- api/link/ui.colorpicker_$getsize_other.md - returns the current size of the component
- api/link/ui.colorpicker_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.colorpicker_$height_other.md - current height of the view
- api/link/ui.colorpicker_$rendericon_other.md - optional render for the icon block
- api/link/ui.colorpicker_$renderinput_other.md - renders html for the input
- api/link/ui.colorpicker_$scope_other.md - scope for resolving event and method names
- api/link/ui.colorpicker_$setsize_other.md - sets the component size
- api/link/ui.colorpicker_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.colorpicker_$skin_other.md - method, which will be called when skin defined
- api/link/ui.colorpicker_$view_other.md - reference to top html element of the view
- api/link/ui.colorpicker_$width_other.md - current width of the view
- api/link/ui.colorpicker_config_other.md - all options from initial component configuration
- api/link/ui.colorpicker_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.colorpicker_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.colorpicker_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.colorpicker_methods.md
- api/refs/ui.colorpicker_props.md
- api/refs/ui.colorpicker_events.md
- api/refs/ui.colorpicker_others.md

