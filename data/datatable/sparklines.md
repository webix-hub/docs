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

###Area Sparklines

<img src="datatable/area_sparklines.png">

###Bar Sparklines

<img src="datatable/bar_sparklines.png">

###Spline Sparklines

<img src="datatable/spline_sparklines.png">

###SplineArea Sparklines

<img src="datatable/spline_area_sparklines.png">

###Pie Sparklines

<img src="datatable/pie_sparklines.png">

Sparklines Tooltips
--------------------

<img src="datatable/sparklines_tooltips.png">

Setting Sparklines Colors
-----------------

<img src="datatable/sparklines_colors.png">

Sparklines outside of DataTable
------------------



@edition:pro