ui.toggle 
=============


{{memo A two-state button. }}

The component is fully customizable and can be used both as a stand-alone view and as a part of the form or toolbar.  Check [toggle](desktop/toggle.md) documentation for more detailed description.

### Constructor

~~~js
	var toggle = webix.ui({
		view:"toggle", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_toggle({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.toggle_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.toggle_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.toggle_bind.md - binds components
- api/link/ui.toggle_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.toggle_blur.md - removes the focus from the control
- api/link/ui.toggle_callevent.md - calls an inner event
- api/link/ui.toggle_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.toggle_destructor.md - destructs the calling object
- api/link/ui.toggle_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.toggle_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.toggle_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.toggle_focus.md - sets focus to the control
- api/link/ui.toggle_getchildviews.md - returns child views of the calling component
- api/link/ui.toggle_getformview.md - returns master form for the input
- api/link/ui.toggle_getinputnode.md - gets the HTML element related to the component
- api/link/ui.toggle_getnode.md - returns the main HTML container for the calling object
- api/link/ui.toggle_getparentview.md - returns the parent view of the component
- api/link/ui.toggle_gettopparentview.md - returns top parent view
- api/link/ui.toggle_getvalue.md - returns the current value of the control
- api/link/ui.toggle_hasevent.md - checks whether the component has the specified event
- api/link/ui.toggle_hide.md - hides the view
- api/link/ui.toggle_isenabled.md - checks whether the view is enabled
- api/link/ui.toggle_isvisible.md - checks whether the view is visible
- api/link/ui.toggle_mapevent.md - routes events from one object to another
- api/link/ui.toggle_refresh.md - repaints the component
- api/link/ui.toggle_render.md - renders the specified item or the whole component
- api/link/ui.toggle_resize.md - adjusts the view to a new size
- api/link/ui.toggle_setvalue.md - sets a new value for the component
- api/link/ui.toggle_show.md - makes the component visible
- api/link/ui.toggle_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/ui.toggle_toggle.md - changes the state of the two-state control
- api/link/ui.toggle_unbind.md - breaks "bind" link
- api/link/ui.toggle_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.toggle_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.toggle_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.toggle_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.toggle_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.toggle_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.toggle_onchange_event.md - fires when the value of the control is changed
- api/link/ui.toggle_ondestruct_event.md - occurs when component destroyed
- api/link/ui.toggle_onfocus_event.md - fires when a view gets focus
- api/link/ui.toggle_onitemclick_event.md - fires after the control has been clicked
- api/link/ui.toggle_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.toggle_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.toggle_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.toggle_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.toggle_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.toggle_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.toggle_ontouchmove_event.md - occurs during touch movement
- api/link/ui.toggle_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.toggle_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.toggle_align_config.md - the alignment of the control within the parent container
- api/link/ui.toggle_animate_config.md - defines or disables view change animation.
- api/link/ui.toggle_borderless_config.md - used to hide the component borders
- api/link/ui.toggle_click_config.md - click action handler
- api/link/ui.toggle_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.toggle_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.toggle_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.toggle_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.toggle_height_config.md - sets the height of the component
- api/link/ui.toggle_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.toggle_hotkey_config.md - sets a hotkey that triggers button clicking
- api/ui.toggle_icon_config.md - 
- api/link/ui.toggle_id_config.md - the component ID
- api/link/ui.toggle_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.toggle_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.toggle_maxheight_config.md - sets the maximum height for the view
- api/link/ui.toggle_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.toggle_minheight_config.md - sets the minimal height for the view
- api/link/ui.toggle_minwidth_config.md - sets the minimal width for the view
- api/link/ui.toggle_name_config.md - name of the control
- api/ui.toggle_officon_config.md - 
- api/ui.toggle_offlabel_config.md - 
- api/link/ui.toggle_on_config.md - allows attaching custom handlers to inner events of the component
- api/ui.toggle_onicon_config.md - 
- api/ui.toggle_onlabel_config.md - 
- api/link/ui.toggle_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.toggle_tabfocus_config.md - defines whether the control will be included in the tab navigation order
- api/link/ui.toggle_tooltip_config.md - tooltip for the input
- api/link/ui.toggle_type_config.md - the type of the control
- api/link/ui.toggle_value_config.md - sets the initial value for a control
- api/link/ui.toggle_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.toggle_$getsize_other.md - returns the current size of the component
- api/link/ui.toggle_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.toggle_$height_other.md - current height of the view
- api/link/ui.toggle_$scope_other.md - scope for resolving event and method names
- api/link/ui.toggle_$setsize_other.md - sets the component size
- api/link/ui.toggle_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.toggle_$skin_other.md - method, which will be called when skin defined
- api/link/ui.toggle_$view_other.md - reference to top html element of the view
- api/link/ui.toggle_$width_other.md - current width of the view
- api/link/ui.toggle_config_other.md - all options from initial component configuration
- api/link/ui.toggle_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.toggle_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.toggle_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.toggle_methods.md
- api/refs/ui.toggle_props.md
- api/refs/ui.toggle_events.md
- api/refs/ui.toggle_others.md

