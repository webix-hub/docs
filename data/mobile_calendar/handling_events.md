Handling Events with Mobile Scheduler
==============

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

Add, Delete and Update Event Handling
-------------------------------------

To handle CRUD operations you can set the onAfterAdd, onAfterDelete and onStoreUpdated event handlers
for Scheduler datastore. You can get datastore by the "data" property of Scheduler. 

###onAfterAdd 

fires after an event has been added into scheduler

~~~js
$$("scheduler").data.attachEvent("onAfterAdd",function(itemId){
	var eventObj = this.getItem(itemId);
    // your code here
});
~~~

- itemId - {string} the id of the newly added event


###onAfterDelete

fires after an event has been deleted

~~~js
$$("scheduler").data.attachEvent("onAfterDelete",function(itemId){
	// your code here
	return true;
});
~~~

- itemId - {string} the id of the deleted event

###onStoreUpdated

fires when the data store has been updated

~~~js
$$("scheduler").data.attachEvent("onStoreUpdated",function(itemId,item,operation){
	if(operation == "update"){
       // your code here
    }
	return true;
});
~~~

- itemId - {string} the id of the event object
- item - {object} the event object
- operation - {string} type of the operation

Handling event choosing
---------------------------

###onBeforeEventShow

To process the behavior of the component on choosing an event, you can use the onBeforeEventShow event.

This event is fired by Scheduler when an event is chosen in one of the calendar lists. If this event returns false, a form with event details won't be shown:

~~~js
$$("scheduler").attachEvent("onBeforeEventShow",function(eventId){
   // your code
   return true;
});
~~~

@spellcheck: evName, evHandler, itemId