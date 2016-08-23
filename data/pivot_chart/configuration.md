Configuring Pivot Chart
=========================


##Getting and Setting Configuration Object

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

{{sample 61_pivot/02_chart/04_configuring.html}}

##Getting Chart Object

You can access the Chart object by using the next code:

~~~js
var chart = $$("pivot").$$("chart");
~~~

This allows you to use any of Chart [events](api/refs/ui.chart_events.md) or [API methods](api/refs/ui.chart_methods.md).


Defining chart properties
------------------------------------

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

{{sample 61_pivot/04_chart_api/02_chart_settings.html}}

Note, you can use any property available for the Chart component ([a list of properties](api/refs/ui.chart_props.md)).

Defining Operation on Data
-----------------------------

Operations are set within [Pivot Chart  structure object](pivot_chart/initialization.md#struct) in **values** array. **Name** refers to data item property, **color** - to the color of the related graph:

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
- **count** - shows the number of occurrences of this property in the dataset.

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

{{sample 61_pivot/04_chart_api/01_group_methods.html}}

Filters
----------

Filters are set within [Pivot Chart structure object](pivot_chart/initialization.md#struct) in **filters** array. **Name** refers to data item property used for filtering:

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

Renaming fields 
---------------

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

{{sample 61_pivot/02_chart/06_custom_titles.html}}

Adding chart types 
----------------------------

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
The chart's type is identified by its name ("Area Radar" and "Line" in the code above). 
The names of the default types you can check in the 'Chart type' control of the [Configuration window](pivot_chart/structure.md#configurationwindow). 

Setting readonly mode
-----------------------

In order to disable changing of the Pivot Chart configuration settings, you can specify the *readonly* config property with the "true" value:

~~~js
webix.ui({
	view: "pivot-chart",
    readonly:true,
	//...
});
~~~

{{sample  61_pivot/02_chart/07_readonly.html}}