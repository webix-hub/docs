Loading Data
===============

Webix Organogram can get data in the following predefined [data formats](desktop/data_types.md):

1. JSON (default);
2. XML.

*[Details and  examples of data formats](datatree/data_formats.md) in tree-like structures*

There are two main ways you can specify the data source for Organogram:

1. Define the data set in the object initialization;
2. Use api/link/ui.organogram_parse.md or api/link/ui.organogram_load.md methods.

Both methods lead to the same result.

{{note
If you load XML data you need to set the api/link/ui.organogram_datatype_config.md property in the constructor config or the second parameter of the
api/link/ui.organogram_parse.md / api/link/ui.organogram_load.md method to the name of the expected data type, i.e. 'xml'.
}}

Loading from inline dataset
-----------------------------------------
If you want to specify the data set directly on the page, you can use:

1. property api/link/ui.organogram_data_config.md 
2. method api/link/ui.organogram_parse.md


{{snippet
Specifying data inline
}}
~~~js
chart_data = [
	{id:"root", value:"Board of Directors",  data:[
		{ id:"1", value:"Managing Director", data:[
			{id:"1.1", value:"Base Manager", data:[
				{ id:"1.1.1", value:"Store Manager" },
				{ id:"1.1.2", value:"Office Assistant", data:[
					{ id:"1.1.2.1", value:"Dispatcher", data:[
						{ id:"1.1.2.1.1", value:"Drivers" }
					] }

				] },
				{ id:"1.1.3", value:"Security" }
			]},
			{ id:"1.2", value:"Business Development Manager", data:[
				{ id:"1.2.1", value:"Marketing Executive" }
			]},
			{ id:"1.3", value:"Finance Manager", data:[
				{ id:"1.3.1", value:"Accountant", data:[
					{ id:"1.3.1.1", value:"Accounts Officer" }
				] }
			] },
			{ id:"1.4", value:"Project Manager", data:[
				{ id:"1.4.1", value:"Supervisors",data:[
					{ id:"1.4.1.1", value:"Foremen"}
				]}
			] }
		]}
	]}
];

var orgChart = new webix.ui({
  view:"organogram",
  ...
  data: chart_data
});

//or 
orgChart.parse(chart_data)
~~~
{{sample 34_organogram/01_basic.html}}


Loading from a data file
------------------------
To load data from a file on the server, you can use:

1. property api/link/ui.organogram_url_config.md
2. method api/link/ui.organogram_load.md

Remember, in case of XML data you should specify the data type explicitly as 'xml':

~~~js
orgChart = new webix.ui({
  view: "organogram",
  ...
  url: "data/data.xml",
  datatype: "xml"
});
//or
orgChart.load('data/data.xml', 'xml');
~~~


Loading from a database
-----------------------

To load data from a database on the server you should deal with both client and server sides.

**On the client side**

You should either define a [url](api/link/ui.organogram_url_config.md) property or call the [load](api/link/ui.organogram_load.md) method that would
point to a server REST API endpoint.

{{snippet
Static loading from a server database. Client-side code.
}}
~~~js
orgChart = new webix.ui({
  ...
  url: "data/chart_data.php"
}); 
//or
orgChart.load("data/chart_data.php");
~~~

**On the server side**

- you can write the server logic by yourself;
- or you can use <a href="http://docs.dhtmlx.com/connector__php__index.html">dhtmlxConnector</a>

If dhtmlxConnector is used, the related server-side script will look like this:

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
