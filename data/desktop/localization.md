Date and Number Localization
==============

Different countries and regions have their own rules for writing dates, numbers and monetary units. All these issues should be taken in account in case a target group for your app is wider than one country or region. 

The set of rules for this or that country is called **locale** and includes methods for date, time, number and price formatting. 
Localization methods belong to the [i18n class](api/refs/i18n.md) and treat data according to the set format.

By default **Date()** constructor outputs raw data. Unformatted, it looks barely readable. 

~~~js
new Date(2012,10,30); //-->Tue Nov 30 2010 00:00:00
~~~

Date and time should be formatted either with [Date](desktop/working_with_dates.md) or **i18n** class.

**Numbers** differ by delimiter before the fractional part and between thousands while prices should be rendered with an appropriate currency mark. Formatting is done either in the
[Number](helpers/number_formatting_methods.md) or **i18n** class.


##Built-in Locales

The **standard package** of the Webix library includes 9 locales, namely: 

- **'en-US'** - North American (used by default);
- **'ru-RU'** - Russian;
- **'fr-FR'** - French;
- **'ja-JP'** - Japanise;
- **'be-BY'** - Belarusian;
- **'de-DE'** - German;
- **'es-ES'** - Spanish;
- **'it-IT'** - Italian;
- **'zh-CN'** - Chinese.

**Webix Pro** edition includes over **300 locales** to match a great variety of cultures. 

##Locale Structure
 
The way formatted date is presented depends on **locale** you use. Locale is a set of rules for dates, numbers and price units for this or that region or country. By 
default **en-US** locale is used.

{{snippet
en-US Locale
}}
~~~js
webix.i18n.locales["en-US"]={
  groupDelimiter:",",
  groupSize:3,
  decimalDelimiter:".",
  decimalSize:2,

  dateFormat:"%m/%d/%Y",
  timeFormat:"%h:%i %A",
  longDateFormat:"%d %F %Y",
  fullDateFormat:"%m/%d/%Y %h:%i %A",

  price:"${obj}",
  priceSettings:{
     groupDelimiter:",",
     groupSize:3,
     decimalDelimiter:".",
     decimalSize:2
  },
  fileSize: ["b","Kb","Mb","Gb","Tb","Pb","Eb"],
	
  calendar: {
    monthFull:["January", "February", "March", "April", "May", "June", 
    	"July", "August", "September", "October", "November", "December"
    ],
	monthShort:["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", 
    	"Sep", "Oct", "Nov", "Dec"
    ],
	dayFull:["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", 
    	"Friday", "Saturday"
    ],
    dayShort:["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
	hours: "Hours",
	minutes: "Minutes",
	done:"Done",
    clear: "Clear",
    today: "Today"
  },

  controls:{
    select:"Select"
  }
};
~~~

**Numbers:**

- *groupDelimiter* (string) - a stop mark to divide number groups; 
- *groupSize* (number) - the number of digits in each group. Typically it's 3 since thousands are the most frequent group;
- *decimalDelimiter* - a stop mark to divide even number from fractional part;
- *decimalSize* (number) - the number of digits in the fractional part;

**Date and Time:** 

- *dateFormat, longDateFormat, fullDateFormat* - define the way day, month and year look in stated modes;
- *timeFormat* - defines the way hours, minutes and seconds look. 

**Start Date**:

By default, a week in the calendar starts on Sunday. However, you can set any day as a start day using the **webix.Date.startOnMonday** property

~~~js
webix.Date.startOnMonday = true;
~~~

**Price** states monetary unit applied to the data from data object (**{obj}**). 

**Calendar:** 

- *monthFull, dayFull* (string) - an array of full and short month names for this location;
- *monthShort, dayShort* (string) - an array of full and short day names for this location. 

When formatted to a short/long date, the date from the first snippet looks like this: 

{{snippet
Formatted with en-US locale
}}
~~~js
format:webix.i18n.dateFormatStr
	//--> 11/30/2010
                
format:webix.i18n.longDateFormatSt
	// --> 30 November 2010
~~~

- *hours, minutes* - localization options for 'Hours', 'Minutes', 'Done' labels in the calendar.
- *today, clear* - configuration for "Today" and "Clear" buttons, used for selection of current date and removing selection

**Controls**

Text labels for some parts of webix components that are more likely to be changed in a scope: 

- **select** - text label of the 'Select' button of the [multisuggest](api/refs/ui.multisuggest.md) 
(used in [multiselect](desktop/multiselect.md) input, editor and filter). The default value for North Americal locale is "Select". 

##Applying a Locale

Locales other than **en-US** should be set manually. It can be done with the help of a **setLocale()** 
function that takes **locale name** as parameter.

~~~js
webix.i18n.setLocale("fr-FR");
~~~

After this any method applied to the **webix.i18n** object will redraw date, and numbers according to the rules described in locale. 

{{snippet
Formatted with fr-FR locale
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

##Setting Localized i18n Format 

Localization is done via the [i18n class](api/refs/i18n.md) and allows setting customized formats gathered under one and the same locale. 

In case of [datatable](datatable/index.md), format is stated by  the dedicated **format** parameter while data is specified by column ID:

~~~js
{ header:"Date",  id:"start", format:webix.i18n.dateFormatStr},
{ header:"Price", id:"price", format:webix.i18n.priceFormat}
~~~

{{editor http://webix.com/snippet/cdec9649	Internationalization }}

Other components like [list](desktop/list.md), [dataview](desktop/dataview.md) and datatree/index.md have quite the other way of data presenting. 
To ensure proper formatting, you should make use of a **template function:**

~~~js
template:function(obj){ 
	return webix.i18n.longDateFormatStr(obj.start)+"<br/>"+
       webix.i18n.priceFormat(obj.price);
} 
~~~

The format in use is defined by current locale. EN-US (default) locale sets **dateFormatStr** as *"%m/%d/%Y"* while **price** format is set as *"{obj}currency"* where *obj* is price value. 

{{editor http://webix.com/snippet/81ae88c2	Dataview Formatting}}

@complexity:2
