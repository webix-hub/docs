Loading Data 
=================

Pivot supports both inline and external (including server-side) data in any of the desktop/data_types.md:  **XML**, **JSON**, **JsArray** and **CSV**. 

Inline Data
------------

{{snippet
Inline Data (JSON)
}}
~~~js
var pivot_dataset = [
	{"name": "China", "year": 2005, "form": "Republic", "gdp": 181.357, "oil": 1.545 },
	{"name": "China", "year": 2006, "form": "Republic", "gdp": 212.507, "oil": 1.732 },
	//...
]
~~~

To load inline data during component init, make use of api/link/dataloader_data_config.md property:

~~~js
webix.ui({
	view: "pivot",
	id: "pivot",
	data: pivot_dataset
});
~~~


To load inline data after component initialization on some event, for instance, use the api/link/dataloader_parse.md function:

~~~js
$$("pivot").parse(pivot_dataset);
~~~

{{sample 61_pivot/01_init/01_inline_data.html}}

Data Export
------------

You can export result to PDF, Excel and PNG by using the related methods - api/_topng.md, api/_toexcel.md and api/_topdf.md:

~~~js
webix.toPDF($$("myPivot"));
webix.toExcel($$("myPivot"));
webix.toPNG($$("myPivot"));
~~~

###Customizing data export to Excel

In addition to standard export options, the Pivot API allows customizing the output data and
**render separate columns for data on different hierarchy levels**, thus rendering data in a table: 

~~~js
webix.toExcel($$("myPivot"),{
	flatTree:{
		id:"value",
		columns:[
			{ header:"Form" },
			{ header:"Country" },
		]
	}
});       
~~~

The **flatTree** property object includes the following options: 

- **id** (*string*) -  data property which will be rendered in columns
- **columns** (*array*) - array with columns to which the above data property will be distributed according to the hierarchy level
- **fill** (*boolean*) - optional. If true, allows filling child records with parent data for each child node

{{sample 61_pivot/03_table_api/05_export.html}}


Data Loading
--------------

Either you get data from an external file or by a server side script, you should use the following pattern.

If you load the data during component init, specify the path to this file/script as value of api/link/dataloader_url_config.md

~~~js
{
	view: "pivot",
	url: "../load.php" // or "../data.json"
}
~~~


If you load data after the component has been initialized (e.g. on some event), use the api/link/dataloader_load.md function:

~~~js
$$("pivot").load("../load.php");
//or
$$("pivot").load("../data.json");
~~~

In essence, Pivot complies to standard Webix [Data Loading rules](desktop/data_loading.md).

{{sample 61_pivot/01_init/02_loading_data.html}}


External Data Processing
-------------------
 
It is possible to configure Pivot Table in such a way that its data are processed by a custom server-side script.
In this case Pivot loads data that were grouped on the server and provides the ability to customize Pivot configuration.

To define such a processing, you need to enable the **externalProcessing** property in the Pivot configuration. 

~~~js
webix.ui({
    view: "pivot",
    externalProcessing: true,
    ...
});
~~~

The loaded data source should be a JSON that contains the following properties:


- **data** - an object that includes "columns" and "data" configuration. 
	- *columns* - property is an array of columns properties. It should correspond to the columns definition of desktop/treetable.md
	- *data* - a JSON data source for TreeTable
- **structure** - an object with the initial [Pivot structure](pivot/structure.md)
- **fields** - an array of all pivot fields. It is necessary for the configuration popup to show all the fields there
- **options** - (optional) JSON object with options for select filters.


There are some rules for the Pivot columns headers:

- bottom headers (the headers that display formatted value names: e.g "oil (min)") should contain two properties:
	- **operation** - the name of operation ("min", "sum",...)
	- **name** - the name of the calculated field
- other headers (that display categories) should contain the "name" property with the text to display 
      

Here is an example of a data source for a Pivot with select filter for the "continent" field:

~~~js
{
	"fields" :  ["balance", "continent", "form", ...],
    "options" : {
   	 	"continent" : [ "Africa", "Asia", ... ]
    },
    "structure": {
    	"filters" : [{ name: "continent", type: "multicombo"}],
   	 	"rows" : ["year"],
   	 	"columns" : ["continent"],
   	 	"values" : [{ "name":"oil", "operation":["min","sum"]}]
    },
    "data" : {
   		"columns" : [
   		 	{
   			 	"id" : "column0",
   			 	"template" : "{common.treetable()} #column0#",
   			 	"header" : {}
   		 	},
   		 	{
   			 	"id" : "column1",
   			 	"header" : [
   				 	{ "name" : "Africa", "colspan": 2},
   				 	{ "operation": "min", "name": "oil"}
   			 	]
   		 	},
   		 	...
   	 	],
   	 	"data": [
   		 	{
   			 	"column0": "2014",
   			 	"column1" : 0.778,
   			 	...
   		 	},
   	 		...
   	 	]
    }
}
~~~

