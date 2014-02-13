ui.fieldset 
=============


{{memo A wrapper which renders an HTML fieldset. }}

The control presents a standard fieldset that combines several sense-connected UI elements inside itself. Check [fieldset](desktop__controls.md#fieldset) documentation for more detailed description.

### Constructor

~~~js
	var fieldset = webix.ui({
		view:"fieldset", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_fieldset({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>

Methods
-------

{{links
- api/link/ui.fieldset_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.fieldset_bind.md - binds components
- api/link/ui.fieldset_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.fieldset_destructor.md - destructs the calling object
- api/link/ui.fieldset_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.fieldset_enable.md - enables the calling view that was disabled by the 'disable' method
- api/ui.fieldset_getbody.md - returns sub-view of fieldset
- api/link/ui.fieldset_getchildviews.md - returns child views of the calling component
- api/link/ui.fieldset_getnode.md - returns the main HTML container for the calling object
- api/link/ui.fieldset_getparentview.md - returns the parent view of the component
- api/link/ui.fieldset_gettopparentview.md - returns top parent view
- api/link/ui.fieldset_hide.md - hides the view
- api/link/ui.fieldset_isenabled.md - checks whether the view is enabled
- api/link/ui.fieldset_isvisible.md - checks whether the view is visible
- api/link/ui.fieldset_resize.md - adjusts the view to a new size
- api/link/ui.fieldset_show.md - makes the component visible
}}


Events
------

{{links
- api/link/ui.fieldset_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.fieldset_ondestruct_event.md - occurs when component destroyed
- api/link/ui.fieldset_onviewresize_event.md - view size was changed by resizer
}}


Properties
----------

{{links
- api/link/ui.fieldset_animate_config.md - defines or disables view change animation.
- api/ui.fieldset_body_config.md - config for sub-view of fieldset
- api/link/ui.fieldset_borderless_config.md - used to hide the component borders
- api/link/ui.fieldset_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.fieldset_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.fieldset_disabled_config.md - disables item
- api/link/ui.fieldset_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.fieldset_height_config.md - sets the height of the component
- api/link/ui.fieldset_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.fieldset_id_config.md - the component ID
- api/ui.fieldset_label_config.md - legend of fieldset
- api/link/ui.fieldset_maxheight_config.md - sets the maximum height for the view
- api/link/ui.fieldset_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.fieldset_minheight_config.md - sets the minimal height for the view
- api/link/ui.fieldset_minwidth_config.md - sets the minimal width for the view
- api/link/ui.fieldset_width_config.md - sets the width of the component
}}




Other
-----

{{links
- api/link/ui.fieldset_$getsize_other.md - returns the current size of the component
- api/link/ui.fieldset_$height_other.md - current height of the view
- api/link/ui.fieldset_$scope_other.md - scope for resolving event and method names
- api/link/ui.fieldset_$setsize_other.md - sets the component size
- api/link/ui.fieldset_$skin_other.md - method, which will be called when skin defined
- api/link/ui.fieldset_$view_other.md - reference to top html element of the view
- api/link/ui.fieldset_$width_other.md - current width of the view
- api/link/ui.fieldset_config_other.md - all options from initial component configuration
- api/link/ui.fieldset_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.fieldset_methods.md
- api/refs/ui.fieldset_props.md
- api/refs/ui.fieldset_events.md
- api/refs/ui.fieldset_others.md

