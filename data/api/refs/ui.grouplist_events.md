Events
=======

{{api
- api/link/ui.grouplist_onafteradd_event.md - fires after adding item to datastore
- api/link/ui.grouplist_onaftercontextmenu_event.md - fires after the context menu was called in the item area
- api/link/ui.grouplist_onafterdelete_event.md - fires after item deleting
- api/link/ui.grouplist_onafterdrop_event.md - fires after drag-n-drop was finished
- api/link/ui.grouplist_onafterdroporder_event.md - called when dnd reordering is fully finished
- api/link/ui.grouplist_onafterload_event.md - fires after data loading is complete
- api/link/ui.grouplist_onafterrender_event.md - occurs immediately after the component has been rendered
- api/link/ui.grouplist_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.grouplist_onafterselect_event.md - fires after item was selected
- api/link/ui.grouplist_onaftersort_event.md - fires after sorting dataset
- api/link/ui.grouplist_onbeforeadd_event.md - fires before adding item to datastore
- api/link/ui.grouplist_onbeforecontextmenu_event.md - fires before the context menu is called in the item area
- api/link/ui.grouplist_onbeforedelete_event.md - fires before item deleting
- api/link/ui.grouplist_onbeforedrag_event.md - fires before the mouse button is pressed and the cursor is moved over a draggable item
- api/link/ui.grouplist_onbeforedragin_event.md - fires before a dragged element is moved over the droppable area
- api/link/ui.grouplist_onbeforedrop_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.grouplist_onbeforedroporder_event.md - called when dnd reordering has been made, but not applied yet
- api/link/ui.grouplist_onbeforedropout_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.grouplist_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.grouplist_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.grouplist_onbeforeselect_event.md - fires before item selection is started
- api/link/ui.grouplist_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.grouplist_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.grouplist_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.grouplist_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.grouplist_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.grouplist_ondestruct_event.md - occurs when component destroyed
- api/link/ui.grouplist_ondragout_event.md - fires when a dragged element is moved outside of the droppable area
- api/link/ui.grouplist_onfocus_event.md - fires when a view gets focus
- api/link/ui.grouplist_onitemclick_event.md - fires when a component item was clicked
- api/link/ui.grouplist_onitemdblclick_event.md - fires when a component item was double-clicked
- api/link/ui.grouplist_onitemrender_event.md - for each item rendering, occurs only for items with custom templates
- api/link/ui.grouplist_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.grouplist_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.grouplist_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.grouplist_onmousemove_event.md - fires when the mouse was moved over the specified component
- api/link/ui.grouplist_onmousemoving_event.md - fires when the mouse was moved over the component
- api/link/ui.grouplist_onmouseout_event.md - fires when the mouse was moved out from the specified item
- api/link/ui.grouplist_onpaste_event.md - fires when the <a href="api/copypaste_clipboard_config.md">clipboard</a> is enabled and the user presses CTRL+V keys combination
- api/link/ui.grouplist_onselectchange_event.md - fires after selection state was changed
- api/link/ui.grouplist_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.grouplist_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.grouplist_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.grouplist_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.grouplist_ontouchmove_event.md - occurs during touch movement
- api/link/ui.grouplist_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.grouplist_onvalidationerror_event.md - fires when newly loaded/added/edited data fails to pass validation
- api/link/ui.grouplist_onvalidationsuccess_event.md - fires after the newlyloaded/added/edited data has passes validation successfully
- api/link/ui.grouplist_onviewresize_event.md - view size was changed by resizer
}}

@index:
- api/link/ui.grouplist_onafteradd_event.md
- api/link/ui.grouplist_onaftercontextmenu_event.md
- api/link/ui.grouplist_onafterdelete_event.md
- api/link/ui.grouplist_onafterdrop_event.md
- api/link/ui.grouplist_onafterdroporder_event.md
- api/link/ui.grouplist_onafterload_event.md
- api/link/ui.grouplist_onafterrender_event.md
- api/link/ui.grouplist_onafterscroll_event.md
- api/link/ui.grouplist_onafterselect_event.md
- api/link/ui.grouplist_onaftersort_event.md
- api/link/ui.grouplist_onbeforeadd_event.md
- api/link/ui.grouplist_onbeforecontextmenu_event.md
- api/link/ui.grouplist_onbeforedelete_event.md
- api/link/ui.grouplist_onbeforedrag_event.md
- api/link/ui.grouplist_onbeforedragin_event.md
- api/link/ui.grouplist_onbeforedrop_event.md
- api/link/ui.grouplist_onbeforedroporder_event.md
- api/link/ui.grouplist_onbeforedropout_event.md
- api/link/ui.grouplist_onbeforeload_event.md
- api/link/ui.grouplist_onbeforerender_event.md
- api/link/ui.grouplist_onbeforeselect_event.md
- api/link/ui.grouplist_onbeforesort_event.md
- api/link/ui.grouplist_onbindrequest_event.md
- api/link/ui.grouplist_onblur_event.md
- api/link/ui.grouplist_ondatarequest_event.md
- api/link/ui.grouplist_ondataupdate_event.md
- api/link/ui.grouplist_ondestruct_event.md
- api/link/ui.grouplist_ondragout_event.md
- api/link/ui.grouplist_onfocus_event.md
- api/link/ui.grouplist_onitemclick_event.md
- api/link/ui.grouplist_onitemdblclick_event.md
- api/link/ui.grouplist_onitemrender_event.md
- api/link/ui.grouplist_onkeypress_event.md
- api/link/ui.grouplist_onloaderror_event.md
- api/link/ui.grouplist_onlongtouch_event.md
- api/link/ui.grouplist_onmousemove_event.md
- api/link/ui.grouplist_onmousemoving_event.md
- api/link/ui.grouplist_onmouseout_event.md
- api/link/ui.grouplist_onpaste_event.md
- api/link/ui.grouplist_onselectchange_event.md
- api/link/ui.grouplist_onswipex_event.md
- api/link/ui.grouplist_onswipey_event.md
- api/link/ui.grouplist_ontimedkeypress_event.md
- api/link/ui.grouplist_ontouchend_event.md
- api/link/ui.grouplist_ontouchmove_event.md
- api/link/ui.grouplist_ontouchstart_event.md
- api/link/ui.grouplist_onvalidationerror_event.md
- api/link/ui.grouplist_onvalidationsuccess_event.md
- api/link/ui.grouplist_onviewresize_event.md




@seolinktop: [popular javascript framework](https://webix.com)
@seolink: [javascript library list](https://webix.com/widget/list/)