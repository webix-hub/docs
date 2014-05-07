bind
=============

@short: binds a function to an object
	

@params:
- code		function	the function that will be bound 
- master	object		the object which the function will be bound to

@returns:
- code		function	the bound function 

@example:

var grid = webix.ui({
	view:"datatable", 
    on:{
    	"onStoreUpdated":webix.bind(this.render, this)
    }
});
//'this' refers to a datatable object

@template:	api_method
@descr:

Inside the function the **this** keyword becomes a reference to the object's scope.

Function and component binding works as well during attaching the function with an [attachEvent](api/eventsystem_attachevent.md) method:

~~~js
grid.attachEvent("onStoreUpdated", webix.bind(this.render, this)); 
//'this' is still a grid object since attachEvent() is called from it
~~~


