yAxis
=============


@short:
	defines the vertical axis

@type: object
@example:
webix.ui({
	view:"chart",
	...
	yAxis:{
		start:-10,
		end:10,
		step:2,
		title:"Sales"
	},
    origin:0
})

@template:	api_config
@defined:	ui.chart	
@relatedapi:
	api/ui.chart_xaxis_config.md
@relatedsample:
	08_chart/06_bar_chart/03_scales.html
@related: 
	desktop/chart_scales.md
@descr:

{{note
The property is applicable only to **bar**, **line**, **area**, **scatter**, **radar** charts. <br> All the attributes are optional
}}

<br>

Available set of attributes depends on the chart type:


<table class="webixdoc_links">
	<tbody>
		<tr>
			<td class="webixdoc_links0"><b>start</b> </td>
			<td>(<i>number</i>) the minimum value of the scale</td>
            <td>bar, stackedBar, line, spline, area, stackedArea, scatter, barH, stackedBarH, radar</td>
		</tr>
        <tr>
			<td class="webixdoc_links0"><b>end</b> </td>
			<td>(<i>number</i>) the maximum value of the scale</td>
            <td>bar, stackedBar, line, spline, area, stackedArea, scatter, barH, stackedBarH, radar</td>
		</tr>
        <tr>
			<td class="webixdoc_links0"><b>step</b> </td>
			<td>(<i>number</i>) the scale step</td>
            <td>bar, stackedBar, line, spline, area, stackedArea, scatter, barH, stackedBarH, radar</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>template</b></td>
			<td>(<i>string,function</i>)   the template for the scale labels</td>
            <td>bar, stackedBar, line, spline, area, stackedArea, scatter, barH, stackedBarH, radar</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"> <b>title</b> </td>
			<td>(<i>string</i>) the axis title</td>
            <td>bar, stackedBar, line, spline, area, stackedArea, scatter, barH, stackedBarH</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>lines</b></td>
			<td>(<i>bool, function</i>) enables/disables horizontal lines for the scale units  (by default, <i>true</i>)</td>
            <td>bar, stackedBar, line, spline, area, stackedArea, scatter, barH, stackedBarH, radar</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>color</b></td>
			<td>(<i>string</i>) the axis color (by default, <i>"#000000"</i>)</td>
            <td>bar, stackedBar, line, spline, area, stackedArea, scatter, barH, stackedBarH</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>lineColor</b></td>
			<td>(<i>string,function</i>) the color of the scale lines <br> (by default, <i>"#cfcfcf"</i>)</td>
            <td>bar, stackedBar, line, spline, area, stackedArea, scatter, barH, stackedBarH, radar</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>lineShape</b></td>
			<td>(<i>"arc" or "line"</i>) the shape of lines <br>(by default, <i>"line"</i>)</td>
            <td>radar</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>bg</b></td>
			<td>(<i>string,function</i>) the background color <br> (by default, <i>"#ffffff"</i>)</td>
            <td>radar</td>
		</tr>
</tbody>
</table>


If attributes **end**, **start**, **step** are not set, they will be automatically calculated. <br>
However, you may control the minimum value of the scale by using the  api/ui.chart_origin_config.md property. For example, if you set *origin:0*, the scale will start from '0', even if the minimum value in the dataset is greater. 


###'template' attribute. Function definition
As a function, 'template' is called for each scale item of the chart and takes the item numeric value as a parameter.

~~~js
template: function(value){
	return value%10?"":value
}
~~~                        

###'lines' attribute. Function definition
Function definition allows you to manipulate the visibility of lines: to hide/show them depending on the specified rules. We reccomend to use such a definition in case you have a lot of items, to prevent the chart from looking overloaded.


As a function, 'lines' is called for each scale item of the chart and takes the item index as a parameter. Must return the *true*(show the line) or *false*(hide the line) value. 


~~~js
lines: function(index){
	return index%2?false:true // hides even lines
}
~~~

###'lineColor' attribute. Function definition
Function definition allows you have different lines in different colors.


As a function, 'lineColor' is called for each scale item of the chart and takes the item index as a parameter. Must return string with the desired color. 


~~~js
lineColor: function(index){
	return index%2?"#e9eef9":"#f3f7ff";// colors odd and even lines in different colors
}
~~~


Function definition allows you have different lines in different colors.

As a function, 'lineColor' is called for each data item of the chart and takes the item object as a parameter. Must return the true(show the line) or false(hide the line) value.

###'bg' attribute. Function definition
As a function, 'bg' is called for each scale item of the chart and takes 2 parameters: the yAxis item index and the xAxis item index.

~~~js
bg: function(yIndex, xIndex){
	return yIndex%2?"#e9eef9":"#f3f7ff";
}
~~~