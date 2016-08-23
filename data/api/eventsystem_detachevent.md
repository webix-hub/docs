detachEvent
=============




@short:
	detaches a handler from an event (which was attached before by the attachEvent method)

@params:
- id		string		the event id (the result of the attachEvent operation)


@example:
var myEvent = $$("mylist").attachEvent("onItemClick", function (){
    ...//event handler code
});
...
$$("mylist").detachEvent(myEvent);

@template:	api_method
@defined:	EventSystem	
@descr:


@related: 
	desktop/event_handling.md
@relatedapi: 
	api/refs/eventsystem.md,
	api/eventsystem_attachevent.md, 
	api/eventsystem_hasevent.md
	api/eventsystem_callevent.md