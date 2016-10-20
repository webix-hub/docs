onItemDblClick
=============


@short:
	fires when a component item was double-clicked

@params:
- id		object			the id of the clicked item
* e  		Event			a native event object
* node		HTMLElement		the target HTML element

@example: 
	
grid.attachEvent("onItemDblClick", function(id, e, node){
    //... some code here ... 
});

@relatedsample:
	08_chart/08_dynamic/02_events.html
@relatedapi:
	api/mouseevents_onitemclick_event.md
@related: 
	desktop/event_handling.md
@template:	api_event
@defined:	MouseEvents
	
@descr:


