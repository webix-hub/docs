ui.icon 
=============


{{memo A static picture of an icon. }}

The component provides a collection of popular icons and API for their handling. Check [icon](desktop/controls.md#icon) documentation for more detailed description.

### Constructor

~~~js
	var icon = webix.ui({
		view:"icon", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_icon({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.icon_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.icon_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.icon_bind.md - binds components
- api/link/ui.icon_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.icon_blur.md - removes the focus from the control
- api/link/ui.icon_callevent.md - calls an inner event
- api/link/ui.icon_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.icon_destructor.md - destructs the calling object
- api/link/ui.icon_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.icon_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.icon_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.icon_focus.md - sets focus to the control
- api/link/ui.icon_getchildviews.md - returns child views of the calling component
- api/link/ui.icon_getformview.md - returns master form for the input
- api/link/ui.icon_getinputnode.md - gets the HTML element related to the component
- api/link/ui.icon_getnode.md - returns the main HTML container for the calling object
- api/link/ui.icon_getparentview.md - returns the parent view of the component
- api/link/ui.icon_gettopparentview.md - returns top parent view
- api/link/ui.icon_getvalue.md - returns the current value of the control
- api/link/ui.icon_hasevent.md - checks whether the component has the specified event
- api/link/ui.icon_hide.md - hides the view
- api/link/ui.icon_isenabled.md - checks whether the view is enabled
- api/link/ui.icon_isvisible.md - checks whether the view is visible
- api/link/ui.icon_mapevent.md - routes events from one object to another
- api/link/ui.icon_refresh.md - repaints the component
- api/link/ui.icon_render.md - renders the specified item or the whole component
- api/link/ui.icon_resize.md - adjusts the view to a new size
- api/link/ui.icon_setvalue.md - sets a new value for the component
- api/link/ui.icon_show.md - makes the component visible
- api/link/ui.icon_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.icon_unbind.md - breaks "bind" link
- api/link/ui.icon_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.icon_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.icon_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.icon_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.icon_onchange_event.md - fires when the value of the control is changed
- api/link/ui.icon_ondestruct_event.md - occurs when component destroyed
- api/link/ui.icon_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.icon_align_config.md - the alignment of the control within the parent container
- api/link/ui.icon_animate_config.md - defines or disables view change animation.
- api/link/ui.icon_borderless_config.md - used to hide the component borders
- api/link/ui.icon_click_config.md - click action handler
- api/link/ui.icon_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.icon_content_config.md - the id or node, whose content will be moved to the view
- api/link/ui.icon_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.icon_disabled_config.md - disables item
- api/link/ui.icon_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.icon_height_config.md - sets the height of the component
- api/link/ui.icon_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.icon_hotkey_config.md - sets a hotkey that triggers button clicking
- api/link/ui.icon_id_config.md - the component ID
- api/link/ui.icon_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.icon_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.icon_label_config.md - the text label of the control
- api/link/ui.icon_labelposition_config.md - positions label above the control
- api/link/ui.icon_maxheight_config.md - sets the maximum height for the view
- api/link/ui.icon_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.icon_minheight_config.md - sets the minimal height for the view
- api/link/ui.icon_minwidth_config.md - sets the minimal width for the view
- api/link/ui.icon_name_config.md - name of the control
- api/link/ui.icon_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.icon_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.icon_tabfocus_config.md - defines whether the control will be included in the tab navigation order
- api/link/ui.icon_template_config.md - the component template
- api/link/ui.icon_tooltip_config.md - tooltip for the input
- api/link/ui.icon_type_config.md - the type of the control
- api/link/ui.icon_value_config.md - sets the initial value for a control
- api/link/ui.icon_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.icon_$getsize_other.md - returns the current size of the component
- api/link/ui.icon_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.icon_$height_other.md - current height of the view
- api/link/ui.icon_$scope_other.md - scope for resolving event and method names
- api/link/ui.icon_$setsize_other.md - sets the component size
- api/link/ui.icon_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.icon_$skin_other.md - method, which will be called when skin defined
- api/link/ui.icon_$view_other.md - reference to top html element of the view
- api/link/ui.icon_$width_other.md - current width of the view
- api/link/ui.icon_config_other.md - all options from initial component configuration
- api/link/ui.icon_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.icon_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.icon_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.icon_methods.md
- api/refs/ui.icon_props.md
- api/refs/ui.icon_events.md
- api/refs/ui.icon_others.md

