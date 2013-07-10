radius
=============


@short:
	the radius of the bar's rounding

@type: number
@example:
webix.ui({
	view:"chart",
	type:"bar",
	radius:0,
    ...
});

@template:	api_config
@defined:	ui.chart
@relatedsample:
	08_chart/06_bar_chart/02_text.html
@related: 
	desktop/bar_charts.md
@descr:

The property is applicable to **bar** charts.

<img src="api/radius_property.png" />

{{note
When used within [item](api/ui.chart_item_config.md) object of **scatter**, **radar** and **line** charts, the property defines radius of the point on the map.
}}
