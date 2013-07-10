onBeforeMonthChange
=============


@short:
	triggered immediately before month in selector is changed.

@params:
- prev_date		date		the previously selected date
- next_date		date		the currently selected date

@example: 
	
$$("calendar1").attachEvent("onBeforeMonthChange", function(prev_date, next_date){
    //... some code here ... 
});

@template:	api_event

@related: 
	desktop/calendar.md
@defined:	ui.calendar
	
@descr:


