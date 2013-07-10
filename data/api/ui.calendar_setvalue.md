setValue
=============



@short:
	sets a new value for the component

@params:
- date		string, object		a Date object or a string representing a date


@example:
webix.ui({
    container:"box",
    view:"calendar",
    id:"calendar1"
});
$$('calendar1').setValue(new Date(2012,3,30));


@template:	api_method
@relatedapi:
	api/ui.calendar_getvalue.md
	api/ui.calendar_selectDate.md
@related: 
	desktop/calendar.md
@defined:	ui.calendar	
@descr:
The method is analogous to  api/ui.calendar_selectDate.md.

