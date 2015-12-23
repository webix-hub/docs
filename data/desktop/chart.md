Chart
==============

##API Reference

- [Methods, parameters and events](api__refs__ui.chart.html)
- [Samples](http://docs.webix.com/samples/08_chart/index.html)

##Overview

<a href="http://webix.com/widget/charts/" title="webix charts component">Chart</a> is a ui-related component that inherits from view and helps present data in different graphic figures like colored columns, pie pieces or lines. 
Like all the data-presenting components it takes initial data in [various formats](desktop/data_types.md). 

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/charts.png"/>

##Initialization

The most important chart properties include **type**, **template** and **value** for data as well as criteria for data presenting (e.g. **step** of X axis in 
a bar chart). Specify the chart ID if you are going to work with it later. 

{{
Initialization of a Bar Chart
}}
~~~js
 webix.ui({
            view:"chart",
            type:"bar",
            value:"#sales#",
            color:"#f6960a",
            border:true,
            xAxis:{
                template:"'#year#"
            },
            yAxis:{
                start:0,
                end:100,
                step:10,
                ...
                }
            },
            data: dataset
        });
~~~ 

{{editor http://webix.com/snippet/0759b846	Chart: XML Dataset
}}

To learn about all the chart properties, please refer to the [corresponding chapter of the manual](api__refs__ui.chart.html). 


##Working with Chart

- [Chart Types](desktop/chart_types.md)
- [Setting Chart Scales](desktop/chart_scales.md)
- [Chart Series - Comparison Charts](desktop/chart_series.md)
- [Setting Legend for a Chart](desktop/chart_legend.md)
- [Setting Chart Tooltip](desktop/chart_tooltip.md)
- [Data Grouping](desktop/grouping.md)
- [Operations with Chart Data](desktop/chart_operations.md)
- [Chart Colouring](desktop/chart_coloreffects.md)
- desktop/export_png.md
- desktop/data_components_export.md



##Related Articles
- desktop/data_object.md
- [Supported Data Types](desktop/data_types.md)
- [Redefinition of the Components](desktop/redefinition.md)
- [Event Handling](desktop/event_handling.md)
- [Operations with Data Items](desktop/item_operations.md)
- [Chart CSS Image Map](desktop/chart_css.md)

@index:
  - desktop/chart_types.md
  - desktop/chart_scales.md
  - desktop/chart_series.md
  - desktop/chart_operations.md
  - desktop/chart_legend.md
  - desktop/chart_tooltip.md