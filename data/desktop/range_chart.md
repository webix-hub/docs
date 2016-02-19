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

- height - sets the height of the range chart
- id - the id of the range chart
- type -  sets the type of the chart
- value - defines values for the vertical axis
- frameId - specifies a property in the data, that will be used for the frame
- item - defines markers that present chart's data items 
- data - specifies the dataset that will be loaded to the range chart 

Setting Frame Range
----------------------

The frame isn't set automatically and depends on data. So, it should be specified only after data are loaded to the range chart.

For example, you can set the frame range in the api/link/ui.proto_ready_config.md handler. The frame is specified by the api/ui.rangechart_setframerange.md method.

~~~js
webix.ui({
  view: "rangechart",
  ...
  ready:function(){
	this.setFrameRange(30, 40);
  }
});
~~~

As parameters the setFrameRange() method takes the indexes of the starting and the ending data items of the range.

In order to get the set frame range, you should use the api/ui.rangechart_getframerange.md method. it returns the object of the data range selected in the frame.

~~~js
rangechart.getFrameRange();
~~~

You can also get the data included into the frame range. For this purpose, make use of the api/ui.rangechart_getframedata.md method.

It returns an array of data objects that are included into the range.

~~~js
rangechart.getFrameData();
~~~


Binding Range Chart with Chart
---------------------------

Each time when a range is changed in the range chart, changes are applied to the "main" chart.  It means that settings in the main chart should be reset and new data loaded.

To bind two charts, you need to use the api/link/ui.rangechart_on_config.md property and specify the handler for the api/ui.rangechart_onafterrangechange_event.md event.

Inside of the handler function define the clearAll() method to remove all data items from the chart. 
Finally, apply the parse() method and call getFrameData() of rangechart to load the chart with new data items.

~~~js
var chart = {
	view:"chart", 
    id:"dchart",
	type:"line",
	value:"#sales#",
	xAxis:{ template:"#time#" },
	yAxis:{},
	item:{
		borderColor: "#1293f8",
		color: "#ffffff"
	}
};

var range = {
	view:"rangechart", 
    height: 80, 
    id:"range",
	type:"line",
	value:"#sales#", 
	frameId:"time",
	data:  data,
	on: {
		onAfterRangeChange:function(){
			$$("dchart").clearAll();
			$$("dchart").parse(this.getFrameData());
		}
	},
	ready:function(){
		this.setFrameRange(30, 40);
	}
};
~~~

@edition:pro