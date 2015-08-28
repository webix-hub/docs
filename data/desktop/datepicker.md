Datepicker
===============================

##API Reference

- [Methods, properties and events](api__refs__ui.datepicker.html)
- [Shared functionality](desktop/controls_guide.md)

##Overview

Datepicker is used in a combination with ui-related [calendar](desktop/calendar.md) that is initialized on clicking the control. It allows choosing a date and, optionally, time in the calendar for their further usage. 

<img src="desktop/date_picker.png"/>

{{editor http://webix.com/snippet/d1334f89	Date Picker ('datepicker')}}

##Initialization
~~~js

{view:"datepicker", date: new Date(2012, 6, 8), label: 'Select Date', timepicker:true} 
~~~

####Main properties

- **label** (string) - text label of a control. It can be customized by:
	- **labelAlign** (string) - label alignment towards its container. Possible values are "left" and "right".  In any way, it's placed left to the control; 
    - **labelWidth** (number) - width of the label container; 
- **value** (string, obj) - initial value to display in the control input field;   
- **placeholder** (string) - defines placeholder for datepicker input. The control should be inited without an initial value;   
- **timepicker** (boolean) - enables a clock for time selection (*false* by default);
- **date** (function) - new Date() constructor to define the initial date of a calendar. If used without parameters, shows current date;
- **stringResult** (boolean) - sets the data type of value returned by **getValue()/get Values()** methods. If true, it returns date as string. By default the property is *false* and the method returns date object;
- **format** (string) - sets a date format to display in the datepicker field. By default it is "%Y-%m-%d". 
- **type** (string) - (optional) sets the datepicker type: 
	- "time" - configures datepicker for time selection only (uses [webix.i18n.timeFormat](api/i18n_timeformat_other.md) as formatting pattern)

##Time selector 

If you need to select time (hours and minutes) only, use the datepicker with *type* "time":

<img src="desktop/date_picker_time.png"/>

~~~js
{ view:"datepicker", type:"time", stringResult:true }
~~~

{{note
Dates are formatted according to the helpers/date_formatting_methods.md.
}}
