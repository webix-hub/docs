ui.pager 
=============

{{memo Page navigation controls. }}

The component has a little sense on its own, but can be used with other data-based components such as DataTable, DataView, List. Not purposed for direct initialization. Check [pager](desktop/paging.md) documentation for more detailed description.

### Constructor

~~~js
	var pager = webix.ui({
		view:"pager", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_pager({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/singlerender.md">SingleRender</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.pager_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.pager_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.pager_bind.md - binds components
- api/link/ui.pager_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.pager_callevent.md - calls an inner event
- api/ui.pager_clone.md - creates a copy of the pager
- api/link/ui.pager_customize.md - redefines the 'type' property
- api/link/ui.pager_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.pager_destructor.md - destructs the calling object
- api/link/ui.pager_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.pager_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.pager_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.pager_getchildviews.md - returns child views of the calling component
- api/link/ui.pager_getformview.md - returns master form for the input
- api/link/ui.pager_getnode.md - returns the main HTML container for the calling object
- api/link/ui.pager_getparentview.md - returns the parent view of the component
- api/link/ui.pager_gettopparentview.md - returns top parent view
- api/link/ui.pager_hasevent.md - checks whether the component has the specified event
- api/link/ui.pager_hide.md - hides the view
- api/link/ui.pager_isenabled.md - checks whether the view is enabled
- api/link/ui.pager_isvisible.md - checks whether the view is visible
- api/link/ui.pager_mapevent.md - routes events from one object to another
- api/ui.pager_refresh.md - repaints the whole view or a certain item
- api/link/ui.pager_render.md - renders the specified item or the whole component
- api/link/ui.pager_resize.md - adjusts the view to a new size
- api/ui.pager_select.md - switches pager to the necessary page (zero-based numbering)
- api/link/ui.pager_show.md - makes the component visible
- api/link/ui.pager_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.pager_unbind.md - breaks "bind" link
- api/link/ui.pager_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.pager_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.pager_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.pager_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.pager_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.pager_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.pager_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.pager_ondestruct_event.md - occurs when component destroyed
- api/link/ui.pager_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.pager_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.pager_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.pager_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.pager_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.pager_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.pager_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.pager_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.pager_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.pager_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.pager_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.pager_ontouchmove_event.md - occurs during touch movement
- api/link/ui.pager_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.pager_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.pager_animate_config.md - defines or disables view change animation.
- api/ui.pager_apionly_config.md - makes the pager invisible to enable paging with custom buttons
- api/link/ui.pager_borderless_config.md - used to hide the component borders
- api/link/ui.pager_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.pager_content_config.md - the id or node, whose content will be moved to the view
- api/ui.pager_count_config.md - the total number of records that the pager will process
- api/link/ui.pager_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.pager_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.pager_gravity_config.md - sets the view gravity (1 by default)
- api/ui.pager_group_config.md - the number of visible pages in the pager
- api/link/ui.pager_height_config.md - sets the height of the component
- api/link/ui.pager_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.pager_id_config.md - the component ID
- api/ui.pager_limit_config.md - the total number of pages in the pager
- api/link/ui.pager_maxheight_config.md - sets the maximum height for the view
- api/link/ui.pager_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.pager_minheight_config.md - sets the minimal height for the view
- api/link/ui.pager_minwidth_config.md - sets the minimal width for the view
- api/link/ui.pager_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/link/ui.pager_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.pager_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.pager_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.pager_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.pager_onmousemove_config.md - attaches a mousemove behaviour for component items with the specified CSS class.
- api/ui.pager_page_config.md - sets the currently active page (zero-based numbering)
- api/ui.pager_size_config.md - sets the number of records per page
- api/link/ui.pager_template_config.md - the component template
- api/link/ui.pager_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.pager_$getsize_other.md - returns the current size of the component
- api/link/ui.pager_$height_other.md - current height of the view
- api/link/ui.pager_$scope_other.md - scope for resolving event and method names
- api/link/ui.pager_$setsize_other.md - sets the component size
- api/link/ui.pager_$skin_other.md - method, which will be called when skin defined
- api/link/ui.pager_$view_other.md - reference to top html element of the view
- api/link/ui.pager_$width_other.md - current width of the view
- api/link/ui.pager_config_other.md - all options from initial component configuration
- api/link/ui.pager_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.pager_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.pager_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.pager_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.pager_on_mouse_move_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.pager_type_other.md - currently used set of helpers for view rendering
}}


@index:
- api/refs/ui.pager_methods.md
- api/refs/ui.pager_props.md
- api/refs/ui.pager_events.md
- api/refs/ui.pager_others.md

