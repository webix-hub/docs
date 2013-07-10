Number and Date Formatting
================================
Number formatting
----------------
To set the required format for number fields you should use attribute **format**. 

{{snippet 
Using number templates
}}
~~~js
grid = new webix.ui({
	view:"datatable",
	columns:[
		{ id:"votes", format:webix.Number.numToStr({
			groupDelimiter:",",
			groupSize:3,
			decimalDelimeter:".",
			decimalSize:2})
		},
		...
	]
});
~~~

{{sample 15_datatable/20_templates/04_numbers.html }}


Method **numToStr()** allows you to set the following properties for fractional numbers:

- *groupDelimiter* - a mark that will be used to divide numbers with many digits into groups;
- *groupSize* - the number of digits in a group;
- *decimalDelimiter* - a mark that will be used as the decimal delimiter;
- *decimalSize* - the number of digits after the decimal mark.

There are two default presets - numberFormat and priceFormat which provides number and price formatting according to the current locale
~~~js
grid = new webix.ui({
	view:"datatable",
	columns:[
		{ id:"votes", format:webix.i18n.numberFormat },
        { id:"price", format:webix.i18n.priceFormat }
	]
~~~


For details on number formatting methods, see helpers/number_formatting_methods.md.
Date formatting
---------------
Dates in DataTable can be specified by both **DateTime** and **string** values.

But formatting can be applied only to **DateTime** objects. Therefore, to format string values you should convert them to DateTime format at first.

###Common date formatting

To set the required format for date and time values, specify the **format** attribute. 

As a value for the attribute you can use:

- Members of the **i18n** object;
- The **dateToStr()** method of the Date object.

{{snippet 
Setting date formats
}}
~~~js
grid = new webix.ui({
	view:"datatable",
	columns:[
		{ template:"#start#", header:"Date",  format:webix.i18n.dateFormatStr},
		{ template:"#start#", header:"Y-m-d", format:webix.Date.dateToStr("%Y-%m-%d")}
	],
	data:[
		{ text:"Finish", start:new Date(2012,11,12) },
		{ text:"Start",  start:new Date(1988,1,29) }
	]
});
~~~
{{sample 15_datatable/20_templates/05_dates.html }}

For details on date formatting methods, see article helpers/date_formatting_methods.md.

###Converting string values to DateTime format 

To correctly work with dates, you need to have data in the grid as valid Date object, but in all common formats data is presented as string.
DataTable provides a way to mark columns for auto-conversion from Date string to Date objects

~~~js
grid = new webix.ui({
	view:"datatable",
	columns:[
		{ map:"(date)#start#", header:"Date",  format:webix.i18n.dateFormatStr},

});
~~~
{{sample 15_datatable/20_templates/06_dates_string.html }}

the *(date)* marker at start of map declaration forces data conversion from string to object.
By default datatable will assume that data will be in "%Y-%m-%d" (mysql date format), but you can change it as

~~~js
webix.i18n.parseFormat = "%m.%d.%Y"
webix.i18n.setLocale();
~~~

For more details, see helpers/date_formatting_methods.md.

Custom formatting
-----------------

You can apply custom formatting to a column by presenting the **format** attribute as a function (function accepts raw value and returns the formatted one). 

~~~js
grid = new webix.ui({
    view:"datatable",
    columns:[
		{id:"title", header:"Film title"},
		{id:"votes", header:"Votes", format:function(value){ 
            value = some_custom_logic(value);
			return value; }
		}
    ],
    ...
})
~~~


