offset
=============


@short:
	defines whether the first item of the scale will be drawn with the offset equal to the half of the scale's step (relative to the origin of the chart) or not.

@type: boolean
@example:
webix.ui({
	view:"chart",
	type:"line",
    offset:false,
    ...
})

@template:	api_config
@defined:	ui.chart
@relatedsample:
	08_chart/05_line_chart/03_scale.html
@related: 
	desktop/chart_scales.md
@descr:
{{note
The property is applicable only to **line**, **scatter**, **area** charts
}}




@seolinktop: [widget library](https://webix.com)
@seolink: [javascript graph visualization](https://webix.com/widget/charts/)