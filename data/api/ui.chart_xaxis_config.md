xAxis
=============


@short:
	defines the horizontal axis

@type: object
@example:
webix.ui({
	view:"chart",
	...
	xAxis:{
		title: "Years",
		template: "#year#",
        lines: true
	}
});


@template:	api_config
@defined:	ui.chart	
@relatedapi:
	api/ui.chart_yaxis_config.md
@relatedsample:
	08_chart/06_bar_chart/03_scales.html
@related: 
	desktop/chart_scales.md
    desktop/custom_x_axis.md
@descr:
{{note
The property is applicable only to **bar**, **line**, **area**, **scatter**, **radar** charts.<br>
Only the <b>*'template'*</b> attribute is mandatory
}}

<br>

Attributes of the property differ for different chart types:


<table class="webixdoc_links">
	<tbody>
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
			<td>(<i>bool, function</i>) enables/disables vertical lines for the scale units  (by default, <i>true</i>)</td>
            <td>bar, stackedBar, line, spline, area, stackedArea, scatter, barH, stackedBarH, radar</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>lineColor</b></td>
			<td>(<i>string,function</i>) the color of the scale lines <br> (by default, <i>"#cfcfcf"</i>)</td>
            <td>bar, stackedBar, line, spline, area, stackedArea, scatter, barH, stackedBarH, radar</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>color</b></td>
			<td>(<i>string</i>) the axis color (by default, <i>"#000000"</i>)</td>
            <td>bar, stackedBar, line, spline, area, stackedArea, scatter, barH, stackedBarH</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>start</b> </td>
			<td>(<i>number</i>) the minimum value of the scale</td>
            <td>barH, stackedBarH</td>
		</tr>
        <tr>
			<td class="webixdoc_links0"><b>end</b> </td>
			<td>(<i>number</i>) the maximum value of the scale</td>
            <td>barH, stackedBarH</td>
		</tr>
        <tr>
			<td class="webixdoc_links0"><b>step</b> </td>
			<td>(<i>number</i>) the scale step</td>
            <td>barH, stackedBarH</td>
		</tr>
</tbody>
</table>


If attributes **end**, **start**, **step** are not set, they will be automatically calculated. <br>
However, you may control the minimum value of the scale by using the  api/ui.chart_origin_config.md property. For example, if you set *origin:0*, the scale will start from '0', even if the minimum value in the dataset is greater. 




###'template' attribute. Function definition
As a function, 'template' is called for each data item of the chart and takes the item object as a parameter.

~~~js
template: function(obj){
	   return webix.i18n.dateFormatStr("%F")(obj.date); //returns the month name
}
~~~

###'lineColor' attribute. Function definition
Function definition allows you have different lines in different colors.


As a function, 'lineColor' is called for each data item of the chart and takes the item object as a parameter. Must return the *true*(show the line) or *false*(hide the line) value. 


~~~js
lineColor:function(obj){
       return (obj.year%2?"#e9eef9":"#f3f7ff") //colors lines for odd and even years in different colors
}
~~~


###'lines' attribute. Function definition
Function definition allows you to manipulate the visibility of lines: to hide/show them depending on the specified rules. We reccomend to use such a definition in case you have a lot of items, to prevent the chart from looking overloaded.


As a function, 'lines' is called for each data item of the chart and takes the item object as a parameter. Must return the *true*(show the line) or *false*(hide the line) value. 


~~~js
lines:function(obj){
       return (obj.year%2?true:false) // hides lines for odd years
}
~~~
