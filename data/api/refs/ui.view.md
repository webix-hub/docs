ui.view 
=============

{{memo A pure view with borders but without any content inside it. }}

The component serves as the base class that defines properties, methods, and events common for not layout-based UI components. Can be used as the placeholder in a layout.  Check [view](desktop__view.md) documentation for more detailed description.

### Constructor

~~~js
	var view = webix.ui({
		view:"view", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_view({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>

Methods
-------

{{links
- api/link/ui.view_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.view_bind.md - binds components
- api/link/ui.view_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.view_destructor.md - destructs the calling object
- api/link/ui.view_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.view_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.view_getchildviews.md - returns child views of the calling component
- api/link/ui.view_getnode.md - returns the main HTML container for the calling object
- api/link/ui.view_getparentview.md - returns the parent view of the component
- api/link/ui.view_gettopparentview.md - returns top parent view
- api/link/ui.view_hide.md - hides the view
- api/link/ui.view_isenabled.md - checks whether the view is enabled
- api/link/ui.view_isvisible.md - checks whether the view is visible
- api/link/ui.view_resize.md - adjusts the view to a new size
- api/link/ui.view_show.md - makes the component visible
}}


Events
------

{{links
- api/link/ui.view_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.view_ondestruct_event.md - occurs when component destroyed
- api/ui.view_onviewresize_event.md - view size was changed by resizer
}}


Properties
----------

{{links
- api/link/ui.view_animate_config.md - defines or disables view change animation.
- api/link/ui.view_borderless_config.md - used to hide the component borders
- api/link/ui.view_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.view_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.view_disabled_config.md - disables item
- api/link/ui.view_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.view_height_config.md - sets the height of the component
- api/link/ui.view_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.view_id_config.md - the component ID
- api/link/ui.view_maxheight_config.md - sets the maximum height for the view
- api/link/ui.view_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.view_minheight_config.md - sets the minimal height for the view
- api/link/ui.view_minwidth_config.md - sets the minimal width for the view
- api/link/ui.view_width_config.md - sets the width of the component
}}




Other
-----

{{links
- api/link/ui.view_$getsize_other.md - returns the current size of the component
- api/link/ui.view_$height_other.md - current height of the view
- api/ui.view_$scope_other.md - scope for resolving event and method names
- api/link/ui.view_$setsize_other.md - sets the component size
- api/link/ui.view_$skin_other.md - method, which will be called when skin defined
- api/link/ui.view_$view_other.md - reference to top html element of the view
- api/link/ui.view_$width_other.md - current width of the view
- api/link/ui.view_config_other.md - all options from initial component configuration
- api/link/ui.view_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.view_methods.md
- api/refs/ui.view_props.md
- api/refs/ui.view_events.md
- api/refs/ui.view_others.md

