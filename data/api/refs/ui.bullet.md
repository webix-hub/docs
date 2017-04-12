ui.bullet 
=============


dummy stub

{{todo replace with real description. }}

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.gage.md">ui.gage</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.bullet_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.bullet_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.bullet_bind.md - binds components
- api/link/ui.bullet_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.bullet_callevent.md - calls an inner event
- api/link/ui.bullet_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.bullet_destructor.md - destructs the calling object
- api/link/ui.bullet_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.bullet_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.bullet_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.bullet_getchildviews.md - returns child views of the calling component
- api/link/ui.bullet_getformview.md - returns master form for the input
- api/link/ui.bullet_getnode.md - returns the main HTML container for the calling object
- api/link/ui.bullet_getparentview.md - returns the parent view of the component
- api/link/ui.bullet_gettopparentview.md - returns top parent view
- api/link/ui.bullet_getvalue.md - returns the gage value
- api/link/ui.bullet_hasevent.md - checks whether the component has the specified event
- api/link/ui.bullet_hide.md - hides the view
- api/link/ui.bullet_isenabled.md - checks whether the view is enabled
- api/link/ui.bullet_isvisible.md - checks whether the view is visible
- api/link/ui.bullet_mapevent.md - routes events from one object to another
- api/link/ui.bullet_resize.md - adjusts the view to a new size
- api/link/ui.bullet_setvalue.md - sets a value for the gage
- api/link/ui.bullet_show.md - makes the component visible
- api/link/ui.bullet_unbind.md - breaks "bind" link
- api/link/ui.bullet_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.bullet_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.bullet_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.bullet_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.bullet_ondestruct_event.md - occurs when component destroyed
- api/link/ui.bullet_onfocus_event.md - fires when a view gets focus
- api/link/ui.bullet_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.bullet_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.bullet_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.bullet_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.bullet_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.bullet_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.bullet_ontouchmove_event.md - occurs during touch movement
- api/link/ui.bullet_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.bullet_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.bullet_animate_config.md - defines or disables view change animation.
- api/ui.bullet_bands_config.md - 
- api/ui.bullet_barwidth_config.md - 
- api/link/ui.bullet_borderless_config.md - used to hide the component borders
- api/ui.bullet_color_config.md - 
- api/link/ui.bullet_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.bullet_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.bullet_disabled_config.md - indicates whether an item is enabled
- api/ui.bullet_flowtime_config.md - 
- api/link/ui.bullet_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.bullet_height_config.md - sets the height of the component
- api/link/ui.bullet_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.bullet_id_config.md - the component ID
- api/link/ui.bullet_label_config.md - text label of the gage wigdet
- api/ui.bullet_labelheight_config.md - 
- api/ui.bullet_labelwidth_config.md - 
- api/ui.bullet_layout_config.md - 
- api/ui.bullet_marker_config.md - 
- api/link/ui.bullet_maxheight_config.md - sets the maximum height for the view
- api/link/ui.bullet_maxrange_config.md - sets the maximum range value of the gage scale
- api/link/ui.bullet_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.bullet_minheight_config.md - sets the minimal height for the view
- api/link/ui.bullet_minrange_config.md - sets the maximum range value of the gage scale
- api/link/ui.bullet_minwidth_config.md - sets the minimal width for the view
- api/link/ui.bullet_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.bullet_placeholder_config.md - specifies measurement units for the gage
- api/link/ui.bullet_scale_config.md - defines the size of the gage scale
- api/link/ui.bullet_smoothflow_config.md - enables smooth animation in the gage widget
- api/link/ui.bullet_stroke_config.md - defines the width of the gage scale
- api/link/ui.bullet_value_config.md - sets the initial value to be displayed on the gage scale
- api/link/ui.bullet_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.bullet_$getsize_other.md - returns the current size of the component
- api/link/ui.bullet_$height_other.md - current height of the view
- api/link/ui.bullet_$scope_other.md - scope for resolving event and method names
- api/link/ui.bullet_$setsize_other.md - sets the component size
- api/link/ui.bullet_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.bullet_$view_other.md - reference to top html element of the view
- api/link/ui.bullet_$width_other.md - current width of the view
- api/link/ui.bullet_config_other.md - all options from initial component configuration
- api/link/ui.bullet_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.bullet_methods.md
- api/refs/ui.bullet_props.md
- api/refs/ui.bullet_events.md
- api/refs/ui.bullet_others.md

