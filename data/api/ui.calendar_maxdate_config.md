maxDate
=============


@short: set man limit for selected date
	

@type: Date,string
@example:
{ view:"calendar", maxDate:"2012-04-05" }

@template:	api_config
@descr:


Dates greater than the defined one can't be selected.

Value can be either a **string** formatted with the current [parseFormat](api/i18n_parseformat_other.md) or **Date** object.

@relatedsample:
	09_calendar/08_disabled_dates.html
@related:
	desktop/calendar.md#disablingdatesandtimeslotsincalendar
@relatedapi:
	api/ui.calendar_mindate_config.md
    api/ui.calendar_blockdates_config.md