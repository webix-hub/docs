Loading Data into Tree
============

Webix Tree can get data in the following predefined [data formats](desktop/data_types.md):

1. JSON (default);
2. XML.

*[Details and  examples of data formats](datatree/data_formats.md) in tree-like structures*

There are two main ways you can specify the data source for Tree:

1. Define the data set in the object initialization;
2. Use one of the api/link/ui.tree_parse.md or api/link/ui.tree_load.md methods.

Both methods lead to the same result.

{{note
If you load XML data you need to set the api/link/ui.tree_datatype_config.md property in the constructor config or the second parameter of the
api/link/ui.tree_parse.md / api/link/ui.tree_load.md method to the name of the expected data type, i.e. 'xml'.
}}

Loading from inline dataset
-----------------------------------------
If you want to specify the data set directly on the page, you can use:

1. property api/link/ui.tree_data_config.md 
2. method api/link/ui.tree_parse.md 


{{snippet
Specifying data inline
}}
~~~js
treedata = [
  { id: "1", value: "Book 1", data: [
    { id: "1.1", value: "Part 1" },
    { id: "1.2", value: "Part 2" }
  ]},
  { id: "2", value: "Book 2", data: [
    { id: "2.1", value: "Part 1" }
  ]}
];

tree = new webix.ui({
  view: "tree",
  ...
  data: treedata
});

//or 
tree.parse(treedata)
~~~
{{editor http://webix.com/snippet/8866280c  Tree: JSON Dataset}}


Loading from a data file
------------------------
To load data from a file on the server, you can use:

1. property api/link/ui.tree_url_config.md 
2. method api/link/ui.tree_load.md

Remember, in case of XML data you should specify the data type explicitly as 'xml':

~~~js
tree = new webix.ui({
  view: "tree",
  ...
  url: "data/data.xml",
  datatype: "xml"
});
//or
tree.load('data/data.xml', 'xml');
~~~
{{editor http://webix.com/snippet/8866280c  Tree: JSON Dataset}}

Loading linear (list-like) data
-------------------------------
It's possible to load plain (list-like) data into the tree. The tree structure is achieved by means of grouping. Grouping is specified through the **$group** key of the api/link/ui.tree_scheme_config.md parameter.

~~~js
tree = new webix.ui({
  view: "tree",
  scheme: {
    $group: "#make#",
  },
  data: [
    { id: 1, value: "Avalon", make: "Toyota" },
    { id: 2, value: "Corolla", make: "Toyota" },
    { id: 3, value: "Camry", make: "Toyota" },
    { id: 4, value: "Octavia", make: "Skoda" },
    { id: 5, value: "Superb", make: "Skoda" }
  ]
});
~~~

{{editor http://webix.com/snippet/cde04dce  Tree: Plain JSON Data with Client-side Grouping}}

Loading from a database
-----------------------

To load data from a database on the server you should deal with both client and server sides.

**On the client side**

You should either define a [url](api/link/ui.tree_url_config.md) property or call the [load](api/link/ui.tree_load.md) method that would
point to a server REST API endpoint.

{{snippet
Static loading from a server database. Client-side code.
}}
~~~js
tree = new webix.ui({
  ...
  url: "data/tree_data.php"
}); 
//or
tree.load("data/tree_data.php");
~~~

**On the server side**

- you can write the server logic by yourself;
- or you can use <a href="http://docs.dhtmlx.com/connector__php__index.html">dhtmlxConnector</a>

If using dhtmlxConnector, the related server-side script will look like this:

{{snippet
Static loading from a MySQL database on the server. Server-side code.
}}
~~~php
require_once("../connector-php/codebase/data_connector.php");  // includes the connector file
$conn = mysql_connect('localhost', "root","");  // creates a connection
mysql_select_db("sampleDB");  // selects a database

$data = new TreeDataConnector($conn, "MySQL");  //initializes the connector object
// loads data from the specified database table
$data->render_table("packages_tree","id","value, state","","parent_id");
~~~

{{editor http://webix.com/snippet/3eab7daf  Dynamic Loading}}

@index:

- datatree/data_formats.md