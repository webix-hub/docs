{{memo A datatable-based suggest control. }}

Offers select options in the form of Webix [datatable](api/refs/ui.datatable.md) component. 

Can be used standalone or as a suggest list for [text](api/refs/ui.text.md), [combo](api/refs/ui.combo.md) and [richselect](api/refs/ui.richselect.md) controls, 
as well as component [editors](api/refs/editors.md).

###Constructor

~~~js
webix.ui({
	view:"richselect", 
  	value:1, 
  	options:{
		view:"gridsuggest",
     	data:[
        	{id:1, name:"One", year:1988, color:"Red"}, 
			{id:2, name:"Two", year:1996, color:"Blue"},
			{id:3, name:"Three", year:1997, color:"Green"}, 
			{id:4, name:"Four", year:2011, color:"Orange"},
			{id:5, name:"Five", year:2000, color:"Grey"}, 
			{id:6, name:"Six", year: 1994, color:"Yellow"}
        ]
    }
});
~~~

###Where to start

- [Overview of Grid Suggest](desktop/gridsuggest.md)
- [Samples](http://docs.webix.com/samples/32_thirdparty/13_gridselect.html)


