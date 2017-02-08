Setting Legend for a Chart
===============

Chart legend explains data and color correspondence. Generally, to specify the chart legend you should use the api/ui.chart_legend_config.md property:


<img src="desktop/chart_legend.png"/>
{{snippet 
Specifying the legend for a chart
}}
~~~js
webix.ui({
	view:"chart",
	type:"bar",
	...
	legend:{
		values:[
        	{text:"Company A", color:"#58dccd"},
            {text:"Company B", color:"#a7ee70"},
            {text:"Company C", color:"#36abee"}
        ],
		align:"right",
		width:110,
		layout:"y"
    }
})

~~~
{{sample 08_chart/06_bar_chart/06_series.html }}

See the full list of **legend parameters** in [API Reference](api/ui.chart_legend_config.md).


##Default Legend

Built-in means allow defining a default legend. For these needs, you should specify what element from the initial data source will be in the legend area. Default legend is great for [pie](desktop/chart_types.md#pie) and 
[bar](desktop/chart_types.md#bar) charts with multicolored bars and pie pieces. 

Then, the legend takes a color value from the dataset:

{{snippet
JSON Data
}}
~~~js
[
	{ sales:"20", month:"Jan", color: "#ee3639" },
	{ sales:"30", month:"Fen", color: "#ee9e36" }
]
~~~

~~~js
webix.ui({
	view:"chart",
	type:"pie",
	value:"#sales#",
    color:"#color#",
    legend:"#month#", 
	...
});
~~~

{{sample
	08_chart/04_pie_chart/03_legend.html
}}

See the full list of **legend parameters** in [API Reference](api/ui.chart_legend_config.md).

##Custom Legend

- Legend customization includes marker dimensions and arrangement, their alignment towards the chart, colors and border as well as custom text for the markers. 
- Custom legends are vital with [chart series](desktop/chart_series.md) for different graphs need to be explained for users could read the charts. 
- Legend markers defined for chart series are used to **show** and **hide dedicated graphs** (lines, areas, bars..) by clicking on their signs. Invisible charts can be shown back by clicking the gray 'inactive' marker sign. 

{{note
Legend markers become "show-and-hide" buttons for all charts with series **except for stacked charts** (stackedArea, stackedBar, stackedBarH), 
because such charts presuppose series usage and don't imply visual comparison. 
}}


<img src="desktop/chart_legend_custom.png" />

{{snippet
Custom legend
}}
~~~js
webix.ui({
	view:"chart",
	type:"",
    ...
 	legend:{
		layout:"y",
		width: 110,
		align:"right",
		valign:"middle",
		marker:{
			width:15,
        	radius:3
		},
		values:[
			{text:"company A",color:"#3399ff"},
			{text:"company B",color:"#66cc00"}]
    }
});
~~~

{{sample 08_chart/09_radar_chart/03_radar_lines.html }}

See the full list of **legend parameters** in [API Reference](api/ui.chart_legend_config.md).

    
##Customizing Legend Markers 

By default, legend markers are squares with rounded edges that feature 3-px border radius. To change this pattern, use the  **marker** parameter of the  into the api/ui.chart_legend_config.md property.


~~~js
legend:{
	...
    marker:{
    	type:"round",
		width:15,
        radius:3
	},
}
~~~

{{sample 08_chart/09_radar_chart/02_radar_area.html }}

### 'item' marker
Webix charts offer a possibility to set for a marker the same template that uses items of the related graph.

<img src="desktop/custom_marker.png" />

~~~js
legend:{
	values:[{text:"Company A"},{text:"Company B"},{text:"Company C"}],
    ...
    marker:{
    	type: "item",
		width: 18
	}
}
~~~ 

{{sample 08_chart/05_line_chart/07_legend.html }}

###Setting different markers for different graphs

<img src="desktop/chart_different_markers.png" />

To set different markers for graphs you should:

- Specify legend items manually, through the **values** parameter (don't use **template**);
- Use **markerType** property to assign the desired marker type to a graph.
    

	
~~~js
legend:{
	layout:"y",
	align:"right",
	valign:"middle",
	width:100,
	values:[
		{text:"Company A",color:"#00ccff"},                   //the default marker
		{text:"Company B",color:"#e9df40"},                   //the default marker
		{text:"Average",color:"#b25151",  markerType: "item"} //the redefined marker
	]
}
~~~

{{sample 08_chart/06_bar_chart/12_diff_charts.html }}
