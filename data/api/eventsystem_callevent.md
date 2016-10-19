callEvent
=============

@short:
	calls an inner event

@params:
- name		string		the event name, case-insensitive
- params	array		an array of the event related data


@returns:
  - result	boolean    <i>false</i>, if some of the event handlers return <i>false</i>. Otherwise, <i>true</i>

@example:
//invokes triggering handlers of the 'onResize' event
var check = dtable.callEvent("onResize", [...]); 


@template:	api_method
@defined:	EventSystem	
@descr:

Normally, events are called automatically and you don't need to use this method.

@relatedapi: 
	api/refs/eventsystem.md,
	api/eventsystem_detachevent.md, 
	api/eventsystem_hasevent.md
    
@related: 
	desktop/event_handling.md
