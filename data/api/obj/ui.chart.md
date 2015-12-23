
{{memo a tool  for creating various charts}}

The library supports the most common chart types:line, spline, area, bar, pie, donut, scatter, radar.
You can customize appearance of a chart through colors, tooltips, templates, scales, labels.
It's possible to present multiple data sets on the same chart.  Check [chart](desktop/chart.md) documentation for more detailed description.

### Constructor

~~~js
var chart = webix.ui({
	view:"chart",
   	type:"bar",
   	value:"#sales#",
   	label:"#sales#",
   	barWidth:35,
   	radius:0,
   	gradient:"falling",
   	data: [
		{ id:1, sales:20, year:"02"},
		{ id:2, sales:55, year:"03"},
		{ id:3, sales:40, year:"04"},
		{ id:4, sales:78, year:"05"}
   	]
});
~~~

### Where to start

- [Overview of the Chart Widget](desktop/chart.md)
- [Samples](http://docs.webix.com/samples/08_chart/index.html)
