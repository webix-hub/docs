hasEvent
=============


@short:
	checks whether the component has the specified event

@params:
- name		string		the event name, case-insensitive


@returns:
result		boolean		<i>true</i>, if at least one handler was attached to the specified event. Otherwise, <i>false</i>
@example:

var is_exit = mydata.hasEvent('onBeforeSelect');

@template:	api_method
@defined:	EventSystem	
@descr:


{{note The method checks whether some handler was attached to the object, and **doesn't check** whether that object has such event }}


@relatedapi:
	api/refs/eventsystem.md,
	api/eventsystem_detachevent.md, 
	api/eventsystem_attachevent.md
	api/eventsystem_callevent.md
    
@related: 
	desktop/event_handling.md
    datatable/events_handling.md