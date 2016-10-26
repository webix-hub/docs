

{{memo A daterange-based suggest control}}

It offers select options in the form of the Webix [DateRange](desktop/daterange.md) widget.
Daterangesuggest can be used standalone or as a suggest list for [text](api/refs/ui.text.md), 
[combo](api/refs/ui.combo.md) and [richselect](api/refs/ui.richselect.md) controls, as well as component [editors](api/refs/editors.md).

### Constructor

~~~js
webix.ui({ 	
	view:"daterangepicker", 
	name:"custom", 
	width:500, 
	label:"Custom",
	suggest:{
		view:"daterangesuggest",
		body:{
			calendarCount:1,
			icons:false,
			timepicker:true
		}
	}
});
~~~

### Where to start

- [Overview of the DateRangeSuggest Control](desktop/daterangepicker.md)
- [Samples](http://docs.webix.com/samples/60_pro/02_form/11_daterangepicker.html)
