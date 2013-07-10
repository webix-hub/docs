blockEvent
=============


@short:
	temporarily blocks triggering of ALL events of the calling object

@example:

$$('list').blockEvent();
$$('list').add({ text:'abc'}); //will not trigger list events 
$$('list').unblockEvent();


@template:	api_method
@defined:	EventSystem	
@descr:

Use the command with care, many actions in components are linked through events.

The most common use-case - preventing a component from repainting with each small operation:

~~~js
//will repaint component 3 times

$$('list').add({ text:'111'});
$$('list').add({ text:'222'});
$$('list').add({ text:'333'});

//will repaint component only once (onStoreUpdated of List DataStore is blocked)
$$('list').data.blockEvent();
$$('list').add({ text:'111'});
$$('list').add({ text:'222'});
$$('list').add({ text:'333'});
$$('list').data.unblockEvent();
$$('list').refresh();
~~~

@relatedapi: 
	api/refs/eventsystem.md,
	api/eventsystem_unblockevent.md

@related:
	desktop/event_handling.md
