ui.formlate 
=============


dummy stub

{{todo replace with real description. }}

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.template.md">ui.template</a>, <a href="api/refs/scrollable.md">Scrollable</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.formlate_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.formlate_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.formlate_bind.md - binds components
- api/link/ui.formlate_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.formlate_callevent.md - calls an inner event
- api/link/ui.formlate_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.formlate_destructor.md - destructs the calling object
- api/link/ui.formlate_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.formlate_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.formlate_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.formlate_getchildviews.md - returns child views of the calling component
- api/link/ui.formlate_getformview.md - returns master form for the input
- api/link/ui.formlate_getnode.md - returns the main HTML container for the calling object
- api/link/ui.formlate_getparentview.md - returns the parent view of the component
- api/link/ui.formlate_getscrollstate.md - returns the scroll position
- api/link/ui.formlate_gettopparentview.md - returns top parent view
- api/ui.formlate_getvalue.md - 
- api/link/ui.formlate_getvalues.md - gets data hash
- api/link/ui.formlate_hasevent.md - checks whether the component has the specified event
- api/link/ui.formlate_hide.md - hides the view
- api/link/ui.formlate_isenabled.md - checks whether the view is enabled
- api/link/ui.formlate_isvisible.md - checks whether the view is visible
- api/link/ui.formlate_load.md - loads data from an external data source.
- api/link/ui.formlate_mapevent.md - routes events from one object to another
- api/link/ui.formlate_parse.md - loads data to the component from an inline data source
- api/link/ui.formlate_refresh.md - repaints the component
- api/link/ui.formlate_render.md - renders the specified item or the whole component
- api/link/ui.formlate_resize.md - adjusts the view to a new size
- api/link/ui.formlate_scrollto.md - scrolls the data container to a certain position
- api/link/ui.formlate_setcontent.md - attaches html container to the template
- api/link/ui.formlate_sethtml.md - sets HTML for template
- api/ui.formlate_setvalue.md - 
- api/link/ui.formlate_setvalues.md - sets data hash
- api/link/ui.formlate_show.md - makes the component visible
- api/link/ui.formlate_sync.md - allows you to sync two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.formlate_unbind.md - breaks "bind" link
- api/link/ui.formlate_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.formlate_onafterload_event.md - fires after data loading is complete
- api/link/ui.formlate_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.formlate_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.formlate_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.formlate_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.formlate_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.formlate_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.formlate_ondestruct_event.md - occurs when component destroyed
- api/link/ui.formlate_onfocus_event.md - fires when a view gets focus
- api/link/ui.formlate_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.formlate_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.formlate_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.formlate_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.formlate_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.formlate_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.formlate_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.formlate_ontouchmove_event.md - occurs during touch movement
- api/link/ui.formlate_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.formlate_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.formlate_animate_config.md - defines or disables view change animation.
- api/link/ui.formlate_autoheight_config.md - lets the component autosize to its contents
- api/link/ui.formlate_borderless_config.md - used to hide the component borders
- api/link/ui.formlate_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.formlate_content_config.md - the id or node, whose content will be moved to the view
- api/link/ui.formlate_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.formlate_data_config.md - JavaScript array containing data for the component
- api/link/ui.formlate_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/ui.formlate_datatype_config.md - the type of loaded data
- api/link/ui.formlate_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.formlate_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.formlate_height_config.md - sets the height of the component
- api/link/ui.formlate_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.formlate_id_config.md - the component ID
- api/link/ui.formlate_maxheight_config.md - sets the maximum height for the view
- api/link/ui.formlate_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.formlate_minheight_config.md - sets the minimal height for the view
- api/link/ui.formlate_minwidth_config.md - sets the minimal width for the view
- api/link/ui.formlate_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.formlate_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.formlate_scroll_config.md - enables/disables the scroll bar
- api/link/ui.formlate_scrollspeed_config.md - the time during which the component is scrolled to the specified position (in milliseconds)
- api/link/ui.formlate_src_config.md - the path to an external template that is loaded by Ajax
- api/link/ui.formlate_template_config.md - the component template
- api/link/ui.formlate_type_config.md - name of a predefined styling type
- api/link/ui.formlate_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.formlate_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.formlate_$getsize_other.md - returns the current size of the component
- api/link/ui.formlate_$height_other.md - current height of the view
- api/link/ui.formlate_$scope_other.md - scope for resolving event and method names
- api/link/ui.formlate_$setsize_other.md - sets the component size
- api/link/ui.formlate_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.formlate_$view_other.md - reference to top html element of the view
- api/link/ui.formlate_$width_other.md - current width of the view
- api/link/ui.formlate_config_other.md - all options from initial component configuration
- api/link/ui.formlate_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.formlate_methods.md
- api/refs/ui.formlate_props.md
- api/refs/ui.formlate_events.md
- api/refs/ui.formlate_others.md

