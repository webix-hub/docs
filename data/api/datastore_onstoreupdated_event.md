onStoreUpdated
=============


@short:
	fires after data is changed in datastore

@params:
- id		id		the id of updated object
- obj		object		updated object
- mode		string		updating mode('inserted','deleted','updated')

@example: 
	
some.attachEvent("onStoreUpdated", function(id, obj, mode){
    //... some code here ... 
});

@template:	api_event
@defined:	DataStore

@relatedapi:
	api/datastore_ondataupdate_event.md
    api/datastore_updateItem.md
@related: 
	desktop/update.md
    datatree/nodes_manipulations.md#updatingthetree
	
@descr:


