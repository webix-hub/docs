series
=============


@short:
	defines graphs presented on the chart

@type: array
@example:
webix.ui({
	view:"chart",
	type:"bar",
	...
	series:[
		{
			value:"#sales#",
			color:"#58dccd"
		},
		{
			value:"#sales2#",
			color:"#36abee",
		}
	]
});

@template:	api_config
@relatedapi:
	api/ui.chart_addseries.md
@relatedsample:
	08_chart/06_bar_chart/06_series.html
@related:
	desktop/chart_series.md
@defined:	ui.chart	
@descr:
The property is used to present multiple graphs on a chart. Graphs are specified in a standard way.

<img src="api/series_property.png"/>



If you add to the chart graphs of the same type, you can omit the **type** attribute.