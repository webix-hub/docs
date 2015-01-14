@link: api/dataloader_ondatarequest_event.md

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
    desktop/dynamic_loading.md
	datatree/data_formats.md#availabledatakeysattributes

@relatedsample:
	15_datatable/30_treetable/02_dyn_loading.html
    17_datatree/16_dyn_loading/01_dyn_loading.html
    
@relatedapi: 
	api/link/ui.treetable_loadbranch.md

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
   		webix.ajax().get('data/loadchilden.php?id='+id).then(function (data) {
      		data = data.json();
   		return { parent:id, data:data };
 		});
	);
    //cancels default behaviour
    return false;
});
~~~