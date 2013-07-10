onBeforeDelete
=============


@short:
	fires before item deleting

@params:
- id		id		id of item in question

@returns:
- result  bool  returning false will prevent item deleting

@example: 
	
some.attachEvent("onBeforeDelete", function(id){
    //... some code here ... 
    //return false to block operation
    return true;
});

@template:	api_event
@defined:	DataStore

@related: 
	datatree/nodes_manipulations.md#deletingnodes
    desktop/chart_operations.md#addingitems
    desktop/add_delete.md
    
@relatedapi:
	api/datastore_onafterdelete_event.md
    api/datastore_remove.md
	
@descr:


