ui.treemap 
=============



{{memo A control used for visualization of complex hierarchical data in a compact way.. }}

The component is used for space-saving presentation of big tree-like data. Relations between tree elements are reflected using the correlation of rectangles' sizes or graduation of their colors. One-level rendering of tree data is also possible with Treemap. Check [treemap](desktop/treemap.md) documentation for more detailed description.

### Constructor

~~~js
	var treemap = webix.ui({
		view:"treemap", 
		container:"mydiv", 
		...config options will be here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_treemap({
		...config options will be here..
	});
~~~

### Where to start

- [Overview of Sidemenu Widget](desktop/treemap.md)
- [Samples](http://docs.webix.com/samples/60_pro/11_treemap/index.html)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/autotooltip.md">AutoTooltip</a>, <a href="api/refs/group.md">Group</a>, <a href="api/refs/treeapi.md">TreeAPI</a>, <a href="api/refs/selectionmodel.md">SelectionModel</a>, <a href="api/refs/keysnavigation.md">KeysNavigation</a>, <a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/scrollable.md">Scrollable</a>, <a href="api/refs/treedataloader.md">TreeDataLoader</a>, <a href="api/refs/treestore.md">TreeStore</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/ui.proto.md">ui.proto</a>, <a href="api/refs/pagingability.md">PagingAbility</a>, <a href="api/refs/datamarks.md">DataMarks</a>, <a href="api/refs/validatecollection.md">ValidateCollection</a>, <a href="api/refs/renderstack.md">RenderStack</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/treerenderstack.md">TreeRenderStack</a>, <a href="api/refs/copypaste.md">CopyPaste</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.treemap_add.md - adds an item to the store
- api/link/ui.treemap_addcss.md - applied CSS class to a component item
- api/link/ui.treemap_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.treemap_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.treemap_bind.md - binds components
- api/link/ui.treemap_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.treemap_callevent.md - calls an inner event
- api/link/ui.treemap_clearall.md - removes all items from the component
- api/link/ui.treemap_clearcss.md - removes css class from all items
- api/link/ui.treemap_clearvalidation.md - removes all validation marks from the component
- api/link/ui.treemap_close.md - closes the branch with the specified id
- api/link/ui.treemap_closeall.md - closes all branches in the tree
- api/link/ui.treemap_count.md - returns the number of currently visible items
- api/link/ui.treemap_customize.md - redefines the "type" property
- api/link/ui.treemap_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.treemap_destructor.md - destructs the calling object
- api/link/ui.treemap_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.treemap_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.treemap_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.treemap_exists.md - checks whether an item with the specified id exists
- api/link/ui.treemap_filter.md - filters the component
- api/link/ui.treemap_find.md - returns rows that match the criterion
- api/link/ui.treemap_getbranchindex.md - gets index of the node in a specific branch
- api/link/ui.treemap_getchildviews.md - returns child views of the calling component
- api/link/ui.treemap_getfirstchildid.md - gets the ID of the first child of the specified branch
- api/link/ui.treemap_getfirstid.md - returns the ID of the first item
- api/link/ui.treemap_getformview.md - returns master form for the input
- api/link/ui.treemap_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.treemap_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.treemap_getitem.md - gets the object of the data item with the specified id
- api/link/ui.treemap_getitemnode.md - returns HTML element of the item
- api/link/ui.treemap_getlastid.md - returns the id of the last item
- api/link/ui.treemap_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.treemap_getnextsiblingid.md - returns the id of the next sibling of the specified node
- api/link/ui.treemap_getnode.md - returns the main HTML container for the calling object
- api/link/ui.treemap_getopenitems.md - returns ids of the opened branches
- api/link/ui.treemap_getpage.md - returns the currently visible page in case of paged view
- api/link/ui.treemap_getpager.md - returns the pager object associated with the component
- api/link/ui.treemap_getparentid.md - get the ID of the parent node of the specified item
- api/link/ui.treemap_getparentview.md - returns the parent view of the component
- api/link/ui.treemap_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.treemap_getprevsiblingid.md - returns the id of the previous sibling of the specified node
- api/link/ui.treemap_getscrollstate.md - returns the scroll position
- api/link/ui.treemap_getselectedid.md - returns the id(s) of the selected item(s)
- api/link/ui.treemap_getselecteditem.md - returns selected object
- api/link/ui.treemap_getstate.md - returns the current state of the view
- api/link/ui.treemap_gettopparentview.md - returns top parent view
- api/link/ui.treemap_group.md - groups data by the specified data property
- api/link/ui.treemap_hascss.md - checks if item has specific css class
- api/link/ui.treemap_hasevent.md - checks whether the component has the specified event
- api/link/ui.treemap_hide.md - hides the view
- api/link/ui.treemap_isbranch.md - checks whether the node has any children
- api/link/ui.treemap_isbranchopen.md - checks whether the specified branch is open or closed
- api/link/ui.treemap_isenabled.md - checks whether the view is enabled
- api/link/ui.treemap_isselected.md - checks whether the specified item is selected or not
- api/link/ui.treemap_isvisible.md - checks whether the view is visible
- api/link/ui.treemap_load.md - loads data from an external data source.
- api/link/ui.treemap_loadbranch.md - loads data to the specified branch, as direct children of the node with the id provided
- api/link/ui.treemap_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/link/ui.treemap_locate.md - gets the id of an item from the specified HTML event
- api/link/ui.treemap_mapevent.md - routes events from one object to another
- api/link/ui.treemap_moveselection.md - moves selection in the specified direction
- api/link/ui.treemap_open.md - opens the branch with the specified id
- api/link/ui.treemap_openall.md - opens all branches in the tree
- api/link/ui.treemap_parse.md - loads data to the component from an inline data source
- api/link/ui.treemap_refresh.md - repaints the whole view or a certain item
- api/link/ui.treemap_remove.md - removes the specified item from datastore
- api/link/ui.treemap_removecss.md - removes CSS class from a component item
- api/link/ui.treemap_render.md - renders the specified item or the whole component
- api/link/ui.treemap_resize.md - adjusts the view to a new size
- api/link/ui.treemap_scrollto.md - scrolls the data container to a certain position
- api/link/ui.treemap_select.md - selects the specified item(s)
- api/link/ui.treemap_selectall.md - selects all items or the specified range
- api/link/ui.treemap_serialize.md - serializes data to a JSON object
- api/link/ui.treemap_setpage.md - makes the specified page visible (assuming that the pager was defined )
- api/link/ui.treemap_setstate.md - restores the specified state
- api/link/ui.treemap_show.md - makes the component visible
- api/ui.treemap_showbranch.md - shows the leaves of the branch by its id
- api/link/ui.treemap_showitem.md - scrolls the component to make the specified item visible
- api/link/ui.treemap_sort.md - sorts datastore
- api/link/ui.treemap_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.treemap_unbind.md - breaks "bind" link
- api/link/ui.treemap_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.treemap_ungroup.md - ungroups data
- api/link/ui.treemap_unselect.md - removes selection from the specified item
- api/link/ui.treemap_unselectall.md - removes selection from all items
- api/link/ui.treemap_updateitem.md - sets properties of the data item
- api/link/ui.treemap_validate.md - validates one record or all dataset against validation rules
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.treemap_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.treemap_onafterclose_event.md - fires after the branch has been closed
- api/link/ui.treemap_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.treemap_onafterdelete_event.md - fires after item deleting
- api/link/ui.treemap_onafterload_event.md - fires after data loading is complete
- api/link/ui.treemap_onafteropen_event.md - fires after the branch has been opened
- api/link/ui.treemap_onafterrender_event.md - occurs immediately after the component has been rendered
- api/link/ui.treemap_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.treemap_onafterselect_event.md - fires after item was selected
- api/link/ui.treemap_onaftersort_event.md - fires after sorting dataset
- api/link/ui.treemap_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.treemap_onbeforeclose_event.md - fires the moment you attempt to close the tree branch
- api/link/ui.treemap_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.treemap_onbeforedelete_event.md - fires before item deleting
- api/link/ui.treemap_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.treemap_onbeforeopen_event.md - fires the moment you attempt to open the tree branch
- api/link/ui.treemap_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.treemap_onbeforeselect_event.md - fires before item selection is started
- api/link/ui.treemap_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.treemap_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.treemap_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.treemap_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.treemap_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.treemap_ondestruct_event.md - occurs when component destroyed
- api/link/ui.treemap_onfocus_event.md - fires when a view gets focus
- api/link/ui.treemap_onitemcheck_event.md - called when the checkbox inside the tree item was checked
- api/link/ui.treemap_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.treemap_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.treemap_onitemrender_event.md - for each item rendering, occurs only for items with custom templates
- api/link/ui.treemap_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.treemap_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.treemap_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.treemap_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.treemap_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.treemap_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.treemap_onpartialrender_event.md - called when part of tree is repainted
- api/link/ui.treemap_onpaste_event.md - fires when the user presses CTRL+V keys combination
- api/link/ui.treemap_onselectchange_event.md - fires after selection state was changed
- api/link/ui.treemap_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.treemap_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.treemap_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.treemap_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.treemap_ontouchmove_event.md - occurs during touch movement
- api/link/ui.treemap_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.treemap_onvalidationerror_event.md - fires when newly loaded/added/edited data fails to pass validation
- api/link/ui.treemap_onvalidationsuccess_event.md - fires after the newlyloaded/added/edited data has passes validation successfully
- api/link/ui.treemap_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/ui.treemap_activeitem_config.md - specifies if childs of the branches will be rendered in the TreeMap
- api/link/ui.treemap_animate_config.md - defines or disables view change animation.
- api/link/ui.treemap_borderless_config.md - used to hide the component borders
- api/ui.treemap_branch_config.md - specifies the Treemap branch that should be displayed
- api/link/ui.treemap_click_config.md - sets an action happening on a button click
- api/link/ui.treemap_clipboard_config.md - enables/disables clipboard support
- api/link/ui.treemap_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.treemap_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.treemap_data_config.md - JavaScript array containing data for the component
- api/link/ui.treemap_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/ui.treemap_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.treemap_datatype_config.md - the type of loaded data
- api/link/ui.treemap_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.treemap_filtermode_config.md - defines the pattern for tree item filtering
- api/link/ui.treemap_gravity_config.md - sets the view gravity (1 by default)
- api/ui.treemap_header_config.md - defines whether the header of Treemap will be shown or hidden
- api/ui.treemap_headerheight_config.md - sets the height of the Treemap header
- api/ui.treemap_headertemplate_config.md - sets the template for the header label
- api/link/ui.treemap_height_config.md - sets the height of the component
- api/link/ui.treemap_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.treemap_id_config.md - the component ID
- api/link/ui.treemap_maxheight_config.md - sets the maximum height for the view
- api/link/ui.treemap_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.treemap_minheight_config.md - sets the minimal height for the view
- api/link/ui.treemap_minwidth_config.md - sets the minimal width for the view
- api/link/ui.treemap_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/link/ui.treemap_multiselect_config.md - enables multiselect mode
- api/link/ui.treemap_navigation_config.md - activates the selection keyboard navigation
- api/link/ui.treemap_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.treemap_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.treemap_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.treemap_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.treemap_onmousemove_config.md - attaches a mousemove behaviour for component items with the specified CSS class.
- api/link/ui.treemap_pager_config.md - defines paging configuration ( creates a 'ui.pager' object)
- api/link/ui.treemap_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.treemap_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.treemap_rules_config.md - set of validation rules for the component
- api/link/ui.treemap_save_config.md - defines URLs for data saving
- api/link/ui.treemap_scheme_config.md - defines schemes for data processing
- api/link/ui.treemap_scroll_config.md - enables/disables the scroll bar
- api/link/ui.treemap_scrollspeed_config.md - the time during which the component is scrolled to the specified position (in milliseconds)
- api/link/ui.treemap_select_config.md - enables/disables item selection or multiselection in grouplist
- api/ui.treemap_subrender_config.md - defines if the sub-elements should be rendered for the first-level branches
- api/link/ui.treemap_template_config.md - the component template
- api/link/ui.treemap_templatecopy_config.md - sets the template according to which data will be copied to the clipboard
- api/link/ui.treemap_threestate_config.md - enable three-state checkboxes
- api/link/ui.treemap_tooltip_config.md - sets a popup message appearing on pointing a mouse cursor over the dedicated item.
- api/link/ui.treemap_type_config.md - object that specifies items presentation
- api/link/ui.treemap_url_config.md - the URL which the component will use to load data after its initialization
- api/ui.treemap_value_config.md - a template that specifies the area of an item rectangle
- api/link/ui.treemap_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.treemap_$getsize_other.md - returns the current size of the component
- api/link/ui.treemap_$height_other.md - current height of the view
- api/link/ui.treemap_$scope_other.md - scope for resolving event and method names
- api/link/ui.treemap_$setsize_other.md - sets the component size
- api/link/ui.treemap_$skin_other.md - method, which will be called when skin defined
- api/link/ui.treemap_$view_other.md - reference to top html element of the view
- api/link/ui.treemap_$width_other.md - current width of the view
- api/link/ui.treemap_config_other.md - all options from initial component configuration
- api/link/ui.treemap_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.treemap_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.treemap_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.treemap_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.treemap_on_mouse_move_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.treemap_type_other.md - set of properties and helpers for item rendering
- api/link/ui.treemap_types_other.md - collection of possible types
}}


@index:
- api/refs/ui.treemap_methods.md
- api/refs/ui.treemap_props.md
- api/refs/ui.treemap_events.md
- api/refs/ui.treemap_others.md

