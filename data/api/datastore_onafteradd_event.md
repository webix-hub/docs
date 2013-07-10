onAfterAdd
=============

@short:
	fires after adding item to datastore

@params:
- obj		object		data for a new item
- index		number		index, at which new item was added

@example:
$$('some').attachEvent("onAfterAdd", function(obj, index){
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

Event doesn't called for rows which are added during loading(parsing) from external file(object)

To get id of newly added record you can use *obj.id*
