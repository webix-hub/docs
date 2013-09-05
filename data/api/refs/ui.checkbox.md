ui.checkbox 
=============


{{memo A two-state check box. }}

The control allows users to make multiple choices from a number of options. Fully customizable and can be used both as a stand-alone view and as a part of a form.  Check [checkbox](desktop__controls.md#checkbox) documentation for more detailed description.

### Constructor

~~~js
	var checkbox = webix.ui({
		view:"checkbox", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_checkbox({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.text.md">ui.text</a>, <a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>

Methods
-------

{{links
- api/link/ui.checkbox_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.checkbox_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.checkbox_bind.md - binds components
- api/link/ui.checkbox_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.checkbox_blur.md - removes the focus from the control
- api/link/ui.checkbox_callevent.md - calls an inner event
- api/link/ui.checkbox_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.checkbox_destructor.md - destructs the calling object
- api/link/ui.checkbox_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.checkbox_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.checkbox_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.checkbox_focus.md - sets focus to the control
- api/link/ui.checkbox_getchildviews.md - returns child views of the calling component
- api/link/ui.checkbox_getinputnode.md - gets the HTML element related to the component
- api/link/ui.checkbox_getnode.md - returns the main HTML container for the calling object
- api/link/ui.checkbox_getparentview.md - returns the parent view of the component
- api/link/ui.checkbox_gettopparentview.md - returns top parent view
- api/link/ui.checkbox_getvalue.md - returns the current value of the control
- api/link/ui.checkbox_hasevent.md - checks whether the component has the specified event
- api/link/ui.checkbox_hide.md - hides the view
- api/link/ui.checkbox_isenabled.md - checks whether the view is enabled
- api/link/ui.checkbox_isvisible.md - checks whether the view is visible
- api/link/ui.checkbox_mapevent.md - routes events from one object to another
- api/link/ui.checkbox_refresh.md - repaints the component
- api/link/ui.checkbox_render.md - renders the specified item or the whole component
- api/link/ui.checkbox_resize.md - adjusts the view to a new size
- api/link/ui.checkbox_setvalue.md - sets a new value for the component
- api/link/ui.checkbox_show.md - makes the component visible
- api/link/ui.checkbox_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/ui.checkbox_toggle.md - swiches between states of the control ('checked' to 'unchecked' and vice-versa)
- api/link/ui.checkbox_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


Events
------

{{links
- api/link/ui.checkbox_onafterrender_event.md - occurs immediately after the component has been rendered
- api/link/ui.checkbox_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.checkbox_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.checkbox_onchange_event.md - fires when the value of the control is changed
}}


Properties
----------

{{links
- api/link/ui.checkbox_align_config.md - the alignment of the control within the parent container
- api/link/ui.checkbox_animate_config.md - defines or disables view change animation.
- api/link/ui.checkbox_attributes_config.md - sets an hash of HTML input attributes that will be parsed for the Webix input control
- api/link/ui.checkbox_borderless_config.md - used to hide the component borders
- api/link/ui.checkbox_click_config.md - click action handler
- api/link/ui.checkbox_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.checkbox_content_config.md - the id or node, whose content will be moved to the view
- api/link/ui.checkbox_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.checkbox_disabled_config.md - disables item
- api/link/ui.checkbox_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.checkbox_height_config.md - sets the height of the component
- api/link/ui.checkbox_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.checkbox_id_config.md - the component ID
- api/link/ui.checkbox_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.checkbox_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.checkbox_label_config.md - the text label of the control
- api/link/ui.checkbox_labelposition_config.md - positions label above the control
- api/link/ui.checkbox_labelwidth_config.md - the width of the label
- api/link/ui.checkbox_maxheight_config.md - sets the maximum height for the view
- api/link/ui.checkbox_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.checkbox_minheight_config.md - sets the minimal height for the view
- api/link/ui.checkbox_minwidth_config.md - sets the minimal width for the view
- api/link/ui.checkbox_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.checkbox_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.checkbox_suggest_config.md - links suggest list to the input
- api/link/ui.checkbox_tabfocus_config.md - defines whether the control will be included in the tab navigation order
- api/link/ui.checkbox_template_config.md - the component template
- api/link/ui.checkbox_type_config.md - the type of the control
- api/link/ui.checkbox_value_config.md - sets the initial value for a control
- api/link/ui.checkbox_width_config.md - sets the width of the component
}}




Other
-----

{{links
- api/link/ui.checkbox_$formelement_other.md - flag which instruct to process such view as form input
- api/link/ui.checkbox_$getsize_other.md - returns the current size of the component
- api/link/ui.checkbox_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.checkbox_$height_other.md - current height of the view
- api/link/ui.checkbox_$renderinput_other.md - renders html for the input
- api/link/ui.checkbox_$setsize_other.md - sets the component size
- api/link/ui.checkbox_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.checkbox_$skin_other.md - method, which will be called when skin defined
- api/link/ui.checkbox_$view_other.md - reference to top html element of the view
- api/link/ui.checkbox_$width_other.md - current width of the view
- api/link/ui.checkbox_config_other.md - all options from initial component configuration
- api/link/ui.checkbox_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.checkbox_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.checkbox_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.checkbox_methods.md
- api/refs/ui.checkbox_props.md
- api/refs/ui.checkbox_events.md
- api/refs/ui.checkbox_others.md

