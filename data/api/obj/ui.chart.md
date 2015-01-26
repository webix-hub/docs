
{{memo a tool  for creating various charts}}

The library supports the most common chart types:line, spline, area, bar, pie, donut, scatter, radar.
You can customize appearance of a chart through colors, tooltips, templates, scales, labels.
It's possible to present multiple data sets on the same chart.  Check [chart](desktop/chart.md) documentation for more detailed description.

### Constructor

~~~js
	var chart = webix.ui({
		view:"chart", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_chart({
		...config options goes here..
	});
~~~
### Where to start

- [Overview of Chart Widget](desktop/chart.md)
- [Samples](http://docs.webix.com/samples/08_chart/index.html)