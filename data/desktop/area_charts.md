Settings for Area Charts
=============

- **value** (template) - item template from the dataset;
- **data / url**  - the datasource;
- **color** (hex code, template) - color for the colored area;
- **alpha** (a number between 0 and 1) - the transparency of the colored area.

Area chart can be supplied with common functionality that is true for all chart types: 

- **Scales,** horizontal and vertical lines with values. See [Rules of Scale Building](desktop/chart_scales.md) for details. 
- [Tooltips](desktop/chart_tooltip.md), pop-up infotips that show the exact value of the key points. 
- [Legend](desktop/chart_legend.md), colored markers that explain what each chart within the scales mean. 

##Chart Series

Both **Area** and **StackedArea** charts support presenting graphs for several objects (series).

Series for chart is an array of objects with settings for each graph. [Details here](desktop/chart_series.md). 

<img src="desktop/charts_area.png"/>

{{editor http://webix.com/snippet/1b38f53a	Area Chart: Several Graphs in One Chart}}

{{editor http://webix.com/snippet/0708720c	Stacked Area Chart}}


[Back to all chart types](desktop/chart_types.md)


