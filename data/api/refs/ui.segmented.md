ui.segmented 
=============


{{memo A holistic panel that contains multiple buttons (two or more). }}

The component can be used to build a multi-item menu for navigating between views. Check [segmented](desktop/controls.md#segmented) documentation for more detailed description.

### Constructor

~~~js
	var segmented = webix.ui({
		view:"segmented", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_segmented({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.text.md">ui.text</a>, <a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/ui.segmented_addoption.md - add a new option (segment) to the button
- api/link/ui.segmented_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.segmented_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.segmented_bind.md - binds components
- api/link/ui.segmented_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.segmented_blur.md - removes the focus from the control
- api/link/ui.segmented_callevent.md - calls an inner event
- api/link/ui.segmented_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.segmented_destructor.md - destructs the calling object
- api/link/ui.segmented_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.segmented_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.segmented_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.segmented_focus.md - sets focus to the control
- api/link/ui.segmented_getchildviews.md - returns child views of the calling component
- api/link/ui.segmented_getformview.md - returns master form for the input
- api/link/ui.segmented_getinputnode.md - gets the HTML element related to the component
- api/link/ui.segmented_getnode.md - returns the main HTML container for the calling object
- api/link/ui.segmented_getparentview.md - returns the parent view of the component
- api/link/ui.segmented_gettopparentview.md - returns top parent view
- api/link/ui.segmented_getvalue.md - returns the current value of the control
- api/link/ui.segmented_hasevent.md - checks whether the component has the specified event
- api/link/ui.segmented_hide.md - hides the view
- api/link/ui.segmented_isenabled.md - checks whether the view is enabled
- api/link/ui.segmented_isvisible.md - checks whether the view is visible
- api/link/ui.segmented_mapevent.md - routes events from one object to another
- api/ui.segmented_optionindex.md - index of the option with specified ID
- api/link/ui.segmented_refresh.md - repaints the component
- api/ui.segmented_removeoption.md - removes the option of a segmented button
- api/link/ui.segmented_render.md - renders the specified item or the whole component
- api/link/ui.segmented_resize.md - adjusts the view to a new size
- api/link/ui.segmented_setvalue.md - sets a new value for the component
- api/link/ui.segmented_show.md - makes the component visible
- api/link/ui.segmented_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.segmented_unbind.md - breaks "bind" link
- api/link/ui.segmented_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.segmented_validate.md - validates value of input
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.segmented_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.segmented_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.segmented_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.segmented_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.segmented_onchange_event.md - fires when the value of the control is changed
- api/link/ui.segmented_ondestruct_event.md - occurs when component destroyed
- api/link/ui.segmented_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.segmented_onrotate_event.md - occurs on screen rotating
- api/link/ui.segmented_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.segmented_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.segmented_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.segmented_ontouchmove_event.md - occurs during touch movement
- api/link/ui.segmented_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.segmented_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.segmented_align_config.md - the alignment of the control within the parent container
- api/link/ui.segmented_animate_config.md - defines or disables view change animation.
- api/link/ui.segmented_attributes_config.md - sets an hash of HTML input attributes that will be parsed for the Webix input control
- api/link/ui.segmented_borderless_config.md - used to hide the component borders
- api/link/ui.segmented_click_config.md - click action handler
- api/link/ui.segmented_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.segmented_content_config.md - the id or node, whose content will be moved to the view
- api/link/ui.segmented_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.segmented_disabled_config.md - disables item
- api/link/ui.segmented_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.segmented_height_config.md - sets the height of the component
- api/link/ui.segmented_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.segmented_hotkey_config.md - sets a hotkey that triggers button clicking
- api/link/ui.segmented_id_config.md - the component ID
- api/link/ui.segmented_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.segmented_inputpadding_config.md - padding of text in the input
- api/link/ui.segmented_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.segmented_label_config.md - the text label of the control
- api/link/ui.segmented_labelposition_config.md - positions label above the control
- api/link/ui.segmented_labelwidth_config.md - the width of the label
- api/link/ui.segmented_maxheight_config.md - sets the maximum height for the view
- api/link/ui.segmented_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.segmented_minheight_config.md - sets the minimal height for the view
- api/link/ui.segmented_minwidth_config.md - sets the minimal width for the view
- api/ui.segmented_multiview_config.md - enables switching between multiview cells
- api/link/ui.segmented_name_config.md - name of the control
- api/link/ui.segmented_on_config.md - allows attaching custom handlers to inner events of the component
- api/ui.segmented_options_config.md - defines data items of the drop-down list
- api/link/ui.segmented_placeholder_config.md - placeholder text for the input
- api/link/ui.segmented_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.segmented_readonly_config.md - configures readonly mode for the input
- api/link/ui.segmented_relatedaction_config.md - action to call when value of cell changes
- api/link/ui.segmented_relatedview_config.md - id of view, that will be affected by relatedAction operation
- api/link/ui.segmented_required_config.md - marks field as required
- api/link/ui.segmented_suggest_config.md - links suggest list to the input
- api/link/ui.segmented_tabfocus_config.md - defines whether the control will be included in the tab navigation order
- api/link/ui.segmented_template_config.md - the component template
- api/link/ui.segmented_tooltip_config.md - tooltip for the input
- api/link/ui.segmented_type_config.md - the type of the control
- api/link/ui.segmented_validate_config.md - adds validation to the field
- api/link/ui.segmented_validateevent_config.md - on which event validation fires
- api/link/ui.segmented_value_config.md - sets the initial value for a control
- api/link/ui.segmented_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.segmented_$getsize_other.md - returns the current size of the component
- api/link/ui.segmented_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.segmented_$height_other.md - current height of the view
- api/link/ui.segmented_$render_other.md - code called after rending control
- api/link/ui.segmented_$rendericon_other.md - renders icon for the control
- api/link/ui.segmented_$renderinput_other.md - renders html for the input
- api/link/ui.segmented_$renderlabel_other.md - 
- api/link/ui.segmented_$scope_other.md - scope for resolving event and method names
- api/link/ui.segmented_$setsize_other.md - sets the component size
- api/link/ui.segmented_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.segmented_$skin_other.md - method, which will be called when skin defined
- api/link/ui.segmented_$view_other.md - reference to top html element of the view
- api/link/ui.segmented_$width_other.md - current width of the view
- api/link/ui.segmented_config_other.md - all options from initial component configuration
- api/link/ui.segmented_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.segmented_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.segmented_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.segmented_methods.md
- api/refs/ui.segmented_props.md
- api/refs/ui.segmented_events.md
- api/refs/ui.segmented_others.md

