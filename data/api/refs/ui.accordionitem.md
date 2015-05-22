ui.accordionitem 
=============


{{memo A singular pane of the accordion component. }}

Each accordion pane consists of the header and body. The body of a pane can be collapsed/expanded by clicking on the appropriate header. Check [accordionitem](desktop/accordionitem.md) documentation for more detailed description.

### Constructor

~~~js
	var accordionitem = webix.ui({
		view:"accordionitem", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_accordionitem({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.accordionitem_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.accordionitem_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.accordionitem_bind.md - binds components
- api/link/ui.accordionitem_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.accordionitem_callevent.md - calls an inner event
- api/ui.accordionitem_collapse.md - collapses the specified accordion item
- api/link/ui.accordionitem_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.accordionitem_destructor.md - destructs the calling object
- api/link/ui.accordionitem_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.accordionitem_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.accordionitem_enable.md - enables the calling view that was disabled by the 'disable' method
- api/ui.accordionitem_expand.md - expands the specified accordion item
- api/link/ui.accordionitem_getchildviews.md - returns child views of the calling component
- api/link/ui.accordionitem_getformview.md - returns master form for the input
- api/link/ui.accordionitem_getnode.md - returns the main HTML container for the calling object
- api/link/ui.accordionitem_getparentview.md - returns the parent view of the component
- api/link/ui.accordionitem_gettopparentview.md - returns top parent view
- api/link/ui.accordionitem_hasevent.md - checks whether the component has the specified event
- api/link/ui.accordionitem_hide.md - hides the view
- api/link/ui.accordionitem_isenabled.md - checks whether the view is enabled
- api/link/ui.accordionitem_isvisible.md - checks whether the view is visible
- api/link/ui.accordionitem_mapevent.md - routes events from one object to another
- api/ui.accordionitem_refresh.md - refreshes the header label
- api/link/ui.accordionitem_resize.md - adjusts the view to a new size
- api/link/ui.accordionitem_show.md - makes the component visible
- api/link/ui.accordionitem_unbind.md - breaks "bind" link
- api/link/ui.accordionitem_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.accordionitem_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.accordionitem_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.accordionitem_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.accordionitem_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.accordionitem_ondestruct_event.md - occurs when component destroyed
- api/link/ui.accordionitem_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.accordionitem_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.accordionitem_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.accordionitem_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.accordionitem_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.accordionitem_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.accordionitem_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.accordionitem_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.accordionitem_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.accordionitem_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.accordionitem_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.accordionitem_ontouchmove_event.md - occurs during touch movement
- api/link/ui.accordionitem_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.accordionitem_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.accordionitem_animate_config.md - defines or disables view change animation.
- api/ui.accordionitem_body_config.md - defines the cell content (a view or some HTML)
- api/link/ui.accordionitem_borderless_config.md - used to hide the component borders
- api/ui.accordionitem_collapsed_config.md - displays the cell collapsed initially
- api/link/ui.accordionitem_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.accordionitem_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.accordionitem_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.accordionitem_gravity_config.md - sets the view gravity (1 by default)
- api/ui.accordionitem_header_config.md - sets the label of the header in the expanded state
- api/ui.accordionitem_headeralt_config.md - sets the label of the header in the collapsed state
- api/ui.accordionitem_headeraltheight_config.md - the height of the header in the collapsed state
- api/ui.accordionitem_headerheight_config.md - the header height
- api/link/ui.accordionitem_height_config.md - sets the height of the component
- api/link/ui.accordionitem_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.accordionitem_id_config.md - the component ID
- api/link/ui.accordionitem_maxheight_config.md - sets the maximum height for the view
- api/link/ui.accordionitem_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.accordionitem_minheight_config.md - sets the minimal height for the view
- api/link/ui.accordionitem_minwidth_config.md - sets the minimal width for the view
- api/link/ui.accordionitem_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/link/ui.accordionitem_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.accordionitem_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.accordionitem_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.accordionitem_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.accordionitem_onmousemove_config.md - attaches a mousemove behaviour for component items with the specified CSS class.
- api/link/ui.accordionitem_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.accordionitem_$getsize_other.md - returns the current size of the component
- api/link/ui.accordionitem_$height_other.md - current height of the view
- api/link/ui.accordionitem_$scope_other.md - scope for resolving event and method names
- api/link/ui.accordionitem_$setsize_other.md - sets the component size
- api/link/ui.accordionitem_$skin_other.md - method, which will be called when skin defined
- api/link/ui.accordionitem_$view_other.md - reference to top html element of the view
- api/link/ui.accordionitem_$width_other.md - current width of the view
- api/link/ui.accordionitem_config_other.md - all options from initial component configuration
- api/link/ui.accordionitem_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.accordionitem_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.accordionitem_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.accordionitem_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.accordionitem_on_mouse_move_other.md - attaches a dblclick behavior for component items with the specified CSS class.
}}


@index:
- api/refs/ui.accordionitem_methods.md
- api/refs/ui.accordionitem_props.md
- api/refs/ui.accordionitem_events.md
- api/refs/ui.accordionitem_others.md

