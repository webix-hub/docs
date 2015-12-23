ui.resizer 
=============


{{memo A draggable border in a layout. }}

The component is used to make some view placed into a layout draggable by a specific border. Draggable borders differ visually from the undraggable ones. Check the [layout](desktop/layout.md) documentation for more detailed description.

### Constructor

~~~js
webix.ui({  
  id:"layout",
  rows:[
    { template:"row 1" },
    { view:"resizer" },
    { template:"row 2" },
    { view:"resizer" },
    { cols:[
      { template:"column 1" },
      { view:"resizer"},
      { template:"column 2" },
    ]}
  ]
});
~~~

### Where to start

- [Overview of Resizer](desktop/layout.md#resizerlines)
- [Samples](http://docs.webix.com/samples/01_layout)


<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.resizer_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.resizer_bind.md - binds components
- api/link/ui.resizer_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.resizer_destructor.md - destructs the calling object
- api/link/ui.resizer_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.resizer_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.resizer_getchildviews.md - returns child views of the calling component
- api/link/ui.resizer_getformview.md - returns master form for the input
- api/link/ui.resizer_getnode.md - returns the main HTML container for the calling object
- api/link/ui.resizer_getparentview.md - returns the parent view of the component
- api/link/ui.resizer_gettopparentview.md - returns top parent view
- api/link/ui.resizer_hide.md - hides the view
- api/link/ui.resizer_isenabled.md - checks whether the view is enabled
- api/link/ui.resizer_isvisible.md - checks whether the view is visible
- api/link/ui.resizer_resize.md - adjusts the view to a new size
- api/link/ui.resizer_show.md - makes the component visible
- api/link/ui.resizer_unbind.md - breaks "bind" link
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.resizer_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.resizer_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.resizer_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.resizer_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.resizer_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.resizer_ondestruct_event.md - occurs when component destroyed
- api/link/ui.resizer_onfocus_event.md - fires when a view gets focus
- api/link/ui.resizer_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.resizer_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.resizer_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.resizer_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.resizer_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.resizer_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.resizer_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.resizer_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.resizer_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.resizer_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.resizer_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.resizer_ontouchmove_event.md - occurs during touch movement
- api/link/ui.resizer_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.resizer_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.resizer_animate_config.md - defines or disables view change animation.
- api/link/ui.resizer_borderless_config.md - used to hide the component borders
- api/link/ui.resizer_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.resizer_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.resizer_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.resizer_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.resizer_height_config.md - sets the height of the component
- api/link/ui.resizer_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.resizer_id_config.md - the component ID
- api/link/ui.resizer_maxheight_config.md - sets the maximum height for the view
- api/link/ui.resizer_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.resizer_minheight_config.md - sets the minimal height for the view
- api/link/ui.resizer_minwidth_config.md - sets the minimal width for the view
- api/link/ui.resizer_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/link/ui.resizer_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.resizer_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.resizer_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.resizer_onmousemove_config.md - attaches a mousemove behaviour for component items with the specified CSS class.
- api/link/ui.resizer_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.resizer_$getsize_other.md - returns the current size of the component
- api/link/ui.resizer_$height_other.md - current height of the view
- api/link/ui.resizer_$scope_other.md - scope for resolving event and method names
- api/link/ui.resizer_$setsize_other.md - sets the component size
- api/link/ui.resizer_$skin_other.md - method, which will be called when skin defined
- api/link/ui.resizer_$view_other.md - reference to top html element of the view
- api/link/ui.resizer_$width_other.md - current width of the view
- api/link/ui.resizer_config_other.md - all options from initial component configuration
- api/link/ui.resizer_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.resizer_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.resizer_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.resizer_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.resizer_on_mouse_move_other.md - attaches a dblclick behavior for component items with the specified CSS class.
}}


@index:
- api/refs/ui.resizer_methods.md
- api/refs/ui.resizer_props.md
- api/refs/ui.resizer_events.md
- api/refs/ui.resizer_others.md

