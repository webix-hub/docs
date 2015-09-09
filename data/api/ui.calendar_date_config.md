date
=============


@short:
	sets the initial date of the calendar (particularly month and year).

@type: Date,string
@example:
webix.ui({
	weekHeader:true,
	date:new Date(2012,3,16),
	view:"calendar"
});

@relatedsample:
	09_calendar/01_init.html
@related: 
	desktop/calendar.md
    helpers/date_formatting_methods.md
    desktop/working_with_dates.md
@template:	api_config
@defined:	ui.calendar	
@descr:

Value can be either a **string** formatted with the current [parseFormat](api/i18n_parseformat_other.md) or **Date** object.

