ui.property 
=============


{{memo A structured table of 2 columns that presents 'name:value' pairs for a list of properties. }}

The component can be used for creating various on-page editors. The value field can be presented by any control - a text field, a checkbox, a drop-down list box etc. Check [property](/) documentation for more detailed description.

### Constructor

~~~js
	var property = webix.ui({
		view:"property", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_property({
		...config options goes here..
	});
~~~

### Where to start

- [Overview of Property Sheet Widget](desktop/property_sheet.md)
- [Samples](http://docs.webix.com/samples/07_property/index.html)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/editability.md">EditAbility</a>, <a href="api/refs/mapcollection.md">MapCollection</a>, <a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/scrollable.md">Scrollable</a>, <a href="api/refs/singlerender.md">SingleRender</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.property_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.property_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.property_bind.md - binds components
- api/link/ui.property_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.property_callevent.md - calls an inner event
- api/link/ui.property_customize.md - redefines the 'type' property
- api/link/ui.property_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.property_destructor.md - destructs the calling object
- api/link/ui.property_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.property_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.property_edit.md - enables the edit mode for the specified item
- api/link/ui.property_editcancel.md - cancels the edit mode and closes all opened editors. The component is still editable
- api/link/ui.property_editnext.md - closes the current editor and opens one in the next cell of the row
- api/link/ui.property_editstop.md - stops the edit mode and closes all opened editors. The component is still editable
- api/link/ui.property_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.property_focuseditor.md - moves focus to the active editor
- api/link/ui.property_getchildviews.md - returns child views of the calling component
- api/link/ui.property_geteditstate.md - returns info about active editor object
- api/link/ui.property_geteditor.md - returns editor object
- api/link/ui.property_geteditorvalue.md - returns the value of the active (currently open) editor
- api/link/ui.property_getformview.md - returns master form for the input
- api/ui.property_getitem.md - gets the data object for related property
- api/ui.property_getitemnode.md - returns HTML element of the item
- api/link/ui.property_getnode.md - returns the main HTML container for the calling object
- api/link/ui.property_getparentview.md - returns the parent view of the component
- api/link/ui.property_getscrollstate.md - returns the scroll position
- api/link/ui.property_gettopparentview.md - returns top parent view
- api/ui.property_getvalues.md - derives values from the property sheet (like with form)
- api/link/ui.property_hasevent.md - checks whether the component has the specified event
- api/link/ui.property_hide.md - hides the view
- api/link/ui.property_isenabled.md - checks whether the view is enabled
- api/link/ui.property_isvisible.md - checks whether the view is visible
- api/link/ui.property_load.md - loads data from an external data source.
- api/ui.property_locate.md - gets the id of an item from the specified HTML event
- api/link/ui.property_mapevent.md - routes events from one object to another
- api/link/ui.property_parse.md - loads data to the component from an inline data source
- api/ui.property_refresh.md - repaints the whole view or a certain item
- api/ui.property_registertype.md - registeres a new type for property sheet elements
- api/link/ui.property_render.md - renders the specified item or the whole component
- api/link/ui.property_resize.md - adjusts the view to a new size
- api/link/ui.property_scrollto.md - scrolls the data container to a certain position
- api/ui.property_setvalues.md - sets values into the inputs of a form/toolbar/property sheet control
- api/link/ui.property_show.md - makes the component visible
- api/ui.property_showitem.md - 'scrolls' the table to make the specified row visible
- api/link/ui.property_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.property_unbind.md - breaks "bind" link
- api/link/ui.property_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/ui.property_updateitem.md - alias for refresh, repaints property view
- api/link/ui.property_validateeditor.md - validates data in currently active editor
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.property_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.property_onaftereditstart_event.md - fires after edit operation was initiated, editor opened and ready for input
- api/link/ui.property_onaftereditstop_event.md - fires after edit operation finished
- api/link/ui.property_onafterload_event.md - fires after server side loading is complete
- api/link/ui.property_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.property_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.property_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.property_onbeforeeditstart_event.md - fires before edit operation is initiated
- api/link/ui.property_onbeforeeditstop_event.md - fires before stop edit command is received
- api/link/ui.property_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.property_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.property_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.property_ondestruct_event.md - occurs when component destroyed
- api/link/ui.property_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.property_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.property_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.property_onliveedit_event.md - occurs when data was changed in the editor
- api/link/ui.property_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.property_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.property_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.property_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.property_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.property_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.property_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.property_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.property_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.property_ontouchmove_event.md - occurs during touch movement
- api/link/ui.property_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.property_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.property_animate_config.md - defines or disables view change animation.
- api/ui.property_autoheight_config.md - auto height mode for property view
- api/link/ui.property_borderless_config.md - used to hide the component borders
- api/ui.property_complexdata_config.md - enables complex data parsing mode
- api/link/ui.property_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.property_content_config.md - the id or node, whose content will be moved to the view
- api/link/ui.property_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.property_data_config.md - JavaScript array containing data for the component
- api/link/ui.property_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/ui.property_datatype_config.md - the type of loaded data
- api/link/ui.property_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.property_editvalue_config.md - defines which data item is editable (in case of several data item in the cell/line)
- api/link/ui.property_editable_config.md - allows/denies editing in the view
- api/link/ui.property_editaction_config.md - defines the action on which editors will be opened
- api/ui.property_elements_config.md - an array of property items
- api/link/ui.property_form_config.md - linked form
- api/link/ui.property_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.property_height_config.md - sets the height of the component
- api/link/ui.property_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.property_id_config.md - the component ID
- api/link/ui.property_map_config.md - defines data mapping
- api/link/ui.property_maxheight_config.md - sets the maximum height for the view
- api/link/ui.property_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.property_minheight_config.md - sets the minimal height for the view
- api/link/ui.property_minwidth_config.md - sets the minimal width for the view
- api/link/ui.property_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/ui.property_namewidth_config.md - width of first column ( property names )
- api/link/ui.property_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.property_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.property_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.property_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.property_onmousemove_config.md - attaches a mousemove behaviour for component items with the specified CSS class.
- api/link/ui.property_scroll_config.md - enables/disables the scroll bar
- api/link/ui.property_scrollspeed_config.md - the time during which the component is scrolled to the specified position (in milliseconds)
- api/link/ui.property_template_config.md - the component template
- api/link/ui.property_url_config.md - the URL the component will use to load data after its initialization
- api/link/ui.property_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.property_$getsize_other.md - returns the current size of the component
- api/link/ui.property_$height_other.md - current height of the view
- api/link/ui.property_$scope_other.md - scope for resolving event and method names
- api/link/ui.property_$setsize_other.md - sets the component size
- api/link/ui.property_$skin_other.md - method, which will be called when skin defined
- api/link/ui.property_$view_other.md - reference to top html element of the view
- api/link/ui.property_$width_other.md - current width of the view
- api/link/ui.property_config_other.md - all options from initial component configuration
- api/link/ui.property_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.property_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.property_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.property_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/ui.property_on_edit_other.md - set of flags, defines which types are editable
- api/link/ui.property_on_mouse_move_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/ui.property_on_render_other.md - set of functions, for custom property types
- api/link/ui.property_type_other.md - currently used set of helpers for view rendering
}}


@index:
- api/refs/ui.property_methods.md
- api/refs/ui.property_props.md
- api/refs/ui.property_events.md
- api/refs/ui.property_others.md

