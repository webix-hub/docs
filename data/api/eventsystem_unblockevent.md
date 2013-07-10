unblockEvent
=============



@short:
	cancels blocking events that was enabled by the 'blockEvent' command

@example:
$$('mylist').blockEvent();
$$('mylist').add({ text:'abc'}); //will not trigger any events 
$$('mylist').unblockEvent();


@template:	api_method
@defined:	EventSystem	
@descr:


@relatedapi: 
	api/refs/eventsystem.md,
	api/eventsystem_blockevent.md
@related:
	desktop/event_handling.md