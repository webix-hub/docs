onBeforeDateSelect
=============


@short:
	fires when a user clicks on a date but before it is selected in the calendar

@params:
- date		date		the selected date object 

@example: 
	
$$('calendar1').attachEvent("onBeforeDateSelect", function(date){
    //... some code here ... 
});

@template:	api_event
@defined:	ui.calendar

@related: 
	desktop/calendar.md
@relatedapi:
	api/ui.calendar_onafterdateselect_event.md
	api/ui.calendar_ondateselect_event.md
	
@descr: