blockDates
=============


@short: defines the selectable range
	

@type: function
@example:

{ view:"calendar", blockDates:function(date){
   if (date.getMonths() > 2) return false;
   return true;
}}

@relatedsample:
	09_calendar/08_disabled_dates.html
@related:
	desktop/calendar.md#disablingdatesandtimeslotsincalendar
@relatedapi:
	api/ui.calendar_mindate_config.md
    api/ui.calendar_maxdate_config.md
    


@template:	api_config
@descr:


