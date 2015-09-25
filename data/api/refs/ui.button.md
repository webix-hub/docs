ui.button 
=============


{{memo A clickable button. }}

The control has a collection of preset looks and can be used both as a stand-alone view and as a part of a form or toolbar. Fully customizable. Check [button](desktop/button.md) documentation for more detailed description.

### Constructor

~~~js
	var button = webix.ui({
		view:"button", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_button({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.button_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.button_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.button_bind.md - binds components
- api/link/ui.button_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/ui.button_blur.md - removes the focus from the control
- api/link/ui.button_callevent.md - calls an inner event
- api/link/ui.button_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.button_destructor.md - destructs the calling object
- api/link/ui.button_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.button_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.button_enable.md - enables the calling view that was disabled by the 'disable' method
- api/ui.button_focus.md - sets focus to the control
- api/link/ui.button_getchildviews.md - returns child views of the calling component
- api/link/ui.button_getformview.md - returns master form for the input
- api/ui.button_getinputnode.md - gets the HTML element related to the component
- api/link/ui.button_getnode.md - returns the main HTML container for the calling object
- api/link/ui.button_getparentview.md - returns the parent view of the component
- api/link/ui.button_gettopparentview.md - returns top parent view
- api/ui.button_getvalue.md - returns the current value of the control
- api/link/ui.button_hasevent.md - checks whether the component has the specified event
- api/link/ui.button_hide.md - hides the view
- api/link/ui.button_isenabled.md - checks whether the view is enabled
- api/link/ui.button_isvisible.md - checks whether the view is visible
- api/link/ui.button_mapevent.md - routes events from one object to another
- api/ui.button_refresh.md - repaints the component
- api/link/ui.button_render.md - renders the specified item or the whole component
- api/link/ui.button_resize.md - adjusts the view to a new size
- api/ui.button_setvalue.md - sets a new value for the component
- api/link/ui.button_show.md - makes the component visible
- api/link/ui.button_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.button_unbind.md - breaks "bind" link
- api/link/ui.button_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.button_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.button_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.button_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.button_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.button_onblur_event.md - fires when focus is moved out of the view
- api/ui.button_onchange_event.md - fires when the value of the control is changed
- api/link/ui.button_ondestruct_event.md - occurs when component destroyed
- api/link/ui.button_onfocus_event.md - fires when a view gets focus
- api/ui.button_onitemclick_event.md - fires after the control has been clicked
- api/link/ui.button_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.button_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.button_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.button_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.button_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.button_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.button_ontouchmove_event.md - occurs during touch movement
- api/link/ui.button_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.button_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/ui.button_align_config.md - the alignment of the control within the parent container
- api/link/ui.button_animate_config.md - defines or disables view change animation.
- api/link/ui.button_borderless_config.md - used to hide the component borders
- api/ui.button_click_config.md - click action handler
- api/link/ui.button_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.button_content_config.md - the id or node, whose content will be moved to the view
- api/link/ui.button_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.button_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.button_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.button_height_config.md - sets the height of the component
- api/link/ui.button_hidden_config.md - defines whether the view will be hidden initially
- api/ui.button_hotkey_config.md - sets a hotkey that triggers button clicking
- api/link/ui.button_id_config.md - the component ID
- api/ui.button_inputheight_config.md - the height of the input area, or a button's text value area.
- api/ui.button_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/ui.button_label_config.md - the text label of the control
- api/ui.button_labelposition_config.md - positions label in relation the control
- api/link/ui.button_maxheight_config.md - sets the maximum height for the view
- api/link/ui.button_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.button_minheight_config.md - sets the minimal height for the view
- api/link/ui.button_minwidth_config.md - sets the minimal width for the view
- api/ui.button_name_config.md - name of the control
- api/link/ui.button_on_config.md - allows attaching custom handlers to inner events of the component
- api/ui.button_placeholder_config.md - placeholder text for the input area
- api/ui.button_popup_config.md - allows to attach pop-up menu to the button
- api/ui.button_tabfocus_config.md - defines whether the control will be included in the tab navigation order
- api/link/ui.button_template_config.md - the component template
- api/ui.button_tooltip_config.md - tooltip for the input
- api/ui.button_type_config.md - the type of the control
- api/ui.button_value_config.md - sets the initial value for a control
- api/link/ui.button_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.button_$getsize_other.md - returns the current size of the component
- api/ui.button_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.button_$height_other.md - current height of the view
- api/link/ui.button_$scope_other.md - scope for resolving event and method names
- api/link/ui.button_$setsize_other.md - sets the component size
- api/ui.button_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.button_$skin_other.md - method, which will be called when skin defined
- api/link/ui.button_$view_other.md - reference to top html element of the view
- api/link/ui.button_$width_other.md - current width of the view
- api/link/ui.button_config_other.md - all options from initial component configuration
- api/link/ui.button_name_other.md - indicates the name of the component (a read-only property)
- api/ui.button_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/ui.button_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.button_methods.md
- api/refs/ui.button_props.md
- api/refs/ui.button_events.md
- api/refs/ui.button_others.md

