ui.dbllist 
=============


{{memo A widget with rich selection possibilities for moving items between two lists. }}

The Double List widget is based on Webix Layout. It includes two lists that contain sets of data items. Customizable buttons placed between the lists allow the user to select items in one list and drag-n-drop them to the other one.

Check desktop/double_list.md documentation for more details.


###Constructor 

~~~js
var double_list = webix.ui({
    view:"dbllist", 
    value:"1,2",
    data:[
        {id:"1", value:"Guest"},
        {id:"2", value:"Member"},
        {id:"3", value:"Moderator"}
    ]
});
~~~

### Where to start

- [Overview of the Double List Widget](desktop/double_list.md)
- [Samples](http://docs.webix.com/samples/05_list/18_dbllist.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/idspace.md">IdSpace</a>, <a href="api/refs/ui.layout.md">ui.layout</a>, <a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.dbllist_addview.md - adds a new view to a layout-like component
- api/link/ui.dbllist_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.dbllist_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.dbllist_bind.md - binds components
- api/link/ui.dbllist_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.dbllist_callevent.md - calls an inner event
- api/link/ui.dbllist_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.dbllist_destructor.md - destructs the calling object
- api/link/ui.dbllist_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.dbllist_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.dbllist_enable.md - enables the calling view that was disabled by the 'disable' method
- api/ui.dbllist_focus.md - sets focus to the widget
- api/link/ui.dbllist_getchildviews.md - returns child views of the calling component
- api/link/ui.dbllist_getformview.md - returns master form for the input
- api/link/ui.dbllist_getnode.md - returns the main HTML container for the calling object
- api/link/ui.dbllist_getparentview.md - returns the parent view of the component
- api/link/ui.dbllist_gettopparentview.md - returns top parent view
- api/ui.dbllist_getvalue.md - returns the ids of the selected items (items of the right list)
- api/link/ui.dbllist_hasevent.md - checks whether the component has the specified event
- api/link/ui.dbllist_hide.md - hides the view
- api/link/ui.dbllist_index.md - returns the cell index in the layout collection
- api/link/ui.dbllist_innerid.md - returns the inner ID of an item by its public (real) ID
- api/link/ui.dbllist_isenabled.md - checks whether the view is enabled
- api/link/ui.dbllist_isvisible.md - checks whether the view is visible
- api/link/ui.dbllist_load.md - loads data from an external data source.
- api/link/ui.dbllist_mapevent.md - routes events from one object to another
- api/link/ui.dbllist_parse.md - loads data to the component from an inline data source
- api/link/ui.dbllist_reconstruct.md - rebuilds the layout
- api/link/ui.dbllist_removeview.md - removes view from layout-like component
- api/link/ui.dbllist_resize.md - adjusts the view to a new size
- api/link/ui.dbllist_resizechildren.md - resizes all children of the called component
- api/ui.dbllist_select.md - selects the specified items (moves them to the right list) or unselects them
- api/ui.dbllist_setvalue.md - specifies the item(s) that should be selected
- api/link/ui.dbllist_show.md - makes the component visible
- api/link/ui.dbllist_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.dbllist_ui.md - allows creating new ui, the id of which will be locked in the parent id space
- api/link/ui.dbllist_unbind.md - breaks "bind" link
- api/link/ui.dbllist_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.dbllist_onafterload_event.md - fires after data loading is complete
- api/link/ui.dbllist_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.dbllist_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/ui.dbllist_onchange_event.md - fires on changes in the DoubleList
- api/link/ui.dbllist_ondestruct_event.md - occurs when component destroyed
- api/link/ui.dbllist_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.dbllist_animate_config.md - defines or disables view change animation.
- api/link/ui.dbllist_borderless_config.md - used to hide the component borders
- api/ui.dbllist_buttons_config.md - sets a custom template for buttons or hides them
- api/link/ui.dbllist_cols_config.md - array of views objects arranged horizontally
- api/link/ui.dbllist_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.dbllist_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.dbllist_data_config.md - JavaScript array containing data for the component
- api/link/ui.dbllist_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/ui.dbllist_datatype_config.md - the type of loaded data
- api/link/ui.dbllist_disabled_config.md - indicates whether an item is enabled
- api/link/ui.dbllist_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.dbllist_height_config.md - sets the height of the component
- api/link/ui.dbllist_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.dbllist_id_config.md - the component ID
- api/link/ui.dbllist_isolate_config.md - masks IDs of all inner elements
- api/ui.dbllist_labelbottomleft_config.md - sets a label for the left list at the bottom
- api/ui.dbllist_labelbottomright_config.md - sets a label for the right list at the bottom
- api/ui.dbllist_labelleft_config.md - sets a label for the left list
- api/ui.dbllist_labelright_config.md - sets a label for the right list
- api/ui.dbllist_list_config.md - sets the configuration of lists in the Double List widget
- api/link/ui.dbllist_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/link/ui.dbllist_maxheight_config.md - sets the maximum height for the view
- api/link/ui.dbllist_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.dbllist_minheight_config.md - sets the minimal height for the view
- api/link/ui.dbllist_minwidth_config.md - sets the minimal width for the view
- api/link/ui.dbllist_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.dbllist_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/link/ui.dbllist_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/link/ui.dbllist_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/link/ui.dbllist_responsive_config.md - enables responsive mode for horizontal layout
- api/link/ui.dbllist_rows_config.md - array of views objects arranged vertically
- api/link/ui.dbllist_type_config.md - defines the layout borders
- api/link/ui.dbllist_url_config.md - the URL which the component will use to load data after its initialization
- api/ui.dbllist_value_config.md - sets the ids of items that should be initially selected (moved to the right list)
- api/link/ui.dbllist_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.dbllist_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.dbllist_$$_other.md - locates sub-item by id
- api/link/ui.dbllist_$getsize_other.md - returns the current size of the component
- api/link/ui.dbllist_$height_other.md - current height of the view
- api/ui.dbllist_$onload_other.md - default action on data loading
- api/link/ui.dbllist_$setsize_other.md - sets the component size
- api/link/ui.dbllist_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.dbllist_$view_other.md - reference to top html element of the view
- api/link/ui.dbllist_$width_other.md - current width of the view
- api/link/ui.dbllist_config_other.md - all options from initial component configuration
- api/link/ui.dbllist_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.dbllist_methods.md
- api/refs/ui.dbllist_props.md
- api/refs/ui.dbllist_events.md
- api/refs/ui.dbllist_others.md



@seolinktop: [mvc library](https://webix.com)
@seolink: [javascript library list](https://webix.com/widget/list/)