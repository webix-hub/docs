yValue
=============


@short:a property of the dataset that defines values for the vertical axis. 
	

@type: string
@example:
webix.ui({
	container:"chartDiv",
	view:"chart",
	type:"scatter",
	xValue: "#a#",
    yValue: "#b#"
    ...
});

@template:	api_config
@relatedsample:
	08_chart/10_scatter_chart/01_init.html
@relatedapi:
	api/ui.chart_xvalue_config.md
@related: 
	desktop/chart_scales.md
@descr:
The method is analog to the api/ui.chart_value_config.md property.

{{note
The property is applicable only to **scatter** charts
}}
