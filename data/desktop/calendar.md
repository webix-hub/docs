Calendar
================

##API Reference

- [Methods, properties and events](api__refs__ui.calendar.html)
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
- **events** (CSS class or specific cases) - e.g. **webix.Date.isHoliday** highlights dayoffs;
- **date** (string, object) - specifies the start date in the "year, month, day" format with months starting from 0. In case of an empty new Date(); you'll be shown current date;
- **dayTemplate** (function) - specifies a function that [sets a template](api/ui.calendar_daytemplate_config.md) for each day cell. By default the date is displayed without any styling;
- **icons** (boolean) - specifies whether to show ["Today" and "Clear"](api/ui.datepicker_icons_config.md) icons.

To see the full list of Calendar properties please refer to the [corresponding chapter of the documentation](api/refs/ui.calendar_props.md).

#### Start Date

By default the calendar starts a week on Sunday. However, you can also set Monday as a start day.

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

## Datepicker 

Calendar can be displayed on customer request, for instance when a user wants to pick a date and time to fill the form. For these needs a **[datepicker](desktop/controls.md#datepicker)** control
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

##Timepicker in Calendar

Timepicker is a calendar feature that allows picking time. Being one of the component's properties, it is *false* by default: 

<img src="desktop/timepicker.png">

~~~js
webix.ui({
	view:"calendar",
    date: new Date(2012, 3, 16, 8, 35),
    timepicker:true,
    timepickerHeight:50 //optional, default is 30
})
~~~

With timepicker enabled, time is shown below month view within the calendar body. There're three options for the clock: 

- If the time is defined in the *new Date(YYYY, MM, DD, HH, mm)* constructor, it's shown according to the specified values; 
- If date is set with no time specified (new Date(2012, 3, 16)) - the clock shows midnight;
- If the *new Date* function comes with no parameters, current date and time is shown. 

{{sample 09_calendar/03_timepicker.html }}

{{note
Time selector can be hidden and shown back by **timePicker** property with *true/false* value. 
}}

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


##Disabling Period in Calendar {#blockdates}

The whole calendar can be disabled by a common property:

~~~js
{view:"calendar", disabled:true}
~~~

<img src="desktop/calendar_disabled_dates.png"/>

{{sample 09_calendar/08_disabled_dates.html}} 

To disable a certain period in the calendar, which presupposes specific CSS and blocking of click events, you can go by the two ways: 

**Defining "active" period**

Use the dedicated **minDate** and **maxDate** properties to limit the period that will be available for clicking and, hence, selecting: 

~~~js
{ view:"calendar", minDate:'2014-05-07', maxDate:new Date(2014, 4, 13) }
~~~

The dates can be defined either as **date object** or **date string** formatted under the current [locale](desktop/localization.md). Here the default **en-US** parseFormat is used, "%Y-%m-%d". 

**Defining "blockDates" function for custom logic**

The function should return true for the dates that should be disabled in the calendar. Here all date up to 2014 will be disabled:

~~~js
webix.ui({
	view:"calendar",
	blockDates:function(date){
   		if(date.getFullYear()<=2013)
     		return true;
	}
});    
~~~

CSS class applied for disabled dates (**webix_cal_day_disabled**) can be redefined. 

##Today and Clear Buttons

The Today button allows selecting the current date. The Clear button removes date selection.

<img src="desktop/calendar_today_clear.png"/>

These buttons are optional and specified in the **icons** array. The code below creates the buttons' config:


~~~js
icons: [
   // 'Today' definition 
   {
		template: function(){
    		return "<span class='webix_cal_icon_today webix_cal_icon'>"
    			+webix.i18n.calendar.today
            	+"</span>";
   		},
		on_click:{
  			"webix_cal_icon_today": function(){
     			this.setValue(new Date());
      			this.callEvent("onTodaySet",[this.getSelectedDate()]);
    		}
   	 	}
	},
     // 'Clear' definition 
    {
		template: function(){
    		return "<span class='webix_cal_icon_clear webix_cal_icon'>"
        		+webix.i18n.calendar.clear
            	+"</span>";
   		},
   		on_click:{
    		"webix_cal_icon_clear": function(){
     			this.setValue("");
      			this.callEvent("onDateClear",[this.getSelectedDate()]);
    		}		
   		}
	}
]
~~~  

Both buttons have two properties: 

- **template** - the template that defines presentation of an icon
- **on_click** - specifies the onClick handler that processes clicking an element with certain css

By default, these buttons are visible, but you can hide them by setting the **icons** property to **false**.

{{sample
09_calendar/01_init.html
}}



##Related Articles

- [Date Formatting Methods](helpers/date_formatting_methods.md)
- [Number Formatting Methods](helpers/number_formatting_methods.md)
- [Working with Dates](desktop/working_with_dates.md)
- [Date and Number Localization](desktop/localization.md)
- [Calendar CSS Image Map](desktop/calendar_css.md)
