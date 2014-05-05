onAfterDateSelect
=============


@short:
	fires after a user has selected a date

@params:
- date		date		the selected date object

@example: 
	
$$('calendar1').attachEvent("onAfterDateSelect", function(date){
    //... some code here ... 
});

@template:	api_event
@defined:	ui.calendar

@related: 
	desktop/calendar.md
@relatedapi:
	api/ui.calendar_onbeforedateselect_event.md
	api/ui.calendar_ondateselect_event.md
	
@descr: