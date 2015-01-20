onDataRequest
======================

@short:
	fires the moment request for auto-loaded data fires (during dynamic loading)

@params:
- id	string, number	id of the parent node  the children of which should be loaded
* callback	function	callback function, if any
* url	string	component datasource, if any 

@example:
tree.attachEvent("onDataRequest", function (id, callback, url) {
	//code
});

@related:
	desktop/serverside.md
	datatree/dynamic_loading.md
    

@relatedsample:
    17_datatree/16_dyn_loading/01_dyn_loading.html
    17_datatree/16_dyn_loading/03_on_data_request.html
    
@relatedapi: 
	api/link/ui.treetable_loadbranch.md
    
@template: api_event

@descr:

Note that dynamic loading for tree-like structures is triggered for nodes featuring **webix_kids** flag. If so, the api/link/ui.treetable_loadbranch.md function is automatically called. The  component will use the datasource 
specified either by its api/link/ui.tree_url_config.md property or in
the api/link/ui.tree_load.md method with extra parameters. 

When studying the related samples, pay attention that during initial loading data is returned 
with the **webix_kids** property:

~~~js
{ id:1, value:"Branch 1", webix_kids:true }
~~~

At the same time, a user can use this event to modify the default processing logic: 

~~~js
tree.attachEvent("onDataRequest", function (id, callback, url) {
   	this.parse(
    	webix.ajax().get("data/data_dyn_json.php?parent="+id).then(function (data) {
    		return data = data.json();
    	})
    );
    //cancels default behaviour
    return false;
});
~~~