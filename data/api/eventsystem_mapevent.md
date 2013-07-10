mapEvent
=============


@short:
	routes events from one object to another

@params:
- map		object		the hash of event-object relations




@example:
//as result, button's event will fire also for the list component
button.mapEvent({
	onItemClick:list // where list - some other component
});



@template:	api_method
@defined:	EventSystem	
@descr:


@related: 
	datatable/events_handling.md
@relatedapi:
	api/refs/eventsystem.md

