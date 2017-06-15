item
=============


@short:
	defines markers that present chart's data items

@type: object
@example:
webix.ui({
	view:"chart",
    type:"line",
	item:{
		borderColor:"#ffffff",
        color:"#000000"
    }
    ...
})

@template:	api_config
@defined:	ui.chart	
@relatedsample:
	08_chart/05_line_chart/01_init.html
    08_chart/05_line_chart/02_style.html
@related:
	desktop/chart_types.md
    desktop/scatter_chart.md
    desktop/line_charts.md
    desktop/radar_chart.md
@descr:
{{note
The property is applicable only to **line**, **radar** and **scatter** charts
}}

The available attributes of the property are:

<table class="webixdoc_links">
	<tbody>
		<tr>
			<td class="webixdoc_links0"> <b>alpha</b> </td>
			<td>(<i>number from 0 to 1</i>) the marker opacity (by default, <i>1</i>)</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>borderColor</b></td>
			<td>(<i>string,function</i>) the outer color of a marker (by default, <i>"#636363"</i>). As a function, it accepts a data object and is called for each data item  </td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>borderWidth</b></td>
			<td>(<i>number</i>) the width of the border line in pixels (by default, <i>1</i>)</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>color</b></td>
			<td>(<i>string,function</i>) the inner color of a marker (by default, <i>"#ffffff"</i>). As a function, it accepts a data object and is called for each data item</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>radius</b></td>
			<td>(<i>number</i>) the marker radius in pixels  (by default, <i>3</i>)</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>shadow</b></td>
			<td>(<i>bool</i>) enables the marker shadow (by default, <i>false</i>)</td>
		</tr>
		<tr>
			<td class="webixdoc_links0" style="vertical-align: top;"><b>type</b> </td>
			<td style="vertical-align: top;">
				(<i>string</i>) the shape of a marker ( by default, <i>'r'</i>) 
				<br>
				The predefined values are:
				<ul>
					<li><b>'r'</b> -  round</li>
					<li><b>'d'</b> -  diamond</li>
                    <li><b>'s'</b> -  square</li>
				</ul>
			</td>
		</tr>
</tbody>
</table>



@seolinktop: [javascript ui library](https://webix.com)
@seolink: [chart widget](https://webix.com/widget/charts/)