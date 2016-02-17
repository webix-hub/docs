Range Chart
============

API Reference
---------------

- [Methods, parameters and events](api/refs/ui.rangechart.md)
- [Samples](http://docs.webix.com/60_pro/12_rangechart/index.html)


Overview
-----------

Range Chart is a component that allows presenting data in a detailed way. 
It can be useful, if you work with big amounts of data and need to display some particular data parts.

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/range_chart.png">

Range Chart is based on the [line chart](desktop/chart_types.md#lineandsplinecharts) and inherits its API.
However, you can apply other chart types for a range chart. Range Chart can be used for any charts that possess a horizontal scale.
The most suitable types are the following: line, spline, area and stackedArea, bar and stackedBar.

The range limits the amount of data that will be processed. The selected range values are always rounded to the bigger next value. 
It means that if you set a range handler to some intermediate section between scale marks, it will be moved to that nearest point the value of which is bigger.

Initializing Range Chart
----------------------

To initialize a range chart, you need to define its configuration, as it given below: 

~~~js
webix.ui({
 	view:"rangechart", 
    height: 80, 
    id:"range",
 	type:"line",
 	value:"#sales#", 
 	frameId:"time",
 	item: { radius :0 },
 	data: data
});
~~~

The parameters of the configuration object are as follows:

- height - the height of the range chart









@edition:pro