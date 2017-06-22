ui.querybuilder 
=============


{{memo A handy tool for creating complex filters. }}

{{todo check link to samples. }}

Webix Query Builder widget inherits from desktop/layout.md and allows setting extended rules for data filtering, grouping several
rules and define the logic of rules' usage. 
You can use it as a standalone solution or combine with data widgets, such as DataTable and Pivot. Query Builder can also be used
as a built-in filter of DataTable.

Check desktop/query_builder.md documentation for more details.

###Constructor 

~~~js
var querybuilder = webix.ui({
    view:"querybuilder", 
    id: "querybuilder",
    fields: [
        { id:"fname",   value:"First Name", type:"string" },
        { id:"lname",   value:"Last Name",  type:"string" },
        { id:"age",     value:"Age",        type:"number" },
        { id:"bdate",   value:"Birth Date", type:"date" }
    ]
});
~~~

### Where to start

- [Overview of the Query Builder Widget](desktop/query_builder.md)
- [Samples](http://docs.webix.com/samples/66_querybuilder/index.html) 

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.layout.md">ui.layout</a>, <a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.querybuilder_addview.md - adds a new view to a layout-like component
- api/link/ui.querybuilder_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.querybuilder_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.querybuilder_bind.md - binds components
- api/link/ui.querybuilder_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.querybuilder_callevent.md - calls an inner event
- api/link/ui.querybuilder_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.querybuilder_destructor.md - destructs the calling object
- api/link/ui.querybuilder_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.querybuilder_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.querybuilder_enable.md - enables the calling view that was disabled by the 'disable' method
- api/ui.querybuilder_focus.md - sets focus to the active (blue-colored) state of the toggle button of QueryBuilder
- api/link/ui.querybuilder_getchildviews.md - returns child views of the calling component
- api/ui.querybuilder_getfilterhelper.md - returns the function that implies the filtering logic
- api/ui.querybuilder_getfilters.md - returns all available filter objects
- api/link/ui.querybuilder_getformview.md - returns master form for the input
- api/link/ui.querybuilder_getnode.md - returns the main HTML container for the calling object
- api/link/ui.querybuilder_getparentview.md - returns the parent view of the component
- api/link/ui.querybuilder_gettopparentview.md - returns top parent view
- api/ui.querybuilder_getvalue.md - returns the value set for Query Builder (an array of rules and fields for filtering)
- api/link/ui.querybuilder_hasevent.md - checks whether the component has the specified event
- api/link/ui.querybuilder_hide.md - hides the view
- api/link/ui.querybuilder_index.md - returns the cell index in the layout collection
- api/link/ui.querybuilder_isenabled.md - checks whether the view is enabled
- api/link/ui.querybuilder_isvisible.md - checks whether the view is visible
- api/link/ui.querybuilder_mapevent.md - routes events from one object to another
- api/link/ui.querybuilder_reconstruct.md - rebuilds the layout
- api/link/ui.querybuilder_removeview.md - removes the specified view of a layout-like component
- api/link/ui.querybuilder_resize.md - adjusts the view to a new size
- api/link/ui.querybuilder_resizechildren.md - resizes all children of the called component
- api/ui.querybuilder_setfilters.md - sets an array of filtering objects
- api/ui.querybuilder_setvalue.md - sets a value for Query Builder as an array of rules and fields for filtering. Please, see the details
- api/link/ui.querybuilder_show.md - makes the component visible
- api/link/ui.querybuilder_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.querybuilder_unbind.md - breaks "bind" link
- api/link/ui.querybuilder_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.querybuilder_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.querybuilder_ondestruct_event.md - occurs when component destroyed
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.querybuilder_animate_config.md - defines or disables view change animation.
- api/link/ui.querybuilder_borderless_config.md - used to hide the component borders
- api/link/ui.querybuilder_cols_config.md - array of views objects arranged horizontally
- api/link/ui.querybuilder_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.querybuilder_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.querybuilder_disabled_config.md - indicates whether an item is enabled
- api/ui.querybuilder_fields_config.md - sets an array of fields that will be used for filtering dataset
- api/link/ui.querybuilder_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.querybuilder_height_config.md - sets the height of the component
- api/link/ui.querybuilder_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.querybuilder_id_config.md - the component ID
- api/link/ui.querybuilder_isolate_config.md - masks IDs of all inner elements
- api/link/ui.querybuilder_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/link/ui.querybuilder_maxheight_config.md - sets the maximum height for the view
- api/link/ui.querybuilder_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.querybuilder_minheight_config.md - sets the minimal height for the view
- api/link/ui.querybuilder_minwidth_config.md - sets the minimal width for the view
- api/link/ui.querybuilder_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.querybuilder_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/link/ui.querybuilder_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/link/ui.querybuilder_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/link/ui.querybuilder_responsive_config.md - enables responsive mode for horizontal layout
- api/link/ui.querybuilder_rows_config.md - array of views objects arranged vertically
- api/link/ui.querybuilder_type_config.md - defines the layout borders
- api/link/ui.querybuilder_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.querybuilder_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.querybuilder_$getsize_other.md - returns the current size of the component
- api/link/ui.querybuilder_$height_other.md - current height of the view
- api/link/ui.querybuilder_$setsize_other.md - sets the component size
- api/link/ui.querybuilder_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.querybuilder_$view_other.md - reference to top html element of the view
- api/link/ui.querybuilder_$width_other.md - current width of the view
- api/link/ui.querybuilder_config_other.md - all options from initial component configuration
- api/link/ui.querybuilder_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.querybuilder_methods.md
- api/refs/ui.querybuilder_props.md
- api/refs/ui.querybuilder_events.md
- api/refs/ui.querybuilder_others.md

