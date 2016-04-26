Using Sparklines in Datatable
===================

Sparklines are small graphs embedded into the datatable and used for presenting the general variation of certain parameters.
Each data value is specified as a point in the sparkline. Depending on the value, points are located at a different height relative to each other.

<img style="display:block; margin-left:auto;margin-right:auto;" src="datatable/sparklines.png">

Sparklines are set in the datatable through the **{common.sparklines()}** template. The column's id coincides with the property in the data set that contains data values. 
The sparklines chart is built on the basis of these values:

~~~js
webix.ready(function(){
  grida = webix.ui({
  container:"testA",
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

@edition:pro