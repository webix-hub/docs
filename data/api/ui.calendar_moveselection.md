moveSelection
=============


@short: moves date selection in the specified direction 
	

@params:
- direction	string	the move direction


@example:
  $$("calendar").moveSelection("top");


@relatedapi: api/ui.calendar_selectdate.md

@template:	api_method
@descr:
The method can take only one of a predefined set of values.<br>
The predefined values are:

####Calendar 

- "up/left" - moves selection to the previos date;
- "right/down" - moves selection to the next date;
- "pgup" - moves selection to the same date in the previous month;
- "pgdown" - moves selection to the same date in the next month;
- "top" - moves selection to the first date in month;
- "bottom" - moves selection to the last date in month;

If calendar shows a time selection view, "left" and "right" directions are used to change hours while "up" and "down" arrows change minutes.





