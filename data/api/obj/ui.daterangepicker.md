
{{memo A control that allows the user to select a date range}}

The control combines an editable text field with a set of drop-down calendars. It supports all date and time formats. 
Besides the days of the month, it can display hour and minute selectors. 
Check [DateRangePicker](desktop/daterangepicker.md) documentation for a more detailed description.

### Constructor

~~~js
var daterangepicker = webix.ui({
	view:"daterangepicker",
	name:"default", 
	width:500, 
	label:"Default",
	value:{start: new Date(), end: webix.Date.add(new Date(), 1, "month")}
});	
~~~

### Where to start

- [Overview of the DateRange Control](desktop/daterangepicker.md)
- [Samples](http://docs.webix.com/samples/60_pro/02_form/11_daterangepicker.html)


