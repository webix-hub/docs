
{{memo a control that allows the user to select a date}}

 The control combines an editable text field with a drop-down calendar. Supports all date and time formats. Besides the days of the month, it can display hour and minute selectors. Check [datepicker](desktop/datepicker.md) documentation for more detailed description.

### Constructor

~~~js
var datepicker = webix.ui({
 	view:"datepicker", 
  	value: new Date(2012, 6, 8), 
  	label: "Date", 
  	timepicker: true,
  	width: 300
});
~~~

### Where to start

- [Overview of the Datepicker Control](desktop/datepicker.md)
- [Samples](http://docs.webix.com/samples/13_form/01_controls/13_datepicker.html)

