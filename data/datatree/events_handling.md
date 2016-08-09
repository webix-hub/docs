Event Handling with Tree
=========================
Tree supports various events that can be used to provide a custom behaviour for your tree.

There are 2 ways you can add a handler to the event:

  - through the method [attachEvent()](api/link/ui.tree_attachevent.md);
  - through the parameter [on](api/link/ui.tree_on_config.md).

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
var myEvent = $$("treeId").attachEvent("onItemClick", function () {
// event handler code
})

//to detach event
$$("treeId").detachEvent(myEvent);
~~~

Parameter 'on'
----------------
With the help of parameter [on](api/link/ui.tree_on_config.md) you can also attach any event(s) to a Tree object. But in contrast to 
using the api/link/ui.tree_attachevent.md method you can't detach attached events later.

{{snippet
Attaching the event handler through parameter 'on'
}}
~~~js
webix.ui({
  view:"tree",
  ...
  on: {"itemClick": function () {alert("item has just been clicked");}}
); 
~~~


Cancelable Events 
-----------------------
All events with subword '**onBefore**' can be cancelled.<br>
To cancel some event you should return **false** within the appropriate event handler.

{{snippet
Cancelling the event handler
}}
~~~js
var myEvent = $$("treeId").attachEvent("onBeforeSelect", function () {
  ... // some event handler code
  return false;
})
~~~

Accessible objects and data 
---------------------------------

Inside the event handler you can refer to the holder component through keyword **this**. </br>
Besides, most event handlers get incoming argument(s), like the **id** of a data item (see [tree events](api/refs/ui.tree_events.md) to know exactly what arguments are passed inside event handler). 

By the way, using the **id** of a data item you can access this item itself and all its properties. For example:

{{snippet
Referring within the event handler
}}
~~~js
$$("treeId").attachEvent("onAfterSelect",function(id){
  parentId = this.getItem(id).parent;
})
~~~

@keyword:
	events, action, handler, callback
