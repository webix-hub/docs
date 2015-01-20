Dynamic Loading for Hierarchical Structures
=====================================

{{note
Here dynamic loading for [tree](datatree/index.md), [treetable](desktop/treetable.md) and [TreeCollection](api/refs/treecollection.md) is explored. 
Switch to the main [Dynamic Loading](desktop/dynamic_loading.md) article, if needed.
}}

Data can be loaded to hierarchical components in portions: 

- Firstly, top parent nodes are loaded and they are initially collapsed;
- Then, data is loaded to the node the moment it is expanded. 

~~~js
var tree = webix.ui({
	url:"data/data_dyn.php"
}); 
//or
tree.load("data/data_dyn.php");
~~~

Dynamic loading can be implemented in different way, each of which is described below: 

##Using webix_kids flag 

You can supply each parent data item with the **webix_kids** flag that indicates that this node can take child data and then watch how requests are sent
automatically at the moment user expands the node. 

~~~js
var tree = webix.ui({
	url:"data/data_dyn.php",
});
//or
tree.load("data/data_dyn.php");
~~~

Parent data items should look like this: 

~~~js
{ id:"1", value:"Branch", webix_kids:true}
~~~

The request URL during dunamic loading will be generated automatically on the base of the URL used by the component initially - **"data/data_json.php?continue=true&parent=1"** where: 

- **parent** - ID of the node that has just been opened;
- **continue** - flag indicating that it is an auto-formed URL.

Make sure that serverside script can handle both situations: initial loading and loading on the base of a parameter.

You can check how it works with [ready-made ServerSide connectors](#dynamic_connector) (of course, custom scripts will work all the same here).

##Using loadBranch function

You can catch the **node expand event** ([onBeforeOpen](api/treeapi_onbeforeopen_event.md) or [onAfterOpen](api/treeapi_onafteropen_event.md)) 
to load branch data with the help of a [same-name method](api/treedataloader_loadbranch.md): 

Let's assume that we have initial data loaded in some of the ways:

~~~js
webix.ui({
     view:"tree",
     data:[
     	{id:1, value:"Layout Branch", webix_kids:true},
     	{id:2, value:"Data Branch", webix_kids:true},
     ],
     on:{
     	onBeforeOpen:function(id){
     		//if children has not been loaded yet
     		if(this.getItem(id).$count!==-1)
     			this.loadBranch(id, null, "data/data_dyn_json.php");
     	}
     }
});
~~~

{{sample 17_datatree/16_dyn_loading/02_load_branch.html}}

The URL of the new request will be based on the datasource, either provided by the api/treedataloader_loadbranch.md method or the one used intially -  **"data/data__dyn_json.php?continue=true&parent=1"** - where: 

- **parent** - ID of the node that has just been opened;
- **continue** - flag indicating that it is an auto-formed URL.

If you need to use the same datasource, omit the last parameter of the *loadBranch()* method: 

~~~js
var tree = webix.ui({
	view:"tree",
    url:"data/data_dyn.php"
});
//or tree.load();

tree.loadBranch(id); //"data/data_dyn.php" will be used
~~~

Be sure the branch data you get is returned with **parent** and **data** properties. For JSON the returned data looks like this:

~~~js
{ parent:1, data:[ ..array of child items..]}
~~~

##Redefining onDataRequestEvent

Catch the **api/treedataloader_ondatarequest_event.md** event to redefine default dynamic loading behaviour and use any resired method to get the data from servserside:

The [event](api/link/ui.tree_ondatarequest_event.md) fires when user expands a node that features **webix_kids** flag among its properties: 

~~~js
{ id:"1", value:"Layout Branch", webix_kids:true}
~~~

As it is stated above, this event triggers dynamic loading. In other words, if a component features a datasource (defined either by 
[url](api/link/ui.tree_url_config.md) property or [load](api/link/ui.tree_load.md) method) a request is issued using this url. 

Still, the **onDataRequest** event makes it possible to redefine the logic in favour of custom one.

Let's assume that we have initial data loaded in some of the ways:

~~~js
webix.ui({
     view:"tree",
     data:[
     	{id:1, value:"Layout Branch", webix_kids:true},
     	{id:2, value:"Data Branch", webix_kids:true},
     ],
	on: {
    	onDataRequest: function (id) {
    		webix.message("Getting children of " + id);
    		this.parse(
    			webix.ajax().get("data/data_dyn_json.php?parent="+id).then(function (data) {
    				return data = data.json();
    			})
    		);
            //cancelling default behaviour
    		return false;
    	}
    }
});    
~~~

{{sample 17_datatree/16_dyn_loading/03_on_data_request.html}}

Here you completely redefine the default event handling and cancel default dynamic loading behaviour. 

Be sure the branch data you get is returned with **parent** and **data** properties. For JSON the returned data looks like this:

~~~js
{ parent:1, data:[ ..array of child items..]}
~~~


##Dynamic Loading with ServerSide Connectors {#dynamic_connector}

In case you use [Data Connector](http://docs.dhtmlx.com/connector__index.html) to load data from a database into tree or treetable dynamically, 
you should call **dynamic_loading()** on the server side: 

{{snippet
Dynamic loading from db. Server-side code
}}
~~~php
require_once("../connector-php/codebase/data_connector.php");//includes the connector file
$conn = mysql_connect('localhost', "root","");// creates a connection
mysql_select_db("sampleDB");// selects a database

$data = new TreeDataConnector($conn, "MySQL");//initializes the connector object
$data->dynamic_loading(30);//enables dynamic loading 
//loads data from the specified database table 
$data->render_table("packages_tree","id","value, state","","parent_id");    
~~~


Note, inside **dynamic_loading()** you should specify a number of records that will be loaded at once.

All remaining stuff is the same as in case of [usual loading from a database](datatree/loading_data.md#loadingfromadatabase).

{{snippet
Dynamic loading from db. Client-side code 
}}
~~~js
webix.ui({
	url:"data/data_dyn.php"
});    
~~~

Note that each data item is supplied with **webix_kids** flag to ensure dynamic loading.

{{sample 17_datatree/16_dyn_loading/01_dyn_loading.html }}

###Related Articles

- desktop/plain_dynamic_loading.md