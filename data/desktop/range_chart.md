RangeChart
============

API Reference
---------------

- [Methods, parameters and events](api/refs/ui.rangechart.md)
- [Samples](http://docs.webix.com/60_pro/12_rangechart/index.html)


Overview
-----------

RangeChart is a component that allows presenting data in a detailed way. 
It can be useful if you work with big amounts of data and need to display some particular data parts.

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/range_chart.png">

RangeChart is based on [Chart](desktop/chart.md) component and inherits its API. 
RangeChart can be built upon any Webix chart that possesses a horizontal scale: [line, spline](desktop/chart_types.md#lineandsplinecharts), 
[area and stackedArea](desktop/chart_types.md#areaandstackedareacharts), [bar and stackedBar](desktop/chart_types.md#barbarhstackedbarandstackedbarhcharts).
However, it is not obligatory to initialize scales. 

Visually, the related frame limits the amount of data for future processing. Frame values are always rounded to the next bigger value. 
It means that if you set a frame handler to some intermediate section between scale marks, it will be moved to that nearest point the value of which is bigger.

{{sample
60_pro/12_rangechart/01_basic.html
}}

Initializing Range Chart
----------------------

To initialize a RangeChart, you need to define its configuration, like the one given below: 

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

In general, all properties of a standard [chart](desktop/chart.md) can be used to configure RangeChart, e.g:

- **height** - sets the height of the range chart
- **id** - the id of the range chart
- **type** -  sets the type of the chart
- **value** - defines values for the vertical axis
- **item** - defines markers that present chart's data items 
- **data** - specifies the dataset that will be loaded to the range chart 

and the only RangeChart-specific property: 

- **frameId** - specifies a property in the data item, that will be used for the frame (id by default).

Setting Frame Range
----------------------

The frame isn't set automatically and depends on data. So, it should be specified only after data are loaded to the RangeChart.

For example, you can set the frame range in the api/link/ui.proto_ready_config.md handler. The frame is specified by the api/ui.rangechart_setframerange.md method.

~~~js
webix.ui({
  view: "rangechart",
  ...
  ready:function(){
	this.setFrameRange({
    	start:30, 
        sindex:29, 
    	end:40,
        eindex:39
  	});
});
~~~

As parameters the setFrameRange() method takes ids and indexes of the starting and the ending data items of the range.

Notice that the priority of ids is higher than that of indexes. It means that in case difference between their values is great, the position of data range will be counted using the ids values.

In order to get the set frame range, you should use the api/ui.rangechart_getframerange.md method. It returns the object of the data range selected in the frame.

~~~js
rangechart.getFrameRange();
~~~

The configuration of the returned object looks like this:

~~~js
{
    start: 30,
    sindex:29,
    end: 40,
    eindex:39    
}
~~~

You can also get the data included into the frame range. For this purpose, make use of the api/ui.rangechart_getframedata.md method.

It returns an array of data objects that are included into the range.

~~~js
rangechart.getFrameData();
~~~

{{sample
60_pro/12_rangechart/01_basic.html
}}


Working with RangeChart
---------------------------

RangeChart can be used to control data displayed within another data component, e.g. chart. 
For instance, each time when a range is changed in the RangeChart (master), changes are applied to the slave data component. 

For example, let's consider an example with two charts.
To begin with, you need to use the api/link/ui.rangechart_on_config.md property and specify the handler for the api/ui.rangechart_onafterrangechange_event.md event.

Inside of the handler function remove all data items from the slave chart using its clearAll() method.
Finally, call the getFrameData() method of RangeChart to get the enclosed data and apply the parse() method to the slave chart to populate it with a new dataset. 

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