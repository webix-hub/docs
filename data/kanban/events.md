Handling Events
================

Attaching Event Handler
-----------------------

The user can add any user-defined handler to any of the available events. To do this, the user can use the attachEvent() method with the following parameters:

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

webix.detachEvent(id); // unique id of the event handler

List of supported events
-------------------------

Below you can find the full list of events available for Kanban API:

###onListIconClick

fires on clicking any icon in the task

~~~js
webix.attachEvent("onListIconClick", function(iconId, itemId)){
	// your code
};
~~~

params:

- iconId - the id of the icon
- itemId - the id of the task where the icon is located

###onAvatarClick

fires on clicking an avatar in the task

~~~js
webix.attachEvent("onAvatarClick", function()){
	// your code
};
~~~

###onBeforeDrag

~~~js
webix.attachEvent("onBeforeDrag", function(dragContext)){
	// your code
};
~~~

params:

- dragContext - 