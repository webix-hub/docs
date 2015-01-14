onAfterSelect
=============


@short:
	fires after item was selected

@params:
- id		id		the id of an item

@example: 
	
some.attachEvent("onAfterSelect", function(id){
    //... some code here ... 
});

@template:	api_event
@defined:	SelectionModel
@relatedapi:
	api/selectionmodel_onbeforeselect_event.md
@related: 
	desktop/selection.md
	
@descr:

In case of the multiselect mode enabled, the event will fire: 

- Ctrl+click: each time an item is selected while passing the ID of a recently selected item;
- Shift+click: will not fire. 

It is safer to use the api/selectionmodel_onselectchange_event.md event that catches all changes of selection state in the component
combined with the api/selectionmodel_getselectedid.md method.


