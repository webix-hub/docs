Loading Data into DataTable
====================

DataTable can load data of various formats, such as:

- JSON;
- XML;
- JsArray;
- CSV.

[Examples of data formats](datatable/supported_data_types.md)

In addition to the mentioned above, you can define any custom format (read how to do this in article helpers/data_drivers.md).

There are two main ways of loading data in DataTable:

1. To define data source in the object constructor; 
2. To use api/link/ui.datatable_parse.md or api/link/ui.datatable_load.md method.

Both ways lead to one and the same result and don't have any specificity.

### Loading data from inline dataset
~~~js
grid = new webix.ui({
	view:"datatable",
    ...
	data:[
		{ id:1,name:"The Shawshank Redemption",year:1994},
		{ id:2,name:"The Godfather",year:1972}
	]
}); 
~~~
{{sample 15_datatable/01_loading/01_inline_data.html }}


### Loading data from a data file
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	url:"data/data.json"
}); 
~~~
{{sample 15_datatable/01_loading/02_url_data.html }}




Loading from XML, CSV, JsArray 
-------------------------------

When loading of non-json data, you need to specify the [datatype](api/link/ui.datatable_datatype_config.md) property in config,
or set the second parameter of  the [parse](api/link/ui.datatable_parse.md)/[load](api/link/ui.datatable_load.md) method to the name of the expected data type.

Also, you need to show in the columns configuration, which data will go to each column.

{{snippet Loading from XML }}
~~~js
grid = new webix.ui({
	view:"datatable",
	columns:[
    	{ map:"#cells[0]#", header:"Will use value from first cell sub-tag" }
        { map:"#details#", header:"Will use value from details attribute or sub-tag" }
    ],
    datatype:"xml"
	url:"data/data.xml"
}); 
~~~
{{sample 15_datatable/01_loading/02_url_data.html }}

{{note If you use xml format with tag names equal to column ids, you may skip mapping, DataTable will be able to auto-map values }}


{{snippet Loading from CSV }}
~~~js
grid = new webix.ui({
	view:"datatable",
	columns:[
    	{ map:"#data1#", header:"First column" }
        { map:"#data2#", header:"Second column" }
    ],
    datatype:"csv"
	url:"data/data.csv"
}); 
~~~
{{sample 15_datatable/01_loading/02_url_data.html }}

For more details, check datatable/data_mapping.md




Converting HTML table to DataTable
----------------------------------

To turn an HTML table into DataTable you should call method api/link/ui.datatable_parse.md with next parameters:

- *data* - the id of the table;
- *datatype* - the format of data. Must be set to value 'htmltable'.

{{snippet
Loading data from an html table
}}
~~~html
<table id="films">
	<tr>
		<td width="40">id</td>
		<td width="200">Film title</td>
		<td width="80">Release year</td>
	</tr>
	...
</table>
<script>			
grid = new webix.ui({
	view:"datatable",
	...
});

grid.parse("films", "htmltable");
</script>
~~~

{{sample 15_datatable/01_loading/04_html.html }}


Loading from database
-------------------------

To load data from database table(s) you should deal with both client- and server-sides. 

On the client side you must define parameter [url](api/link/ui.datatable_url_config.md) (or call method [load()](api/link/ui.datatable_load.md)) and specify a server-side script there. 

On the server side you should write the script realizing server-client 'communication' that returns data in the XML or JSON format:

{{snippet
Static loading from db. Server-side code
}}

~~~php
<?php
   require_once("../../common/config.php");
   $data = new JSONDataConnector($conn, $dbtype);
   $data->dynamic_loading(30);
   $data->render_table("packages_plain","id","package, size, architecture, section");
?>
~~~

<br>

{{snippet
Static loading from db. Client-side code.
}}

~~~js
grid = new webix.ui({
    ...
	url:"data/table_data.php"
}); 
//or
grid.load("data/table_data.php");
~~~
{{sample 15_datatable/01_loading/03_db_data.html }}


Loading big datasets (dynamic) 
--------------------------------
Generally, data source in case of dynamic loading is database. 

On the client side you must define parameter [url](api/link/ui.datatable_url_config.md) (or call method [load()](api/link/ui.datatable_load.md)) with a file realizing server-side 'communication'.
 
On the server side, if you don't write server-side code by yourself and use WebixConnector you should just call the <b>dynamic_loading()</b> method:

{{snippet
Dynamic loading from db. Client-side code 
}}
~~~js
grid = new webix.ui({
    ...
	url:"data/data_dyn.php"
});    
~~~

<br>

{{snippet
Dynamic loading from db. Server-side code
}}

~~~js
require_once("../../common/config.php");//including the connector file
$data = new JSONDataConnector($conn, $dbtype);//initializing the connector object
$data->dynamic_loading(30);//enabling dynamic loading 
$data->render_table("packages_plain","id","package, size, architecture, section");//loading data from the specified database table    
~~~
{{sample 15_datatable/16_dyn_loading/01_db_dyn_data.html }}

Note, inside **dynamic_loading()** you should specify a number of records that will be loaded at once.


###Dynamic related parameters
The library offers you different properties and methods that can help you to set when, how often and which data will be loaded.   
<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 1 </strong>
		Dynamic related parameters
	</caption>
	<thead>
	<tr>
		<th align="left">
			Parameter
		</th>
		<th align="left">
			Description
		</th>
		<th align="left">
			Usage example
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td> <b>datafetch</b> </td>
		<td>Defines  the number of records that should be loaded from server side during each dynamic loading request. 50 by default.</td>
		<td>You want to load the particular number of records (e.g. 80), then you set <b>datafetch:80</b>. <br> {{sample 15_datatable/16_dyn_loading/02_db_dyn_start.html }} </td>
	</tr>
	<tr>
		<td><b>datathrottle</b></td>
		<td>Sets polling interval that can be used to decrease the number of requests to server</td>
		<td>As a rule, data are getting loaded when a user starts to scroll DataTable. If he scrolls DataTable slowly, the app pushes a big amount of requests to the server, a major part of which is unnecessary. To exclude unnecessary requests and reduce server overloading, you can set the <b>datathrottle</b> property, for example to 5, and requests start to be sent to server at 5 seconds intervals. <br> {{sample 15_datatable/16_dyn_loading/03_db_dyn_throttle.html }}</td>
	</tr>
	<tr>
		<td><b>loadahead</b></td>
		<td>Allows you to avoid DataTable from possible 'blank spots' while scrolling</td>
		<td>When you start scrolling, DataTable detects where you scroll (up or down) and loads next records in this direction (the number of records is defined by the parameter). If you set <b>loadahead:50</b>, then on each scrolling movement DataTable will load next 50 records. <br> {{sample 15_datatable/16_dyn_loading/04_db_dyn_loadahead.html }}</td>
	</tr>
	</tbody>
</table>


Loading screen
-------------------
When you deal with large data size, it's useful to display the loading screen showing users that the app is actually doing something.

<img src='datatable/loading_message.png'></img>

To enable the loading screen for DataTable you should call method [showOverlay()](api/ui.datatable_showoverlay.md), to disable it after - [hideOverlay()](api/ui.datatable_hideoverlay.md).

{{snippet
Using the loading screen in DataTable
}}

~~~js
grid = new webix.ui({
	view:"datatable",
	...
	on:{
		onBeforeLoad:function(){
			this.showOverlay("Loading...");
		},
		onAfterLoad:function(){
			this.hideOverlay();
		}
	},
	url:"data/table_data.php"
});   
~~~
{{sample 15_datatable/01_loading/05_load_message.html }}
 
In case you don't call method [hideOverlay()](api/ui.datatable_hideoverlay.md) , instead of the loading screen you will set the overlay text. It can be useful in some situations. For example, when your DataTable doesn't contain any data, you can display the overlay text to inform users about it.

<img src='datatable/overlay_text.png'></img>
{{snippet
Defining the overlay text for DataTable
}}
~~~js
on:{
	onAfterLoad:function(){
		if (!this.count())
		this.showOverlay("Sorry, there is no data");
	}
}
~~~
{{sample 15_datatable/01_loading/06_nodata_message.html }}


Loading configuration 
---------------------

You can load configuration from server side along with data. In such case your data will look as:

~~~js
{
	config:{
		columns:[ ... columns configuration here... ],
        ... any extra options here, same as in constructor...
    },
    data:[ ... array of data objects here, as in above samples... ]
}
~~~


Read more on the topic in article datatable/external_configuration.md.
@keyword:
	loading, dynamic, static, db,data, database
    
@index:
- datatable/supported_data_types.md
- datatable/data_mapping.md

@seolinktop: [web control library](https://webix.com)
@seolink: [datagrid javascript](https://webix.com/widget/datatable/)