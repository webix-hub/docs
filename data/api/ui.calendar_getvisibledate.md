getVisibleDate
=============



@short:
	gets  visible date

@returns:
-date	object   a Date object that represents the current visible date	

@example:
webix.ui({
	container:"box",
	view:"calendar",
    id:"calendar1"
});

$$("calendar1").getVisibleDate(); 

@template:	api_method
@relatedapi:
	api/ui.calendar_getvalue.md
    api/ui.calendar_getSelectedDate.md
@related: 
	desktop/calendar.md
@defined:	ui.calendar	
@descr:
The visible date takes its value according to this priority list:

1. If some date is selected in the calendar - **visible date == selected date**
2. If no date is selected, but the initial date is set  - **visible date == initial date**
3. If no date is selected, the initial date isn't set and the calendar displays the current month - <br> **visible date ==today's date**
4. If no date is selected, the initial date isn't set and  the calendar doesn't display the current month - <br> **visible date == the first day of the displayable month**


