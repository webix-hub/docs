gradient
=============


@short:
	specifies the chart gradient 

@type: boolean,string,function
@example:
webix.ui({
	view:"chart",
	type:"bar",
	gradient:"falling",
    ...
})

@template:	api_config
@defined:	ui.chart
@relatedsample:
	08_chart/02_color/01_custom.html
@related:
	desktop/chart_coloreffects.md
    desktop/bar_charts.md
    desktop/pie_charts.md
@descr:
{{note
The property is applicable only to the **bar**, **pie** charts
}}

###Bar charts
In **bar** charts the property can be defined as:

- a string
- a function

####String definition

As a string, the propperty  takes one of predefined values, which are:

- *'light'* (default value)
- *'3d'*
- *'rising'*
- *'falling'*

~~~js
webix.ui({
    view:"chart",
    type:"bar",
    gradient:"rising",
    ...
})
~~~

{{sample
08_chart/01_initialization/01_load_xml.html
}}

####Function definition

As a function, the property accepts 1 parameter - a canvas gradient object.<br>
You may use the *addColorStop(position, color)* method to assign the required colors to the gradient object:

- **addColorStop(position, color)**
  - *position* -  a number between 0.0 and 1.0 that defines the relative position of the color in the gradient
  - *color* - a string representing a CSS color

~~~js
webix.ui({
	view:"chart",
    type:"bar",
    gradient:function(gradient){
		gradient.addColorStop(0.0,"#FF0000");
		gradient.addColorStop(0.8,"#FFFF00");
		gradient.addColorStop(1.0,"#00FF22");
	},
    ...
}) 
~~~

{{sample
08_chart/02_color/03_gradient.html
}}

###Pie Charts
In **pie** charts the property can have only a *bool value*. 

The *true* value enables the gradient in the chart:

~~~js
webix.ui({
	view:"chart",
    type:"pie",
    gradient:true
    ...
})

~~~

{{sample
08_chart/04_pie_chart/04_donut.html
}}



@seolinktop: [best ui framework](https://webix.com)
@seolink: [chart library](https://webix.com/widget/charts/)