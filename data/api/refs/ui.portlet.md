ui.portlet 
=============


{{memo A movable layout component that can contain other components inside. }}

Portlet can include any content and be dragged to any position. It allows placing several components on the page at once. 
Check [portlet](desktop/portlet.md) documentation for more detailed description.

### Constructor

~~~js
var portlet = webix.ui({  
    type:"space",
  	rows:[
    	{ view:"portlet", body:{
			template:"row 1"
		. }},
		{ view:"portlet", body:{
			template:"row 2"
		. }},
    	{ view:"portlet", body:{
			template:"row 3"
		. }}
   	]
});
~~~

### Where to start

- [Overview of the Portlet Widget](desktop/portlet.md)
- [Samples](http://docs.webix.com/samples/60_pro/09_portlet/index.html)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.layout.md">ui.layout</a>, <a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.portlet_addview.md - adds a new view to a layout-like component
- api/link/ui.portlet_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.portlet_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.portlet_bind.md - binds components
- api/link/ui.portlet_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.portlet_callevent.md - calls an inner event
- api/link/ui.portlet_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.portlet_destructor.md - destructs the calling object
- api/link/ui.portlet_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.portlet_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.portlet_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.portlet_getchildviews.md - returns child views of the calling component
- api/link/ui.portlet_getformview.md - returns master form for the input
- api/link/ui.portlet_getnode.md - returns the main HTML container for the calling object
- api/link/ui.portlet_getparentview.md - returns the parent view of the component
- api/link/ui.portlet_gettopparentview.md - returns top parent view
- api/link/ui.portlet_hasevent.md - checks whether the component has the specified event
- api/link/ui.portlet_hide.md - hides the view
- api/link/ui.portlet_index.md - returns the cell index in the layout collection
- api/link/ui.portlet_isenabled.md - checks whether the view is enabled
- api/link/ui.portlet_isvisible.md - checks whether the view is visible
- api/link/ui.portlet_mapevent.md - routes events from one object to another
- api/ui.portlet_markdroparea.md - renders marker on the area where a portlet can be dropped during drag-n-drop
- api/ui.portlet_moveportlet.md - moves portlet to the marked area
- api/link/ui.portlet_reconstruct.md - rebuilds the layout
- api/link/ui.portlet_removeview.md - removes view from layout-like component
- api/link/ui.portlet_resize.md - adjusts the view to a new size
- api/link/ui.portlet_resizechildren.md - resizes all children of the called component
- api/link/ui.portlet_show.md - makes the component visible
- api/link/ui.portlet_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.portlet_unbind.md - breaks "bind" link
- api/link/ui.portlet_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/ui.portlet_onafterportletmove_event.md - fires after a portlet has been moved
- api/ui.portlet_onbeforeportletmove_event.md - fires before a portlet is moved
- api/link/ui.portlet_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.portlet_ondestruct_event.md - occurs when component destroyed
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.portlet_animate_config.md - defines or disables view change animation.
- api/ui.portlet_body_config.md - defines the portlet content (a view or some HTML)
- api/link/ui.portlet_borderless_config.md - used to hide the component borders
- api/link/ui.portlet_cols_config.md - array of views objects arranged horizontally
- api/link/ui.portlet_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.portlet_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.portlet_disabled_config.md - indicates whether an item is enabled
- api/link/ui.portlet_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.portlet_height_config.md - sets the height of the component
- api/link/ui.portlet_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.portlet_id_config.md - the component ID
- api/link/ui.portlet_isolate_config.md - masks IDs of all inner elements
- api/ui.portlet_layouttype_config.md - defines the borders of layout that will be created after drag-n-drop operation is finished
- api/link/ui.portlet_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/link/ui.portlet_maxheight_config.md - sets the maximum height for the view
- api/link/ui.portlet_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.portlet_minheight_config.md - sets the minimal height for the view
- api/link/ui.portlet_minwidth_config.md - sets the minimal width for the view
- api/ui.portlet_mode_config.md - defines the mode of moving portlets
- api/link/ui.portlet_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.portlet_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/link/ui.portlet_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/link/ui.portlet_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/link/ui.portlet_responsive_config.md - enables responsive mode for horizontal layout
- api/link/ui.portlet_rows_config.md - array of views objects arranged vertically
- api/link/ui.portlet_type_config.md - defines the layout borders
- api/link/ui.portlet_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.portlet_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/ui.portlet_$drag_other.md - method called when drag operation initiated
- api/link/ui.portlet_$getsize_other.md - returns the current size of the component
- api/link/ui.portlet_$height_other.md - current height of the view
- api/link/ui.portlet_$setsize_other.md - sets the component size
- api/link/ui.portlet_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.portlet_$view_other.md - reference to top html element of the view
- api/link/ui.portlet_$width_other.md - current width of the view
- api/link/ui.portlet_config_other.md - all options from initial component configuration
- api/link/ui.portlet_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.portlet_methods.md
- api/refs/ui.portlet_props.md
- api/refs/ui.portlet_events.md
- api/refs/ui.portlet_others.md

