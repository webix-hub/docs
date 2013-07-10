origin
=============


@short:
	sets the scale origin

@type: number
@example:
webix.ui({
	view:"chart",
	type:"bar",
	origin:30,
    ...
})
            

@relatedsample:
	08_chart/06_bar_chart/09_origin.html
@related: 
	desktop/chart_scales.md
@template:	api_config
@defined:	ui.chart	
@descr:
{{note
The property is applicable only to **line**, **bar** charts
}}

As a string, the property can have value *'auto'*. Actually, it's the default value of the property.