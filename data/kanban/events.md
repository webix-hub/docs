Handling Events with Kanban Board
================

Attaching Event Handler
-----------------------

The user can add any user-defined handler to any of the available events. To do this, the user can use the api/link/ui.vscroll_attachevent.md method with the following parameters:

- evName - name of the event;
- evHandler - user-defined event handler.
 
~~~js
webix.attachEvent(evName, evHandler);
~~~

Several handlers can be attached to one and the same event, and all of them will be executed.
The names of the events are case-insensitive.

Detaching Event Handler
---------------------
There is a simple way of removing an event-handler:

~~~js
webix.detachEvent(id); // unique id of the event handler
~~~

List of supported events
-------------------------

Below you can find the full list of events available for Kanban API:

- <a href="#onlistitemclick">onListItemClick</a> - fires on an item click
- <a href="#onlistitemdblclick">onListItemDblClick</a> - occurs on an item double-click
- <a href="#onlisticonclick">onListIconClick</a> - fires on clicking icon button in the item footer
- <a href="#onavatarclick">onAvatarClick</a> - occurs on an avatar click
- <a href="#onlistbeforeselect">onListBeforeSelect</a> - fires before item selection started
- <a href="#onlistafterselect">onListAfterSelect</a> - occurs after an item is selected
- <a href="#onlistbeforecontextmenu">onListBeforeContextMenu</a> - fires on item right click before native context menu displayed
- <a href="#onlistaftercontextmenu">onListAfterContextMenu</a> - fires after the context menu was called in the item area
- <a href="#onlistbeforedrag">onListBeforeDrag</a> - fires before the mouse button is pressed and the cursor is moved over a draggable item
- <a href="#onlistbeforedragin">onListBeforeDragIn</a> -  fires before a dragged item is moved over the droppable list
- <a href="#onlistbeforedrop">onListBeforeDrop</a> -  fires before a dragged element is released over the droppable list
- <a href="#onlistafterdrop">onListAfterDrop</a> - fires after drag-n-drop has been finished
- <a href="#onbeforestatuschange">onBeforeStatusChange</a> - occurs before an item is dropped to a list with different status
- <a href="#onafterstatuschange">onAfterStatusChange</a> - fires after an item is dropped to a list with different status

###<span id='onlistitemclick'>onListItemClick</span>

fires on an item click

~~~js
$$("myBoard").attachEvent("onListIconClick", function(itemId,ev,node,list)){
	// your code
};
~~~

params:

- itemId - {string} the id of the clicked item
- ev - {event object} a native event object
- node - {element} the target HTML element
- list - {object} the list object where click has happened

{{sample
63_kanban/02_events/04_item_click.html
}}

###<span id='onlistitemdblclick'>onListItemDblClick</span>

fires when an item has been double-clicked

~~~js
$$("myBoard").attachEvent("onListItemDblClick", function(itemId,ev,node,list)){
	// your code
};
~~~

params:

- itemId - {string} the id of the clicked item
- ev - {event object} a native event object
- node - {element} the target HTML element
- list - {object} the list object where double-click has happened

{{sample
63_kanban/02_events/05_dbl_click.html
}}


###<span id='onlisticonclick'>onListIconClick</span>

fires on clicking any icon in the list item

~~~js
$$("myBoard").attachEvent("onListIconClick", function(iconId, itemId,ev,node,list)){
	// your code
    return false;
};
~~~

params:

- iconId - {string} the id of the icon
- itemId - {string} the id of the clicked item
- ev - {event object} a native event object
- node - {element} the target HTML element
- list - {object} the list object where click has happened

returns:

{bool} if an event handler returns false, onListItemClick handler will not be called.


{{sample
63_kanban/02_events/01_icon_onclick.html
}}

###<span id='onavatarclick'>onAvatarClick</span>

fires on clicking an avatar in the item

~~~js
$$("myBoard").attachEvent("onAvatarClick", function(itemId,ev,node,list)){
	// your code
};
~~~

params:

- itemId - {string} the id of the clicked item
- ev - {event object} a native event object
- node - {element} the target HTML element
- list - {object} the list object where click has happened

returns:

{bool} if an event handler returns false, onListItemClick handler will not be called


{{sample
63_kanban/02_events/02_avatar_onclick.html
}}


###<span id='onlistbeforeselect'>onListBeforeSelect</span>

fires before an item selection started

~~~js
$$("myBoard").attachEvent("onListBeforeSelect", function(itemId,selection,list)){
	// your code
};
~~~

params:

- itemId - {string} the item id
- selection - {boolean} true - if to select, false - to unselect
- list - {object} the list that contains the item 

returns:

{bool} if an event handler returns false, the item will not be selected


{{sample
63_kanban/02_events/04_item_click.html
}}

###<span id='onlistafterselect'>onListAfterSelect</span>

fires after an item has been selected

~~~js
$$("myBoard").attachEvent("onListAfterSelect", function(itemId,list)){
	// your code
};
~~~

params:

- itemId - {string} the item id
- list - {object} the list that contains the item 


{{sample
63_kanban/02_events/04_item_click.html
}}

###<span id='onlistbeforecontextmenu'>onListBeforeContextMenu</span>

fires on an item right click, before native context menu displayed

~~~js
$$("myBoard").attachEvent("onListBeforeContextMenu", function(itemId,ev,node,list)){
	// your code
    
    // block native context menu
	webix.html.preventEvent(ev);
};
~~~

params:

- itemId - {string} the id of the clicked item
- ev - {event object} a native event object
- node - {element} the target HTML element
- list - {object} the list object where click has happened


{{sample
63_kanban/02_events/06_context.html
}}

###<span id='onlistaftercontextmenu'>onListAfterContextMenu</span>

fires after the context menu was called in the item area

~~~js
$$("myBoard").attachEvent("onListAfterContextMenu", function(itemId,ev,node,list)){
	// your code
    
};
~~~

params:

- itemId - {string} the id of the clicked item
- ev - {event object} a native event object
- node - {element} the target HTML element
- list - {object} the list object where click was happened


###<span id='onlistbeforedrag'>onListBeforeDrag</span>

fires before the mouse button is pressed and the cursor is moved over a draggable item

~~~js
$$("myBoard").attachEvent("onListBeforeDrag", function(context,ev,list)){
	if(...){
        return false;
    }
    return true;
};
~~~

params:

- context - {object} drag-n-drop context object with a set of properties:
 - from - the source object,
 - to - the target object,
 - source - the ID of the dragged item(s),
 - target - the ID of the drop target, null for drop on empty space,
 - start - the ID from which drag-n-drop started
- ev - {event object} a native event object
- list - {object} the list object where the event has happened

returns:

{bool} returning false will prevent dragging of the element


{{sample
63_kanban/02_events/03_drag_n_drop_events.html
}}

###<span id='onlistbeforedragin'>onListBeforeDragIn</span>

fires before a dragged element is moved over the droppable list

~~~js
$$("myBoard").attachEvent("onListBeforeDragIn", function(context,ev,list)){
	if(...){
        return false;
    }
    return true;
};
~~~

params:

- context - {object} drag-n-drop context object with a set of properties:
 - from - the source object,
 - to - the target object,
 - source - the ID of the dragged item(s),
 - target - the ID of the drop target, null for drop on empty space,
 - start - the ID from which drag-n-drop started
- ev - {event object} a native event object
- list - {object} the list object where the event has happened

returns:

{bool} returning false will prevent dropping of the element



{{sample
63_kanban/02_events/03_drag_n_drop_events.html
}}

###<span id='onlistbeforedrop'>onListBeforeDrop</span>

fires before a dragged element is released over the droppable list

~~~js
$$("myBoard").attachEvent("onListBeforeDrop", function(context,ev,list)){
	if(...){
        return false;
    }
    return true;
};
~~~

params:

- context - {object} drag-n-drop context object with a set of properties:
 - from - the source object,
 - to - the target object,
 - source - the ID of the dragged item(s),
 - target - the ID of the drop target, null for drop on empty space,
 - start - the ID from which drag-n-drop started
- ev - {event object} a native event object
- list - {object} the list object where the event has happened

returns:

{bool} returning false will prevent further drag-and-drop processing



###<span id='onlistafterdrop'>onListAfterDrop</span>

fires after drag-n-drop has finished

~~~js
$$("myBoard").attachEvent("onListAfterDrop", function(context,ev,list)){
	// your code
};
~~~

params:

- context - {object} drag-n-drop context object with a set of properties:
 - from - the source object,
 - to - the target object,
 - source - the ID of the dragged item(s),
 - target - the ID of the drop target, null for drop on empty space,
 - start - the ID from which drag-n-drop started
- ev - {event object} a native event object
- list - {object} the list object where the event has happened


{{sample
63_kanban/02_events/03_drag_n_drop_events.html
}}


###<span id='onbeforestatuschange'>onBeforeStatusChange</span>

fires before an item is going to be dropped into the list with different status

~~~js
$$("myBoard").attachEvent("onBeforeStatusChange", function(itemId,newStatus)){
	var status = this.getItem(itemId).status;
	if(...){
        return false;
    }
    return true;
};
~~~

params:

- itemId - {string} the item's id
- status - {string} a new item's status
- list - {object} the list object where the event has happened
- context - {object} drag-n-drop context object
- ev - {event object} a native event object


returns:

{bool} returning false will prevent further drag-and-drop processing


###<span id='onafterstatuschange'>onAfterStatusChange</span>

fires after an item has been dropped into the list with a different status

~~~js
$$("myBoard").attachEvent("onListAfterDrop", function(itemId,newStatus)){
	// your code
};
~~~

params:

- itemId - {string} the item id
- status - {string} a new item's status
- list - {object} the list object where the event has happened
- context - {object} drag-n-drop context object
- ev - {event object} a native event object


