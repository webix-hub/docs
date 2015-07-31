Pivot Chart
=======================================================
Webix Pivot Chart is fully client-side Javascript tool for graphical representation of data.  A plenty of configuration options allows users to use the tool for understanding, analyzing and researching 
 large quantities of data and the relationships between them.

## External resources

- You can [download Webix Pivot Chart](http://webix.com/pivot/download.html) from [http://webix.com/pivot/chart.html](http://webix.com/pivot/chart.html)
- There are online samples at [docs.webix.com/samples](http://docs.webix.com/samples/61_pivot/index.html)



##Design and Usage

Webix Pivot Chart consists of two functional parts:

<ol>
<li> Webix <b>chart</b> reflecting specified data properties and conditions:<br><br>

	<img src="pivot/pivot_chart_01.png"/>
</li>
<li><a href="#config_window">Configuration window</a> (appeares when the user clicks the 'Settings' icon):<br><br>

	<img src="pivot/pivot_chart_settings.png"/>
    </li>
</ol>


<h3 id="config_window">Configuration Window</h3>

The window reflects the current Pivot Chart structure and contains four sections. The elements inside sections are based on the data item's properties from the dataset and can be dragged to change Pivot Chart structure:

{{snippet
Sample data
}}
~~~js
[
	{"name": "China", "year": 2005, "continent": "Asia", "form": "Republic", 
	"gdp": 2256.919, "oil": 59.615, "balance": 134.098},
	//...
]
~~~

- **'Fields'** block presents all data properties of the dataset (such as name, year etc.) EXCEPT for those that are selected in the **Filters** and  **Group By** blocks.
- Fields dragged or initially set in the **Values** block define which data will be loaded to the chart. Each data property in the **Values** block presents an individual graph (<a href="#data_operations">see details</a>).
- A field dragged or initially set in the **Group By** block defines a data property that **Values**'s properties will be grouped by. For example, if the user sets the "balance"  property as **Values**'s value (the 'sum' operation)  and the "year" property as **Group by**'s
value then the chart will display the total balance of all countries for each year. Note, only one data property can be specified in the **Group By** block. 
- Fields dragged or initially set in the **Filters** block define data properties that will be used as filters for the chart. For each data property in the **Filters** block, Pivot Chart creates an individual input in the header of the chart (nearby the 'Settings' button) (<a href="#filtering_options">see details</a>).

**Balance among Sections**
{{note
You cannot drag one and the same element to different sections; instead, use each element either for **grouping** or for **filtering** or don't use it at all (it remains in **Fields**). 
However, **Values** section is more independent since elements dragged to it are still available in other sections except **Filters**.
 
}}

<h3 id="data_operations">Data Operations</h3>


Current data operations come together with values they are assigned to in the **Values** section. Right there they can be changed with a couple of clicks.

<img src="pivot/pivot_chart_values.png">

- **Sum** - sums all values of this property and shows the sum;
- **Max** - picks and shows the max value of this property;
- **Min** - picks and shows the min value of this property;
- **Count** - counts the number of occurrencies of this property and shows it. 

In addition to the above-mentioned prebuilt operation types, you can as well <a href="#operation">create a custom one</a>.


<h3 id="filtering_options">Filtering Options</h3>

<img src="pivot/pivot_chart_filter.png">

Webix Pivot Chart uses two filters:

- **text** - filtering is performed by symbols you type in the text field. It supports base **math comparison operators**, so you can type something like "**<** 100", "**>** 2.5" or "**=** 12".  
If there is no operator, a filter will use text match for filtering;
- **select** - filtering is performed by options that are automatically gathered from the dataset (all unique values of this property). For instance, if you choose *Continents*, then all unique continent names from the dataset 
become options.

###Logarithmic scale
When difference between compared values is significant, smaller values can be hardly recognizable on the chart. 
To prevent it and make all values available for analysis, you can use the logarithmic scale instead of the default linear one.
<br>To enable the logarithmic scale, check the "Logarithmic scale" checkbox in the configuration window.


<img src="pivot/pivot_chart_logarithmic.png">


Initialization
-----------------

Since Pivot Chart tool comes as an add-on to Webix library you need to include both **Webix and Pivot Chart scripts** and **CSS files** on your page to make everything work. 
Make sure you specify relative paths to these files: 

~~~html
<html>
 <head>
  <!-- js files -->
  <script src="codebase/webix.js" type="text/javascript"></script>
  <script src="codebase/pivotchart.js" type="text/javascript"></script>
  <!-- css files -->
  <link rel="stylesheet" href="codebase/webix.css" type="text/css" charset="utf-8">
  <link rel="stylesheet" href="codebase/pivotchart.css" type="text/css" charset="utf-8">
 </head>
 <body>
   <div id = "testA"></div>  <!-- containter for Pivot Chart-->
 </body>
</html>
~~~

The initialization of Pivot Chart doesn't differ from that of other [Webix components](desktop/components.md) and is done with **webix.ui()** constructor function where you enumerate all the necessary properties:

~~~js
webix.ui({
	container:"testA",
	id:"pivot",
	view:"pivot-chart",
	structure:{
		groupBy: "continent",
		values: [
        	{name:"balance", operation:"max", color: "#eed236"},
            {name:"oil", operation:"max", color: "#36abee"}
        ],
		filters:[{name:"year", type:"select"}]
	},
	url: "../common/data.json"
});
~~~


###Properties

- **id** - *string, number* - component ID, should be unique within a page. In Webix, any component is referred to by its ID, **$$("id")**, to perform various operations with it;
- **container** - *string* - ID of an HTML container Pivot Chart will be put to (optional);
- **fieldMap** - *object* - can be used to define custom labels for fields (optional) ([details](#fieldmaps)); 
- **data** or **url** - *string* - defines dataset ([details](#load));
- **structure** - *object* - defines initial display and analysis pattern ([details](#struct)); 
- **chart** - *object* -  defines the chart configuration options that you want to redefine, i.e. object with a set of redefined properties ([details](#chart_redefine));
- **chartType** - *string* - sets the default chart type;
- **chartMap** - *object* - can be used to redefine default types of a chart ('bar', 'line', 'radar') or add a new one ('stacked bar' or 'area') ([details](#custom_type));
- **filterWidth** - *number* - sets the width of filters (both input and label) in the header of the chart;
- **filterLabelWidth** - *number* - sets the width of the filters' labels;
- **filterLabelAlign** - *string* - sets the horizontal alignment of the filters' labels;
- **editButtonWidth** - *number* - sets the width of the "Settings" button;
- **singleLegendItem** - *boolean* - specifies whether the legend should be displayed if it contains only 1 item; 
- **palette** - *array* - specifies the pop-up color pallete of the **Values**' values<br> <code>palette:[ ["#e33fc7","#a244ea",...],["#d3ee36","#eed236",.. ],.. ]</code>  - each inner array specifies a row in the pallete

#### Structure Object {#struct}

- **values** - array of fields that will be used as pivot's data (will be displayed in datatable cells);
- **filters** - array of fields that will be used as filters and will be displayed above the datatable columns;
- **groupBy** - the name of the field that will be used to group values by.

    
Loading Data {#load}
-----------------

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


- If you load data after the component has been inited (e.g. on some event), use the api/link/dataloader_load.md function:

~~~js
$$("pivot").load("../load.php");
//or
$$("pivot").load("../data.json");
~~~

In essence, Pivot Chart complies to standard Webix [Data Loading rules](desktop/data_loading.md).


Configuring Pivot Chart
----------------
###Defining chart properties {#chart_redefine}
To redefine the default properties of the chart, such as a legend or width of bars, you can use the **chart** object. 
Any property that you specify in the **chart** object will redefine the analogous one in the default configuration object:

~~~js
view:"pivot-chart",
chart: {
	scale: "logarithmic",
	barWidth: 25,
	legend: {
		layout: "x",
		align: "center",
		valign: "bottom"
	}
}
~~~

Note, you can use any property available for the Chart component ([a list of properties](api/refs/ui.chart_props.md)).

###Defining Operation on Data

Operations are set within [Pivot Chart  structure object](#struct) in **values** array. **Name** refers to data item property, **color** - to the color of the related graph:

~~~js
view:"pivot-chart",
id:"pivot",
structure:{
	values:[
		{name:"gdp",operation:"sum",color:"#eed236"},//gdp values will be summed
		{name:"oil",operation:"max",color:"#36abee"}//max oil value will be shown
    ]
}
~~~

There are **4 prebuilt operations** over data: 

- **sum**  -  default, shows the sum of values of this property;
- **max**  - shows the max value of this property found in the dataset;
- **min**  - shows the min value of this property found in the dataset;
- **count** - shows the number of occurencies of this property in the dataset.

If needed, you can <span id="operation">add your own operation</span>: 

~~~js
view:"pivot-chart",
groupMethods:{
	abssum: function(template, data){
		data = data || this;
		var summ = 0;
		for (var i = 0; i < data.length; i++)
			summ+= Math.abs(template(data[i])*1);
		return summ;
	}
},
~~~

And use it as: 

~~~js
values:[ name:"oil", operation:"abssum"]
~~~



###Filters

Filters are set within [Pivot Chart structure object](#struct) in **filters** array. **Name** refers to data item property used for filtering:

~~~js
view:"pivot-chart",
structure:{
	values:[
		{name:"name",type:"select"},
        {name:"continent", type:"text"}
    ]
}
~~~

There are two types of filters: 

- **select**  - filters by options automatically gathered from a dataset (all unique values of this property). For instance, if you choose *Continents*, then all unique continent names from the dataset become options;
- **text** - filters by symbols in the text field. It supports base **math comparison operators**, so you can type something like "< 100", "> 2.5" or "= 12"  
If there is no operator, filter will use text match for filtering.

###Renaming fields {#fieldmaps}

By default Pivot Chart uses data item properties for column names. But if you have dataset structured like below, the default pattern becomes unsuitable:

~~~js
[{ a1:100, a2:1.34 }, ...]
~~~

In this case, you can use the **fieldMap** property to set beautiful names for columns instead of *a1* and *a2*:

~~~js
webix.ui({
	view:"pivot",
	fieldMap:{ "a1" : "GDP", "a2" : "Grow ratio" },
	//...
});
~~~

###Adding chart types {#custom_type}
By default, Pivot Chart gives users a possibility to present data in 3 types of a chart: 'bar', 'line', 'radar'. If you need you can redefine the default types or add a new one. 

{{note
Note, just types 'stacked bar' and 'area'
can be additionally added to the Pivot Chart.
}}

To add a new chart's type to Pivot Chart, use the  **chartMap** property:

{{snippet
Adding a new chart's type
}}
~~~js
view:"pivot-chart",
chartMap: {
	"Area Radar": function(color){ //adds a new chart type 'Area Radar'
		return {
			type: "radar",
			alpha: 0.4,
			disableItems: true,
			fill: color,
			line:{
				color: color,
				width:1
			}
		}
	},
    "Line": function(color){ //redefines the default 'Line' type
    	type:"line",
        offset:false,
        preset:"plot"
    }
}
~~~
The chart's type is identified by its name ("Area Radar" and "Line" in the code above). The names of the default types you can check in the 'Chart type' control of the <a href="#config_window">Configuration window</a>. 

###Setting readonly mode

In order to disable changing of the Pivot Chart configuration settings, you can specify the *readonly* config property with the "true" value:

~~~js
webix.ui({
	view: "pivot-chart",
    readonly:true,
	//...
});
~~~

{{sample  61_pivot/02_chart/07_readonly.html}}

Localization
--------------------

By defaut all names and titles in Pivot Chart have English names, but you can change it by setting a custom locale for the page. 

~~~js
webix.i18n.pivot = {
	apply: "Anwenden",
	bar: "Balken",
	cancel: "Abbrechen",
	groupBy: "Gruppieren nach",
	chartType: "Diagramm Typ",
	count: "zahl",
	fields: "Felder",
	filters: "Filtern",
	logScale: "Logarithmischen Skala",
	line: "Linien",
	max: "max",
	min: "min",
	operationNotDefined: "Operation ist nicht definiert",
	radar: "Netzdiagramm",
	select: "auswahl",
	settings: "Einstellungen",
	sum: "summe",
	text: "text",
	values: "Werte",
	valuesNotDefined: "Werte oder Gruppenfeld ist nicht definiert",
	windowMessage: "[ziehen Felder auf gewunschten Sektor]"
};


//and then init Pivot Chart and see you custom names
webix.ui({
	view:"pivot",
    //...
});
~~~


API
----------

### Getting and Setting Configuration Object

~~~js
//get current configuration
var config = $$("pivot").getStructure();

//set configuration
$$("pivot").setStructure(config);
~~~

Format of a **config** object is the same as "structure" parameter of the constructor:

~~~js
var config = {
	groupBy: "year",
	values: [{name:"balance", operation:"sum", color: "#eed236"}],
	filters:[{name:"name", type:"select"}]
}
~~~



### Data export

You can export result to PDF or Excel:

~~~js
$$("pivot").toPDF();
$$("pivot").toExcel();
~~~

###Getting Chart Object

You can access the Chart object by using the next code:

~~~js
var chart = $$("pivot").$$("chart");
~~~

This allows you use any of Chart [events](api/refs/ui.chart_events.md) or [API methods](api/refs/ui.chart_methods.md).
