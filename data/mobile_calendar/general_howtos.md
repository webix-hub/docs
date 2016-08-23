General How-Tos
==================

How to add an event?
------------------

Scheduler data are loaded via api/link/ui.proto_parse.md or api/link/ui.proto_load.md methods. If you need to add a single event you can 
use the api/link/ui.proto_add.md method and pass event object in it: 

~~~js
$$("scheduler").add(
   { 
     id:3,
	 start_date:"2015-06-01 09:00:00",
	 end_date:"2015-06-01 10:00:00",
	 text:"Meeting"
   }
); 
~~~                    

How to remove an event?
------------------------

Use the api/link/ui.proto_remove.md method to remove an event by its id:

~~~js
$$("scheduler").remove(eventid); 
~~~ 

How to change event properties?
------------------------

To change event properties you need to do the following:

- get the event object 
- change properties of the event object
- redraw the event

~~~js
var event = $$("scheduler").getItem(eventId);
event.text = "Meeting";
$$("scheduler").refresh(eventId);
~~~ 

How to hide a button?
-----------------------

You can use the api/link/ui.proto_hide.md method to hide a certain view in Scheduler. [Here](mobile_calendar/mobile_advanced.md#accessingelementsofthescheduler) you may find details about Scheduler structure.

For example, if you want to hide the "add" button, you can do the following:

~~~js
$$("scheduler").$$("add").hide();
~~~

How to handle event choosing?
----------------------------

When an event is chosen in one of the lists, Scheduler fires the "onBeforeEventShow" event. If this event returns *false*, a form with event details won't be shown:

~~~js
$$("scheduler").attachEvent("onBeforeEventShow",function(eventId){
   // your code
   return true;
});
~~~



