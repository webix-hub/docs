calendarWeekHeader
=============


@short:
	specifies the label for the column with weeks numbers

@type: string
@example:
webix.ui({
	container:"box",
	view:"calendar",
    weekNumber:true,
    calendarWeekHeader:"W/"
});


@template:	api_config

@related: 
	desktop/calendar.md
@defined:	ui.calendar	
@descr:
{{note
The parameter makes sense only when the api/ui.calendar_weeknumber_config.md parameter is set to *true*.
}}

The default value is 'W#'.

<img src='api/calendar_week_header_property.png'></img>

