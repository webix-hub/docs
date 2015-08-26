Date Formats
=================


You've got the possiblity to configure date formats of the scheduler without effort.

To set the desired option, just write it as it's stated in this documentation.<br> 
Beware! Configuration options should go before the code line with scheduler initialization.

~~~js
scheduler.config.day_header_date = "%d.%m.%Y";
//configuration options should go before the constructor
webix.ready(function(){
	webix.ui.fullScreen();
	webix.ui({
		view: "scheduler",
		id: "scheduler"
	});
	$$("scheduler").load("../scheduler/mobile.xml","scheduler");
});
~~~

{{sample
62_scheduler/01_basic/02_date_format.html
}}


Configuration options
-------------------------

- **scheduler.config.all_day_date** - (string) the format of presenting all-day events in the 'Selected event' view (by default, ”%l, %d %F %Y”)
- **scheduler.config.calendar_date** - (string) the date format of the header in the 'Month' view (by default, ”%F %Y”)
- **scheduler.config.calendar_hour** - (string) the format of hours in the 'Start(end) date edit form' (by default, ”%H:%i”)
- **scheduler.config.day_header_date** - (string) the date format of the header in the 'Day' view (by default, ”%d.%m.%Y”)
- **scheduler.config.form_all_day** - (string) the format of dates of the 'start', 'end' fields in the 'Edit form' in case the 'All day' option is checked (by default, ”%d-%m-%Y” )
- **scheduler.config.form_date** - (string) the format of dates of the 'start', 'end' fields in the 'Edit form' in case the 'All day' option isn't checked (by default, ”%d-%m-%Y %H:%i”)
- **scheduler.config.hour_date** - (string) the format of the time in the 'Week' and 'Month' views (by default, ”%H:%i”)
- **scheduler.config.item_date** - (string) the default date format for events in the 'Selected event' view (by default, )
- **scheduler.config.parse_date** - (string) the date format in data files. Used by the parser to recognize dates (by default, ”%Y-%m-%d %H:%i”)
- **scheduler.config.scale_hour** - (”%H” or ”%h”) the format of the hours in the 'Day' view (by default, ”%H”)
- **scheduler.config.week_header_date** -  (string) the date format of the header in the 'Week' view ("%d.%m.%Y")
- **scheduler.config.week_date** - (string) the date format of day titles in the 'Week' view ("%D, %d %M")



###**"Day"** view

<img src="mobile_scheduler/config_day_date.png"/>

###**"Week"** view

<img src="mobile_scheduler/config_week_date.png"/>

###**"Month"** view

<img src="mobile_scheduler/config_month_date.png"/>

###**Edit form**

<img src="mobile_scheduler/config_edit_allday.png"/>
 
<br> 
 
<img src="mobile_scheduler/config_edit_time.png"/>

###**Selected event** view

<img src="mobile_scheduler/config_selected_event.png"/>

###**Start(end) date edit form**

<img src="mobile_scheduler/config_date_edit_form.png"/>

Date format
---------------

Format string can contain any separator character and any element from the following list:

- **%y** - the year as a two-digit number ( 00 to 99 );
- **%Y** - the year as a four-digit number ( 1900–9999 );
- **%m** - the month as a number with a leading zero ( 01 to 12 );
- **%n** - the month as a number without a leading zero ( 1 to 12);
- **%M** - the month as an abbreviation ( Jan to Dec );
- **%F** - the month as a full name ( January to December );
- **%W** - the ISO-8601 week number of the year. Weeks start on Monday; 
- **%d** - the day as a number with a leading zero ( 01 to 31 );
- **%j** - the day as a number without a leading zero ( 1 to 31 );
- **%D** - the day as an abbreviation ( Sun to Sat );
- **%l** - the day as a full name ( Sunday to Saturday );
- **%h** - the hour based on the 12-hour clock with a leading zero ( 01 to 12 );
- **%H** - the hour based on the 24-hour clock with a leading zero ( 00 to 23 );
- **%g** - the hour based on the 12-hour clock without a leading zero ( 1 to 12 );
- **%G** - the hour based on the 24-hour clock without a leading zero ( 0 to 23 );
- **%i** - the minute as a number with a leading zero ( 00 to 59 );
- **%s** - the second as a number without a leading zero ( 00 to 59 ); 
- **%a** - displays **am** (for times from midnight until noon) and **pm** (for times from noon until midnight);
- **%A** - displays **AM** (for times from midnight until noon) and **PM** (for times from noon until midnight).

For example, if you want to present 1st June 2011 as 01/06/2011, you should specify ”%d/%m/%Y”.

