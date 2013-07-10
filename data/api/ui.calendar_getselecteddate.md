getSelectedDate
=============



@short:
	gets the current selected date


@returns:
-date	object   a Date object that represents the current selected date
	

@example:
webix.ui({
	container:"box",
	view:"calendar",
    id:"calendar1"
});
$$('calendar1').selectDate(new Date(2012,3,30));

$$("calendar1").getSelectedDate(); // -> Mon Apr 30 2012 00:00:00 GMT+0300 (EEST)

@template:	api_method
@related: 
	desktop/calendar.md
@relatedapi:
	api/ui.calendar_selectDate.md
    api/ui.calendar_getvisibleDate.md
    api/ui.calendar_getvalue.md
@defined:	ui.calendar	
@descr:
The method is analogous to api/ui.calendar_getvalue.md.

