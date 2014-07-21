Setting Chart Scales
=============

<img src="desktop/chart_scales.png"/>

Scales are included into the following chart types: 

- [Line and spline](desktop/chart_types.md#line) charts
- [Bar](desktop/chart_types.md#bar) charts (optionally)
- [Area](desktop/chart_types.md#area) charts
- [Scatter](desktop/chart_types.md#scatter) chart

At the same time, [radar](desktop/chart_types.md#radar) chart has a specific chart type. 

Scales consist of **Y** and **X** axes that are chart properties which values are objects containing several properties. Note that scales won't appear during chart initialization by default if you don't include these 
properties into the chart constructor:

~~~js
webix.ui({
	view:"chart",
    ...
    xAxis:{
    	property:"value"},
    YAxis:{
    	property:"value"}
})
~~~

- A vertical, **[yAxis](api/ui.chart_yaxis_config.md)** of a chart is formed according to the values of data, which progress you want to show graphically. Naturally, the values are numeric. This data is specified by chart's **value** property. 
- A horizontal, **[xAxis](api/ui.chart_xaxis_config.md)** displays progress of the data according to the specified criterion. 

If needed, any axle can be omitted. 

Take the dataset looks as follows and we want to present sales progress during several years. Each data item contains sales amount and the year. 

{{snippet
JSON data}}
~~~js
[
	{ id:1, sales:20, year:"02"},{ id:2, sales:55, year:"03"},
	{ id:3, sales:40, year:"04"},{ id:4, sales:78, year:"05"},
	{ id:5, sales:61, year:"06"},{ id:6, sales:35, year:"07"},
	{ id:7, sales:80, year:"08"},{ id:8, sales:50, year:"09"},
	{ id:9, sales:65, year:"10"},{ id:10, sales:59, year:"11"}
]    
~~~

##Default Scale

<img src="desktop/chart_default_scale.png" />

###Y-axis Formation

If you set an empty yAxis property object **(yAxis:{})**, the dataset will be anylized and the scale will be formed automatically. Here:

- the optimal step for units will be 10 as all the values are lower than a hundred;
- the lowest unit value for the scale will be 20 as the lowest value in the dataset is 20 and the programm takes the closest ten's place.
- the highest unit value for the scale will be 80 since it's the highest data value. 

###X-Axis Formation

Minimal compulsory API for the x-Axis includes

- **template** -  data item from the dataset. Here is it **#year#**. Each value turns into a labelled unit on the line. 

##Custom Scale

<img src="desktop/chart_custom_scale.png"/>

###Y-axis Formation

Y-axis object is constructed with the following properties:

- **start** (number) - start position for the axis, the value of the first unit;
- **end** (number) - max value for the axis, the last unit;
- **step** (number) - 'distance' to the next unit (not necessarily labelled with text);
- **template**  - template for text label of the axis. Template function can define which numeric values to display. If not specified, text values are displayed depending on the 'step' parameter. 

If you don't want to label each unit, you can set a function template to label only units multiple of the specified number (here it's 20): 

~~~js
template:function(obj){return (obj%20?"":obj)
~~~

###X-axis Formation

- **template**(template) - template for text labels on the X axis;
- **lines** (boolean) - if *false*, the line for the axis isn't shown. By default this value is *true*. 
- **origin** (number) - it's the property of the chart constructor, not the xAxis object. However, its value affects the position of x-Axis relative to the Y-axis. Data items with values lower that the stated one,
are displayed below the line. 

There exists a [possibility to create a fully custom axis](desktop/custom_x_axis.md) for working with dates. 

####Offset 
For [line](desktop/line_charts.md), [scatter](desktop/scatter_chart.md) and [area](desktop/area_charts.md) charts you can set the api/ui.chart_offset_config.md property which defines whether the first item of the scale 
will be drawn with the offset equal to the half of the scale's step (relative to the origin of the chart).

The default value for [line](desktop/line_charts.md) and [scatter](desktop/scatter_chart.md) charts is *true*. The default value for [area](desktop/area_charts.md) charts is *false*.

<img src="desktop/chart_offset.png">

~~~js
webix.ui({
	view:"chart",
    type:"line",
    ...
    xAxis:{
    	property:"value"},
    YAxis:{
    	property:"value"},
    offset:false
})
~~~

{{sample 08_chart/05_line_chart/03_scale.html}}

##Logarithmic Scale

Webix charts are equipped with two types of **scale**:

- **"linear"** - used in all charts by default;
- **"logarithmic"** - enabled by chart **scale** property:

~~~js
webix.ui({
	view:"chart",
	type:"bar",
	scale: "logarithmic",
    ...
});
~~~

{{sample 08_chart/11_scale/04_logarithmic_y.html}}

##Titles for the Axes

<img src="desktop/chart_titles.png" />

Titles are included into axes' objects:

~~~js
webix.ui({
	view:"chart",
    ..config..,
    xAxis:{ ..
    		title: "Year"},
    yAxis:{..
    		title:"Sales per Year"}
})
~~~

{{note
In case of horizontal bar charts (type **barH**, **stackedBarH**) X and Y axes exchange their properties. 
}}

@index:
	- desktop/custom_x_axis.md