pieInnerText
=============


@short:
	sets the template for the pie inner labels
@type: string,function
@example:
webix.ui({
	view:"chart",
    type:"pie",
    label:"#month#",
	pieInnerText:"#sales#",
	...
})


@template:	api_config
@related: 
	desktop/pie_charts.md
@relatedsample: 
	08_chart/04_pie_chart/02_3d_chart.html
@defined:	ui.chart	
@descr:
{{note
The property is applicable only to **pie** charts
}}

<br>

As a function, the property accepts a data object and is called for each data item:

~~~js
webix.ui({
	view:"chart",
    type:"pie",
	pieInnerText:function(obj){ return obj.sales;},
	...
})
~~~
<br>
<img src="api/pieInnerText_property.png"/>

@seolinktop: [easy javascript framework](https://webix.com)
@seolink: [chart javascript](https://webix.com/widget/charts/)