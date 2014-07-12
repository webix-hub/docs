ui.spacer 
=============


{{memo A borderless empty view. }}

The component has a pure API and only used to fill a layout cell if it's supposed to be empty. Can be initialized by simple [] construction. Check [view](desktop__view.md) documentation for more detailed description.

### Constructor

~~~js
	var spacer = webix.ui({
		view:"spacer", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_spacer({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>

Methods
-------

{{links
- api/link/ui.spacer_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.spacer_bind.md - binds components
- api/link/ui.spacer_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.spacer_destructor.md - destructs the calling object
- api/link/ui.spacer_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.spacer_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.spacer_getchildviews.md - returns child views of the calling component
- api/link/ui.spacer_getformview.md - returns master form for the input
- api/link/ui.spacer_getnode.md - returns the main HTML container for the calling object
- api/link/ui.spacer_getparentview.md - returns the parent view of the component
- api/link/ui.spacer_gettopparentview.md - returns top parent view
- api/link/ui.spacer_hide.md - hides the view
- api/link/ui.spacer_isenabled.md - checks whether the view is enabled
- api/link/ui.spacer_isvisible.md - checks whether the view is visible
- api/link/ui.spacer_resize.md - adjusts the view to a new size
- api/link/ui.spacer_show.md - makes the component visible
- api/link/ui.spacer_unbind.md - breaks "bind" link
}}


Events
------

{{links
- api/link/ui.spacer_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.spacer_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.spacer_ondestruct_event.md - occurs when component destroyed
- api/link/ui.spacer_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.spacer_onrotate_event.md - occurs on screen rotating
- api/link/ui.spacer_onswipex_event.md - 
- api/link/ui.spacer_onswipey_event.md - 
- api/link/ui.spacer_ontouchend_event.md - 
- api/link/ui.spacer_ontouchmove_event.md - 
- api/link/ui.spacer_ontouchstart_event.md - 
- api/link/ui.spacer_onviewresize_event.md - view size was changed by resizer
}}


Properties
----------

{{links
- api/link/ui.spacer_animate_config.md - defines or disables view change animation.
- api/link/ui.spacer_borderless_config.md - used to hide the component borders
- api/link/ui.spacer_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.spacer_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.spacer_disabled_config.md - disables item
- api/link/ui.spacer_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.spacer_height_config.md - sets the height of the component
- api/link/ui.spacer_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.spacer_id_config.md - the component ID
- api/link/ui.spacer_maxheight_config.md - sets the maximum height for the view
- api/link/ui.spacer_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.spacer_minheight_config.md - sets the minimal height for the view
- api/link/ui.spacer_minwidth_config.md - sets the minimal width for the view
- api/link/ui.spacer_width_config.md - sets the width of the component
}}




Other
-----

{{links
- api/link/ui.spacer_$getsize_other.md - returns the current size of the component
- api/link/ui.spacer_$height_other.md - current height of the view
- api/link/ui.spacer_$scope_other.md - scope for resolving event and method names
- api/link/ui.spacer_$setsize_other.md - sets the component size
- api/link/ui.spacer_$skin_other.md - method, which will be called when skin defined
- api/link/ui.spacer_$view_other.md - reference to top html element of the view
- api/link/ui.spacer_$width_other.md - current width of the view
- api/link/ui.spacer_config_other.md - all options from initial component configuration
- api/link/ui.spacer_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.spacer_methods.md
- api/refs/ui.spacer_props.md
- api/refs/ui.spacer_events.md
- api/refs/ui.spacer_others.md

