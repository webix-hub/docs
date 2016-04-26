
Events Handling with DataTable
==============================

You can assign a custom behavior to different events of DataTable by using its event handling system.

There are 2 ways to add a handler to the event:

  - through the method [attachEvent()](api/link/ui.datatable_attachevent.md);
  - through the parameter [on](api/link/ui.datatable_on_config.md).

{{note
Event names are case-insensitive
}}


Method attachEvent()
-------------------------
You can attach several handlers to the same event and detach them using two respective methods:

{{snippet
A general way to attach/detach the event handler
}}
~~~js
// to attach event
var myEvent = $$("dataTableId").attachEvent("onItemClick", function () {
  // event handler code
})

// to detach event
$$("dataTableId").detachEvent(myEvent);
~~~

Parameter 'on'
----------------
With the help of parameter [on](api/link/ui.datatable_on_config.md) you can attach any event(s) to DataTable. But you can't detach them later.

{{snippet
Attaching the event handler through parameter 'on'
}}
~~~js
webix.ui({
  view: "dataTable",
  ...
  on: {"onItemClick": function () {alert("item has just been clicked");}}
); 
~~~


Cancelable Events 
-----------------------
All events with subword '**onbefore**' can be cancelled.<br>
To cancel some event you should return **false** within the appropriate event handler.

{{snippet
Cancelling the event handler
}}
~~~js
var myEvent = $$("dataTableId").attachEvent("onBeforeTabClick", function () {
  ... // some event handler code
  return false;
})
~~~

Accessible objects and data 
---------------------------------

Inside the event handler you can refer to the holder component through keyword **this**. </br>
Besides, most event handlers get incoming argument(s), like the **id** of DataTable's row (see api/refs/ui.datatable.md to know exactly what arguments are passed inside event handler). 

Btw, using the **id** of a sub-element you can access a data item associated with it and all its properties, even if they were not used to draw the element. For example:

{{snippet
Referring within the event handler
}}
~~~js
$$("myTable").attachEvent("onafterselect",function (id) {
  $$("top_label").setValue(this.getItem(id).name)
})
~~~

@keyword:
	events, action, handler, callback
