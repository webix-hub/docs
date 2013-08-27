ui.tree 
=============


{{memo A hierarchical structure of nodes. }}

Each node in the tree might contain any number of other nodes, called as child. Nodes that contain child nodes can be expanded or collapsed. <br>
The component supports in-line node editing, advanced drag-and-drop, three-state checkboxes etc. Check [tree](datatree__index.md) documentation for more detailed description.

### Constructor

~~~js
	var tree = webix.ui({
		view:"tree", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_tree({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/group.md">Group</a>, <a href="api/refs/treeapi.md">TreeAPI</a>, <a href="api/refs/dragitem.md">DragItem</a>, <a href="api/refs/treedatamove.md">TreeDataMove</a>, <a href="api/refs/selectionmodel.md">SelectionModel</a>, <a href="api/refs/keysnavigation.md">KeysNavigation</a>, <a href="api/refs/mouseevents.md">MouseEvents</a>, <a href="api/refs/scrollable.md">Scrollable</a>, <a href="api/refs/ui.proto.md">ui.proto</a>, <a href="api/refs/pagingability.md">PagingAbility</a>, <a href="api/refs/datamarks.md">DataMarks</a>, <a href="api/refs/autotooltip.md">AutoTooltip</a>, <a href="api/refs/validatecollection.md">ValidateCollection</a>, <a href="api/refs/renderstack.md">RenderStack</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/treerenderstack.md">TreeRenderStack</a>, <a href="api/refs/copypaste.md">CopyPaste</a>, <a href="api/refs/treedataloader.md">TreeDataLoader</a>, <a href="api/refs/treestore.md">TreeStore</a>, <a href="api/refs/treestatecheckbox.md">TreeStateCheckbox</a></div>

Methods
-------

{{links
- api/link/ui.tree_add.md - adds an item to the store
- api/link/ui.tree_addcss.md - applied CSS class to a component item
- api/link/ui.tree_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.tree_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.tree_bind.md - binds components
- api/link/ui.tree_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.tree_callevent.md - calls an inner event
- api/link/ui.tree_checkall.md - check all items in tree
- api/link/ui.tree_checkitem.md - checks the checkbox	related to the specified item
- api/link/ui.tree_clearall.md - removes all items from the component
- api/link/ui.tree_clearcss.md - removes css class from all items
- api/link/ui.tree_clearvalidation.md - removes all validation marks from the component
- api/link/ui.tree_close.md - closes the branch with the specified id
- api/link/ui.tree_closeall.md - closes all branches in the tree
- api/link/ui.tree_copy.md - makes a copy of item
- api/link/ui.tree_count.md - returns the count of items in the table
- api/link/ui.tree_customize.md - redefines the 'type' property
- api/link/ui.tree_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.tree_destructor.md - destructs the calling object
- api/link/ui.tree_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.tree_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.tree_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.tree_exists.md - checks whether an item with the specified id exists
- api/link/ui.tree_filter.md - filters the component
- api/link/ui.tree_getbranchindex.md - gets index of the node in a specific branch
- api/link/ui.tree_getchecked.md - returns ids of the checked items
- api/link/ui.tree_getchildviews.md - returns child views of the calling component
- api/link/ui.tree_getfirstchildid.md - gets the ID of the first child of the specified branch
- api/link/ui.tree_getfirstid.md - returns the ID of the first item
- api/link/ui.tree_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.tree_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.tree_getitem.md - gets the object of the data item with the specified id
- api/link/ui.tree_getlastid.md - returns the id of the last item
- api/link/ui.tree_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.tree_getnextsiblingid.md - returns the id of the next sibling of the specified node
- api/link/ui.tree_getnode.md - returns the main HTML container for the calling object
- api/link/ui.tree_getopenitems.md - returns ids of the opened branches
- api/link/ui.tree_getpage.md - returns the currently visible page in case of paged view
- api/link/ui.tree_getpager.md - returns the pager object associated with the component
- api/link/ui.tree_getparentid.md - get the ID of the parent node of the specified item
- api/link/ui.tree_getparentview.md - returns the parent view of the component
- api/link/ui.tree_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.tree_getprevsiblingid.md - returns the id of the previous sibling of the specified node
- api/link/ui.tree_getscrollstate.md - returns the scroll position
- api/link/ui.tree_getselectedid.md - returns the id(s) of the selected item(s)
- api/link/ui.tree_getselecteditem.md - returns selected object
- api/link/ui.tree_getstate.md - returns the current state of the view
- api/link/ui.tree_gettopparentview.md - returns top parent view
- api/link/ui.tree_group.md - groups data by the specified data property
- api/link/ui.tree_hascss.md - checks if item has specific css class
- api/link/ui.tree_hasevent.md - checks whether the component has the specified event
- api/link/ui.tree_hide.md - hides the view
- api/link/ui.tree_isbranch.md - checks whether the node has any children
- api/link/ui.tree_isbranchopen.md - checks whether the specified branch opened or closed
- api/link/ui.tree_ischecked.md - checks whether the specified node is checked
- api/link/ui.tree_isenabled.md - checks whether the view is enabled
- api/link/ui.tree_isselected.md - checks whether the specified item is selected or not
- api/link/ui.tree_isvisible.md - checks whether the view is visible
- api/link/ui.tree_load.md - loads data from an external data source
- api/link/ui.tree_loadbranch.md - loads data to the specified branch
- api/link/ui.tree_loadnext.md - not implmented, do nothing
- api/link/ui.tree_locate.md - gets the id of an item from the specified HTML event
- api/link/ui.tree_mapevent.md - routes events from one object to another
- api/link/ui.tree_move.md - moves the specified item to the new position
- api/ui.tree_moveselection.md - moves selection in the specified direction
- api/link/ui.tree_open.md - opens the branch with the specified id
- api/link/ui.tree_openall.md - opens all branches in the tree
- api/link/ui.tree_parse.md - loads data to the component from an inline data source
- api/link/ui.tree_refresh.md - repaints the whole view or a certain item
- api/link/ui.tree_remove.md - removes the specified item from datastore
- api/link/ui.tree_removecss.md - removes CSS class from a component item
- api/link/ui.tree_render.md - renders the specified item or the whole component
- api/link/ui.tree_resize.md - adjusts the view to a new size
- api/link/ui.tree_scrollto.md - scrolls the data container to a certain position
- api/link/ui.tree_select.md - selects the specified item(s)
- api/link/ui.tree_selectall.md - selects all items or the specified range
- api/link/ui.tree_serialize.md - serializes data to a json object
- api/link/ui.tree_setpage.md - makes the specified page visible (assuming that the pager was defined )
- api/link/ui.tree_setstate.md - restores the specified state
- api/link/ui.tree_show.md - makes the component visible
- api/link/ui.tree_showitem.md - scrolls the component to make the specified item visible
- api/link/ui.tree_sort.md - sorts datastore
- api/link/ui.tree_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.tree_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.tree_uncheckall.md - uncheck all items in the tree
- api/link/ui.tree_uncheckitem.md - unchecks the checkbox	related to the specified item
- api/link/ui.tree_ungroup.md - ungroups data
- api/link/ui.tree_unselect.md - removes selection from the specified item
- api/link/ui.tree_unselectall.md - removes selection from all items
- api/link/ui.tree_updateitem.md - sets properties of the data item
- api/link/ui.tree_validate.md - validates one record or all dataset against validation rules
}}


Events
------

{{links
- api/link/ui.tree_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.tree_onafterclose_event.md - fires after the branch has been closed
- api/link/ui.tree_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.tree_onafterdelete_event.md - fires after item deleting
- api/link/ui.tree_onafterdrop_event.md - fires after drag-n-drop was finished
- api/link/ui.tree_onafterload_event.md - fires after xml loading is complete
- api/link/ui.tree_onafteropen_event.md - fires after the branch has been opened
- api/link/ui.tree_onafterrender_event.md - occurs immediately after the component has been rendered
- api/link/ui.tree_onafterselect_event.md - fires after item was selected
- api/link/ui.tree_onaftersort_event.md - fires after sorting dataset
- api/link/ui.tree_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.tree_onbeforeclose_event.md - fires the moment you attempt to close the tree branch
- api/link/ui.tree_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.tree_onbeforedelete_event.md - fires before item deleting
- api/link/ui.tree_onbeforedrag_event.md - fires before the mouse button is pressed and the cursor is moved over a draggable item
- api/link/ui.tree_onbeforedragin_event.md - fires before a dragged element is moved over the droppable area
- api/link/ui.tree_onbeforedrop_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.tree_onbeforeload_event.md - occurs immediately before loading XML data has been started
- api/link/ui.tree_onbeforeopen_event.md - fires the moment you attempt to open the tree branch
- api/link/ui.tree_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.tree_onbeforeselect_event.md - fires before item selection is started
- api/link/ui.tree_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.tree_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.tree_ondatarequest_event.md - called before exucuting auto-loading data call
- api/link/ui.tree_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.tree_ondragout_event.md - fires when a dragged element is moved outside of the droppable area
- api/link/ui.tree_onitemcheck_event.md - fires when you check an item in tree and treetable
- api/link/ui.tree_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.tree_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.tree_onitemrender_event.md - for each item rendering, occurs only for items with custom templates
- api/link/ui.tree_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.tree_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.tree_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.tree_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.tree_onpartialrender_event.md - called when part of tree is repainted
- api/link/ui.tree_onpaste_event.md - fires when the user presses CTRL+V keys combination
- api/link/ui.tree_onselectchange_event.md - fires after selection state was changed
- api/link/ui.tree_onvalidationerror_event.md - fires when newly loaded/added/edited data fails to pass validation
- api/link/ui.tree_onvalidationsuccess_event.md - fires after the newlyloaded/added/edited data has passes validation successfully
}}


Properties
----------

{{links
- api/link/ui.tree_animate_config.md - defines or disables view change animation.
- api/link/ui.tree_borderless_config.md - used to hide the component borders
- api/link/ui.tree_click_config.md - sets an action happening on a button click
- api/link/ui.tree_clipboard_config.md - enables/disables clipboard support
- api/link/ui.tree_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.tree_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.tree_data_config.md - an inline dataset that data to the component will be load from.
- api/link/ui.tree_datafeed_config.md - the url to the data source that the component will use to reload data from
- api/link/ui.tree_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.tree_datatype_config.md - the type of loaded data
- api/link/ui.tree_disabled_config.md - disables item
- api/link/ui.tree_drag_config.md - enables or disables drag-and-drop
- api/link/ui.tree_filtermode_config.md - defines the pattern for tree item filtering
- api/link/ui.tree_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.tree_height_config.md - sets the height of the component
- api/link/ui.tree_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.tree_id_config.md - the component ID
- api/link/ui.tree_maxheight_config.md - sets the maximum height for the view
- api/link/ui.tree_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.tree_minheight_config.md - sets the minimal height for the view
- api/link/ui.tree_minwidth_config.md - sets the minimal width for the view
- api/link/ui.tree_mouseeventdelay_config.md - the delay between a real mouse action and invoking the related events
- api/link/ui.tree_navigation_config.md - activates the selection keyboard navigation
- api/link/ui.tree_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.tree_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.tree_oncontext_config.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.tree_ondblclick_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.tree_onmousemove_config.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.tree_pager_config.md - defines paging configuration ( creates a 'ui.pager' object)
- api/link/ui.tree_ready_config.md - a handler that is called just after the page has been completely parsed
- api/link/ui.tree_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.tree_rules_config.md - set of validation rules for the component
- api/link/ui.tree_save_config.md - defines urls for datasaving
- api/link/ui.tree_scheme_config.md - defines schemes for data processing
- api/link/ui.tree_scroll_config.md - enables/disables the scroll bar
- api/link/ui.tree_scrollspeed_config.md - the time during which the component is scrolled to the specified position (in milliseconds)
- api/link/ui.tree_select_config.md - enables/disables item selection or multiselection in grouplist
- api/link/ui.tree_template_config.md - the component template
- api/link/ui.tree_templatecopy_config.md - sets the template according to which data will be copied to the clipboard
- api/link/ui.tree_threestate_config.md - defines three-state checkboxes for the tree. Flase by default.
- api/link/ui.tree_tooltip_config.md - sets a popup message appearing on pointing a mouse cursor over the dedicated item.
- api/link/ui.tree_type_config.md - object that specifies items presentation
- api/link/ui.tree_url_config.md - the url of a data feed which will be loaded after component initialization
- api/link/ui.tree_width_config.md - sets the width of the component
}}




Other
-----

{{links
- api/link/ui.tree_$drag_other.md - method called when drag operation initiated
- api/link/ui.tree_$draghtml_other.md - defines how dragged item will look
- api/link/ui.tree_$dragin_other.md - method called when item moved on possible drop landing during dnd
- api/link/ui.tree_$dragmark_other.md - method called during dnd when some item in the component need to be marked as active drop target
- api/link/ui.tree_$dragout_other.md - method called when item moved out of possible drop landing during dnd
- api/link/ui.tree_$drop_other.md - method called when item dragged and dropped on valid target
- api/link/ui.tree_$dropallow_other.md - can be redefine if you need custom drop rules
- api/link/ui.tree_$getsize_other.md - returns the current size of the component
- api/link/ui.tree_$height_other.md - current height of the view
- api/link/ui.tree_$setsize_other.md - sets the component size
- api/link/ui.tree_$skin_other.md - method, which will be called when skin defined
- api/link/ui.tree_$view_other.md - reference to top html element of the view
- api/link/ui.tree_$width_other.md - current width of the view
- api/link/ui.tree_config_other.md - all options from initial component configuration
- api/link/ui.tree_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.tree_on_click_other.md - redefines default click behavior for component items.
- api/link/ui.tree_on_context_other.md - a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br>
- api/link/ui.tree_on_dblclick_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.tree_on_mouse_move_other.md - attaches a dblclick behavior for component items with the specified CSS class.
- api/link/ui.tree_type_other.md - set of properties and helpers for item rendering
- api/link/ui.tree_types_other.md - collection of possible types
}}


@index:
- api/refs/ui.tree_methods.md
- api/refs/ui.tree_props.md
- api/refs/ui.tree_events.md
- api/refs/ui.tree_others.md

