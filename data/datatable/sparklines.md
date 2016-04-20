Using Sparklines in Datatable
===================

Sparklines are small graphs embedded into the datatable and used for visual presentation of data values.
Each data value is specified as a point in the sparkline. Depending on the value, points are located at a different height relative to each other.

<img style="display:block; margin-left:auto;margin-right:auto;" src="datatable/sparklines.png">

Sparklines are set in the datatable through the **{common.sparklines()}** template. The template's id coincides with the property in the data set that contains data values. 
The sparklines chart will be built on the basis of these values:

~~~js
webix.ready(function(){
  grida = webix.ui({
  container:"testA",
  view:"datatable",
  columns:[
	{ id:"name", header:"Name", width:150},
	{ id:"income", header:"Income", template:function(obj){
		var arr = obj.income;
		var sum = 0;
		for(var i =0; i< arr.length; i++)
		sum +=  arr[i];
		return sum?(sum/arr.length).toFixed(2):0;
	}, width:120},
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
	{id:1, name:"Austria", income:[150,200,170,210,250,190,225,205,160,220,190,230]},
	{id:2, name:"France", income:[230,300,220,270,210,250,230,300,220,270,210,250]},
	{id:3, name:"Germany", income:[250,240,300,230,270,280,230,250,220,290,240,270]},
	{id:4, name:"UK", income:[280,230,280,290,260,210,230,220,280,210,240,280]}
  ]
});
~~~

{{sample 15_datatable/20_templates/09_sparklines.html}}

@edition:pro