onDataRequest
=============

@short: fires when dynamically-loaded data is requested

@params:
- id	string/number	id of the parent node whose the children should be loaded
* callback	function	callback function, if any
* url	string	server API endpoint, if any

@example:
tree.attachEvent("onDataRequest", function (id, callback, url) {
	// code
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

Dynamic loading for tree-like structures is triggered for nodes with the **webix_kids** flag set. When those nodes are expanded, the api/treedataloader_loadbranch.md method is automatically called. The component will use the data source
specified either by its api/link/ui.tree_url_config.md property or in
the `url` parameter passed to the api/link/ui.tree_load.md method.

When looking at the related samples, note that during the initial loading, data is returned with the **webix_kids** property set:

~~~js
{ id: 1, value: "Branch 1", webix_kids: true }
~~~

This event can be used to change the default data loading logic:

~~~js
tree.attachEvent("onDataRequest", function (id, callback, url) {
  this.parse(
    webix.ajax().get("data/data_dyn_json.php?parent=" + id).then(function (data) {
      return data.json();
    })
  );
  // cancels default behaviour
  return false;
});
~~~
