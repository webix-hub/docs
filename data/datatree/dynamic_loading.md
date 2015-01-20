Dynamic Loading for Hierarchical Structures
-------------------------------------

{{note
Here dynamic loading for [tree](datatree/index.md), [treetable](desktop/treetable.md) and [TreeCollection](api/refs/treecollection.md) is explored. 
Switch to the main [Dynamic Loading](desktop/dynamic_loading.md) article, if needed.
}}
Data can be loaded to hierarchical components in portions: 

- Firstly, top parent nodes are loaded and they are initially collapsed;
- Then, data is loaded to the nodes at the moment it is expanded. 

~~~js
var tree = webix.ui({
	url:"data/data_dyn.php"
}); 
//or
tree.load("data/data_dyn.php");
~~~

Then data can be loaded in either of three ways: 

##Using webix_kids flag 

Supply each parent data item with the **webix_kids** flag that indicates that this node can take child data and then see how requests are sent
automatically at the moment user expands the node. 

~~~js
var tree = webix.ui({
	url:"data/data_dyn.php",
});
//or
tree.load("data/data_dyn.php");
~~~

Parent data items should look like: 

~~~js
{ id:"1", value:"Branch", webix_kids:true}
~~~

The request URL during dunamic loading will be generated automatically on the base of the URL used by the component initially - **"data/data_json.php?continue=true&parent=1"** where: 

- **parent** - ID of the just opened node;
- **continue** - flag indicating that it is an auto-formed URL.

Make sure that serverside script can handle both situations: initial loading and loading on the  base of a parameter.

You can check how it works with [ready-made ServerSide connectors](#dynamic_connector) (of course, custom script will work all the same here!).

##Using loadBranch function

Catch the **node expand event** ([onBeforeOpen](api/treeapi_onbeforeopen_event.md) or [onAfterOpen](api/treeapi_onafteropen_event.md)) 
to load branch data with the help of a [same-name method](api/treedataloader_loadbranch.md): 

~~~js
var tree = webix.ui({
	url:"data/data_dyn.php",
    on:{
    	onBeforeOpen:function(id){
        	this.loadBranch(id);
        }
    }
});
//or
tree.load("data/data_dyn.php");
~~~

If not specified, the URL of the new request will be based on the one used initially - **"data/data_json.php?continue=true&parent=1"** where: 

- **parent** - ID of the just opened node;
- **continue** - flag indicating that it is an auto-formed URL.

If you need to use another datasource, pass it as the third parameter into the function: 

~~~js
this.loadBranch(id, null, "data/other_dyn.php");
~~~

##Redefining onDataRequestEvent

Catch the **onDataRequest** event to redefine default dynamic loading behaviour and use any resired method to get the data from servserside:

The [event](api/link/ui.tree_ondatarequest_event.md) fires when user expands a node that features **webix_kids** flag among its properties: 

~~~js
{ id:"1", value:"Branch", webix_kids:true}
~~~

As it is stated above, this event triggers dynamic loading. In other words, if a component features a datasource (defined either by 
[url](api/link/ui.tree_url_config.md) property or [load](api/link/ui.tree_load.md) method) a request is issued using this url. 

Still, the **onDataRequest** event makes it possible to redefine the logic in favour of custom one: 

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

Here you completely redefine the defaule event hand

##Dynamic Loading with ServerSide Connectors {#dynamic_connector}

To load data from a database into Tree dynamically, you should call method <b>dynamic_loading()</b> on the server side 
(in case you use [Data Connector](http://docs.dhtmlx.com/connector__index.html).

All remaining stuff is the same as in case of [usual loading from a database](datatree/loading_data.md#loadingfromadatabase).

{{snippet
Dynamic loading from db. Client-side code 
}}
~~~js
webix.ui({
	url:"data/data_dyn.php"
});    
~~~

Note that each data item is supplied with **webix_kids** flag to ensure dynamic loading.*

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
{{sample 17_datatree/16_dyn_loading/01_dyn_loading.html }}

Note, inside **dynamic_loading()** you should specify a number of records that will be loaded at once.