startOnMonday
=============


@short: defines whether weeks start on Monday.
	

@type:boolean

@example:
var isMonday = webix.Date.startOnMonday;

if (isMonday){
	webix.Date.startOnMonday = false;
}

@template:	api_config
@related:
	desktop/calendar.md
    
@relatedsample:
	09_calendar/02_start_date.html
    
@descr:

The default value is 'false' (weeks start on Sunday).
