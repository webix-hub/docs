ui.tooltip 
=============


{{memo A static text that is rendered in the absolutely positioned container. }}

Generally, the component isn't intended for direct initialization. But if you decide to use it, use mouse events (onMouseOut, onMouseIn, onMouseMove etc.) to show/hide the tooltip box in the specified position. Check [tooltip](desktop/tooltip.md) documentation for more detailed description.

### Constructor

~~~js
	var tooltip = webix.ui({
		view:"tooltip", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_tooltip({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/singlerender.md">SingleRender</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.tooltip_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.tooltip_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.tooltip_bind.md - binds components
- api/link/ui.tooltip_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.tooltip_callevent.md - calls an inner event
- api/link/ui.tooltip_customize.md - redefines the 'type' property
- api/link/ui.tooltip_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.tooltip_destructor.md - destructs the calling object
- api/link/ui.tooltip_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.tooltip_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.tooltip_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.tooltip_getchildviews.md - returns child views of the calling component
- api/link/ui.tooltip_getformview.md - returns master form for the input
- api/link/ui.tooltip_getnode.md - returns the main HTML container for the calling object
- api/link/ui.tooltip_getparentview.md - returns the parent view of the component
- api/link/ui.tooltip_gettopparentview.md - returns top parent view
- api/link/ui.tooltip_hasevent.md - checks whether the component has the specified event
- api/link/ui.tooltip_hide.md - hides the view
- api/link/ui.tooltip_isenabled.md - checks whether the view is enabled
- api/link/ui.tooltip_isvisible.md - checks whether the view is visible
- api/link/ui.tooltip_mapevent.md - routes events from one object to another
- api/link/ui.tooltip_render.md - renders the specified item or the whole component
- api/link/ui.tooltip_resize.md - adjusts the view to a new size
- api/link/ui.tooltip_show.md - makes the component visible
- api/link/ui.tooltip_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.tooltip_unbind.md - breaks "bind" link
- api/link/ui.tooltip_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.tooltip_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.tooltip_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.tooltip_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.tooltip_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.tooltip_onblur_event.md - 
- api/link/ui.tooltip_ondestruct_event.md - occurs when component destroyed
- api/link/ui.tooltip_onfocus_event.md - 
- api/link/ui.tooltip_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.tooltip_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.tooltip_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.tooltip_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.tooltip_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.tooltip_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.tooltip_ontouchmove_event.md - occurs during touch movement
- api/link/ui.tooltip_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.tooltip_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.tooltip_animate_config.md - defines or disables view change animation.
- api/link/ui.tooltip_borderless_config.md - used to hide the component borders
- api/link/ui.tooltip_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.tooltip_content_config.md - the id or node, whose content will be moved to the view
- api/link/ui.tooltip_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.tooltip_disabled_config.md - indicates whether an item is enabled or not
- api/ui.tooltip_dx_config.md - the left offset of the tooltip from the mouse pointer
- api/ui.tooltip_dy_config.md - the top offset of the tooltip from the mouse pointer
- api/link/ui.tooltip_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.tooltip_height_config.md - sets the height of the component
- api/link/ui.tooltip_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.tooltip_id_config.md - the component ID
- api/link/ui.tooltip_maxheight_config.md - sets the maximum height for the view
- api/link/ui.tooltip_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.tooltip_minheight_config.md - sets the minimal height for the view
- api/link/ui.tooltip_minwidth_config.md - sets the minimal width for the view
- api/link/ui.tooltip_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.tooltip_template_config.md - the component template
- api/link/ui.tooltip_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.tooltip_$getsize_other.md - returns the current size of the component
- api/link/ui.tooltip_$height_other.md - current height of the view
- api/link/ui.tooltip_$scope_other.md - scope for resolving event and method names
- api/link/ui.tooltip_$setsize_other.md - sets the component size
- api/link/ui.tooltip_$skin_other.md - method, which will be called when skin defined
- api/link/ui.tooltip_$view_other.md - reference to top html element of the view
- api/link/ui.tooltip_$width_other.md - current width of the view
- api/link/ui.tooltip_config_other.md - all options from initial component configuration
- api/link/ui.tooltip_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.tooltip_type_other.md - currently used set of helpers for view rendering
}}


@index:
- api/refs/ui.tooltip_methods.md
- api/refs/ui.tooltip_props.md
- api/refs/ui.tooltip_events.md
- api/refs/ui.tooltip_others.md

