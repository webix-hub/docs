
{{memo a single-month calendar that allows users to select dates and move to the next/previous month}}

The control supports all date and time formats. Besides the days of the month, it can display day headings for the week days, the week number, a title with the month name and year, hour and minite selectors. Customizable and mostly used as a flat calendar. Check [calendar](desktop__calendar.md) documentation for more detailed description.

### Constructor

~~~js
	var calendar = webix.ui({
		view:"calendar", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_calendar({
		...config options goes here..
	});
~~~
