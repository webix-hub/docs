
{{memo a control that allows the user to select a date}}

 The control combines an editable text field with a drop-down calendar. Supports all date and time formats. Besides the days of the month, it can display hour and minite selectors. Check [datepicker](desktop/datepicker.md) documentation for more detailed description.

### Constructor

~~~js
	var datepicker = webix.ui({
		view:"datepicker", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_datepicker({
		...config options goes here..
	});
~~~
