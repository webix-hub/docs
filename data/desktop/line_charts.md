Setting for Line Charts
=============

Here various properties of line charts are listed. The properties construct the chart object. Some of the properties contain an object as value. Data-presenting properties are compulsory while a number of styling options 
can be omitted or replaced. 

##Data Presentation

- **value** (template) - the data item chosen for graphical representation; as a rule, its values are taken for text labels of the Y axis;
- **data** / **url** (string/url) - datasource for the component;
- **label** (string) - text labels for each point on the line;

####Setting titles for each axis:

<img src="desktop/chart_axis.png" />

Here you should add **title** parameter for xAxis and yAxis constructor:

~~~js
xAxis:{...
	  title:"Some Text_1"},
yAxis:{...
	  title:"Some Text_2"}

~~~

{{sample 08_chart/05_line_chart/03_scale.html }}

Learn how to set scales for the chart in the [corresponding chapter of the manual](desktop/chart_scales.md).

##Chart Series. Several Graphs in One Chart

<img src="desktop/chart_series_line.png" />

{{sample 08_chart/05_line_chart/05_series.html }}

Read more about [Chart Series](desktop/chart_series.md).

##Styling and Positioning

- **item** - a point on the line, a stop for each value. It includes:
  - **radius** (number) - radius on the point in the chart;
  - **[eventRadius](api/ui.chart_eventradius_config.md)** (number) - radius of the virtual circle which events will fire for items within;
  - **borderColor** (hex code)- border for the point;
  - **color** (hex code) - inner color of the point.
- **line** - a broken or curved (in case of a spline chart) line.
	- **color** (hex code) - color for the line;
    - **width** (number) - line width.
    - **shadow** (boolean) - shadow for nthe line (optional);
- **offset** (number) - offset for the first item in a chart, the initial numeric value;

####Getting rid of points on the line

<img src="desktop/chart_line.png"/>

~~~js
item:{radius:0}
~~~

####Making square points for the line

<img src="desktop/chart_square.png"/>

~~~js
item:{
       borderColor:"#b64040",
       color: "#b64040",
       type:"d",
       radius:3,
       borderWidth:1 //here you make it square
      }
~~~



{{sample 08_chart/05_line_chart/02_style.html }}

##Style Presets

There're three style presets for the Chart component

- **plot** - a blue line with white points;
- **diamond** - an orange line with wine red square points;
- **simple** - a light green line with dark green points.

All of them are set with the help of **preset** property.

{{sample 08_chart/05_line_chart/06_style_presets.html }}



[Back to all chart types](desktop/chart_types.md)
