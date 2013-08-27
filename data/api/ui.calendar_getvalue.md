getValue
=============



@short:
	returns the current value of the component

@returns:
-date	object   a Date object that represents the current selected date	

@example:
webix.ui({
	container:"box",
	view:"calendar",
    id:"calendar1"
});
$$('calendar1').selectDate(new Date(2012,3,30));

$$("calendar1").getValue(); // -> Mon Apr 30 2012 00:00:00 GMT+0300 (EEST)

@template:	api_method
@relatedapi:
	api/ui.calendar_getselecteddate.md
    api/ui.calendar_getvisibledate.md
    api/ui.calendar_setvalue.md
    
@defined:	ui.calendar	
@related: 
	desktop/calendar.md
@descr:
The method is analogous to api/ui.calendar_getselecteddate.md.


