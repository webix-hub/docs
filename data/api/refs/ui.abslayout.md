ui.abslayout 
=============


dummy stub

{{todo replace with real description. }}

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.abslayout_addview.md - adds a new view to a layout-like component
- api/link/ui.abslayout_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.abslayout_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.abslayout_bind.md - binds components
- api/link/ui.abslayout_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.abslayout_callevent.md - calls an inner event
- api/link/ui.abslayout_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.abslayout_destructor.md - destructs the calling object
- api/link/ui.abslayout_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.abslayout_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.abslayout_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.abslayout_getchildviews.md - returns child views of the calling component
- api/link/ui.abslayout_getformview.md - returns master form for the input
- api/link/ui.abslayout_getnode.md - returns the main HTML container for the calling object
- api/link/ui.abslayout_getparentview.md - returns the parent view of the component
- api/link/ui.abslayout_gettopparentview.md - returns top parent view
- api/link/ui.abslayout_hasevent.md - checks whether the component has the specified event
- api/link/ui.abslayout_hide.md - hides the view
- api/link/ui.abslayout_index.md - returns the cell index in the layout collection
- api/link/ui.abslayout_isenabled.md - checks whether the view is enabled
- api/link/ui.abslayout_isvisible.md - checks whether the view is visible
- api/link/ui.abslayout_mapevent.md - routes events from one object to another
- api/link/ui.abslayout_reconstruct.md - rebuilds the layout
- api/link/ui.abslayout_removeview.md - removes the specified view of a layout-like component
- api/link/ui.abslayout_resize.md - adjusts the view to a new size
- api/link/ui.abslayout_resizechildren.md - resizes all children of the called component
- api/link/ui.abslayout_show.md - makes the component visible
- api/link/ui.abslayout_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.abslayout_unbind.md - breaks "bind" link
- api/link/ui.abslayout_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.abslayout_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.abslayout_ondestruct_event.md - occurs when component destroyed
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.abslayout_animate_config.md - defines or disables view change animation.
- api/link/ui.abslayout_borderless_config.md - used to hide the component borders
- api/ui.abslayout_cells_config.md - defines the content of the abslayout
- api/link/ui.abslayout_cols_config.md - array of views objects arranged horizontally
- api/link/ui.abslayout_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.abslayout_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.abslayout_disabled_config.md - indicates whether an item is enabled
- api/link/ui.abslayout_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.abslayout_height_config.md - sets the height of the component
- api/link/ui.abslayout_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.abslayout_id_config.md - the component ID
- api/link/ui.abslayout_maxheight_config.md - sets the maximum height for the view
- api/link/ui.abslayout_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.abslayout_minheight_config.md - sets the minimal height for the view
- api/link/ui.abslayout_minwidth_config.md - sets the minimal width for the view
- api/link/ui.abslayout_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.abslayout_responsive_config.md - enables responsive mode for horizontal layout
- api/link/ui.abslayout_rows_config.md - array of views objects arranged vertically
- api/link/ui.abslayout_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.abslayout_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.abslayout_$getsize_other.md - returns the current size of the component
- api/link/ui.abslayout_$height_other.md - current height of the view
- api/link/ui.abslayout_$setsize_other.md - sets the component size
- api/link/ui.abslayout_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.abslayout_$view_other.md - reference to top html element of the view
- api/link/ui.abslayout_$width_other.md - current width of the view
- api/link/ui.abslayout_config_other.md - all options from initial component configuration
- api/link/ui.abslayout_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.abslayout_methods.md
- api/refs/ui.abslayout_props.md
- api/refs/ui.abslayout_events.md
- api/refs/ui.abslayout_others.md

