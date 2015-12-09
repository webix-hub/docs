Settings for Radar Chart
=============



##Custom Initializzation

###Data Presentation

- **value** (template) - item template from the dataset;
- **data / url** - datasource;
- **item** - object property that contains settings for radar points. If you don't want to set point, omit this setting.
    - **borderColor** (hex code) - border color of the point;
    - **radius** (number) - radius on the point in the chart;
    - **[eventRadius](api/ui.chart_eventradius_config.md)** (number) - radius of the virtual circle which events will fire for items within;
	- **color** (hex code, template) - color for radar points;
    - **borderWidth** (int) - border width of the point (for square points;
- **line** - object property that contains setting for the line
    - **color** (hex code) - color of the outline;
    - **width** (number) - width of the outline;
- **fill** (hex code) - color to fill the area limited by the outline;
- **disableLines** (boolean) - enable/disable the line that joins points. 

###Scales

- **xAxis** - label for each radar line that goes from the center to the outside:
    - **template** (string) - text labels for lines;
    - **lineColor** (hex code) - color of radar lines;
- **yAxis** - settings for the radar map and inner lines(circles):
	- **lineShape** (string) - shape of the outer border of the radar area. *'arc'* helps make a circle. 
    - **bg**(hex code) - background color for the radar area;
    - **lines** (boolean) - if *false*, inner circles of the radar area aren't shown

##Radar Charts Presets
The library provides 3 presets for Radar charts. To set one of presets you should specify the api/ui.chart_preset_config.md property for the chart:

~~~js
webix.ui({
	view: "chart",
    type: "radar",
    preset: "line",
	...
};
~~~

<img src="desktop/radar_chart_presets.png" />

{{editor http://webix.com/snippet/88dae119	Radar Chart: Style Presets}}


## Radar Chart Series

Chart series is an array of settings for each graph to display different data in comparison.

In case of chart series, [legend](desktop/chart_legend.md) markers become buttons to show and hide dedicated charts. 

<img src="desktop/chart_series_radar.png" />

{{editor http://webix.com/snippet/fe681c8b	Radar Chart: Lines}}

Read more about [Chart Series](desktop/chart_series.md). 

[Back to all chart types](desktop/chart_types.md)