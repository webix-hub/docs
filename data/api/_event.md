event
=============

@short: attaches an event handler to an HTML element

@params:
- node		element		the HTML node or its id
- event		string		the name of an HTML event (without the 'on' prefix)
- handler	function	the event handler
* master	object		an object that the **this** keyword refers to

@returns:
- id	id		the event handler id (can be used by the **eventRemove()** method) 

@example:
// adds a handler for the 'onclick' event
webix.event("divId", "click", function(e){
	//e - a native event object
	do_something();
});

@relatedapi: api/_eventRemove.md
@relatedsample: 
	15_datatable/11_sizing/03_resize_win.html
@related:
	desktop/dimensions.md
@template:	api_method
@descr:

