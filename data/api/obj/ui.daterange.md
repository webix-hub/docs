
{{memo A set of calendars that lets a user to select a date range and switch between months and years}}

DateRange is highly customizable. It supports all date and time formats and is used for selecting dates and times in several calendars at once. 
Check  [DateRange](desktop/daterange.md) documentation for a more detailed description.


### Constructor

~~~js
var daterange = webix.ui({
	view:"daterange",
	calendarCount:4,
	timepicker:true,
	value:{
		start: new Date(), 
		end: webix.Date.add(new Date(), 2, "month")
	}
});	
~~~

### Where to start

- [Overview of the DateRange Control](desktop/daterange.md)
- [Samples](http://docs.webix.com/samples/60_pro/14_daterange/01_daterange.html)
