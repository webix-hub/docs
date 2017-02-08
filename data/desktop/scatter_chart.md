Settings for Scatter Chart
=============

##Custom Initialization

- **value** (template) - item template for Y axis;
- **xValue** (template) - item template for xAxis;
- **data /url** (url/string) - the data source;
- **item** - an object property that contains setting for each point in the graph:
    - **radius** (number) - radius on the point in the chart;
  	- **[eventRadius](api/ui.chart_eventradius_config.md)** (number) - radius of the virtual circle which events will fire for items within;
    - **borderColor** (hex code) - the color of the point border;
    - **borderWidth** (number) - the width for the border (if set, point take square shape);
    - **color** (hex code) - color of the points
	- **shadow** (boolean) - if *true* makes point cast shadows. *False* by default. 

##Style Presets

Presets simplify chart initializing and contain item setting. They are defined by the **preset** property and can be of the following types: 

<img src="desktop/chart_scatter_round.png">

- **round** - semi-transparent blue round points (on the picture above)
- **square** - green squares with borders
- **diamond** - wine red diamond-shaped points

{{sample 08_chart/10_scatter_chart/03_style_presets.html }}

##Scatter Chart Series

Chart series allow presenting different graphs within one and the same chart. The graphs differ in color. Settings for the graphs form objects that are placed into the **series** array. 

<img src="desktop/scatter_series.png"/>

{{sample 08_chart/10_scatter_chart/04_series.html }}

See the common rules of **series definition** [here](desktop/chart_series.md). 

With chart series, [legend](desktop/chart_legend.md) should be used to distinguish between graph values. At the same time, legend markers become clickable and allow to show and hide dedicated graphs. 