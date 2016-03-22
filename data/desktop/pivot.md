Pivot Table
===========

**Webix Pivot** is fully client-side Javascript datatable with **extended filtering capabilities** to allow for **well-organized visual reports** made over large and complex datasets at a high speed.
With Pivot you can easily compare, filter and sort data within one table as well as change the analysis pattern on the flow. 


## External resources

- You can [download Webix Pivot](http://webix.com/pivot/download.html) from [http://webix.com/pivot/](http://webix.com/pivot/)
- There are online samples at [docs.webix.com/samples](http://docs.webix.com/samples/61_pivot/index.html)


##Structure and Usage

Webix Pivot consists of two functional parts:

- Webix **datatable** with configurable columns, rows and filters;
<img src="pivot/pivot_dtable.png">

Pay attention to the **[click to configure]** area of the datatable upper left corner. It is highlighted each time you mouse over it while clicking this area will make a **configuration window** show up.

- Configuration **window**.  
<img src="pivot/pivot_window.png">

The window reflects current Pivot [structure](#struct) and contains five sections. The elements inside sections are based on the **data item properties** from the dataset and can be dragged to change Pivot structure:

{{snippet
Sample data
}}
~~~js
[
  {"name": "China", "year": 2005, "continent": "Asia", "form": "Republic", 
  "gdp": 2256.919, "oil": 59.615, "balance": 134.098},
  ...
]
~~~

- **Fields** contain all data properties (such as *name*, *year*, *continent*, *form*, etc. from the sample dataset) EXCEPT for those in Rows, Columns or Filters. 
- Fields dragged or initially set to **Columns** area define the **x-scale** of Pivot, namely the upper headers of the datatable;
- Fields dragged or initially set to **Rows** define the y-scale of Pivot, namely the treetable to the left;
- Fields dragged or initially set to **Values** define which data will be loaded as well as set the lowest row of datatable headers;
- Fields dragged or initially set to **Filters** define data properties that will be used as filters for the datatable.

**Balance among Sections**
{{note
You cannot drag one and the same element to different sections; instead, use each element either for setting a **row**, or a **column** or for **filtering** or don't use it at all (it remains in **Fields**). 
However, **Values** section is more independent since elements dragged to it are still available in other sections except **Filters**.
 
}}


###Data Operations

Current data operations come together with values they are assigned to in the **Values** section. Right there they can be changed with a couple of clicks.

<img src="pivot/pivot_data_operations.png">

- **Sum** - sums all values of this property and shows the sum;
- **Max** - picks and shows the max value of this property;
- **Min** - picks and shows the min value of this property;
- **Count** - counts the number of occurrencies of this property and shows it. 

In addition to the above-mentioned prebuilt operation types, you can as well <a href="#operation">create a custom one</a>.

###Filtering Options

<img src="pivot/pivot_filters.png">

Webix Pivot uses two filters:

- **text** - filtering is performed by symbols you type in the text field. It supports base **math comparison operators**, so you can type something like "**<** 100", "**>** 2.5" or "**=** 12".  
If there is no operator, a filter will use text match for filtering;
- **select** - filtering is performed by options that are automatically gathered from the dataset (all unique values of this property). 
For instance, if you choose *Continents*, all unique continent names from the dataset become options.


Initialization
-----------------

Since Pivot tool comes as an add-on to Webix library you need to include both **Webix and Pivot scripts** and **CSS files** on your page to make everything work. 
Make sure you specify relative paths to these files:

~~~html
<html>
 <head>
  <!-- js files -->
  <script src="codebase/webix.js" type="text/javascript"></script>
  <script src="codebase/pivot.js" type="text/javascript"></script>
  <!-- css files -->
  <link rel="stylesheet" href="codebase/webix.css" type="text/css" charset="utf-8">
  <link rel="stylesheet" href="codebase/pivot.css" type="text/css" charset="utf-8">
 </head>
 <body>
   <div id = "testA"></div>  <!-- containter for Pivot -->
 </body>
</html>
~~~

The initialization of Pivot doesn't differ from that of other [Webix components](desktop/components.md) and is done with **webix.ui()** constructor function where you enumerate all the necessary properties:

~~~js
webix.ui({
	view: "pivot",
	container: "testA",
	id: "pivot",
	max: true,
	structure: { 
		rows: ["form", "name"],
		columns: ["year"],
		values: [
        	{ name: "gdp", operation: "sum"},
            { name: "oil", operation: "sum"}
        ],
    	filters: []
  	}
});
~~~

###Properties

- **id** - *string, number* - component ID, should be unique within a page. In Webix, any component is referred to by its ID, **$$("id")**, to perform various operations with it;
- **container** - *string* - ID of an HTML container Pivot will be put to (optional);
- **fieldMap** - *object* - can be used to define custom labels for fields (optional). [Described in detail below](#fieldmaps); 
- **max** - *boolean* - enables or disables GREEN highlighting of a cell(s) with the the biggest value in a row (optional);
- **min** - *boolean* - enables or disables RED highlighting of a cell(s) with the least value in a row (optional);
- **data** or **url** - *string* - defines dataset (data loading is [described in detail below](#load));
- **structure** - *object* - defines initial display and analysis pattern;

#### Structure Object {#struct}

- **rows** - array of fields that will be used as pivot's rows and displayed in the treetable on the left;
- **columns** - array of fields that will be used as pivot's columns and will be displayed above the datatable area;
- **values** - array of fields that will be used as pivot's data (will be displayed in datatable cells);
- **filters** - array of fields that will be used as filters and will be displayed above the datatable columns. 

Loading Data {#load}
-----------------

Pivot supports both inline and external (including serverside) data in any of the [supported data types](desktop/data_types.md):  **XML**, **JSON**, **JSArray** and **CSV**. 

###Inline Data

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


To load inline data after component init on some event, for instance, use the api/link/dataloader_parse.md function:

~~~js
$$("pivot").parse(pivot_dataset);
~~~

###External Data

Either you get data from an external file or by a serverside script, you should use the following pattern.

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

### Data export

You can export result to PDF or Excel:

~~~js
webix.toPDF($$("myPivot"));
webix.toExcel($$("myPivot"));
~~~

Configuring Pivot
----------------

### Getting and Setting Configuration Object

You can get and set the pivot configuration object as follows:

~~~js
//get current configuration
var config = pivot.getStructure();

//set configuration
pivot.setStructure(config);
~~~

Format of a **config** object is the same as "structure" parameter of the constructor:

~~~js
var config = {
	rows: ["form", "name"],
	columns: ["year"],
	values: [
    	{ name: "gdp", operation: "sum"}, 
        { name: "oil", operation: "sum"}
    ],
	filters:[]
}
~~~


###Defining Operations on Data

Operations are set within [Pivot structure object](#struct) in **values** array. **Name** refers to data item property:

~~~js
view: "pivot",
structure: {
	values: [
		{ name: "gdp", operation: "sum" }, //gdp values will be summed
		{ name: "oil", operation: "max" } //max oil value will be shown
	]
}
~~~

There are **4 prebuilt operations** over data: 

- **sum**  -  default, shows the sum of values of this property;
- **max**  - shows the max value of this property found in the dataset;
- **min**  - shows the min value of this property found in the dataset;
- **count** - shows the number of occurencies of this property in the dataset.

If needed, you can **add your own <span id="operation">operation</span>**:

~~~js
pivot.operations.abssum = function(data) {
	// data - array of values which need to be processed
	var sum = 0;
	for (var i = 0; i < data.length; i++) {
		var num = window.parseFloat(data[i], 10);
		if (!window.isNaN(num))
		sum += Math.abs(num);
	}
	return sum;
};
~~~

And use it as: 

~~~js
values:[ name:"oil", operation:"abssum"]
~~~

###Sum counters for columns and rows

To calculate the total sum for each row, **total column** can be set: 

~~~js
view:"pivot"
totalColumn: "sumOnly",
...
~~~

To calculate the total sum per column, **footer** can be defined: 

~~~js
view:"pivot"
footer: "sumOnly",
...
~~~

{{sample 61_pivot/03_table_api/02_total_column.html}}

The "sumOnly" value of both properties forces the summing function to process only rows/columns that contain sums already. 

###Filters

Filters are set within [Pivot structure object](#struct) in **filters** array. **Name** refers to data item property used for filtering:

~~~js
view:"pivot",
structure: {
	filters: [
		{ name: "name", type:"select" },
		{ name: "continent", type: "text" }
	]
}
~~~

There are two types of filters: 

- **select**  - filters by options automatically gathered from a dataset (all unique values of this property). For instance, if you choose *Continents*, then all unique continent names from the dataset become options;
- **text** - filters by symbols in the text field. It supports base **math comparison operators**, so you can type something like "< 100", "> 2.5" or "= 12"  
If there is no operator, filter will use text match for filtering.

###Renaming fields {#fieldmaps}

By default, Pivot uses data item properties for column names. But if you have dataset structured like below, the default pattern becomes unsuitable:

~~~js
[{ a1:100, a2:1.34 }, ...]
~~~

In this case, you can use **fieldMap** property to set beautiful names for columns instead of *a1* and *a2*:

~~~js
webix.ui({
	view: "pivot",
	fieldMap: { "a1" : "GDP", "a2" : "Grow ratio" },
  	//...
});
~~~

###Setting readonly mode

In order to disable changing of the pivot configuration settings, you can specify the *readonly* config property with the "true" value:

~~~js
webix.ui({
	view: "pivot",
    readonly:true,
	//...
});
~~~

{{sample 61_pivot/01_init/10_readonly.html}}


Localization
--------------------

By defaut, all names and titles in Pivot are defined in English, but you can set any other language by specifying a custom locale for the page. 

~~~js
webix.i18n.pivot = {
	columns: "Columns",
	count: "count",
	fields: "Fields",
	filters: "Filters",
	max: "max",
	min: "min",
	operationNotDefined: "Operation is not defined",
	pivotMessage: "[Click to configure]",
	rows: "Rows",
	select: "select",
	sum: "sum",
	text: "text",
	values: "Values",
    windowTitle: "Pivot Configuration",
	windowMessage: "[move fields into required sector]"
};

//and then init Pivot and see you custom names
webix.ui({
	view:"pivot",
	//...
});
~~~

Customizing Pivot
------------------

###Getting Datatable Object

You can access the DataTable object by using the next code:

~~~js
var datatable = $$("pivot").$$("data");
~~~

It allows you to use any of datatable [events](api/refs/ui.datatable_events.md) or [API methods](api/refs/ui.datatable_methods.md). 
At the same time, it's not recommended to redefine datatable properties. 

~~~js
//attach event to selection
datatable.attachEvent("onAfterSelect", function (id) {
	webix.message("selected row: "+id);
});  

//or get the ID of the currently selected item.
var sel = datatable.getSelectedId();
~~~


###Popup customization

**Accessing Popup**

The onPopup event fires after a popup for configuring Pivot is created. The handler function takes one parameter:

- popup - (object) the popup object

~~~js
pivot.attachEvent("onPopup", function(popup){
	// your code
});
~~~

**"Fields" sorting**

The "Fields" list can be sorted by applying ["$sort" scheme](http://docs.webix.com/desktop__data_scheme.html#sortkey). 
The ascending order is default. So, you can define only "text" as a keyword: 

~~~js
webix.ui({
	view: "pivot",
	on:{
		onPopup: function(popup){
			popup.$$("fields").define("scheme",{
				$sort: {
					by: "text"
				}
			});
		}
	}
});
~~~

**Adding scrolls to all lists**

By default, only the "Fields" and "Values" lists are scrollable. Here is how you can add scrolls to all lists:

~~~js
webix.ui({
	view: "pivot",
	on:{
		onPopup: function(popup){
	    	// scroll for "Filters"
			popup.$$("filters").define("scroll",true);
			// scroll for "Columns"
			popup.$$("columns").define("scroll",true);
			// scroll for "Rows"
			popup.$$("rows").define("scroll",true);
		}
	}
});
~~~

###Columns customization

You can customize the columns of Pivot Table with the help of the *onHeaderInit* event. 
The event handler takes an array of objects with columns configuration as a parameter. For example, you can set the *format* property:

~~~js
webix.ui({
	view: "pivot",
	on:{
		onHeaderInit: function(columns){
			for(var i=0; i< columns.length;i++){
				columns[i].format = function(value) {
					return value?value.toFixed(2) : value;
				}
			}
		}
	}
});
~~~








