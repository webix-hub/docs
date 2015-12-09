Settings for Bar Charts
=============

##Data Presentation

- **value** (template) - template from the dataset for data item to present graphically;
- **data / url** (string/url) - the datasource;
- **label** (template) - text label for each bar;

Learn how to draw chart scales in the [dedicated chapter of the manual](desktop/chart_scales.md)

##Styling and Positioning 

- **barWidth**(number) - width for each bar in pixels;
- **radius** (boolean) - if true, sets curved bar tops;
- **gradient** ( boolean, string, function)) - gradient for each bar;
- **padding** (obj) - offset from the whole chart to the parent container {top:50, left:0, right:30, left:40}
- **color** (template, hex code, function) - color effects for the bars;
- **alpha** (number between 0 and 1) - transparency of chart bars;
- **border** (boolean) - if *false*, removes a black border of the bars. *True* by default. 

Read more about [Chart Coloring](desktop/chart_coloreffects.md)

##Bar Chart Types


<table class="inline">
	<caption class="caption">
		<strong>Table 1 </strong>
		Bar chart types
	</caption>
    <tr class="row0">
        <th class="col0 centeralign"><strong>Type</strong></th><th class="col1 centeralign"> Vertical Bars  </th> <th class="col1 centeralign">Horizontal Bars </th>
    </tr>
    <tr class="row1">
         <th class="col0 leftalign">Single data</th><td class="col0 leftalign"> bar</td><td class="col1 leftalign"> barH </td>
    </tr>
    <tr class="row2">
        <th class="col0 leftalign">Several data values</th><td class="col0 leftalign"> stackedBar </td><td class="col1 leftalign">stackedBarH  </td>
    </tr>

</table>

**StackedBar** and **stackedBarH** charts display data of several configuration objects (chart **series**), e.g. graphical representation of sales of three companies. 

##Bar Chart Series

Series can be defined for all bar charts. Series with **bar** and **barH** chart differ from those of **stackedBar** and **stackedBarH.** With the former bars are placed by each other in groups, which is greater for comparison. 
Moreover, the legend for them allows hiding and showing the dedicated chart by single mouseclick. 


<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 2 </strong>
		Presenting several data properties on bar chart
	</caption>
	<tbody>
	<tr>
    	<td> Using <a href="desktop/chart_series.md">series</a> </td>
		<td style="text-align:center;"><img src="desktop/presenting_multiple_properties_series.png"/></td>
	</tr>
	<tr>
		<td style="width:300px;"> 'stackedBar'/'stackedbarH' <br> charts </td>
		<td style="text-align:center;"><img src="desktop/presenting_multiple_properties_stackedbar.png"/></td>
	</tr>
	</tbody>
</table>

{{editor http://webix.com/snippet/f2538a1d	Bar Chart: Several Graphs in One Chart}}


The **rules of series definition** are described [here](desktop/chart_series.md). 

##Presets for Bar Chart

The library provides 3 presets for Bar charts. To set one of presets you should specify the api/ui.chart_preset_config.md property for the chart:

~~~js
webix.ui({
	view: "chart",
    type: "bar",
    preset: "stick",
	...
};
~~~

{{editor http://webix.com/snippet/3fbbc261	Bar Chart: Style Presets}}

<br>

<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 3 </strong>
		Bar chart presets
	</caption>
	<tbody>
	<tr>
		<td style="width:300px;"> <code>preset:"column"</code> </td>
		<td style="text-align:center;"><img src="desktop/bar_column_preset.png"/></td>
	</tr>
	<tr>
		<td> <code>preset:"stick"</code> </td>
		<td style="text-align:center;"><img src="desktop/bar_stick_preset.png"/></td>
	</tr>
	<tr>
		<td> <code>preset:"alpha"</code> </td>
		<td style="text-align:center;"><img src="desktop/bar_alpha_preset.png"/></td>
	</tr>
	</tbody>
</table>



[Back to all chart types](desktop/chart_types.md)

@index:
	- desktop/chart_coloreffects.md