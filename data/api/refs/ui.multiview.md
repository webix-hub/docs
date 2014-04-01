ui.multiview 
=============


{{memo A container control that keeps a set of views and displays one view at a time. }}

The component allows you to divide the page content into multiple groups and display a specific view based on some criteria. Often used in combination with a clickable control to implement tabbar. Check [multiview](desktop__multiview.md) documentation for more detailed description.

### Constructor

~~~js
	var multiview = webix.ui({
		view:"multiview", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_multiview({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>

Methods
-------

{{links
- api/link/ui.multiview_addview.md - add new view to layout or multiview
- api/link/ui.multiview_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.multiview_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/ui.multiview_back.md - switches multiview to previously active view
- api/link/ui.multiview_bind.md - binds components
- api/link/ui.multiview_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.multiview_callevent.md - calls an inner event
- api/link/ui.multiview_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.multiview_destructor.md - destructs the calling object
- api/link/ui.multiview_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.multiview_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.multiview_enable.md - enables the calling view that was disabled by the 'disable' method
- api/ui.multiview_getactiveid.md - returns the id of the currently visible multiview cell
- api/link/ui.multiview_getchildviews.md - returns child views of the calling component
- api/link/ui.multiview_getformview.md - returns master form for the input
- api/link/ui.multiview_getnode.md - returns the main HTML container for the calling object
- api/link/ui.multiview_getparentview.md - returns the parent view of the component
- api/link/ui.multiview_gettopparentview.md - returns top parent view
- api/ui.multiview_getvalue.md - returns id of curren visible view
- api/link/ui.multiview_hasevent.md - checks whether the component has the specified event
- api/link/ui.multiview_hide.md - hides the view
- api/link/ui.multiview_index.md - returns the cell index in the layout collection
- api/link/ui.multiview_isenabled.md - checks whether the view is enabled
- api/link/ui.multiview_isvisible.md - checks whether the view is visible
- api/link/ui.multiview_mapevent.md - routes events from one object to another
- api/link/ui.multiview_reconstruct.md - rebuilds the layout
- api/link/ui.multiview_removeview.md - removes view from multiview or layout
- api/link/ui.multiview_resize.md - adjusts the view to a new size
- api/link/ui.multiview_resizechildren.md - resizes all children of the calling component
- api/ui.multiview_setvalue.md - defines which view need to be shown in the multiview
- api/link/ui.multiview_show.md - makes the component visible
- api/link/ui.multiview_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.multiview_unbind.md - breaks "bind" link
- api/link/ui.multiview_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


Events
------

{{links
- api/ui.multiview_onbeforeback_event.md - fires the moment back() fucntion is triggered
- api/link/ui.multiview_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.multiview_ondestruct_event.md - occurs when component destroyed
- api/ui.multiview_onviewchange_event.md - fires when the views are switched in the component (regardless of the switching method)
}}


Properties
----------

{{links
- api/link/ui.multiview_animate_config.md - defines or disables view change animation.
- api/link/ui.multiview_borderless_config.md - used to hide the component borders
- api/ui.multiview_cells_config.md - the array with views objects
- api/link/ui.multiview_cols_config.md - array of views objects arranged horizontally
- api/link/ui.multiview_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.multiview_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.multiview_disabled_config.md - disables item
- api/ui.multiview_fitbiggest_config.md - sizing mode of multiview
- api/link/ui.multiview_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.multiview_height_config.md - sets the height of the component
- api/link/ui.multiview_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.multiview_id_config.md - the component ID
- api/link/ui.multiview_maxheight_config.md - sets the maximum height for the view
- api/link/ui.multiview_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.multiview_minheight_config.md - sets the minimal height for the view
- api/link/ui.multiview_minwidth_config.md - sets the minimal width for the view
- api/link/ui.multiview_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.multiview_rows_config.md - array of views objects arranged vertically
- api/link/ui.multiview_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.multiview_width_config.md - sets the width of the component
}}




Other
-----

{{links
- api/link/ui.multiview_$getsize_other.md - returns the current size of the component
- api/link/ui.multiview_$height_other.md - current height of the view
- api/link/ui.multiview_$setsize_other.md - sets the component size
- api/link/ui.multiview_$skin_other.md - method, which will be called when skin defined
- api/link/ui.multiview_$view_other.md - reference to top html element of the view
- api/link/ui.multiview_$width_other.md - current width of the view
- api/link/ui.multiview_config_other.md - all options from initial component configuration
- api/link/ui.multiview_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.multiview_methods.md
- api/refs/ui.multiview_props.md
- api/refs/ui.multiview_events.md
- api/refs/ui.multiview_others.md

