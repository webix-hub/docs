Using Sparklines in Datatable
===================

Sparklines are small graphs embedded into the datatable and used for presenting the general variation of certain parameters.
Each data value is specified as a point in the sparkline. Depending on the value, points are located at a different height relative to each other.

<img style="display:block; margin-left:auto;margin-right:auto;" src="datatable/sparklines.png">

{{note Pay attention that in Internet Explorer Sparklines functionality is available in versions 9+.}}

Sparklines are set in the datatable through the **{common.sparklines()}** template. The column's id coincides with the property in the data set that contains data values. 
The Sparklines chart is built on the basis of these values:

~~~js
webix.ui({
  view:"datatable",
  columns:[
	{ id:"name", header:"Name", width:150},
	{ id:"avIncome", header:"Income", width:120},
	// sparklines
	{ 
        id:"income", 
        header:"Income per Period", 
        template:"{common.sparklines()}", 
        width:160
    }
  ],
  autoheight:true,
  autowidth:true,
  data: [
	{ id:1, name:"Austria", income:[150,200,170,210,250,190], avIncome: 200},
	{ id:2, name:"France", income:[230,300,220,270,210,250], avIncome: 246.67},
	{ id:3, name:"Germany", income:[250,240,300,230,270,280], avIncome: 255.83},
	{ id:4, name:"UK", income:[280,230,280,290,260,210], avIncome: 250.83}
  ]
});
~~~

{{sample 60_pro/01_datatable/08_sparklines/01_init.html}}

Sparklines Types
------------------

There are six types of Sparklines representation available:

- <a href="#line">Line - the default one</a>
- <a href="#area">Area</a>
- <a href="#bar">Bar</a>
- <a href="#spline">Spline</a>
- <a href="#splinearea">SplineArea</a>
- <a href="#pie">Pie</a>

To create a template function for a sparkline with the type different from the default one, use the *webix.Sparklines.getTemplate("type_name")* method.

<h3 id="line">Line Sparklines</h3>

<img src="datatable/line_sparklines.png">

~~~js
{ 
	id:"income",
    header:"Income per Month", 
    template: "{common.sparklines()}", 
    width:200
}
~~~

{{sample 60_pro/01_datatable/08_sparklines/01_init.html}}

<h3 id="area">Area Sparklines</h3>

<img src="datatable/area_sparklines.png">

~~~js
{
	id:"income", 
    header:"Income per Month", 
    template: webix.Sparklines.getTemplate("area"), 
    width:200
}
~~~

{{sample 60_pro/01_datatable/08_sparklines/02_area.html}}

<h3 id="bar">Bar Sparklines</h3>

<img src="datatable/bar_sparklines.png">


~~~js
{ 
	id:"balance", 
    header:"Balance per Month", 
    template: webix.Sparklines.getTemplate("bar") , 
    width:200
}
~~~

{{sample 60_pro/01_datatable/08_sparklines/03_bars.html}}

<h3 id="spline">Spline Sparklines</h3>

<img src="datatable/spline_sparklines.png">

~~~js
{ 
	id:"income", 
    header:"Income per Month", 
    template: webix.Sparklines.getTemplate("spline"), 
    width:200
}
~~~

{{sample 60_pro/01_datatable/08_sparklines/04_spline.html}}

<h3 id="splinearea">SplineArea Sparklines</h3>

<img src="datatable/spline_area_sparklines.png">

~~~js
{ 
	id:"income", 
    header:"Income per Month", 
    template: webix.Sparklines.getTemplate("splineArea"), 
    width:200
}
~~~

{{sample 60_pro/01_datatable/08_sparklines/05_splinearea.html}}

<h3 id="pie">Pie Sparklines</h3>

<img src="datatable/pie_sparklines.png">

~~~js
{ 
	id:"income", 
    header:"Income per Month", 
    template: webix.Sparklines.getTemplate("pie"), 
    width:200
}
~~~

{{sample 60_pro/01_datatable/08_sparklines/06_pie.html}}

Sparklines Tooltips
--------------------

You can specify tooltips for sparklines values in datatable. They will appear when the user will move the mouse pointer over the sparklines items (bars, sectors).

Sparklines tooltip is set via the "tooltip" template. The template function takes a data item of Sparkline as the first parameter.


<img src="datatable/sparklines_tooltips.png">

~~~js
webix.ui({    
    view:"datatable",
    columns:[
   	 {
   		 id:"values", header:"Values", template: "{common.sparklines()}",
   		 tooltip: function(obj, common, value, index){
   			if(!value)
   			 	return "";
   			 return obj.name+",<br/>"+value.month+" : <b>"+value.value+"</b>";
   		 }
   	 },
   	 ...
    ],
    tooltip: true,
    ...
    data: [
   	 {id: 1, name: "Austria", values: [
   		 {value: 2000, month: "January"},
   		 {value: 1000, month: "February"},
   		 {value: 3000, month: "March"}
   	 ]},
   	 ...
    ]
});
~~~

{{sample 60_pro/01_datatable/08_sparklines/07_tooltips.html}}


Customizing Sparklines
-----------------

{{todo this section should tell about customization in general and about setting colors in particular }}

You can customize sparklines by providing the custom options in the configuration: 

~~~js
webix.Sparklines.getTemplate({
 	type:"bar", //sparkline type
    paddingY:0, //other settings
    origin:300
});
~~~

{{sample 60_pro/01_datatable/08_sparklines/10_settings.html}} 

The options depend on the sparkline type in use: 

###Line sparkline settings 

- paddingX - left and right padding
- paddingY - top and bottom paddings
- radius - point radius
- eventRadius - radius of a clickable area around the point
- minHeight - minimal height
- css - custom CSS class for the sparkline
- origin - scale origin
- scale - maximum scale value 
- color - line color

###Bar sparkline settings 

- paddingX - left and right padding
- paddingY- top and bottom paddings
- width - bar width
- margin - bar margin
- minHeight - minimal height
- origin - scale origin
- itemCss - bar css
- scale - maximum scale value 
- color - bar color
- negativeColor - color of the bars below the X scale

###Area sparkline settings 

- paddingX - left and right padding
- paddingY - top and bottom paddings
- radius - point radius
- eventRadius - radius of a clickable area around the point
- minHeight - minimal height
- css - custom CSS class for the sparkline
- color - line color

###Pie sparkline settings 

- paddingY - top and bottom paddings
- css - custom CSS class for the sparkline
- color - pie color

###Spline sparkline settings 

- paddingX - left and right padding
- paddingY - top and bottom paddings
- radius - point radius
- eventRadius - radius of a clickable area around the point
- minHeight - minimal height
- css - custom CSS class for the sparkline


###Setting Sparklines Colors

There are two variants of configuring sparklines colors using the *color* property:

- to set a custom color for sparklines 

~~~js
{ 
	id:"income", 
    header:"Custom color", 
    template: webix.Sparklines.getTemplate({type:"area", color: "#5868bf"}),
      width:200
}
~~~

- to specify different colors of sparklines for datatable rows  

~~~js
var bar1 = webix.Sparklines.getTemplate({type:"bar", color: "#5868bf"});
var bar2 = webix.Sparklines.getTemplate({type:"bar", color: "#3ea4f5"});

...

{ 
	id:"income", 
    header:"Row color", 
    template: function(obj,type,data,column,index){
       var template =(index%2?bar1:bar2);
           return  template.apply(this,arguments);
	}, 
	width:200
}
~~~

{{sample 60_pro/01_datatable/08_sparklines/08_colors.html}}

<h3 id="neg_color">Negative color option for Bar sparklines</h3>

You can set a certain color for a negative value while rendering a Bar sparkline.
It is set by the *negativeColor* property:

~~~js
{ 
	id:"income", 
    header:"Negative color", 
    template: webix.Sparklines.getTemplate({type:"bar", negativeColor: "#d86c79"}),
      width:200
}
~~~

<img src="datatable/sparklines_colors.png">

{{sample 60_pro/01_datatable/08_sparklines/08_colors.html}}


Sparklines Outside of DataTable
------------------

You can also use sparklines separately, not just in datatable cells. For example, you can place them into the List view: 

<img src="datatable/sparklines_outside_datatable.png">

For this purpose, you need to create a template function for a sparkline and use it in a list template. 
As well as any other template, sparkline template function returns an HTML string. It takes two parameters:

- data - data collection for rendering
- type - an object that contains size properties ("width" and "height") 

If each list item contains only a sparkline, you can set a sparkline template as a list template. In this case sparklines will take the sizes of list items:


~~~js
var sparkline = webix.Sparklines.getTemplate({type:"bar", color: "#5868bf"});

webix.ui({
	view:"list",
	template: sparkline, 
	type:{ height: 50, width:300 },
    data: [
		{id: 1, data: [710, 780, 390, 660, 600] },
		{id: 2, data: [810, 500, 780, 800, 940] },
		...
	]
});
~~~

Sparkline template can also be used inside of a list template. In this case you need to pass data and object with sizes into the sparkline template:

~~~js
var sparkline = webix.Sparklines.getTemplate({type:"bar", color: "#5868bf"});

webix.ui({
	view:"list",
	type:{ height: 80, width:300 },
	template:function(obj){
		return obj.name + "<div style='height:50px'>" + 
        	sparkline(obj.data, { width:300, height: 50 }) + "</div>";
	},
	data: [
		{id: 1, name: "Austria", data: [710, 780, 390, 660, 600] },
		{id: 2, name: "France", data: [810, 500, 780, 800, 940] },
		...
	]
});
~~~


{{sample 60_pro/01_datatable/08_sparklines/09_outside.html}}

@edition:pro