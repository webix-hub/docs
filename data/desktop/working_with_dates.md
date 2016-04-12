Working with Dates
=============

##Dates with UI Components

- [Loading and Formatting](#load)
- [Editing](#edit)
- [Sorting](#sort)
- [Dates with Forms](#form)
- [Date and Number Localization](desktop/localization.md)

##Loading and Formatting {#load}

Dates are loaded to components according to common [data loading rules](desktop/data_loading.md). 

Either in the database or in data files dates can be stored in two ways: as **DateTime** objects or as **strings**. 

- DateTime objects should be formatted for adequate presentation. Otherwise, the output will be like "*Tue Nov 30 2010 00:00:00 GMT+0200*";
- Strings can be either shown in the way they are stored or converted to objects and then formatted.

{{note
Only DateTime objects defined with the **new Date();** method are subject to formatting since it presupposes "to-string" conversion. Strings should be converted beforehand. 
}}

###Pre-Formatting: String-to-Object Conversion

There exist two methods of date-to-string conversion:

1 . **Built-in (map property).** [Datatable](datatable/index.md) Only. 

Conversion is provided by **map** property used for the column instead of column **ID.** Like ID, map refers to the necessary data item and allows for format specification: 

~~~js
webix.ui({
	view:"datatable", 
    columns: [
    	{ map:"(date)#enddate#",editor:"date",header:"End date", width:120}
    ],
    data: [
    	{id:"1", startdate:"2013-09-26", enddate:"2011-05-15"},
        {..}
    ]

})
~~~

2 . **Custom** (using **webix.Date** object functions). 

Applicable to all data management components including datatable. 

Here we create the necessary conversion pattern and then define it as [scheme](api/link/ui.list_scheme_config.md) for the loaded data. 

~~~js
var my_format = webix.Date.strToDate("%Y-%m-%d"); 
//hyphen-separated values are interpreted as year-month-date object

webix.ui({
	view:"datatable",
    ..//config
    scheme:{
			$init:function(obj){
				obj.startdate = my_format(obj.start);
			}
	}
    
})
~~~

{{editor http://webix.com/snippet/7148848d	Converting Strings to Dates }}

Now we've got DateTime objects ready to formatting. 

###Defining Formatting Methods

There are two objects in the library that handle dates - **[webix.Date](api/refs/date.md)** and **[webix.i18n](api/refs/i18n.md)**. Both of them contain date 
formatting and processing logic while the later is responsible for date (as well as number and price) localization.

####**webix.i18n**

Localization means **locales implementation** where locale is a collection of formatting methods and patterns for a certain area. They are defined separately and  later applied to the necessary data. 
By default, if you format dates with the **i18n** object, all the dates and numbers will be formatted according to North American region rules. 
 
**Date** and **Number localization** are described in the [related article](desktop/localization.md). 

####**webix.Date**

The Date object allows for formatting dates regardless of locales with the help of the **dateToStr()** method. It requires format specification in its argument. 

~~~js
{ header:"m/d/Y", sort:"date", id:"start", format:webix.Date.dateToStr("%m/%d/%y")}
~~~

The datatable column here shows the stored date in a "month number/day number/two-digit year" format. 

Possible format specifiers are listed in the [related article](helpers/date_formatting_methods.md). 

###Applying Formatting Methods

Only datatable has a **format** property for its columns while other components require a specific **function template**. 

{{snippet
Formatting Datatable Data
}}
~~~js
webix.ui({
	view:"datatable", columns:{
		[{ header:"WeekDay", id:"start", format:webix.i18n.longdateFormatStr},
         {...}
		]
})
~~~

{{snippet
Formatting Other Component's Data
}}
~~~js
//format is specified by locale 
webix.ui({
	view:"list", 
	template:function(obj){ 
            return webix.i18n.longDateFormatStr(obj.start);
                } 
})
                
//format is specified separately       
var myformat = webix.Date.dateToStr("%m/%d/%y");

webix.ui({
	view:"list", 
	template:function(obj){ 
            return myformat(obj.start);
                }
~~~

##Editing {#edit}

Dates within components are edited with the help of the dedicated **editor** (see [Data Editors](desktop/editing.md) for details). 

**Requirements for Date editing:**

- component should be **editable.** 
- **editor type** should be defined. Here we need **"date"**;
- **editValue** (data item subject to editing) should be specified (excluding datatable). The thing is that components may have more than one data item in a cell. 
- optionally **editaction** is defined. (*click* by default).

This editor is used as datepicker to call UI [calendar](desktop/calendar.md) on defined edit action to pick the necessary date. 

<img src="desktop/dataview_date_editing.png">

~~~js
webix.ui({
	view:"dataview",
    ..//config..
    editable:true,
	editor:"date",
	editValue:"start", //refers to data item
    data:[
			{ text:"Joint 2", start:new Date(2011,1,14)},{...}]
})
~~~

{{editor http://webix.com/snippet/81ae88c2	Dataview Formatting}}

When working with **server-side**, initialize a [dataProcessor](desktop/dataprocessor.md) for the component and the changes will be automatically saved back to server. 

##Sorting {#sort}

Though dates are presented as strings, they are **sorted as date objects**. So before sorting don't forget to convert strings to DateTime objects in case they are stored as strings (see above). 

Sorting can be applied in two directions: **"asc"** (ascending) and **"desc"** (descending). 

1 . **Built-in Sorting. Datatable Only.**

Datatable features dedicated **sort** property for its columns. 

2 . **Custom Sorting.** Applicable to all components. 

Here we make use of the **sort()** function that needs: 

- template of the data item subject to sorting;
- sorting direction;
- sorting mode ("string", "string_strict", "int", "date").

{{snippet
HTML Button Triggers Sorting
}}
~~~html
<input type='button' value='Sort "Asc"' onclick='grid.sort("#start#", "asc", "date");'>
~~~

{{editor http://webix.com/snippet/a0001cfb	Using Date Templates}} 

[Data Sorting Api](api/link/ui.datatable_sort.md).

##Dates Inputting in Forms {#form}

Form fields that require date inputting from users should be supplied with a [calendar](desktop/calendar.md) for user convenience. 

There exists a special [datepicker](desktop/datepicker.md) control that looks like a normal text field with a calendar icon.

When you click it a popup calendar appears. On selecting the necessary date, click somewhere outside the popup
and the date will be shown in the text field. By default, date is shown formatted as *"%Y-%m-%d"* and stored as *DateTime* object.

<img src="desktop/date_picker.png">

{{editor http://webix.com/snippet/bc812c2f	Date Picker in Calendar}}

###Customization

The calendar can be customized within the **[webix.editors](desktop/editing.md)** object as well as [localized](desktop/localization.md) according to common rules. 

The default date for the control to show as well as the default date of the popup calendar is the current one. The pattern can be changed by setting the necessary value in the datepicker constructor: 

~~~js
{
	view:"datepicker", 
 	value:new Date(2011,1,12)
} 
~~~

Default formatting can be changed as well. Formatting rules are described above and applied to the control as value of its **format** property. 

~~~js
{
	view:"datepicker", 
 	format: webix.Date.dateToStr("%d/%m/%y")
} 
~~~

{{editor http://webix.com/snippet/bc812c2f	Date Picker in Calendar}}

If a form is [bound](desktop/data_binding.md) to the component, it will load dates in the format specified by the component formatting pattern, or, if custom format is defined for datepicker, it will get the one from the latter. 

@complexity:2
