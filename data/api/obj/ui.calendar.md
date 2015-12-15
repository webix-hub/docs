
{{memo a single-month calendar that allows users to select dates and move to the next/previous month}}

The control supports all date and time formats. Besides the days of the month, it can display day headings for the week days, the week number, a title with the month name and year, hour and minite selectors. Customizable and mostly used as a flat calendar. Check [calendar](desktop/calendar.md) documentation for more detailed description.

### Constructor

~~~js
var calendar = webix.ui({   
	view:"calendar",
    date:new Date(2015,3,16),
    events:webix.Date.isHoliday, 
    weekHeader:true
});
~~~

### Where to start

- [Overview of the Calendar Widget](desktop/calendar.md)
- [Samples](http://docs.webix.com/samples/09_calendar/index.html)
