DateRange
===========


##API Reference

- [Methods, properties and events](api/refs/ui.daterange.md)
- [Samples](http://docs.webix.com/samples/60_pro/14_daterange/01_daterange.html)

##Overview

DateRange is a UI-related widget based on desktop/calendar.md and inherited from [Layout](desktop/layout.md). 

This interactive tool includes several calendars and allows selecting a date range. You can also pick the time by using the timepicker at the bottom of the widget.

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/daterange.png">

{{sample 60_pro/14_daterange/01_daterange.html}}

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
- timepicker - (boolean) sets a time selector below the calendars' grids
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

Configuring DateRange Calendars
-----------------

You can set specific configuration for all calendars of the DateRange widget. You should use the **calendar** property for this purpose.

It is an object that can contain the available [Calendar properties](api/refs/ui.calendar_props.md): 

~~~js
webix.ui({
	view:"daterange",
    //calendar properties
    calendar:{
    	weekNumber:true
    }
});	
~~~


##DateRangePicker 

DateRange can be shown by user request, e.g. when a user wants to pick a date range and time to fill the form. 
In this case, you can make use of the desktop/daterangepicker.md control. 

Thus, you won't have to initialize DateRange, as it will appear when you click the DateRangePicker icon. 

<img src="desktop/daterange_picker.png"/>

~~~js
webix.ui({
	view:"form", 
	elements:[
    	{view:"daterangepicker", name: "default", label: 'Default'} 
	]
});
~~~

{{sample 60_pro/02_form/11_daterangepicker.html}}

@edition:pro