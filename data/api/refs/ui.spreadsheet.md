ui.spreadsheet 
=============


dummy stub

{{todo replace with real description. }}

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.layout.md">ui.layout</a>, <a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.spreadsheet_addview.md - add new view to layout-like component
- api/link/ui.spreadsheet_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.spreadsheet_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.spreadsheet_bind.md - binds components
- api/link/ui.spreadsheet_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.spreadsheet_callevent.md - calls an inner event
- api/ui.spreadsheet_combinecells.md - 
- api/link/ui.spreadsheet_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.spreadsheet_destructor.md - destructs the calling object
- api/link/ui.spreadsheet_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.spreadsheet_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/ui.spreadsheet_eachselectedcell.md - 
- api/link/ui.spreadsheet_enable.md - enables the calling view that was disabled by the 'disable' method
- api/ui.spreadsheet_getcellvalue.md - 
- api/link/ui.spreadsheet_getchildviews.md - returns child views of the calling component
- api/ui.spreadsheet_getcolumn.md - 
- api/link/ui.spreadsheet_getformview.md - returns master form for the input
- api/link/ui.spreadsheet_getnode.md - returns the main HTML container for the calling object
- api/link/ui.spreadsheet_getparentview.md - returns the parent view of the component
- api/ui.spreadsheet_getrow.md - 
- api/ui.spreadsheet_getselectedid.md - 
- api/ui.spreadsheet_getstyle.md - 
- api/link/ui.spreadsheet_gettopparentview.md - returns top parent view
- api/link/ui.spreadsheet_hasevent.md - checks whether the component has the specified event
- api/link/ui.spreadsheet_hide.md - hides the view
- api/link/ui.spreadsheet_index.md - returns the cell index in the layout collection
- api/link/ui.spreadsheet_isenabled.md - checks whether the view is enabled
- api/link/ui.spreadsheet_isvisible.md - checks whether the view is visible
- api/link/ui.spreadsheet_mapevent.md - routes events from one object to another
- api/ui.spreadsheet_redo.md - 
- api/link/ui.spreadsheet_reconstruct.md - rebuilds the layout
- api/ui.spreadsheet_refresh.md - 
- api/link/ui.spreadsheet_removeview.md - removes view from layout-like component
- api/ui.spreadsheet_reset.md - 
- api/link/ui.spreadsheet_resize.md - adjusts the view to a new size
- api/link/ui.spreadsheet_resizechildren.md - resizes all children of the calling component
- api/ui.spreadsheet_savecell.md - 
- api/ui.spreadsheet_serialize.md - 
- api/ui.spreadsheet_setcellvalue.md - 
- api/ui.spreadsheet_setstyle.md - 
- api/link/ui.spreadsheet_show.md - makes the component visible
- api/link/ui.spreadsheet_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/ui.spreadsheet_splitcell.md - 
- api/ui.spreadsheet_undo.md - 
- api/link/ui.spreadsheet_unbind.md - breaks "bind" link
- api/link/ui.spreadsheet_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/ui.spreadsheet_onafterselect_event.md - 
- api/ui.spreadsheet_onbeforespan_event.md - 
- api/ui.spreadsheet_onbeforesplit_event.md - 
- api/link/ui.spreadsheet_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/ui.spreadsheet_oncellchange_event.md - 
- api/ui.spreadsheet_oncomponentinit_event.md - 
- api/ui.spreadsheet_ondataparse_event.md - 
- api/ui.spreadsheet_ondataserialize_event.md - 
- api/link/ui.spreadsheet_ondestruct_event.md - occurs when component destroyed
- api/ui.spreadsheet_onreset_event.md - 
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.spreadsheet_animate_config.md - defines or disables view change animation.
- api/link/ui.spreadsheet_borderless_config.md - used to hide the component borders
- api/link/ui.spreadsheet_cols_config.md - array of views objects arranged horizontally
- api/ui.spreadsheet_columncount_config.md - 
- api/link/ui.spreadsheet_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.spreadsheet_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.spreadsheet_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.spreadsheet_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.spreadsheet_height_config.md - sets the height of the component
- api/link/ui.spreadsheet_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.spreadsheet_id_config.md - the component ID
- api/link/ui.spreadsheet_isolate_config.md - masks IDs of all inner element
- api/link/ui.spreadsheet_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/link/ui.spreadsheet_maxheight_config.md - sets the maximum height for the view
- api/link/ui.spreadsheet_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.spreadsheet_minheight_config.md - sets the minimal height for the view
- api/link/ui.spreadsheet_minwidth_config.md - sets the minimal width for the view
- api/link/ui.spreadsheet_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.spreadsheet_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/link/ui.spreadsheet_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/link/ui.spreadsheet_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/link/ui.spreadsheet_responsive_config.md - enables responsive mode for horizontal layout
- api/ui.spreadsheet_rowcount_config.md - 
- api/link/ui.spreadsheet_rows_config.md - array of views objects arranged vertically
- api/ui.spreadsheet_spans_config.md - 
- api/link/ui.spreadsheet_type_config.md - defines the layout borders
- api/link/ui.spreadsheet_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.spreadsheet_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/ui.spreadsheet_$exportview_other.md - 
- api/link/ui.spreadsheet_$getsize_other.md - returns the current size of the component
- api/link/ui.spreadsheet_$height_other.md - current height of the view
- api/ui.spreadsheet_$onload_other.md - 
- api/ui.spreadsheet_$save_other.md - 
- api/link/ui.spreadsheet_$setsize_other.md - sets the component size
- api/link/ui.spreadsheet_$skin_other.md - method, which will be called when skin defined
- api/link/ui.spreadsheet_$view_other.md - reference to top html element of the view
- api/link/ui.spreadsheet_$width_other.md - current width of the view
- api/link/ui.spreadsheet_config_other.md - all options from initial component configuration
- api/ui.spreadsheet_formathelpers_other.md - 
- api/link/ui.spreadsheet_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.spreadsheet_methods.md
- api/refs/ui.spreadsheet_props.md
- api/refs/ui.spreadsheet_events.md
- api/refs/ui.spreadsheet_others.md

