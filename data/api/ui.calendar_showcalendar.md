showCalendar
=============

@short:
	shows the calendar according to the year and month set in the specified date 

@params:
- date		string, Date		a Date object or a string representing a date

@example:
webix.ui({
    container:"box",
    view:"calendar",
    id:"calendar1"
});
$$('calendar1').showCalendar(new Date(2011,5,13));

@template:	api_method
@related: 
	desktop/calendar.md
@defined:	ui.calendar	
@descr:
Note, the method doesn't selects the specified date, so specifying the day is optional.

