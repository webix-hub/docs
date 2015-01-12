Loading data
====================

Tree can get data of 2 formats:

1. JSON (default);
2. XML.

*[Details and  examples of data formats](datatree/data_formats.md)*


There are 2 main ways you can specify data source for Tree:

1. To define the data set in the object constructor; 
2. To use api/link/ui.tree_parse.md or api/link/ui.tree_load.md method.

Both ways lead to one and the same result and don't have any specificity.

{{note
If you load XML data you need to set  the api/link/ui.tree_datatype_config.md property in the constructor config or the second parameter of the 
api/link/ui.tree_parse.md / api/link/ui.tree_load.md method to the name of the expected data type, i.e. 'xml'.
}}

{{snippet
	Loading data to the tree
}}
~~~
var treedata= [
	{ id:"1", value:"Book 1", data:[
			{ id:"1.1", value:"Part 1" },
			{ id:"1.2", value:"Part 2" }
	]}
];
tree = new webix.ui({
	view:"tree",
	...
    data: treedata
}); 

//or
tree.parse(treedata);
~~~
{{sample
	17_datatree/01_loading/01_json_data.html
}}



Loading from inline dataset
-----------------------------------------
If you want to specify the data set directly on the page, you can  use:

1. property api/link/ui.tree_data_config.md 
2. method api/link/ui.tree_parse.md 


{{snippet
Specifying data on the page
}}
~~~js
treedata = [
		{ id:"1", value:"Book 1", data:[
				{ id:"1.1", value:"Part 1" },
				{ id:"1.2", value:"Part 2" }
		]},
		{ id:"2", value:"Book 2", data:[
				{ id:"2.1", value:"Part 1" }
		]}
];

tree = new webix.ui({
	view:"tree",
    ...
	data: treedata
});

//or 
tree.parse(treedata)
~~~
{{sample 17_datatree/01_loading/01_json_data.html}}


Loading from a data file
-------------------------------------
To load data from a file, you can use:

1. property api/link/ui.tree_url_config.md 
2. method api/link/ui.tree_load.md

Remember, in case of XML data you should specify the data type in the api.

~~~js
tree = new webix.ui({
	view:"tree",
	...
    url:"data/data.xml".
    datatype:"xml"

}); 
//or
tree.load('data/data.xml', 'xml')
~~~
{{sample 17_datatree/01_loading/01_json_data.html}}

Loading plain (list-like) data 
-------------------------------------------------------------------
There is a possibility to load plain (list-like) data into the tree. The required tree-like format for such a data is achieved by means of grouping. 

Grouping is specified through the **$group** key of the api/link/ui.tree_scheme_config.md parameter.

~~~js
tree = new webix.ui({
	view:"tree",
	scheme:{
		$group:"#make#",
	},
	data: [
		{ id:1, value:"Avalon", make:"Toyota"},
		{ id:2, value:"Corolla", make:"Toyota"},
		{ id:3, value:"Camry", make:"Toyota"},
		{ id:4, value:"Octavia", make:"Skoda"},
		{ id:5, value:"Superb", make:"Skoda"}
	]
});
~~~

{{sample
	17_datatree/01_loading/07_load_group.html
}}

Loading from a database
-------------------------

To load data from database table(s) you should deal with both client- and server-sides. 

**On the client side**

- you must set config property [url](api/link/ui.tree_url_config.md) to (or  call method [load](api/link/ui.tree_load.md) with) a file realizing server-side 'communication'. 

{{snippet
Static loading from db. Client-side code.
}}
~~~js
tree = new webix.ui({
    ...
	url:"data/tree_data.php"
}); 
//or
tree.load("data/tree_data.php");
~~~
<br>
**On the server side**

- you can write full server logic by yourself;
- or use <a href="http://docs.dhtmlx.com/connector__php__index.html">dhtmlxConnector</a>

In case of using dhtmlxConnector, the related server-side script will look like this:

{{snippet
Static loading from db. Server-side code
}}

~~~php
<?php
	require_once("../connector-php/codebase/data_connector.php");//includes the connector file
	$conn = mysql_connect('localhost', "root","");//creates a connection
	mysql_select_db("sampleDB");// selects a database

	$data = new TreeDataConnector($conn, "MySQL");//initializes the connector object
	$data->render_table("packages_tree","id","value, state","","parent_id");
    //loads data from the specified database table  
?>
~~~

{{sample 17_datatree/16_dyn_loading/01_dyn_loading.html }}


Loading big datasets (dynamic)
-----------------------------------------
Generally, the data source in case of dynamic loading is database. 

And to load data from a database into Tree dynamically, you should just call method <b>dynamic_loading()</b> on the server side (in case you use <a href="http://docs.Webix.com/doku.php?id=Webixconnector:toc">WebixConnector</a>). 
All remaining stuff is the same as in case of [usual loading from a database](datatree/loading_data.md#loadingfromadatabase).

{{snippet
Dynamic loading from db. Client-side code 
}}
~~~js
tree = new webix.ui({
    ...
	url:"data/data_dyn.php"
});    
~~~

{{snippet
Dynamic loading from db. Server-side code
}}

~~~php
<?php
	require_once("../connector-php/codebase/data_connector.php");//includes the connector file
	$conn = mysql_connect('localhost', "root","");// creates a connection
	mysql_select_db("sampleDB");// selects a database

	$data = new TreeDataConnector($conn, "MySQL");//initializes the connector object
    $data->dynamic_loading(30);//enables dynamic loading 
	$data->render_table("packages_tree","id","value, state","","parent_id");
    //loads data from the specified database table 
?>      
~~~
{{sample 17_datatree/16_dyn_loading/01_dyn_loading.html }}

*Note, inside **dynamic_loading()** you should specify a number of records that will be loaded at once.*


@index:

- datatree/data_formats.md