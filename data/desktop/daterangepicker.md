DateRangePicker
===================

##API Reference

- [Methods, properties and events](api/refs/ui.daterangepicker.md)
- [Shared functionality](desktop/controls_guide.md)

##Overview

DateRangePicker is used in a combination with a UI-related [calendar](desktop/calendar.md) that is initialized 
on clicking the control. It allows choosing a date range and, optionally, time in the calendar for their further usage. 

<img src="desktop/date_range_picker.png"/>

{{sample 60_pro/02_form/11_daterangepicker.html }}

##Initialization

You can initialize a DataRangePicker in the following way:

~~~js
{
	view:"daterangepicker", name:"default", width:500, label:"Default",
		value:{start: new Date(), end: webix.Date.add(new Date(), 1, "month")}
}
~~~

**Main Properties**

- **label** (string) - text label of a control. It can be customized by:
	- **labelAlign** (string) - label alignment towards its container. Possible values are "left" and "right".  In any way, it's placed left to the control; 
    - **labelWidth** (number) - width of the label container; 
- **value** (object) - initial value to display in the control input field;   
- **placeholder** (string) - defines placeholder for daterangepicker input. The control should be initialized without an initial value;   
- **timepicker** (boolean) - enables a clock for time selection (*false* by default);
- **date** (function) - new Date() constructor to define the initial date of a calendar. If used without parameters, shows current date;
- **stringResult** (boolean) - sets the data type of value returned by **getValue()/get Values()** methods. If true, it returns date as string. By default the property is *false* and the method returns date object;
- **format** (string) - sets a date format to display in the daterangepicker field. By default it is "%Y-%m-%d". 




@edition:pro