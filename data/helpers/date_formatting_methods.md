Date Formatting Methods
====================

Formatting and parsing
----------------------

There are several predefined methods for date formatting, which can be used to convert dates to strings and strings to dates

{{snippet Convert dates to strings}}
~~~js
var str1 = webix.i18n.dateFormatStr(date_obj);	//date
var str2 = webix.i18n.longDateFormatStr(date_obj);//long date representation
var str3 = webix.i18n.timeFormatStr(date_obj);	//time
var str4 = webix.i18n.fullDateFormatStr(date_obj);//date + time
var str5 = webix.i18n.parseFormatStr(date_obj);	//used for date serialization
~~~


{{snippet Convert strings to dates}}
~~~js
var date1 = webix.i18n.dateFormatDate(string);	//date
var date2 = webix.i18n.longDateFormatDate(string);//long date representation
var date3 = webix.i18n.timeFormatDate(string);	//time
var date4 = webix.i18n.fullDateFormatDate(string);//date + time
var date5 = webix.i18n.parseFormatDate(string);	//used for date parsing
~~~

Formats can be defined by [locales](desktop/localization.md) to adapt numbers and dates to the target location. 


If necessary you can create your own conversion methods

{{snippet Custom date convert}}
~~~js
var format = webix.Date.dateToStr("%Y.%m");
var string = format(new Date()); //2012.05

var parser = webix.Date.strToDate("%Y.%m");
var date = parser("2012.05");
~~~


Supported format options
------------------------

- %d - the day as a number with a leading zero ( 01 to 31 );
- %j - the day as a number without a leading zero ( 1 to 31 );
- %D - the day as an abbreviation ( Sun to Sat );
- %l - the day as a full name ( Sunday to Saturday );
- %m - the month as a number with a leading zero ( 01 to 12 );
- %n - the month as a number without a leading zero ( 1 to 12);
- %M - the month as an abbreviation ( Jan to Dec );
- %F - the month as a full name ( January to December );
- %y - the year as a two-digit number ( 00 to 99 );
- %Y - the year as a four-digit number ( 1900&#150;9999 );
- %h - the hour based on the 12-hour clock with a leading zero ( 00 to 11 );
- %g - the hour based on the 12-hour clock ( 0 to 11 );
- %H - the hour based on the 24-hour clock with a leading zero ( 00 to 23 );
- %G - the hour based on the 24-hour clock ( 0 to 23 );
- %i - the minute as a number with a leading zero ( 00 to 59 );
- %s - the second as a number with a leading zero ( 00 to 59 );
- %S - the milliseconds as a number with a leading zero (000 to 999);
- %a - displays am (for times from midnight until noon) and pm (for times from noon until midnight);
- %A - displays AM (for times from midnight until noon) and PM (for times from noon until midnight);
- %c - displays date and time in the ISO 8601 date format (e.g. 2015-10-04T05:04:09)

For instance, **"%d-%F-%Y,%D"** will display the date as 11-September-2012, Tue. 



{{note strings like 20120502, where there are no separators between numbers, can't be parsed as dates  }}

@complexity:2
