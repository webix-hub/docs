ui.accordion 
=============


{{memo A container control that presents multiple horizontal or vertical panes. }}

A collection of panes that make up the component allows you to organize the content in a space-saving way. <br> The main difference from a standard layout is that accordion can be collapsed/expanded by clicking on the header of a pane. Check [accordion](desktop/accordion.md) documentation for more detailed description.

### Constructor

~~~js
	var accordion = webix.ui({
		view:"accordion", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_accordion({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.layout.md">ui.layout</a>, <a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.accordion_addview.md - add new view to layout-like component
- api/link/ui.accordion_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.accordion_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.accordion_bind.md - binds components
- api/link/ui.accordion_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.accordion_callevent.md - calls an inner event
- api/link/ui.accordion_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.accordion_destructor.md - destructs the calling object
- api/link/ui.accordion_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.accordion_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.accordion_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.accordion_getchildviews.md - returns child views of the calling component
- api/link/ui.accordion_getformview.md - returns master form for the input
- api/link/ui.accordion_getnode.md - returns the main HTML container for the calling object
- api/link/ui.accordion_getparentview.md - returns the parent view of the component
- api/link/ui.accordion_gettopparentview.md - returns top parent view
- api/link/ui.accordion_hasevent.md - checks whether the component has the specified event
- api/link/ui.accordion_hide.md - hides the view
- api/link/ui.accordion_index.md - returns the cell index in the layout collection
- api/link/ui.accordion_isenabled.md - checks whether the view is enabled
- api/link/ui.accordion_isvisible.md - checks whether the view is visible
- api/link/ui.accordion_mapevent.md - routes events from one object to another
- api/link/ui.accordion_reconstruct.md - rebuilds the layout
- api/link/ui.accordion_removeview.md - removes view from layout-like component
- api/link/ui.accordion_resize.md - adjusts the view to a new size
- api/link/ui.accordion_resizechildren.md - resizes all children of the calling component
- api/link/ui.accordion_show.md - makes the component visible
- api/link/ui.accordion_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.accordion_unbind.md - breaks "bind" link
- api/link/ui.accordion_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.accordion_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.accordion_ondestruct_event.md - occurs when component destroyed
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.accordion_animate_config.md - defines or disables view change animation.
- api/link/ui.accordion_borderless_config.md - used to hide the component borders
- api/ui.accordion_collapsed_config.md - 'says' to display initially all accordion cells collapsed
- api/link/ui.accordion_cols_config.md - array of views objects arranged horizontally
- api/link/ui.accordion_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.accordion_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.accordion_disabled_config.md - disables item
- api/link/ui.accordion_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.accordion_height_config.md - sets the height of the component
- api/link/ui.accordion_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.accordion_id_config.md - the component ID
- api/link/ui.accordion_isolate_config.md - masks IDs of all inner element
- api/link/ui.accordion_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/link/ui.accordion_maxheight_config.md - sets the maximum height for the view
- api/link/ui.accordion_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.accordion_minheight_config.md - sets the minimal height for the view
- api/link/ui.accordion_minwidth_config.md - sets the minimal width for the view
- api/ui.accordion_multi_config.md - enables/disables mode when several panels can be visible at once
- api/link/ui.accordion_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.accordion_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/link/ui.accordion_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/link/ui.accordion_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/ui.accordion_panelclass_config.md - returns the name of a css class applied to the accordion panels
- api/link/ui.accordion_responsive_config.md - enables responsive mode for horizontal layout
- api/link/ui.accordion_rows_config.md - array of views objects arranged vertically
- api/link/ui.accordion_type_config.md - defines the layout borders
- api/link/ui.accordion_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.accordion_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.accordion_$getsize_other.md - returns the current size of the component
- api/link/ui.accordion_$height_other.md - current height of the view
- api/link/ui.accordion_$setsize_other.md - sets the component size
- api/link/ui.accordion_$skin_other.md - method, which will be called when skin defined
- api/link/ui.accordion_$view_other.md - reference to top html element of the view
- api/link/ui.accordion_$width_other.md - current width of the view
- api/link/ui.accordion_config_other.md - all options from initial component configuration
- api/link/ui.accordion_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.accordion_methods.md
- api/refs/ui.accordion_props.md
- api/refs/ui.accordion_events.md
- api/refs/ui.accordion_others.md

