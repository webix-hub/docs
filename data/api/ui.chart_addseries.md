addSeries
=============



@short:
	adds an additional graph to the chart

@params:
- obj		object		the graph configuration object



@example:
var barchart = webix.ui({
	view:"chart",
	type:"bar",
	value:"#sales#",
	color:"#58dccd"
	...
});

barchart.addSeries({
	value:"#sales2#",
	color:"#36abee",
});
barchart.parse(multiple_dataset);
 
@template:	api_method
@defined:	ui.chart	
@relatedapi:
	api/ui.chart_series_config.md
@related: 
	desktop/chart_series.md

@descr:
The method is used to present multiple graphs on a chart. It's an analog to the api/ui.chart_series_config.md property.<br> Graphs are specified in a standard way.

<img src="api/series_property_03.png"/>



If you add to the chart graphs of the same type, you can omit the **type** attribute.