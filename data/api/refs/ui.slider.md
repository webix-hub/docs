ui.slider 
=============


{{memo Horizontal slider for choosing numeric values from a range of predefined ones. }}

The control allows changing numeric data by dragging a marker over a line, with a defined step (optionally). Check [slider](desktop__controls.md#slider) documentation for more detailed description.

### Constructor

~~~js
	var slider = webix.ui({
		view:"slider", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_slider({
		...config options goes here..
	});
~~~
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.text.md">ui.text</a>, <a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>

Methods
-------

{{links
- api/link/ui.slider_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.slider_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.slider_bind.md - binds components
- api/link/ui.slider_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.slider_blur.md - removes the focus from the control
- api/link/ui.slider_callevent.md - calls an inner event
- api/link/ui.slider_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.slider_destructor.md - destructs the calling object
- api/link/ui.slider_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.slider_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.slider_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.slider_focus.md - sets focus to the control
- api/link/ui.slider_getchildviews.md - returns child views of the calling component
- api/link/ui.slider_getformview.md - returns master form for the input
- api/link/ui.slider_getinputnode.md - gets the HTML element related to the component
- api/link/ui.slider_getnode.md - returns the main HTML container for the calling object
- api/link/ui.slider_getparentview.md - returns the parent view of the component
- api/link/ui.slider_gettopparentview.md - returns top parent view
- api/link/ui.slider_getvalue.md - returns the current value of the control
- api/link/ui.slider_hasevent.md - checks whether the component has the specified event
- api/link/ui.slider_hide.md - hides the view
- api/link/ui.slider_isenabled.md - checks whether the view is enabled
- api/link/ui.slider_isvisible.md - checks whether the view is visible
- api/link/ui.slider_mapevent.md - routes events from one object to another
- api/link/ui.slider_refresh.md - repaints the component
- api/link/ui.slider_render.md - renders the specified item or the whole component
- api/link/ui.slider_resize.md - adjusts the view to a new size
- api/link/ui.slider_setvalue.md - sets a new value for the component
- api/link/ui.slider_show.md - makes the component visible
- api/link/ui.slider_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.slider_unbind.md - breaks "bind" link
- api/link/ui.slider_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.slider_validate.md - validates value of input
}}


Events
------

{{links
- api/link/ui.slider_onafterrender_event.md - occurs immediately after the component has been rendered
- api/link/ui.slider_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.slider_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.slider_onchange_event.md - fires when the value of the control is changed
- api/link/ui.slider_ondestruct_event.md - occurs when component destroyed
- api/ui.slider_onsliderdrag_event.md - fires when the handle of slider was dragged ( but not released yet )
- api/link/ui.slider_onviewresize_event.md - view size was changed by resizer
}}


Properties
----------

{{links
- api/link/ui.slider_align_config.md - the alignment of the control within the parent container
- api/link/ui.slider_animate_config.md - defines or disables view change animation.
- api/link/ui.slider_attributes_config.md - sets an hash of HTML input attributes that will be parsed for the Webix input control
- api/link/ui.slider_borderless_config.md - used to hide the component borders
- api/link/ui.slider_click_config.md - click action handler
- api/link/ui.slider_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.slider_content_config.md - the id or node, whose content will be moved to the view
- api/link/ui.slider_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.slider_disabled_config.md - disables item
- api/link/ui.slider_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.slider_height_config.md - sets the height of the component
- api/link/ui.slider_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.slider_id_config.md - the component ID
- api/link/ui.slider_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.slider_inputpadding_config.md - padding of text in the input
- api/link/ui.slider_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.slider_label_config.md - the text label of the control
- api/link/ui.slider_labelposition_config.md - positions label above the control
- api/link/ui.slider_labelwidth_config.md - the width of the label
- api/ui.slider_max_config.md - max value of slider
- api/link/ui.slider_maxheight_config.md - sets the maximum height for the view
- api/link/ui.slider_maxwidth_config.md - sets the maximum width for the view
- api/ui.slider_min_config.md - min value of slider
- api/link/ui.slider_minheight_config.md - sets the minimal height for the view
- api/link/ui.slider_minwidth_config.md - sets the minimal width for the view
- api/link/ui.slider_name_config.md - name of the control
- api/link/ui.slider_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.slider_placeholder_config.md - placeholder text for the input
- api/link/ui.slider_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.slider_readonly_config.md - configures readonly mode for the input
- api/link/ui.slider_relatedaction_config.md - action to call when value of cell changes
- api/link/ui.slider_relatedview_config.md - id of view, that will be affected by relatedAction operation
- api/link/ui.slider_required_config.md - marks field as required
- api/ui.slider_step_config.md - step of slider
- api/link/ui.slider_suggest_config.md - links suggest list to the input
- api/link/ui.slider_tabfocus_config.md - defines whether the control will be included in the tab navigation order
- api/link/ui.slider_template_config.md - the component template
- api/ui.slider_title_config.md - text over slider bar
- api/link/ui.slider_tooltip_config.md - tooltip for the input
- api/link/ui.slider_type_config.md - the type of the control
- api/link/ui.slider_validate_config.md - adds validation to the field
- api/link/ui.slider_validateevent_config.md - on which event validation fires
- api/link/ui.slider_value_config.md - sets the initial value for a control
- api/link/ui.slider_width_config.md - sets the width of the component
}}




Other
-----

{{links
- api/link/ui.slider_$getsize_other.md - returns the current size of the component
- api/link/ui.slider_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.slider_$height_other.md - current height of the view
- api/link/ui.slider_$renderinput_other.md - renders html for the input
- api/link/ui.slider_$scope_other.md - scope for resolving event and method names
- api/link/ui.slider_$setsize_other.md - sets the component size
- api/link/ui.slider_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.slider_$skin_other.md - method, which will be called when skin defined
- api/link/ui.slider_$view_other.md - reference to top html element of the view
- api/link/ui.slider_$width_other.md - current width of the view
- api/link/ui.slider_config_other.md - all options from initial component configuration
- api/link/ui.slider_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.slider_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.slider_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.slider_methods.md
- api/refs/ui.slider_props.md
- api/refs/ui.slider_events.md
- api/refs/ui.slider_others.md

