{{memo a component that allows presenting data of data components in a detailed way}}

RangeChart inherits from desktop/chart.md and gives the possibility to display in detail some data of a data component limited by frame. This component is useful for controlling and visualizing data of other data components.

Check desktop/range_chart.md documentation for more details

###Constructor 

~~~js
var rangechart = webix.ui({
    view:"rangechart", 
    height: 80, 
    id:"range",
    type:"line",
    value:"#sales#", 
    frameId:"time",
    item: { radius :0 },
    range:{ start:30, end:50 },
    data: data
});
~~~

### Where to start

- [Overview of the RangeChart Widget](desktop/range_chart.md)
- [Samples](http://docs.webix.com/60_pro/12_rangechart/index.html)
