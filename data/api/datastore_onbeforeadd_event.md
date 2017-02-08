onBeforeAdd
=============


@short:
	fires before adding item to datastore

@params:
- id 		string,number		id of the newly added data item
- obj		object				data for new item
- index		number				index, at which new item will be added

@returns:
- data		boolean		false, if the operation needs to be blocked

@example:

$$('some').attachEvent("onBeforeAdd", function(obj, index){
	if (obj.text == "")
		return false;
});

@relatedapi:
	- api/datastore_onafteradd_event.md
	- api/datastore_add.md
	- api/refs/datastore.md
    
@related:
	datatree/nodes_manipulations.md
    desktop/add_delete.md

@template:	api_event
@defined:	DataStore
	
@descr:


