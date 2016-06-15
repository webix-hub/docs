Common Functions to Switch Between Views
===================

When switching views with the help of API, you can refer either to the cells and view in them or to the [switching controls](desktop/tabbar_switching.md). 

##Setting Value for the Tabbar/Segmented/Tabview

Either of the controls as well as tabview have common initialization pattern where **tabs** are stored in the **options** array: 

~~~js
{view:"tabbar", id:"tabbar1", multiview:true, options: 
	[{id:"1", value:"Tab1"}, {id:"2", value:"Tab2"}]
}
~~~

Tabs are connected to the multiview cells, so if you set the value for button, the dedicated view will be opened: 

~~~js
$$("tabbar1").setValue("2"); //the 2nd tab with "Tab2" value will be set
~~~


##Showing the Necessary View

These functions are used to show the specified view: 

- **show();** - makes the specified view visible. Is called from the needed view;
- **back();** - switches to the view you've come from. Is called from the multiview object. 

To enable switching between views you can:

- make use of a JS [button](desktop/button.md) from this lib or a standard HTML button and attach the function to it;
- trigger the switching function on any event in the app. For instance, "onItemClick" event allows clicking any component (not necessarily a button) and make the specified view visible. 

{{snippet
Two-Cell Multiview
}}
~~~js
webix.ui({
    view:"multiview", 
    id:"views",
    cells:[
		{ id:"listView", view:"list" },
		{ id:"formView", view:"form" }
    ]
 })
 
 //html button 
 <input type='button' onclick='$$("cell_a").show()' value="show cell A"> 

//list item clicking enables the switching
$$("listView").attachEvent("onItemClick",function(id){
        $$('formView').show();

//back navigation - fires alongside with a form-saving function
function save(){
	$$("formView").save();
	$$("views").back();
}
~~~

{{sample 20_multiview/02_navigation.html }}

##Nested Multiview

If a cell is a multiview itself, i.e. contains several cells of its own, the switching function requires **true** argument to get to these lower-level views. 

~~~js
rows:[
	{ cells:[ //1st cell
		{
			id:"listView",
			view:"list"},
		{
			id:"chartView", //2nd cell
			cells:[
				{
					view:"chart", 1st sub-cell
					type:"bar"},
				{                              
					view:"chart", //2nd sub-cell
					type:"donut"}
			]
		}
	]
}]
~~~ 

To switch from listView to any of ChartView cells, you need to call the **show(true);** function:

~~~html
<input type='button' onclick='$$("chart1").show(true)' 
	value="show chart1 and parents">
~~~
                  
At the same time, if you switch between chart1 and chart2 that lie on the same level, you needn't refer to the parent view and can do with the **show();** function. 

{{sample 20_multiview/03_nested_multiviews.html }}

Related Articles

- [Tabview Functionality](desktop/tabview.md)
- [Controls to Switch Between View Cells](desktop/tabbar_switching.md)