onAfterAdd
=============

@short:
	fires after adding item to datastore

@params:
- id		number,string		clientside ID of the new data item
- index		number				index, at which new item was added

@example:
$$('some').attachEvent("onAfterAdd", function(id, index){
	webix.message("New record was added!");
});

@relatedapi:
	- api/datastore_onbeforeadd_event.md
	- api/datastore_add.md
	- api/refs/datastore.md

@template:	api_event
@defined:	DataStore

@related: 
	datatree/nodes_manipulations.md
    desktop/add_delete.md
	
@descr:

Event doesn't fire for rows which were added during loading(parsing) from external file or object.
