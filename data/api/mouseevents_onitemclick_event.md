onItemClick
=============


@short:
	fires when a component item was clicked
@params:
- id		string		the id of the clicked item
* e		event		a native event object
* node		element		the target HTML element

@example: 
	
grid.attachEvent("onItemClick", function(id, e, node){
    var item = this.getItem(id);
    //... some code here ... 
});

@relatedsample:
	15_datatable/14_events/02_click_css.html
@relatedapi:
	api/mouseevents_onitemdblclick_event.md
@related:
	desktop/event_handling.md
@template:	api_event
@defined:	MouseEvents
	
@descr:


The most common use case for such events is getting info about the component item 
that has just been clicked. It can be done with a common api/datastore_getitem.md method that 
requires item ID as parameter. 