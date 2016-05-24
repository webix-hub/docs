Loading Data 
=====================

Pivot Chart supports both inline and external (including server-side) data in any of the [supported data types](desktop/data_types.md):  **XML**, **JSON**, **JSArray** and **CSV**. 

###Inline Data

{{snippet
Inline Data (JSON)
}}
~~~js
var pivot_dataset = [
	{"name": "China", "year": 2005, "form": "Republic", "gdp": 181.357, "oil": 1.545},
	{"name": "China", "year": 2006, "form": "Republic", "gdp": 212.507, "oil": 1.732},
	//...
]
~~~

To load inline data during component init, make use of api/link/dataloader_data_config.md property:

~~~js
webix.ui({
	view:"pivot-chart",
    id:"pivot",
	data:pivot_dataset
});
~~~


To load inline data after component init on some event, for instance, use the api/link/dataloader_parse.md function:

~~~js
$$("pivot").parse(pivot_dataset);
~~~

###External Data

Either you get data from an external file or by a server-side script,use the following pattern:

- If you load the data during component init, specify the path to this file/script as value of api/link/dataloader_url_config.md:

~~~js
{
	view:"pivot-chart",
	url:"../load.php" // or "../data.json"
}
~~~


- If you load data after the component has been initialized (e.g. on some event), use the api/link/dataloader_load.md function:

~~~js
$$("pivot").load("../load.php");
//or
$$("pivot").load("../data.json");
~~~

In essence, Pivot Chart complies to standard Webix [Data Loading rules](desktop/data_loading.md).
