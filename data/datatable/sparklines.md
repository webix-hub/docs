Using Sparklines in Datatable
===================

Sparklines are small graphs embedded into the datatable and used for presenting the general variation of certain parameters.
Each data value is specified as a point in the sparkline. Depending on the value, points are located at a different height relative to each other.

<img style="display:block; margin-left:auto;margin-right:auto;" src="datatable/sparklines.png">

{{note Pay attention that in Internet Explorer Sparklines functionality is available in versions 9+.}}

Sparklines are set in the datatable through the **{common.sparklines()}** template. The column's id coincides with the property in the data set that contains data values. 
The sparklines chart is built on the basis of these values:

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

- Line - the default one
- Area
- Bar
- Spline
- SplineArea
- Pie

To specify the sparklines type different from the default one, use the webix.Sparklines.getTemplate("type_name") method.

###Area Sparklines

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

###Bar Sparklines

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

###Spline Sparklines

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

###SplineArea Sparklines

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

###Pie Sparklines

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

You can specify tooltips for datatable values. They will appear when the user will move the mouse pointer over the sparklines points.

<img src="datatable/sparklines_tooltips.png">

{{sample 60_pro/01_datatable/08_sparklines/07_tooltips.html}}

Setting Sparklines Colors
-----------------

There are two variants of configuring sparklines colors:

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
var bar2 = webix.Sparklines.getTemplate({type:"bar", color: "#3ea4f5", 
negativeColor:"#da4400" });

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


<img src="datatable/sparklines_colors.png">

{{sample 60_pro/01_datatable/08_sparklines/08_colors.html}}


Sparklines outside of DataTable
------------------

You can also use sparklines separately, not just in datatable cells. For example, you can place them into the List view with the help of the api/link/ui.list_template_config.md property:

~~~js
var bar1 = webix.Sparklines.getTemplate({type:"bar", color: "#5868bf"});
var bar2 = webix.Sparklines.getTemplate({type:"bar", color: "#3ea4f5"});


webix.ui({
	cols:[
      {
      	view:"list",
      	template:bar1, scroll:false, type:{ height: 50, width:300 },
      	data: []
      },
      {
        view:"list",
        scroll:false, type:{ height: 80, width:300 },
        template:function(obj){
        	return obj.name + "<div style='height:50px'>" + 
             bar2(obj.data, { width:300, height: 50 }) + "</div>";
        },
        data: []
     }]
})
~~~

<img src="datatable/sparklines_outside_datatable.png">

{{sample 60_pro/01_datatable/08_sparklines/09_outside.html}}

@edition:pro