calendarHeader
=============


@short:
	the format for the title with the month name and year

@type: string
@example:
webix.ui({
		container:"box",
		date:new Date(2012,3,16),
		view:"calendar",
        calendarHeader:"%F, %Y"
});


@template:	api_config
@defined:	ui.calendar	
@related: 
	desktop/calendar.md
    helpers/date_formatting_methods.md
@descr:
The default value of the parameter is "%F %Y".

<img src='api/calendarHeader_property.png'>

