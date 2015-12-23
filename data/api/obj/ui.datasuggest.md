
{{memo A dataview-based suggest control. }}

Offers select options in the form of Webix [dataview](api/refs/ui.dataview.md) component.

Can be used standalone or as a suggest list for [text](api/refs/ui.text.md), [combo](api/refs/ui.combo.md) and [richselect](api/refs/ui.richselect.md) controls 
as well as the [editor](api/refs/editors.md) component.

###Constructor

~~~js
webix.ui({
  view:"richselect", 
  label:"Data", 
  value:1, options:{
	view:"datasuggest", data:[
    	{id:1, value:"One", year:1988, color:"Red"}, 
      	{id:2, value:"Two", year:1996, color:"Blue"},
      	{id:3, value:"Three", year:1997, color:"Green"}, 
      	{id:4, value:"Four", year:2011, color:"Orange"},
      	{id:5, value:"Five", year:2000, color:"Grey"}, 
      	{id:6, value:"Six", year: 1994, color:"Yellow"}]
	}
});
~~~

###Where to start

- [Overview of Dataview Suggest](desktop/datasuggest.md)
- [Samples](http://docs.webix.com/samples/32_thirdparty/14_dataselect.html)
