line
=============


@short:
	defines chart lines

@type: object
@example:
webix.ui({
	view:"chart",
    type:"spline",
    ...
	line:{
		color:"#ff9900",
		width:3
	} 
})


@template:	api_config
@defined:	ui.chart	
@relatedsample:
	08_chart/05_line_chart/01_init.html
	08_chart/05_line_chart/02_style.html
@related: 
	desktop/line_charts.md
    desktop/scatter_chart.md
    desktop/radar_chart.md
	
@descr:
{{note
The property is applicable only to **line**, **radar** and **scatter** charts
}}
The available attributes of the property are:
<table class="webixdoc_links">
	<tbody>
		<tr>
			<td class="webixdoc_links0"> <b>width</b> </td>
			<td>(<i>number</i>) the line width (by default, <i>2</i>)</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>color</b></td>
			<td>(<i>string,function</i>) the line color (by default, <i>"#1293f8"</i>).<br> As a function,it accepts a data object and is called for each data item</td>
		</tr>
</tbody>
</table>

