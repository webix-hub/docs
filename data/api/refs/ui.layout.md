ui.layout 
=============

{{memo A vertical or horizontal layout without headers. }}

The component allows you to define interface structure by organizing views in a vertical or horizontal layout. 
By including layouts one by one, it's possible to create an interface of any complexity. 
Check [Layout](desktop/layout.md) documentation for a more detailed description.

### Constructor

~~~js
var layout = webix.ui({
	rows:[
		{template:"row 1"},
		{template:"row 2"},
		{
			cols:[
				{template:"col 1"},
				{template:"col 2"}
			]
		}
	]
});
~~~

### Where to start

- [Overview of the Layout Widget](desktop/layout.md)
- [Samples](http://docs.webix.com/samples/01_layout/index.html)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.layout_addview.md - add new view to layout-like component
- api/link/ui.layout_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.layout_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.layout_bind.md - binds components
- api/link/ui.layout_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.layout_callevent.md - calls an inner event
- api/link/ui.layout_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.layout_destructor.md - destructs the calling object
- api/link/ui.layout_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.layout_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.layout_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.layout_getchildviews.md - returns child views of the calling component
- api/link/ui.layout_getformview.md - returns master form for the input
- api/link/ui.layout_getnode.md - returns the main HTML container for the calling object
- api/link/ui.layout_getparentview.md - returns the parent view of the component
- api/link/ui.layout_gettopparentview.md - returns top parent view
- api/link/ui.layout_hasevent.md - checks whether the component has the specified event
- api/link/ui.layout_hide.md - hides the view
- api/link/ui.layout_index.md - returns the cell index in the layout collection
- api/link/ui.layout_isenabled.md - checks whether the view is enabled
- api/link/ui.layout_isvisible.md - checks whether the view is visible
- api/link/ui.layout_mapevent.md - routes events from one object to another
- api/link/ui.layout_reconstruct.md - rebuilds the layout
- api/link/ui.layout_removeview.md - removes view from layout-like component
- api/link/ui.layout_resize.md - adjusts the view to a new size
- api/link/ui.layout_resizechildren.md - resizes all children of the calling component
- api/link/ui.layout_show.md - makes the component visible
- api/link/ui.layout_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.layout_unbind.md - breaks "bind" link
- api/link/ui.layout_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.layout_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.layout_ondestruct_event.md - occurs when component destroyed
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.layout_animate_config.md - defines or disables view change animation.
- api/link/ui.layout_borderless_config.md - used to hide the component borders
- api/link/ui.layout_cols_config.md - array of views objects arranged horizontally
- api/link/ui.layout_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.layout_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.layout_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.layout_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.layout_height_config.md - sets the height of the component
- api/link/ui.layout_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.layout_id_config.md - the component ID
- api/ui.layout_isolate_config.md - masks IDs of all inner elements
- api/ui.layout_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/link/ui.layout_maxheight_config.md - sets the maximum height for the view
- api/link/ui.layout_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.layout_minheight_config.md - sets the minimal height for the view
- api/link/ui.layout_minwidth_config.md - sets the minimal width for the view
- api/link/ui.layout_on_config.md - allows attaching custom handlers to inner events of the component
- api/ui.layout_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/ui.layout_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/ui.layout_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/link/ui.layout_responsive_config.md - enables responsive mode for horizontal layout
- api/link/ui.layout_rows_config.md - array of views objects arranged vertically
- api/ui.layout_type_config.md - defines the layout borders
- api/link/ui.layout_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.layout_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.layout_$getsize_other.md - returns the current size of the component
- api/link/ui.layout_$height_other.md - current height of the view
- api/link/ui.layout_$setsize_other.md - sets the component size
- api/link/ui.layout_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.layout_$view_other.md - reference to top html element of the view
- api/link/ui.layout_$width_other.md - current width of the view
- api/link/ui.layout_config_other.md - all options from initial component configuration
- api/link/ui.layout_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.layout_methods.md
- api/refs/ui.layout_props.md
- api/refs/ui.layout_events.md
- api/refs/ui.layout_others.md

