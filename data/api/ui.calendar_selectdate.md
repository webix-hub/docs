selectDate
=============



@short:
	selects the specified date

@params:
- date		string, object		a Date object or a string representing a date




@example:
webix.ui({
    container:"box",
    view:"calendar",
    id:"calendar1"
});
$$('calendar1').selectDate(new Date(2012,3,30));
 
 
@relatedapi:
	api/ui.calendar_getSelectedDate.md
    api/ui.calendar_setvalue.md
@related: 
	desktop/calendar.md
@template:	api_method
@defined:	ui.calendar	
@descr:

The method is analogous to  api/ui.calendar_setvalue.md.
