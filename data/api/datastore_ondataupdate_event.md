onDataUpdate
=============


@short: fires when data item is in update process

@params:

- id  id  id of item
- data  object  new data hash

@example: 
	
some.attachEvent("onDataUpdate", function(id, data){
    //... some code here ... 
    //return false to block operation
    return true;
});

@template:	api_event

@relatedapi:
	api/datastore_onstoreupdated_event.md
    api/datastore_updateitem.md
@related: 
	desktop/update.md
    datatree/nodes_manipulations.md#updatingthetree
	
@descr:

