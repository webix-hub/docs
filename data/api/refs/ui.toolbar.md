ui.toolbar 
=============


{{memo A horizontal toolbar. }}

The component can contain various elements inside it (actually, the same elements that the form can contain): an icon, a button, a label, an input box etc. Check [toolbar](desktop/toolbar.md) documentation for more detailed description.

### Constructor

~~~js
	var toolbar = webix.ui({
		view:"toolbar", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_toolbar({
		...config options goes here..
	});
~~~

### Where to start

- [Overview of Toolbar Widget](desktop/toolbar.md)
- [Samples](http://docs.webix.com/samples/02_toolbar/index.html)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/scrollable.md">Scrollable</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/values.md">Values</a>, <a href="api/refs/ui.layout.md">ui.layout</a>, <a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/validatedata.md">ValidateData</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.toolbar_addview.md - add new view to layout-like component
- api/link/ui.toolbar_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.toolbar_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.toolbar_bind.md - binds components
- api/link/ui.toolbar_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.toolbar_callevent.md - calls an inner event
- api/link/ui.toolbar_clear.md - clears all the field in a specified form
- api/link/ui.toolbar_clearvalidation.md - removes "data incorrect" highlighting from invalid text fields
- api/link/ui.toolbar_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.toolbar_destructor.md - destructs the calling object
- api/link/ui.toolbar_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.toolbar_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.toolbar_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.toolbar_focus.md - sets focus into the necessary component
- api/link/ui.toolbar_getchildviews.md - returns child views of the calling component
- api/link/ui.toolbar_getcleanvalues.md - returns hash of original form values
- api/link/ui.toolbar_getdirtyvalues.md - returns hash of changed values
- api/link/ui.toolbar_getformview.md - returns master form for the input
- api/link/ui.toolbar_getnode.md - returns the main HTML container for the calling object
- api/link/ui.toolbar_getparentview.md - returns the parent view of the component
- api/link/ui.toolbar_getscrollstate.md - returns the scroll position
- api/link/ui.toolbar_gettopparentview.md - returns top parent view
- api/link/ui.toolbar_getvalues.md - derives input values from the form
- api/link/ui.toolbar_hasevent.md - checks whether the component has the specified event
- api/link/ui.toolbar_hide.md - hides the view
- api/link/ui.toolbar_index.md - returns the cell index in the layout collection
- api/link/ui.toolbar_isdirty.md - checks whether changes within form were made
- api/link/ui.toolbar_isenabled.md - checks whether the view is enabled
- api/link/ui.toolbar_isvisible.md - checks whether the view is visible
- api/link/ui.toolbar_load.md - loads data from an external data source.
- api/link/ui.toolbar_mapevent.md - routes events from one object to another
- api/link/ui.toolbar_markinvalid.md - marks a form control invalid
- api/link/ui.toolbar_parse.md - loads data to the component from an inline data source
- api/link/ui.toolbar_reconstruct.md - rebuilds the layout
- api/ui.toolbar_refresh.md - repaints the component
- api/link/ui.toolbar_removeview.md - removes view from layout-like component
- api/ui.toolbar_render.md - renders the specified item or the whole component
- api/link/ui.toolbar_resize.md - adjusts the view to a new size
- api/link/ui.toolbar_resizechildren.md - resizes all children of the calling component
- api/link/ui.toolbar_scrollto.md - scrolls the data container to a certain position
- api/link/ui.toolbar_setdirty.md - marks the form as the one with changed values and vice versa
- api/link/ui.toolbar_setvalues.md - sets values into the inputs of a form/toolbar/property sheet control
- api/link/ui.toolbar_show.md - makes the component visible
- api/link/ui.toolbar_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.toolbar_unbind.md - breaks "bind" link
- api/link/ui.toolbar_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.toolbar_validate.md - checks data in the form
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.toolbar_onafterload_event.md - fires after server side loading is complete
- api/link/ui.toolbar_onafterscroll_event.md - fires when to component is scrolled in any direction
- api/link/ui.toolbar_onaftervalidation_event.md - fires after data has been validated
- api/link/ui.toolbar_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.toolbar_onbeforevalidate_event.md - called before running validation
- api/link/ui.toolbar_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.toolbar_onchange_event.md - fires when data in the input or related form/toolbar is changed
- api/link/ui.toolbar_ondestruct_event.md - occurs when component destroyed
- api/link/ui.toolbar_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.toolbar_onvalidationerror_event.md - fires when the form fails to pass validation
- api/link/ui.toolbar_onvalidationsuccess_event.md - fires after the form has passed validation successfully
- api/link/ui.toolbar_onvalues_event.md - fires after values have been set within toolbar or form
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.toolbar_animate_config.md - defines or disables view change animation.
- api/link/ui.toolbar_borderless_config.md - used to hide the component borders
- api/link/ui.toolbar_cols_config.md - array of views objects arranged horizontally
- api/link/ui.toolbar_complexdata_config.md - enables complex data parsing mode
- api/link/ui.toolbar_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.toolbar_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.toolbar_data_config.md - JavaScript array containing data for the component
- api/link/ui.toolbar_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/ui.toolbar_datatype_config.md - the type of loaded data
- api/link/ui.toolbar_disabled_config.md - indicates whether an item is enabled or not
- api/ui.toolbar_elements_config.md - collection of subviews
- api/ui.toolbar_elementsconfig_config.md - settings, which will be applied to all nested inputs
- api/link/ui.toolbar_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.toolbar_height_config.md - sets the height of the component
- api/link/ui.toolbar_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.toolbar_id_config.md - the component ID
- api/link/ui.toolbar_isolate_config.md - masks IDs of all inner element
- api/link/ui.toolbar_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/link/ui.toolbar_maxheight_config.md - sets the maximum height for the view
- api/link/ui.toolbar_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.toolbar_minheight_config.md - sets the minimal height for the view
- api/link/ui.toolbar_minwidth_config.md - sets the minimal width for the view
- api/link/ui.toolbar_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.toolbar_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/link/ui.toolbar_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/link/ui.toolbar_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/link/ui.toolbar_responsive_config.md - enables responsive mode for horizontal layout
- api/link/ui.toolbar_rows_config.md - array of views objects arranged vertically
- api/link/ui.toolbar_rules_config.md - defines a set of rules for input field(s) of the form(htmlform)
- api/link/ui.toolbar_scroll_config.md - enables/disables the scroll bar
- api/link/ui.toolbar_scrollspeed_config.md - the time during which the component is scrolled to the specified position (in milliseconds)
- api/link/ui.toolbar_type_config.md - defines the layout borders
- api/link/ui.toolbar_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.toolbar_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.toolbar_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.toolbar_$getsize_other.md - returns the current size of the component
- api/link/ui.toolbar_$height_other.md - current height of the view
- api/link/ui.toolbar_$setsize_other.md - sets the component size
- api/link/ui.toolbar_$skin_other.md - method, which will be called when skin defined
- api/link/ui.toolbar_$view_other.md - reference to top html element of the view
- api/link/ui.toolbar_$width_other.md - current width of the view
- api/link/ui.toolbar_config_other.md - all options from initial component configuration
- api/link/ui.toolbar_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.toolbar_methods.md
- api/refs/ui.toolbar_props.md
- api/refs/ui.toolbar_events.md
- api/refs/ui.toolbar_others.md

