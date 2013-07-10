eventRemove
=============

@short: removes an event handler from an HTML element
	

@params:
- id	id		the id of an event handler

@example:
var eventId = webix.event("divId", "click", function(e){
		do_something();
});

webix.eventRemove(eventId);

@relatedapi: api/_event.md

@template:	api_method
@descr:


