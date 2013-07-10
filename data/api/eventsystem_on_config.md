on
=============


@short:
	allows attaching custom handlers to inner events of the component

@type: object
@example:
webix.ui({
	view:"list", 
	...
	on:{
    	'onItemClick': function(id){ alert("you have clicked on an item with id="+id); }
	}
}); 

@template:	api_config
@defined:	EventSystem	
@descr:

All keys defined in the object will be processed as the names of events, and their values as the related handlers.

The property can be used as an alternative to the api/eventsystem_attachevent.md method.

@relatedapi: 
	api/refs/eventsystem.md,
	api/eventsystem_detachevent.md, 
	api/eventsystem_attachevent.md
	api/eventsystem_callevent.md
@related:
	desktop/event_handling.md
@relatedsample:
	03_menu/04_context.html