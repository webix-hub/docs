Pivot Chart
=======================================================
Webix Pivot Chart is fully client-side Javascript tool for graphical representation of data.  A plenty of configuration options allows users to use the tool for understanding, analyzing and researching 
 large quantities of data and the relationships between them.



##Design and Usage

Webix Pivot Chart consists of two functional parts:

<ol>
<li> Webix <b>chart</b> reflecting specified data properties and conditions:<br><br>

	<img src="pivot/pivot_chart_01.png"/>
</li>
<li><a href="#config_window">Configuration window</a> (appeared when the user clicks the 'Settings' button):<br><br>

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
  ...
]
~~~

- **'Fields'** block presents all data properties of the dataset (such as name, year etc.) EXCEPT for those that are selected in the **Filters** and  **Group By** blocks.
- Fields dragged or initially set in the **Values** block define which data will be loaded to the chart. Each data property in the **Values** block presents an individual graph (<a href="#data_operations">see details</a>).
- A field dragged or initially set in the **Group By** block defines a data property that **Values**'s properties will be grouped by. For example, if the user sets the "balance"  property as **Values**'s value (the 'sum' operation)  and the "year" property as **Group by**'s
value then the chart will display the total balance of all contries for each year. Note, only one data property can be specified in the **Group By** block. 
- Fields dragged or initially set in the **Filters** block define data properties that will be used as filters for the chart. For each data property in the **Filters** block, Pivot Chart creates an individual input in the header of the 
chart (nearby the 'Settings' button) (<a href="#filtering_options">see details</a>).

**Balance amoung Sections**
{{note
You cannot drag one and the same element to different sections; instead, use each element either for **grouping** or for **filtering** or don't use it at all (it remains in **Fields**). 
However, **Values** section is more indendent since elements dragged to it are still available in other sections except **Filters**.
 
}}

<h3 id="data_operations">Data Operations</h3>


Current data operations come together with values they are assigned to in the **Values** section. Right there they can be changed with a couple of clicks.

<img src="pivot/pivot_data_operations.png">

- **Sum** - sums all values of this property and shows the sum;
- **Max** - picks and shows the max value of this property;
- **Min** - picks and shows the min value of this property;
- **Count** - counts the number of occurrencies of this property and shows it. 

In addition to the above-mentioned prebuilt operation types, you can as well create a custom one.


<h3 id="filtering_options">Filtering Options</h3>

<img src="pivot/pivot_chart_filtering.png">

Webix Pivot Chart uses two filters:

- **text** - filtering is performed by symbols you type in the text field. It supports base **math comparison operators**, so you can type something like "**<** 100", "**>** 2.5" or "**=** 12".  
If there is no operator, a filter will use text match for filtering;
- **select** - filtering is performed by options that are automatically gathered from the dataset (all unique values of this property). For instance, if you choose *Continents*, then all unique continent names from the dataset 
become options.

###Logarithmic scale
When difference between compared values is significant, smaller values can be hardly recognizable on the chart. To prevent it and make all values available for analysis, you can use logarithmic scale instead of default linear one. 
<br>To enable the logarithmic scale, check a checkbox in the configuration window.


<img src="pivot/pivot_chart_logarithmicScale.png">


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
- **container** - *string* - ID of an HTML container Pivot will be put to (optional);
- **fieldMap** - *object* - can be used to define custom labels for fields (optional). [Described in detail below](#fieldmaps); 
- **data** or **url** - *string* - defines dataset (data loading is [described in detail below](#load));
- **structure** - *object* - defines initial display and analysis pattern;
- **chart** - *object* -  defines the chart configuration options that you want to redefine, i.e. object with a set of redefined properties;
- **filterWidth** - *number* - sets the width of filters (both input and label) in the header of the chart;
- **filterLabelWidth** - *number* - sets the width of the filters' labels;
- **filterLabelAlign** - *string* - sets the horizontal alignment of the filters' labels;
- **editButtonWidth** - *number* - sets the width of the "Settings" button;
- **chartType** - *string* - sets the default value of the 'Chart type' control;
- **singleLegendItem** - *boolean* - specifies whether the legend should be displayed if it contains only 1 item; 
- **palette** - *array* - specifies the pop-up pallete of the **Values**' values<br> <code>palette:[ ["#e33fc7","#a244ea",...],["#d3ee36","#eed236",.. ],.. ]</code>  - each inner array specifies a row in the pallete

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
 ...
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

- If you load the data during component init, specify the path to this file/script as value of api/link/dataloader_url_config.md

~~~js
view:"pivot-chart",
url:"../load.php" // or "../data.json"
~~~


- If you load data after the component has been inited (e.g. on some event), use the api/link/dataloader_load.md function:

~~~js
$$("pivot").load("../load.php");
//or
$$("pivot").load("../data.json");
~~~

In essence, Pivot complies to standard Webix [Data Loading rules](desktop/data_loading.md).
