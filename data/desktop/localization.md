Date and Number Localization
==============

Different countries and regions have their own rules for writing dates, numbers and monetary units. All these issues should be taken in account in case a target group for your app is wider than one country or region. 

Theset of rules for this or that counrty is called **locale** and includes methods for date, time, number and price formatting. 
Localization methods belong to the [i18n class](api/refs/i18n.md) and treat data according to he set format.

By default **Date()** constructor outputs raw data. Unformatted, it looks barely readable. 

~~~js
new Date(2012,10,30); //-->Tue Nov 30 2010 00:00:00
~~~

Date and time should be formatted either with [Date](desktop/working_with_dates.md) or **i18n** class.

**Numbers** differ by delimiter before the fractional part and between thousands while prices should be rendered with an appropriate currency mark. Formatting is done either in the
[Number](helpers/number_formatting_methods.md) or **i18n** class.

##Setting Localized i18n Format 

Localization is done via the [i18n class](api/refs/i18n.md) and allows setting customized formats gathered under one and the same locale. 

In case of [datatable](datatable/index.md), format is stated by  the dedicated **format** parameter while data is specified by column ID:

~~~js
{ header:"Date",  id:"start", format:webix.i18n.dateFormatStr},
{ header:"Price", id:"price", format:webix.i18n.priceFormat}
~~~

{{sample 15_datatable/20_templates/08_locales.html}}

Other components like [list](desktop/list.md), [dataview](desktop/dataview.md) and datatree/index.md have quite the other way of data presenting. 
To ensure proper formatting, you should make use of a **template function:**

~~~js
template:function(obj){ 
			return webix.i18n.longDateFormatStr(obj.start)+"<br/>"+
            	   webix.i18n.priceFormat(obj.price);
} 
~~~

The format in use is defined by current locale. en (default) locale sets **dateFormatStr** as *"%m/%d/%Y"* while **price** format is set as *"{obj}currency"* where *obj* is price value. 

{{sample 80_docs/dataview_formatting.html }}

##Locale Structure
 
The way formatted date is presented depends on **locale** you use. Locale is a set of rules for dates, numbers and price units for this or that region or country. By 
default **en** locale is used.

{{snippet
en Locale
}}
~~~js
webix.i18n.locales["en"]={
	groupDelimiter:",",
	groupSize:3,
	decimalDelimeter:".",
	decimalSize:2,

	dateFormat:"%m/%d/%Y",
	timeFormat:"%h:%i %A",
	longDateFormat:"%d %F %Y",
	fullDateFormat:"%m/%d/%Y %h:%i %A",

	price:"${obj}",
	calendar: {
		monthFull:["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
		monthShort:["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
		dayFull:["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
    	dayShort:["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]
    },
};
~~~

**Numbers:**

- *groupDelimiter* (string) - a stop mark to divide number groups; 
- *groupSize* (number) - the number of digits in each group. Typically it's 3 since thousands are the most frequent group;
- *decimalDelimeter* - a stop mark to divide even number from fractional part;
- *decimalSize* (number) - the number of digits in the fractional part;

**Date and Time:** 

- *dateFormat, longDateFormat, fullDateFormat* - define the way day, month and year look in stated modes;
- *timeFormat* - defines the way hours, minutes and seconds look. 

**Price** states monetary unit applied to the data from data object (**{obj}**). 

**Calendar:** 

- *monthFull, dayFull* (string) - an array of full and short month names for this location;
- *monthShort, dayShort* (string) - an array of full and short day names for this location. 

When formatted to a short/long date, the date from the first snippet looks like this: 

{{snippet
Formatted with en locale
}}
~~~js
format:webix.i18n.dateFormatStr
				//--> 11/30/2010
                
format:webix.i18n.longDateFormatSt
				// --> 30 November 2010
~~~

##Applying a Locale

Locales other than **en** should be defined beforehand either in the document script section or in a separate JS file (better).
Locale is set by the **setLocale()** function that takes **locale name** as parameter. 

Package includes 9 main locales (in codebase/i18n folder).

{{pronote Pro Edition contains 305 locales ( can be downloaded separately )  }}


~~~html
<script src="codebase/i18n/fr.js"></script>
<script>
webix.i18n.setLocale("fr");
</script>
~~~

After this any method applied to the **webix.i18n** object will redraw date, and numbers according to the rules described in locale. 

{{snippet
Formatted with fr locale
}}
~~~js

format:webix.i18n.dateFormatStr 
			// -->30/11/2010

format:webix.i18n.longDateFormatStr 
			// --> 30 Novembre 2010
~~~

##Altering a Locale 

To change one or several parameters for the current locale, you need to redefine them and then apply the same locale so that your changes come into force:

~~~js
webix.i18n.fullDateFormat = "%Y-%m-%d %H:%i";
webix.i18n.setLocale(); //locale name is not specified here
~~~

@complexity:2
