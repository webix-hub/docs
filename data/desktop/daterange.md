DateRange
===========


##API Reference

- [Methods, properties and events](api/refs/ui.daterange.md)
- [Samples](http://docs.webix.com/samples/60_pro/14_daterange/01_daterange.html)

##Overview

DateRange is a UI-related widget based on desktop/calendar.md.It allows the user to include the DateRange picker and Time picker into an application. 

This interactive tool will be very helpful when it is necessary to select a date range while filling in a form.
You can also pick the time by using the timepicker at the bottom of the widget.

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/daterange.png">

Initialization
------------------

The code below will create the DateRange widget on the page:

~~~js
webix.ui({
	view:"daterange",
	calendarCount:4,
	icons:true,
	timepicker:true,
	value:{
		start: new Date(), 
		end: webix.Date.add(new Date(), 2, "month")
	}
});	
~~~

**Main properties**

- calendarCount - (number) sets the amount of calendars to be displayed
- icons - (boolean) specifies whether the ["Today" and "Clear"](api/ui.datepicker_icons_config.md) icons will be shown
- timepicker - (boolean) sets a time selector below the calendars grids
- value - (object) initial range that should be selected in the DateRange

Working with DateRange
---------------------

**Setting and getting selected range**


- **setValue**(object) - selects a date range in the calendars

As a parameter, takes an object with the *start* and *end* properties that contain the start and end Date object of the range.

~~~js
$$("daterange1").setValue({start:new Date(2016,9,30), end:new Date(2016,10,2)});
~~~

- **getValue()** - returns an object with currently selected range 

The returned object is non-formatted and consists of the start and end properties for start and end dates correspondingly.

~~~js
$$("daterange1").getValue(); 
// -> {start: Sun Oct 30 2016 00:00:00 GMT+0300 (Russia Standard Time), 
// end: Wed Nov 02 2016 00:00:00 GMT+0300 (Russia Standard Time)}
~~~


##DateRangePicker 

DateRange can be shown by user request, e.g. when a user wants to pick a daterange and time to fill the form. 
In this case, you can make use of the desktop/daterangepicker.md control. 

Thus, you won't have to initialize DateRange, as it will appear when you click the daterangepicker icon. 
The daterangepicker will be shown with the current date selected. 

<img src="desktop/date_picker.png"/>

~~~js
webix.ui({
	view:"toolbar", 
	type:"MainBar", 
	elements:[
    	{view:"daterangepicker",  name: "select_date",  label: 'Select Date' } 
	]
});
~~~

@edition:pro