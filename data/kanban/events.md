Handling Events
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

- <a href="#onListItemClick">onListItemClick</a> - fires on an item click
- <a href="#onListItemDblClick">onListItemDblClick</a> - occurs on an item double-click
- <a href="#onListIconClick">onListIconClick</a> - fires on clicking icon button in the item footer
- <a href="#onAvatarClick">onAvatarClick</a> - occurs on an avatar click
- <a href="#onListBeforeSelect">onListBeforeSelect</a> - fires before item selection started
- <a href="#onListAfterSelect">onListAfterSelect</a> - occurs after an item is selected
- <a href="#onListBeforeContextMenu">onListBeforeContextMenu</a> - fires on item right click before native context menu displayed
- <a href="#onListAfterContextMenu">onListAfterContextMenu</a> - fires after the context menu was called in the item area
- <a href="#onListBeforeDrag">onListBeforeDrag</a> - fires before the mouse button is pressed and the cursor is moved over a draggable item
- <a href="#onListBeforeDragIn">onListBeforeDragIn</a> -  fires before a dragged item is moved over the droppable list
- <a href="#onListBeforeDrop">onListBeforeDrop</a> -  fires before a dragged element is released over the droppable list
- <a href="#onListAfterDrop">onListAfterDrop</a> - fires after drag-n-drop has been finished
- <a href="#onBeforeStatusChange">onBeforeStatusChange</a> - occurs before an item is dropped to a list with different status
- <a href="#onAfterStatusChange">onAfterStatusChange</a> - fires after an item is dropped to a list with different status

###<span id='onListItemClick'>onListItemClick</span>

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

###<span id='onListItemDblClick'>onListItemDblClick</span>

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
- list - {object} the list object where doulble-click has happened

###<span id='onListIconClick'>onListIconClick</span>

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

###<span id='onAvatarClick'>onAvatarClick</span>

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


###<span id='onListBeforeSelect'>onListBeforeSelect</span>

fires before item selection started

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

###<span id='onListAfterSelect'>onListAfterSelect</span>

fires after an item has been selected

~~~js
$$("myBoard").attachEvent("onListAfterSelect", function(itemId,list)){
	// your code
};
~~~

params:

- itemId - {string} the item id
- list - {object} the list that contains the item 

###<span id='onListBeforeContextMenu'>onListBeforeContextMenu</span>

fires on item right click, before native context menu displayed

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

###<span id='onListAfterContextMenu'>onListAfterContextMenu</span>

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

###<span id='onListBeforeDrag'>onListBeforeDrag</span>

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
 - start - the ID from which DnD started
- ev - {event object} a native event object
- list - {object} the list object where the event has happened

returns:

{bool} returning false will prevent dragging of the element

###<span id='onListBeforeDragIn'>onListBeforeDragIn</span>

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
 - start - the ID from which DnD started
- ev - {event object} a native event object
- list - {object} the list object where the event has happened

returns:

{bool} returning false will prevent dropping of the element

###<span id='onListBeforeDrop'>onListBeforeDrop</span>

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
 - start - the ID from which DnD started
- ev - {event object} a native event object
- list - {object} the list object where the event has happened

returns:

{bool} returning false will prevent further drag-and-drop processing

###<span id='onListAfterDrop'>onListAfterDrop</span>

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
 - start - the ID from which DnD started
- ev - {event object} a native event object
- list - {object} the list object where the event has happened

###<span id='onBeforeStatusChange'>onBeforeStatusChange</span>

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

- itemId - {string} the item id
- status - {string} new item status
- list - {object} the list object where the event has happened
- context - {object} drag-n-drop context object
- ev - {event object} a native event object


returns:

{bool} returning false will prevent further drag-and-drop processing

###<span id='onAfterStatusChange'>onAfterStatusChange</span>

fires after an item has been dropped into the list with different status

~~~js
$$("myBoard").attachEvent("onListAfterDrop", function(itemId,newStatus)){
	// your code
};
~~~

params:

- itemId - {string} the item id
- status - {string} new item status
- list - {object} the list object where the event has happened
- context - {object} drag-n-drop context object
- ev - {event object} a native event object
