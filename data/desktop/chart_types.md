Chart Types
===============

Here we speak about various chart types at your disposal. Basically, you should set the **type** property of the chart constructor to the 
necessary value to switch to the corresponding chart type. 

##Pie, 3D Pie Chart and Donut Charts {#pie}

<img src="desktop/pie_chart.png"/>

{{snippet
Initialization
}}
~~~js
webix.ui({
	view: "chart",
	type:"pie", //or "pie3D", "donut"
	...
})
~~~

{{sample 08_chart/04_pie_chart/01_init.html }}

[Settings for Pie Charts](desktop/pie_charts.md)

##Line and Spline Charts {#line}

<img src="desktop/line_spline_chart.png"/>

Line chart features a broken line to join the points while a spline chart has a curved one. 

{{snippet
Initialization
}}
~~~js
webix.ui({
	view:"chart",
	type:"line" //or "spline"
	...
})
~~~

{{sample 08_chart/05_line_chart/01_init.html }}

[Settings for Line Charts](desktop/line_charts.md)

##Bar, BarH, StackedBar and StackedBarH Charts {#bar}

<img src="desktop/bar_charts.png"/>

{{snippet
Initialization
}}
~~~js
webix.ui({
	view:"chart",
    type:"bar" //or "barH", "stackedBar", "stackedBarH"
    ...
})
~~~

{{sample 08_chart/06_bar_chart/01_init.html }}

[Settings for Bar Charts](desktop/bar_charts.md)

##Area and stackedArea Charts {#area}

<img src="desktop/area_chart.png"/>

{{snippet
Initialization
}}
~~~js
webix.ui({
	view:"chart",
	type:"area", //or stackedArea
	...
})
~~~

{{sample 08_chart/07_area_chart/01_init.html }}

[Setting for Area Charts](desktop/area_charts.md)

##Radar Charts {#radar}

<img src="desktop/radar_points.png" />

{{snippet
Initialization
}}
~~~js
webix.ui({
	view:"chart",
	type:"radar",
	...
})
~~~

{{sample 08_chart/09_radar_chart/01_radar_points.html }}

[Settings for Radar Chart](desktop/radar_chart.md)

##Scatter Charts {#scatter}

<img src="desktop/scatter.png" />

{{snippet
Initialization
}}
~~~js
webix.ui({
	view:"chart",
	type:"scatter",
	...
})
~~~

{{sample 08_chart/10_scatter_chart/01_init.html }}

[Settings for Scatter Chart](desktop/scatter_chart.md)

@index:
  - desktop/pie_charts.md
  - desktop/bar_charts.md
  - desktop/line_charts.md
  - desktop/area_charts.md
  - desktop/radar_chart.md
  - desktop/scatter_chart.md
