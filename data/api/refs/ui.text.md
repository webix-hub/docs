ui.text 
=============


{{memo An one-line, editable text field with the label inside it. }}

A label inside the control differs it from the input component. Check [text](desktop/controls.md#text) documentation for more detailed description.

### Constructor

~~~js
	var text = webix.ui({
		view:"text", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_text({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.text_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.text_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.text_bind.md - binds components
- api/link/ui.text_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.text_blur.md - removes the focus from the control
- api/link/ui.text_callevent.md - calls an inner event
- api/link/ui.text_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.text_destructor.md - destructs the calling object
- api/link/ui.text_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.text_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.text_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.text_focus.md - sets focus to the control
- api/link/ui.text_getchildviews.md - returns child views of the calling component
- api/link/ui.text_getformview.md - returns master form for the input
- api/link/ui.text_getinputnode.md - gets the HTML element related to the component
- api/link/ui.text_getnode.md - returns the main HTML container for the calling object
- api/link/ui.text_getparentview.md - returns the parent view of the component
- api/link/ui.text_gettopparentview.md - returns top parent view
- api/link/ui.text_getvalue.md - returns the current value of the control
- api/link/ui.text_hasevent.md - checks whether the component has the specified event
- api/link/ui.text_hide.md - hides the view
- api/link/ui.text_isenabled.md - checks whether the view is enabled
- api/link/ui.text_isvisible.md - checks whether the view is visible
- api/link/ui.text_mapevent.md - routes events from one object to another
- api/link/ui.text_refresh.md - repaints the component
- api/link/ui.text_render.md - renders the specified item or the whole component
- api/link/ui.text_resize.md - adjusts the view to a new size
- api/link/ui.text_setvalue.md - sets a new value for the component
- api/link/ui.text_show.md - makes the component visible
- api/link/ui.text_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.text_unbind.md - breaks "bind" link
- api/link/ui.text_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/ui.text_validate.md - validates value of input
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.text_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.text_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.text_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.text_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.text_onchange_event.md - fires when the value of the control is changed
- api/link/ui.text_ondestruct_event.md - occurs when component destroyed
- api/link/ui.text_onitemclick_event.md - fires after the control has been clicked
- api/link/ui.text_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.text_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.text_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.text_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.text_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.text_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.text_ontouchmove_event.md - occurs during touch movement
- api/link/ui.text_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.text_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.text_align_config.md - the alignment of the control within the parent container
- api/link/ui.text_animate_config.md - defines or disables view change animation.
- api/ui.text_attributes_config.md - sets an hash of HTML input attributes that will be parsed for the Webix input control
- api/link/ui.text_borderless_config.md - used to hide the component borders
- api/link/ui.text_click_config.md - click action handler
- api/link/ui.text_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.text_content_config.md - the id or node, whose content will be moved to the view
- api/link/ui.text_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.text_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.text_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.text_height_config.md - sets the height of the component
- api/link/ui.text_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.text_hotkey_config.md - sets a hotkey that triggers button clicking
- api/link/ui.text_id_config.md - the component ID
- api/link/ui.text_inputheight_config.md - the height of the input area, or a button's text value area.
- api/ui.text_inputpadding_config.md - padding of text in the input
- api/link/ui.text_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.text_label_config.md - the text label of the control
- api/link/ui.text_labelposition_config.md - positions label above the control
- api/ui.text_labelwidth_config.md - the width of the label
- api/link/ui.text_maxheight_config.md - sets the maximum height for the view
- api/link/ui.text_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.text_minheight_config.md - sets the minimal height for the view
- api/link/ui.text_minwidth_config.md - sets the minimal width for the view
- api/link/ui.text_name_config.md - name of the control
- api/link/ui.text_on_config.md - allows attaching custom handlers to inner events of the component
- api/ui.text_placeholder_config.md - placeholder text for the input
- api/link/ui.text_popup_config.md - allows to attach pop-up menu to the button
- api/ui.text_readonly_config.md - configures readonly mode for the input
- api/ui.text_relatedaction_config.md - action to call when value of cell changes
- api/ui.text_relatedview_config.md - id of view, that will be affected by relatedAction operation
- api/ui.text_required_config.md - marks field as required
- api/ui.text_suggest_config.md - links suggest list to the input
- api/link/ui.text_tabfocus_config.md - defines whether the control will be included in the tab navigation order
- api/link/ui.text_template_config.md - the component template
- api/link/ui.text_tooltip_config.md - tooltip for the input
- api/link/ui.text_type_config.md - the type of the control
- api/ui.text_validate_config.md - adds validation to the field
- api/ui.text_validateevent_config.md - on which event validation fires
- api/link/ui.text_value_config.md - sets the initial value for a control
- api/link/ui.text_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.text_$getsize_other.md - returns the current size of the component
- api/link/ui.text_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.text_$height_other.md - current height of the view
- api/ui.text_$render_other.md - code called after rending control
- api/ui.text_$rendericon_other.md - renders icon for the control
- api/ui.text_$renderinput_other.md - renders html for the input
- api/ui.text_$renderlabel_other.md - renders html for the label
- api/link/ui.text_$scope_other.md - scope for resolving event and method names
- api/link/ui.text_$setsize_other.md - sets the component size
- api/link/ui.text_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.text_$skin_other.md - method, which will be called when skin defined
- api/link/ui.text_$view_other.md - reference to top html element of the view
- api/link/ui.text_$width_other.md - current width of the view
- api/link/ui.text_config_other.md - all options from initial component configuration
- api/link/ui.text_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.text_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.text_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.text_methods.md
- api/refs/ui.text_props.md
- api/refs/ui.text_events.md
- api/refs/ui.text_others.md

