ui.flexlayout 
=============


dummy stub

{{todo replace with real description. }}

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.layout.md">ui.layout</a>, <a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.flexlayout_addview.md - add new view to layout-like component
- api/link/ui.flexlayout_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.flexlayout_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.flexlayout_bind.md - binds components
- api/link/ui.flexlayout_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.flexlayout_callevent.md - calls an inner event
- api/link/ui.flexlayout_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.flexlayout_destructor.md - destructs the calling object
- api/link/ui.flexlayout_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.flexlayout_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.flexlayout_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.flexlayout_getchildviews.md - returns child views of the calling component
- api/link/ui.flexlayout_getformview.md - returns master form for the input
- api/link/ui.flexlayout_getnode.md - returns the main HTML container for the calling object
- api/link/ui.flexlayout_getparentview.md - returns the parent view of the component
- api/link/ui.flexlayout_gettopparentview.md - returns top parent view
- api/link/ui.flexlayout_hasevent.md - checks whether the component has the specified event
- api/link/ui.flexlayout_hide.md - hides the view
- api/link/ui.flexlayout_index.md - returns the cell index in the layout collection
- api/link/ui.flexlayout_isenabled.md - checks whether the view is enabled
- api/link/ui.flexlayout_isvisible.md - checks whether the view is visible
- api/link/ui.flexlayout_mapevent.md - routes events from one object to another
- api/link/ui.flexlayout_reconstruct.md - rebuilds the layout
- api/link/ui.flexlayout_removeview.md - removes view from layout-like component
- api/link/ui.flexlayout_resize.md - adjusts the view to a new size
- api/link/ui.flexlayout_resizechildren.md - resizes all children of the calling component
- api/link/ui.flexlayout_show.md - makes the component visible
- api/link/ui.flexlayout_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.flexlayout_unbind.md - breaks "bind" link
- api/link/ui.flexlayout_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.flexlayout_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.flexlayout_ondestruct_event.md - occurs when component destroyed
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.flexlayout_animate_config.md - defines or disables view change animation.
- api/link/ui.flexlayout_borderless_config.md - used to hide the component borders
- api/link/ui.flexlayout_cols_config.md - array of views objects arranged horizontally
- api/link/ui.flexlayout_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.flexlayout_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.flexlayout_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.flexlayout_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.flexlayout_height_config.md - sets the height of the component
- api/link/ui.flexlayout_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.flexlayout_id_config.md - the component ID
- api/link/ui.flexlayout_isolate_config.md - masks IDs of all inner elements
- api/link/ui.flexlayout_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/link/ui.flexlayout_maxheight_config.md - sets the maximum height for the view
- api/link/ui.flexlayout_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.flexlayout_minheight_config.md - sets the minimal height for the view
- api/link/ui.flexlayout_minwidth_config.md - sets the minimal width for the view
- api/link/ui.flexlayout_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.flexlayout_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/link/ui.flexlayout_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/link/ui.flexlayout_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/link/ui.flexlayout_responsive_config.md - enables responsive mode for horizontal layout
- api/link/ui.flexlayout_rows_config.md - array of views objects arranged vertically
- api/link/ui.flexlayout_type_config.md - defines the layout borders
- api/link/ui.flexlayout_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.flexlayout_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.flexlayout_$getsize_other.md - returns the current size of the component
- api/link/ui.flexlayout_$height_other.md - current height of the view
- api/link/ui.flexlayout_$setsize_other.md - sets the component size
- api/link/ui.flexlayout_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.flexlayout_$view_other.md - reference to top html element of the view
- api/link/ui.flexlayout_$width_other.md - current width of the view
- api/link/ui.flexlayout_config_other.md - all options from initial component configuration
- api/link/ui.flexlayout_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.flexlayout_methods.md
- api/refs/ui.flexlayout_props.md
- api/refs/ui.flexlayout_events.md
- api/refs/ui.flexlayout_others.md

