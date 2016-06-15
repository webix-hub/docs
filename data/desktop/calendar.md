Calendar
================

##API Reference

- [Methods, properties and events](api/refs/ui.calendar.md)
- [Samples](http://docs.webix.com/samples/09_calendar/index.html)

##Overview

UI-related <a href="http://webix.com/widget/calendar/" title="webix calendar widget">calendar</a> inherits from [view](desktop/view.md) and allows you to include the Date and Time picker calendar into an app.
It is a handy and fully interactive tool to pick the necessary time and date when filling a form. The dedicated timepicker allows setting the necessary time that will be displayed below the calendar area.

<br>

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/calendar.png"/>

<br>


##Initialization

~~~js
webix.ui({
	view:"calendar",
    id:"my_calendar",
	date:new Date(2012,3,16),
	weekHeader:true,
	events:webix.Date.isHoliday, 
    calendarDateFormat: "%Y-%m-%d",
    width:300,
	height:250
});
~~~

{{sample 09_calendar/01_init.html }}

####Comments: 

Here is a calendar with basic parameters. 

- **weekHeader** (boolean) - if *true* shows weekday above;
- **events** (CSS class or specific cases) - e.g. **webix.Date.isHoliday** highlights days off;
- **date** (string, object) - specifies the start date in the "year, month, day" format with months starting from 0. In case of an empty new Date(); you'll be shown current date;
- **dayTemplate** (function) - specifies a function that [sets a template](api/ui.calendar_daytemplate_config.md) for each day cell. By default the date is displayed without any styling;
- **icons** (boolean) - specifies whether to show ["Today" and "Clear"](api/ui.datepicker_icons_config.md) icons.

To see the full list of Calendar properties please refer to the [corresponding chapter of the documentation](api/refs/ui.calendar_props.md).

##Setting Start Day of the Week

By default the calendar starts a week on Sunday. However, you can also set Monday as a start day. For this purpose, use the api/date_startonmonday_other.md property with the value *true*:

~~~js
webix.Date.startOnMonday = true;

webix.ui({
	view:"calendar", ...
});
~~~
<img src="desktop/calendar_start_date.png"/>

{{sample 09_calendar/02_start_date.html }}

##Working with Calendar

####Setting and Getting Dates

**Setting dates** means their selection. Dates can be set programmatically after calendar initialization: 

- **setValue**(new Date(2012,3,30)); - common method for setting values to the controls;
- **selectDate**(new Date(2012,3,30));  - calendar specific method equal to the above mentioned one;
- **showCalendar**(new Date(2012,3,30)); - makes the calendar **show** the specified date, but doesn't select it. 

**Getting dates** can be done with two corresponding methods: 

- **getValue()**; - common method for getting the control's value.
- **getSelectedDate()**; - calendar specific method. 
- **getVisibleDate()**; - gets the date even with no selection applied. Date is defined according to the [specified rules](api/ui.calendar_getvisibledate.md). 

~~~js
$$('calendar1').selectDate(new Date(2012,3,30));
 
$$("calendar1").getValue(); // returns the non-formatted date object 
                            // -> Mon Apr 30 2012 00:00:00 GMT+0300 (EEST)
~~~

##Datepicker 

Calendar can be displayed on customer request, for instance when a user wants to pick a date and time to fill the form. For these needs a **[datepicker](desktop/datepicker.md)** control
is used. Note that here you needn't initialize Calendar - it will appear as soon as you click a datepicker icon. In this case the calendar comes with current date displayed. 

<img src="desktop/date_picker.png"/>

~~~js
webix.ui({
	view:"toolbar", 
	type:"MainBar", 
	elements:[
    	{view:"datepicker",  name: "select_date",  label: 'Select Date' } 
	]
});
~~~
{{sample 09_calendar/06_datepicker.html }}

##Time Selector in Calendar

Webix calendar offers two ways of time selection: 

- built-in timepicker;
- separate time view.

Time slots in selector are multiple of 5.

**Timepicker inside Calendar**

The [timepicker](api/ui.datepicker_timepicker_config.md) is hidden by default. To enable it you should set the property to *true*.
Then a timepicker is accessed by clicking a "clock" icon below the calendar grid. 

<img src="desktop/timepicker.png">

~~~js
webix.ui({
	view:"calendar",
    date: new Date(2012, 3, 16, 8, 35),
    timepicker:true,
    timepickerHeight:50 //optional, default is 30
})
~~~

With timepicker enabled, time is shown below month view within the calendar body. There are three options for the clock: 

- If the time is defined in the *new Date(YYYY, MM, DD, HH, mm)* constructor, it's shown according to the specified values; 
- If date is set with no time specified (new Date(2012, 3, 16)) - the clock shows midnight;
- If the *new Date* function comes with no parameters, current date and time is shown. 

{{sample 09_calendar/03_timepicker.html }}

**Time view**

<img src="desktop/timeview.png">

Time view of the calendar is detached from date selector and is shown separately. To initialize such a control you should set calendar to **time** mode.

~~~js
webix.ui({
	view:"calendar",
	type:"time"
});
~~~

{{sample 09_calendar/03_timepicker.html}}

Like standard calendar, time view accepts values as string or date object.

##Localization

How do we turn a standard calendar into the one with "foreign" month and day names? Here [localization](desktop/localization.md) can help you.

Locale is a set of rules that tell us how to display months and days. It's a kind of internal "translator" for UI components. 

First of all you should specify a locale or a set of needed **locales** (en-US, fr-FR, ru-RU) and then apply them to the calendar. By default **en-US** locale is used. 

~~~js
webix.i18n.setLocale('fr-FR');
~~~

Afterwards the calendar will look like this: 

<img src="desktop/calendar_localized.png"/>

{{sample 09_calendar/07_calendar_localized.html }}

You can as well alter current working locale, e.g. change text of "Today" and "Clear" icons:

~~~js
webix.i18n.calendar.clear: "Clear New";
webix.i18n.calendar.today: "Today New";
webix.i18n.setLocale();
~~~

You need to call the api/i18n_setlocale.md method to make changes come into force. 


##Disabling Dates and Time Slots in Calendar {#blockdates}

The whole calendar can be disabled by a common property:

~~~js
{view:"calendar", disabled:true}
~~~

<img src="desktop/calendar_disabled_dates.png"/>

{{sample 09_calendar/08_disabled_dates.html}} 

###Disabling dates

To disable a certain period in the calendar, which presupposes specific CSS and blocking of click events, you can go by the two ways: 

**Defining "active" period**

Use the dedicated [minDate](api/ui.calendar_mindate_config.md) and [maxDate](api/ui.calendar_maxdate_config.md) properties 
to limit the period that will be available for clicking and, hence, selecting: 

~~~js
{ view:"calendar", minDate:'2014-05-07', maxDate:new Date(2014, 4, 13) }
~~~

The dates can be defined either as **date object** or **date string** formatted under the current [locale](desktop/localization.md). Here the default **en-US** parseFormat is used, "%Y-%m-%d". 

**Defining blockDates() function for custom logic**

The [function](api/ui.calendar_blockdates_config.md) should return *true* for the dates that should be disabled in the calendar. Here all date up to 2014 will be disabled:

~~~js
webix.ui({
	view:"calendar",
	blockDates:function(date){
   		if(date.getFullYear()<=2013)
     		return true;
	}
});    
~~~

CSS class applied to disabled dates (**.webix_cal_day_disabled**) can be redefined. 

###Disabling time slots

Calendar features a [time selector](desktop/calendar.md#timeselectorincalendar) where you can disable time slots. 
Disabled time slots feature specific CSS and don't respond to click events. They should be **multiple of 5**. 

**Defining blocked time periods**

Use the dedicated [minTime](api/ui.calendar_mintime_config.md) and [maxTime](api/ui.calendar_maxtime_config.md)
properties to set the time period that will be available for selecting: 

~~~js
webix.ui({
	view:"calendar",
	timepicker:true,
	minTime:"8:00",
	maxTime:"18:30"
});
~~~

{{sample 09_calendar/11_disabled_time.html}} 

**Defining blockTime() function for custom logic**

The function takes a **date object** as parameter and should return *true* for disabled time slots.

~~~js
var disabledTime = [
	new Date(2015,6,1,8,40), 
    new Date(2015,6,1,9,10),
    new Date(2015,6,1,10,30)
];

webix.ui({
	view:"calendar",
    blockTime:function(date){
		for(var i =0; i< disabledTime.length; i++){
			if(disabledTime[i].valueOf() == date.valueOf())
				return true
		}
		return false;
	}
});
~~~

{{sample 09_calendar/11_disabled_time.html}} 

CSS class applied to disabled time slots (**.webix_minutes .webix_cal_day_disabled**) can be redefined.

##Today and Clear Buttons

The Today button allows selecting the current date. The Clear button removes date selection.

<img src="desktop/calendar_today_clear.png"/>

These buttons are optional and specified in the **icons** array. The code below renders a calendar with a timepicker and Today and Clear buttons:


~~~js
webix.ui({
  rows:[
    { view:"calendar", timepicker:true, icons:true }
  ]
});
~~~  

To hide the buttons, you should set the **icons** property to **false**.

{{sample
09_calendar/10_icons.html
}}



##Related Articles

- [Date Formatting Methods](helpers/date_formatting_methods.md)
- [Number Formatting Methods](helpers/number_formatting_methods.md)
- [Working with Dates](desktop/working_with_dates.md)
- [Date and Number Localization](desktop/localization.md)
- [Calendar CSS Image Map](desktop/calendar_css.md)
