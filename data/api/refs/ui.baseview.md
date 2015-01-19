ui.baseview 
=============

{{memo The very base object for all components. }}

The component serves as the base class that defines properties, methods, and events common for all other components that make up the library. Not intended for direct use.

### Constructor

~~~js
	var baseview = webix.ui({
		view:"baseview", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_baseview({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/ui.baseview_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.baseview_bind.md - binds components
- api/link/ui.baseview_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.baseview_destructor.md - destructs the calling object
- api/ui.baseview_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/ui.baseview_enable.md - enables the calling view that was disabled by the 'disable' method
- api/ui.baseview_getchildviews.md - returns child views of the calling component
- api/ui.baseview_getformview.md - returns master form for the input
- api/ui.baseview_getnode.md - returns the main HTML container for the calling object
- api/ui.baseview_getparentview.md - returns the parent view of the component
- api/ui.baseview_gettopparentview.md - returns top parent view
- api/ui.baseview_hide.md - hides the view
- api/ui.baseview_isenabled.md - checks whether the view is enabled
- api/ui.baseview_isvisible.md - checks whether the view is visible
- api/ui.baseview_resize.md - adjusts the view to a new size
- api/ui.baseview_show.md - makes the component visible
- api/link/ui.baseview_unbind.md - breaks "bind" link
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.baseview_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.baseview_ondestruct_event.md - occurs when component destroyed
}}


<div class='h2'>Properties</div>

{{api
- api/ui.baseview_animate_config.md - defines or disables view change animation.
- api/ui.baseview_borderless_config.md - used to hide the component borders
- api/ui.baseview_container_config.md - an html container (or its id) where the component needs initializing
- api/ui.baseview_css_config.md - the name of a css class that will be applied to the view container
- api/ui.baseview_disabled_config.md - indicates whether an item is enabled or not
- api/ui.baseview_gravity_config.md - sets the view gravity (1 by default)
- api/ui.baseview_height_config.md - sets the height of the component
- api/ui.baseview_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.baseview_id_config.md - the component ID
- api/ui.baseview_maxheight_config.md - sets the maximum height for the view
- api/ui.baseview_maxwidth_config.md - sets the maximum width for the view
- api/ui.baseview_minheight_config.md - sets the minimal height for the view
- api/ui.baseview_minwidth_config.md - sets the minimal width for the view
- api/ui.baseview_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/ui.baseview_$getsize_other.md - returns the current size of the component
- api/ui.baseview_$height_other.md - current height of the view
- api/ui.baseview_$setsize_other.md - sets the component size
- api/ui.baseview_$skin_other.md - method, which will be called when skin defined
- api/ui.baseview_$view_other.md - reference to top html element of the view
- api/ui.baseview_$width_other.md - current width of the view
- api/link/ui.baseview_config_other.md - all options from initial component configuration
- api/link/ui.baseview_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.baseview_methods.md
- api/refs/ui.baseview_props.md
- api/refs/ui.baseview_events.md
- api/refs/ui.baseview_others.md

