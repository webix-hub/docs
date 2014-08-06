ui.baselayout 
=============

{{memo A base class for layout-based UI components. }}

The component serves as the base class that defines properties, methods, and events common for all layout-based components. Not intended for direct use. If you need to create a layout, please use (ui.layout)[api/refs/ui.layout.md] or its descendants. 

### Constructor

~~~js
	var baselayout = webix.ui({
		view:"baselayout", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_baselayout({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/ui.baselayout_addview.md - add new view to layout-like component
- api/link/ui.baselayout_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.baselayout_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.baselayout_bind.md - binds components
- api/link/ui.baselayout_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.baselayout_callevent.md - calls an inner event
- api/link/ui.baselayout_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.baselayout_destructor.md - destructs the calling object
- api/link/ui.baselayout_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.baselayout_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.baselayout_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.baselayout_getchildviews.md - returns child views of the calling component
- api/link/ui.baselayout_getformview.md - returns master form for the input
- api/link/ui.baselayout_getnode.md - returns the main HTML container for the calling object
- api/link/ui.baselayout_getparentview.md - returns the parent view of the component
- api/link/ui.baselayout_gettopparentview.md - returns top parent view
- api/link/ui.baselayout_hasevent.md - checks whether the component has the specified event
- api/link/ui.baselayout_hide.md - hides the view
- api/ui.baselayout_index.md - returns the cell index in the layout collection
- api/link/ui.baselayout_isenabled.md - checks whether the view is enabled
- api/link/ui.baselayout_isvisible.md - checks whether the view is visible
- api/link/ui.baselayout_mapevent.md - routes events from one object to another
- api/ui.baselayout_reconstruct.md - rebuilds the layout
- api/ui.baselayout_removeview.md - removes view from layout-like component
- api/link/ui.baselayout_resize.md - adjusts the view to a new size
- api/ui.baselayout_resizechildren.md - resizes all children of the calling component
- api/link/ui.baselayout_show.md - makes the component visible
- api/ui.baselayout_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.baselayout_unbind.md - breaks "bind" link
- api/link/ui.baselayout_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.baselayout_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.baselayout_ondestruct_event.md - occurs when component destroyed
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.baselayout_animate_config.md - defines or disables view change animation.
- api/link/ui.baselayout_borderless_config.md - used to hide the component borders
- api/ui.baselayout_cols_config.md - array of views objects arranged horizontally
- api/link/ui.baselayout_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.baselayout_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.baselayout_disabled_config.md - disables item
- api/link/ui.baselayout_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.baselayout_height_config.md - sets the height of the component
- api/link/ui.baselayout_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.baselayout_id_config.md - the component ID
- api/link/ui.baselayout_maxheight_config.md - sets the maximum height for the view
- api/link/ui.baselayout_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.baselayout_minheight_config.md - sets the minimal height for the view
- api/link/ui.baselayout_minwidth_config.md - sets the minimal width for the view
- api/link/ui.baselayout_on_config.md - allows attaching custom handlers to inner events of the component
- api/ui.baselayout_responsive_config.md - enables responsive mode for horizontal layout
- api/ui.baselayout_rows_config.md - array of views objects arranged vertically
- api/ui.baselayout_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.baselayout_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.baselayout_$getsize_other.md - returns the current size of the component
- api/link/ui.baselayout_$height_other.md - current height of the view
- api/link/ui.baselayout_$setsize_other.md - sets the component size
- api/link/ui.baselayout_$skin_other.md - method, which will be called when skin defined
- api/link/ui.baselayout_$view_other.md - reference to top html element of the view
- api/link/ui.baselayout_$width_other.md - current width of the view
- api/link/ui.baselayout_config_other.md - all options from initial component configuration
- api/link/ui.baselayout_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.baselayout_methods.md
- api/refs/ui.baselayout_props.md
- api/refs/ui.baselayout_events.md
- api/refs/ui.baselayout_others.md

