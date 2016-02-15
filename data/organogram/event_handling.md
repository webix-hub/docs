Event Handling with Organogram
================

Organogram supports various events that can be used to provide a custom behaviour for your organogram.

There are 2 ways you can add a handler to the event:

  - through the method [attachEvent()](api/link/ui.organogram_attachevent.md);
  - through the parameter [on](api/link/ui.organogram_on_config.md).

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
var myEvent = $$("orgChartId").attachEvent("onItemClick", function () {
// event handler code
})

//to detach event
$$("orgChartId").detachEvent(myEvent);
~~~

Parameter 'on'
----------------
With the help of parameter [on](api/link/ui.organogram_on_config.md) you can also attach any event(s) to an Organogram object. But in contrast to 
using the api/link/ui.organogram_attachevent.md method you can't detach the attached events later.

{{snippet
Attaching the event handler through parameter 'on'
}}
~~~js
webix.ui({
	view:"organogram",
	...
    on: {
        onitemClick: function (id) {
            alert("item has just been clicked");
       }
	}
); 
~~~


Cancelable Events 
-----------------------
All events with the subword '**onbefore**' can be cancelled.<br>
To cancel some event you should return **false** within the appropriate event handler.

{{snippet
Cancelling the event handler
}}
~~~js
var myEvent = $$("orgChartId").attachEvent("onBeforeSelect", function (id) {
 	... // some event handler code
	return false;
})
~~~

Accessible objects and data 
---------------------------------

Inside the event handler you can refer to the holder component through the keyword **this**. </br>
Besides, most event handlers get incoming argument(s), like the **id** of a data item (see [organogram events](api/refs/ui.organogram_events.md) to know exactly what arguments are passed inside event handler). 

Btw, using the **id** of a data item you can access this item itself and all its properties. For example:

{{snippet
Referring within the event handler
}}
~~~js
$$("orgChartId").attachEvent("onAfterSelect",function(id){
  var level = this.getItem(id).$level;
})
~~~

{{editor http://webix.com/snippet/f58ed56c  Events}}

@edition:pro