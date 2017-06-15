legend
=============


@short:
	defines the chart legend

@type: object
@example:
webix.ui({
	view:"chart",
	...
	legend:{
    	width:90,
        values:[{text:"Type A",color:"#58dccd"},{text:"Type B",color:"#a7ee70"}],
		align:"right"
	}
})
@template:	api_config
@defined:	ui.chart	
@related:
	desktop/chart_legend.md
@relatedsample:
	08_chart/09_radar_chart/02_radar_area.html
	08_chart/06_bar_chart/06_series.html
@descr:
The available attributes of the property are:
<table class="webixdoc_links">
	<tbody>
		<tr>
			<td class="webixdoc_links0"> <b>width</b> </td>
			<td>(<i>number</i>) the legend block's width (by default, <i>150</i>)</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>height</b></td>
			<td>(<i>number</i>) the legend block's height (by default, <i>18</i>)</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>layout</b></td>
			<td>(<i>'x' or 'y'</i>) defines whether items should be placed vertically or horizontally (by default, <i>y</i>)</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>align</b></td>
			<td>(<i>'left', 'right', 'center'</i>) the horizontal alignment of the block (by default, <i>"left"</i>)</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>valign</b></td>
			<td>(<i>'top', 'bottom, 'middle'</i>) the vertical alignment of the block (by default, <i>'bottom'</i>)</td>
		</tr>
        <tr>
			<td class="webixdoc_links0"><b>margin</b></td>
			<td>(<i>number</i>) sets all four margins of the legend block to the specified value (by default, <i>4</i>)</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>padding</b></td>
			<td>(<i>number</i>) sets all four paddings of the legend block to the specified value (by default, <i>3</i>)</td>
		</tr>
        <tr>
			<td class="webixdoc_links0"><b>template</b></td>
			<td>(<i>string</i>) the template for legend items. Creates an individual legend item for each object the data source. If you want to present just specific data objects (not all of them), use the <b>values</b> attribute </td>
		</tr>
        <tr>
        	<td class="webixdoc_links0"><b>toggle</b></td>
            <td>(<i>bool</i>) enables/disables the possibility to hide/show a graph by clicking on the graph legend item. For all charts, except for <b>Stacked Vertical Bar</b>, <b>Stacked Horizontal Bar</b> and <b>Stacked Area</b>, the default value is <i>true</i>. For the excepted charts the default value is <i>false</i>.
		<tr>
			<td class="webixdoc_links0" style="vertical-align: top;"><b>values</b> </td>
			<td style="vertical-align: top;">
				(<i>array </i>) an array of objects, each one of which specified a discrete legend item. If it's set, the <b>template</b> attribute is ignored. <br> Can have the following attributes:
				<ul>
					<li><b>text</b> -  (<i>string</i>) the item text</li>
					<li><b>color</b> - (<i>string,function</i>) the item color. As a function, the property accepts a data object and is called for each data item</li>
                    <li><b>markerType</b> - (<i>'square', 'round' or 'item'</i>) the marker type: 'square', 'round' or 'item' (by default, 'square'). If you set the 'item' type, the legend marker will use the same template as items in the chart</li>
                    <li><b>toggle</b> - (<i>bool</i>) enables/disables the possibility to hide/show a graph by clicking on the specified legend item
				</ul>
			</td>
		</tr>
		<tr>
			<td class="webixdoc_links0" style="vertical-align: top;"><b>marker</b> </td>
			<td style="vertical-align: top;">
				(<i>object</i>) an object that defines item markers in the legend.
				<br>
				Can have the following attributes:
				<ul>
					<li><b>type</b> -  (<i>'square', 'round' or 'item'</i>) the marker type (by default, 'square'). If you set the 'item' type, the legend marker will use the same template as items in the chart</li>
					<li><b>width</b> - (<i>number</i>) the marker width (by default, 15)</li>
                    <li><b>height</b> -  (<i>number</i>) the marker height (by default, 15)</li>
                    <li><b>radius</b> -  (<i>number</i>) the marker radius (by default, 3)</li>
				</ul>
			</td>
		</tr>
</tbody>
</table>



				


@seolinktop: [lightweight js framework](https://webix.com)
@seolink: [javascript chart library](https://webix.com/widget/charts/)