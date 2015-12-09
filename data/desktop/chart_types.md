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


{{editor http://webix.com/snippet/8388561b	Pie Chart: Basic Initialization}}

[Settings for Pie Charts](desktop/pie_charts.md)

##Line and Spline Charts {#line}

<img src="desktop/charts_linespline.png"/>

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

{{editor http://webix.com/snippet/8afb9849	Line Chart: Basic Initialization}}


[Settings for Line Charts](desktop/line_charts.md)

##Bar, BarH, StackedBar and StackedBarH Charts {#bar}

<img src="desktop/charts_bar.png"/>

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

{{editor http://webix.com/snippet/d8fcef68	Bar Chart: Basic Initialization}}


[Settings for Bar Charts](desktop/bar_charts.md)

##Area and stackedArea Charts {#area}

<img src="desktop/charts_area.png"/>

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

{{editor http://webix.com/snippet/3cb9cff3	Area Chart: Basic Initialization}}


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

{{editor http://webix.com/snippet/c5579820	Radar Chart: Points}}



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

{{editor http://webix.com/snippet/01baafd4	Scatter Chart: Basic Initialization}}


[Settings for Scatter Chart](desktop/scatter_chart.md)

@index:
  - desktop/pie_charts.md
  - desktop/bar_charts.md
  - desktop/line_charts.md
  - desktop/area_charts.md
  - desktop/radar_chart.md
  - desktop/scatter_chart.md
