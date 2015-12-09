Color Effects
=================

Chart elements can be colored in various way, fixed color being defined by the **color** parameter that takes hex code.
By default items are colored in a rainbow manner.

<img src="desktop/chart_colors.png"/>

###Custom color

Different color for items can be defined in the dataset already. 

~~~js
var data=[
	{ id:1, sales:20, year:"02", color: "#ee4339"}
];
    
webix.ui({
	view:"chart",
	type:"bar",
	value:"#sales#",
	color:"#color#", 
	...
})
   
~~~

{{editor http://webix.com/snippet/430e6b06	Basic Coloring}}


###Color Template(Function)

If you want chart elements being colored according to a specific criterion, you should define colors with the help of a function. 

<img src="desktop/colors_by_function.png"/>

{{snippet
Here sales bars are distinquished by sales amount. 
}}
~~~js
webix.ui({
	view:"chart",
    type:"bar",
	value:"#sales#",
	color:function(obj){
		if (obj.sales > 60)
			return "#f6960a";
		else
			return "#0ab6f6";
	}
})
~~~

{{editor http://webix.com/snippet/120a5e9b	Specifying Color as a Function}}


###Color Gradient

<img src="desktop/gradient.png"/>

Gradient can be applied to [bar](desktop/bar_charts.md) and [pie](desktop/pie_charts.md) charts. It doesn't contain any information about the data, still it make the chart look more stylish and attractive.

Gradient property can take the following values: 

- **boolean**  - true or false, the easiest way to enable/disable gradient;
- **string** - "falling", "rising" to the direction of color shade; "light" and "3D" to add style effects for gradient;
- **function**. 

Colors for gradient are defined with the help of a **addColorStop()** method that takes 
gradient position (a number between 0.0 and 1.0) and desired color codes as parameters. 


~~~js
gradient:function(gradient){
	gradient.addColorStop(1.0,"#FF0000");
	gradient.addColorStop(0.2,"#FFFF00");
	gradient.addColorStop(0.0,"#00FF22");
}
~~~

{{editor http://webix.com/snippet/2aa7c00a	Color Gradient}}

By default gradient is disabled in the pie chart, so you need to enable it by assigning **true**value for the gradient parameter. 
