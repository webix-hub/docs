ui.richtext 
=============

{{memo A rich text editor widget for entering and editing text. }}

Webix RichText is a widget that provides a WYSIWYG editing area for entering and formatting text.

Check desktop/richtext.md documentation for more details.

###Constructor 

~~~js
var richtext = webix.ui({
    view: "richtext",
    id:"richtext1",
  	label:"Mytext",
  	labelPosition:"top"
});
~~~

### Where to start

- [Overview of the RichText Widget](desktop/richtext.md)
- [Samples](http://docs.webix.com/samples/13_form/01_controls/23_richtext.html)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/idspace.md">IdSpace</a>, <a href="api/refs/ui.layout.md">ui.layout</a>, <a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.richtext_addview.md - adds a new view to a layout-like component
- api/link/ui.richtext_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.richtext_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.richtext_bind.md - binds components
- api/link/ui.richtext_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.richtext_callevent.md - calls an inner event
- api/link/ui.richtext_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.richtext_destructor.md - destructs the calling object
- api/link/ui.richtext_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.richtext_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.richtext_enable.md - enables the calling view that was disabled by the 'disable' method
- api/ui.richtext_focus.md - sets focus to the richtext
- api/link/ui.richtext_getchildviews.md - returns child views of the calling component
- api/link/ui.richtext_getformview.md - returns master form for the input
- api/ui.richtext_getinputnode.md - gets the HTML element related to the component
- api/link/ui.richtext_getnode.md - returns the main HTML container for the calling object
- api/link/ui.richtext_getparentview.md - returns the parent view of the component
- api/link/ui.richtext_gettopparentview.md - returns top parent view
- api/ui.richtext_getvalue.md - returns the current value of the richtext editor
- api/link/ui.richtext_hasevent.md - checks whether the component has the specified event
- api/link/ui.richtext_hide.md - hides the view
- api/link/ui.richtext_index.md - returns the cell index in the layout collection
- api/link/ui.richtext_innerid.md - returns the inner ID of an item by its public (real) ID
- api/link/ui.richtext_isenabled.md - checks whether the view is enabled
- api/link/ui.richtext_isvisible.md - checks whether the view is visible
- api/link/ui.richtext_mapevent.md - routes events from one object to another
- api/link/ui.richtext_reconstruct.md - rebuilds the layout
- api/ui.richtext_refresh.md - repaints richtext editor
- api/link/ui.richtext_removeview.md - removes view from layout-like component
- api/link/ui.richtext_resize.md - adjusts the view to a new size
- api/link/ui.richtext_resizechildren.md - resizes all children of the called component
- api/ui.richtext_setvalue.md - sets a new value for the richeditor control
- api/link/ui.richtext_show.md - makes the component visible
- api/link/ui.richtext_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.richtext_ui.md - allows creating new ui, the id of which will be locked in the parent id space
- api/link/ui.richtext_unbind.md - breaks "bind" link
- api/link/ui.richtext_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.richtext_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/ui.richtext_onchange_event.md - fires when data in the input of the related form/toolbar is changed
- api/link/ui.richtext_ondestruct_event.md - occurs when component destroyed
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.richtext_animate_config.md - defines or disables view change animation.
- api/link/ui.richtext_borderless_config.md - used to hide the component borders
- api/link/ui.richtext_cols_config.md - array of views objects arranged horizontally
- api/link/ui.richtext_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.richtext_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.richtext_disabled_config.md - indicates whether an item is enabled
- api/link/ui.richtext_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.richtext_height_config.md - sets the height of the component
- api/link/ui.richtext_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.richtext_id_config.md - the component ID
- api/link/ui.richtext_isolate_config.md - masks IDs of all inner elements
- api/ui.richtext_label_config.md - the text label of the rich text editor
- api/ui.richtext_labelposition_config.md - positions label in relation to the control
- api/ui.richtext_labelwidth_config.md - the width of the label
- api/link/ui.richtext_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/link/ui.richtext_maxheight_config.md - sets the maximum height for the view
- api/link/ui.richtext_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.richtext_minheight_config.md - sets the minimal height for the view
- api/link/ui.richtext_minwidth_config.md - sets the minimal width for the view
- api/link/ui.richtext_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.richtext_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/link/ui.richtext_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/link/ui.richtext_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/link/ui.richtext_responsive_config.md - enables responsive mode for horizontal layout
- api/link/ui.richtext_rows_config.md - array of views objects arranged vertically
- api/link/ui.richtext_type_config.md - defines the layout borders
- api/ui.richtext_value_config.md - sets the initial value for the RichText control
- api/link/ui.richtext_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.richtext_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.richtext_$$_other.md - locates sub-item by id
- api/link/ui.richtext_$getsize_other.md - returns the current size of the component
- api/link/ui.richtext_$height_other.md - current height of the view
- api/link/ui.richtext_$setsize_other.md - sets the component size
- api/link/ui.richtext_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.richtext_$view_other.md - reference to top html element of the view
- api/link/ui.richtext_$width_other.md - current width of the view
- api/link/ui.richtext_config_other.md - all options from initial component configuration
- api/link/ui.richtext_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.richtext_methods.md
- api/refs/ui.richtext_props.md
- api/refs/ui.richtext_events.md
- api/refs/ui.richtext_others.md

