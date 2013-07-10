isHoliday
=============


@short: returns true if date is a holiday
	

@params:
- date      object       date object

@returns:
- holiday     bool    true if date is a holiday	

@example:
webix.ui({
	view:"calendar",
    date:new Date(2012,3,16),
	events:webix.Date.isHoliday
});

@related:
	desktop/calendar.md
@relatedsample:
	09_calendar/01_init.html

@template:	api_method
@descr:

If true, the method sets *webix_cal_event* CSS class to the calendar item (red highlighting). 

By default returns true for all Sundays and Saturdays (0 and 6). Redefine it if you wish your own sets of holidays. 

The following code helps apply holiday highlighting to Fridays, Saturdays and Sundays. 

~~~js
webix.Date.isHoliday = function(day){ 
		day = day.getDay();
		if (day === 0 || day==5 || day == 6) return "webix_cal_event"; 
	}
~~~

{{sample 09_calendar/04_custom_holidays.html}}