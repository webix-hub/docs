event
=============

@short: attaches an event handler to an HTML element

@params:
- node		HTMLElement/string		the HTML node or its id
- event		string		the name of an HTML event (without the 'on' prefix)
- handler	function	the event handler
* master	object		an object that the <i>this</i> keyword refers to

@returns:
- id	id		the event handler id (can be used by the <i>eventRemove()</i> method) 

@example:
// adds a handler for the 'onclick' event of some HTML element
webix.event("divId", "click", function(e){
	//e - a native event object
	do_something();
});

// adds a handler for the 'onKeyUp' event of the List component
webix.event($$("list").getNode(), "keyup", function(e){
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

