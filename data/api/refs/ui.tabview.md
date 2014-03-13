ui.tabview 
=============


{{memo A container control with a navigation tab panel that keeps a set of views and displays one view at a time. }}

The component optimizes the process of creating tabbed structures on the page - elements that present multiple groups of content switched by tabs. Check [tabview](desktop__tabview.md) documentation for more detailed description.

### Constructor

~~~js
	var tabview = webix.ui({
		view:"tabview", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_tabview({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.layout.md">ui.layout</a>, <a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>

Methods
-------

{{links
- api/link/ui.tabview_addview.md - add new view to layout or multiview
- api/link/ui.tabview_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.tabview_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.tabview_bind.md - binds components
- api/link/ui.tabview_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.tabview_callevent.md - calls an inner event
- api/link/ui.tabview_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.tabview_destructor.md - destructs the calling object
- api/link/ui.tabview_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.tabview_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.tabview_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.tabview_getchildviews.md - returns child views of the calling component
- api/link/ui.tabview_getformview.md - returns master form for the input
- api/ui.tabview_getmultiview.md - returns webix ui for multiview in tabbar
- api/link/ui.tabview_getnode.md - returns the main HTML container for the calling object
- api/link/ui.tabview_getparentview.md - returns the parent view of the component
- api/ui.tabview_gettabbar.md - returns webix ui for Tabbar in tabview
- api/link/ui.tabview_gettopparentview.md - returns top parent view
- api/ui.tabview_getvalue.md - returns the current value of the control
- api/link/ui.tabview_hasevent.md - checks whether the component has the specified event
- api/link/ui.tabview_hide.md - hides the view
- api/link/ui.tabview_index.md - returns the cell index in the layout collection
- api/link/ui.tabview_isenabled.md - checks whether the view is enabled
- api/link/ui.tabview_isvisible.md - checks whether the view is visible
- api/link/ui.tabview_mapevent.md - routes events from one object to another
- api/link/ui.tabview_reconstruct.md - rebuilds the layout
- api/link/ui.tabview_removeview.md - removes view from multiview or layout
- api/link/ui.tabview_resize.md - adjusts the view to a new size
- api/link/ui.tabview_resizechildren.md - resizes all children of the calling component
- api/ui.tabview_setvalue.md - sets a new value for the component
- api/link/ui.tabview_show.md - makes the component visible
- api/link/ui.tabview_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.tabview_unbind.md - breaks "bind" link
- api/link/ui.tabview_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


Events
------

{{links
- api/link/ui.tabview_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.tabview_ondestruct_event.md - occurs when component destroyed
}}


Properties
----------

{{links
- api/link/ui.tabview_animate_config.md - defines or disables view change animation.
- api/link/ui.tabview_borderless_config.md - used to hide the component borders
- api/link/ui.tabview_cols_config.md - array of views objects arranged horizontally
- api/link/ui.tabview_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.tabview_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.tabview_disabled_config.md - disables item
- api/link/ui.tabview_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.tabview_height_config.md - sets the height of the component
- api/link/ui.tabview_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.tabview_id_config.md - the component ID
- api/link/ui.tabview_isolate_config.md - masks IDs of all inner element
- api/link/ui.tabview_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/link/ui.tabview_maxheight_config.md - sets the maximum height for the view
- api/link/ui.tabview_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.tabview_minheight_config.md - sets the minimal height for the view
- api/link/ui.tabview_minwidth_config.md - sets the minimal width for the view
- api/link/ui.tabview_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.tabview_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/link/ui.tabview_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/link/ui.tabview_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/link/ui.tabview_rows_config.md - array of views objects arranged vertically
- api/link/ui.tabview_type_config.md - defines the layout borders
- api/link/ui.tabview_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.tabview_width_config.md - sets the width of the component
}}




Other
-----

{{links
- api/link/ui.tabview_$getsize_other.md - returns the current size of the component
- api/link/ui.tabview_$height_other.md - current height of the view
- api/link/ui.tabview_$setsize_other.md - sets the component size
- api/link/ui.tabview_$skin_other.md - method, which will be called when skin defined
- api/link/ui.tabview_$view_other.md - reference to top html element of the view
- api/link/ui.tabview_$width_other.md - current width of the view
- api/link/ui.tabview_config_other.md - all options from initial component configuration
- api/link/ui.tabview_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.tabview_methods.md
- api/refs/ui.tabview_props.md
- api/refs/ui.tabview_events.md
- api/refs/ui.tabview_others.md

