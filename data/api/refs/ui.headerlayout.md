ui.headerlayout 
=============


{{memo A horizontal or vertical layout with the header(s). }}

The component consists of cells arranged vertically or horizontally. The header is an optional part of the cell, i.e. in one and the same layout some cells can be with headers, some cells - without. By clicking on the header the user can collapse/expand the related cell. Check [layout](desktop__layout.md) documentation for more detailed description.

### Constructor

~~~js
	var headerlayout = webix.ui({
		view:"headerlayout", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_headerlayout({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.accordion.md">ui.accordion</a>, <a href="api/refs/ui.layout.md">ui.layout</a>, <a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>

Methods
-------

{{links
- api/link/ui.headerlayout_addview.md - add new view to layout or multiview
- api/link/ui.headerlayout_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.headerlayout_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.headerlayout_bind.md - binds components
- api/link/ui.headerlayout_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.headerlayout_callevent.md - calls an inner event
- api/link/ui.headerlayout_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.headerlayout_destructor.md - destructs the calling object
- api/link/ui.headerlayout_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.headerlayout_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.headerlayout_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.headerlayout_getchildviews.md - returns child views of the calling component
- api/link/ui.headerlayout_getnode.md - returns the main HTML container for the calling object
- api/link/ui.headerlayout_getparentview.md - returns the parent view of the component
- api/link/ui.headerlayout_hasevent.md - checks whether the component has the specified event
- api/link/ui.headerlayout_hide.md - hides the view
- api/link/ui.headerlayout_index.md - returns the cell index in the layout collection
- api/link/ui.headerlayout_isenabled.md - checks whether the view is enabled
- api/link/ui.headerlayout_isvisible.md - checks whether the view is visible
- api/link/ui.headerlayout_mapevent.md - routes events from one object to another
- api/link/ui.headerlayout_reconstruct.md - rebuilds the layout
- api/link/ui.headerlayout_removeview.md - removes view from multiview or layout
- api/link/ui.headerlayout_resize.md - adjusts the view to a new size
- api/link/ui.headerlayout_resizechildren.md - resizes all children of the calling component
- api/link/ui.headerlayout_show.md - makes the component visible
- api/link/ui.headerlayout_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.headerlayout_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


Events
------

{{links
- api/link/ui.headerlayout_onbindrequest_event.md - fires when the component is ready to receive data from the master component
}}


Properties
----------

{{links
- api/link/ui.headerlayout_animate_config.md - defines or disables view change animation.
- api/link/ui.headerlayout_borderless_config.md - used to hide the component borders
- api/link/ui.headerlayout_collapsed_config.md - 'says' to display initially all accordion cells collapsed
- api/link/ui.headerlayout_cols_config.md - array of views objects arranged horizontally
- api/link/ui.headerlayout_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.headerlayout_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.headerlayout_disabled_config.md - disables item
- api/link/ui.headerlayout_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.headerlayout_height_config.md - sets the height of the component
- api/link/ui.headerlayout_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.headerlayout_id_config.md - the component ID
- api/link/ui.headerlayout_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/link/ui.headerlayout_maxheight_config.md - sets the maximum height for the view
- api/link/ui.headerlayout_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.headerlayout_minheight_config.md - sets the minimal height for the view
- api/link/ui.headerlayout_minwidth_config.md - sets the minimal width for the view
- api/link/ui.headerlayout_multi_config.md - enables/disables mode when several panels can be visible at once
- api/link/ui.headerlayout_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.headerlayout_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/link/ui.headerlayout_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/link/ui.headerlayout_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/link/ui.headerlayout_panelclass_config.md - returns the name of a css class applied to the accordion panels
- api/link/ui.headerlayout_rows_config.md - array of views objects arranged vertically
- api/link/ui.headerlayout_type_config.md - defines the layout borders
- api/link/ui.headerlayout_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.headerlayout_width_config.md - sets the width of the component
}}




Other
-----

{{links
- api/link/ui.headerlayout_$getsize_other.md - returns the current size of the component
- api/link/ui.headerlayout_$height_other.md - current height of the view
- api/link/ui.headerlayout_$setsize_other.md - sets the component size
- api/link/ui.headerlayout_$skin_other.md - method, which will be called when skin defined
- api/link/ui.headerlayout_$view_other.md - reference to top html element of the view
- api/link/ui.headerlayout_$width_other.md - current width of the view
- api/link/ui.headerlayout_config_other.md - all options from initial component configuration
- api/link/ui.headerlayout_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.headerlayout_methods.md
- api/refs/ui.headerlayout_props.md
- api/refs/ui.headerlayout_events.md
- api/refs/ui.headerlayout_others.md

