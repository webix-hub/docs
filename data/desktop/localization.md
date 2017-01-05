Components Localization
==============

Different countries and regions have their own rules for writing dates, numbers, monetary units and text labels.
All these issues should be taken in account in case a target group for your application is wider than one country or region. 

The set of rules for this or that country is called **locale** and includes methods for date, time, number, price and labels formatting. 
Localization methods belong to the [i18n class](api/refs/i18n.md) and treat data according to the set format.

By default **Date()** constructor outputs raw data. Unformatted, it looks barely readable. 

~~~js
new Date(2012,10,30); //-->Tue Nov 30 2010 00:00:00
~~~

Date and time should be formatted either with [Date](desktop/working_with_dates.md) or **i18n** class.

**Numbers** differ by delimiter before the fractional part and between thousands while prices should be rendered with an appropriate currency mark.
Formatting is done either in the [Number](helpers/number_formatting_methods.md) or **i18n** class.


##Built-in Locales

The **standard package** of the Webix library includes 9 locales, namely: 

- **'en-US'** - North American (used by default);
- **'ru-RU'** - Russian;
- **'fr-FR'** - French;
- **'ja-JP'** - Japanese;
- **'be-BY'** - Belarusian;
- **'de-DE'** - German;
- **'es-ES'** - Spanish;
- **'it-IT'** - Italian;
- **'zh-CN'** - Chinese.

**Webix Pro** edition includes over **300 locales** to match a great variety of cultures. 

##Locale Structure
 
The way formatted data is presented depends on **locale** you use. 
Locale is a set of rules for dates, numbers, price units and labels for this or that region or country. By 
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
  am:["am","AM"],
  pm:["pm","PM"],

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
    select:"Select",
    invalidMessage: "Invalid input value"
  },
  
  dataExport:{
	page:"Page",
	of:"of"
  },
  
  PDFviewer:{
		of:"of",
		automaticZoom:"Automatic Zoom",
		actualSize:"Actual Size",
		pageFit:"Page Fit",
		pageWidth:"Page Width",
		pageHeight:"Page Height"
  },
  
  aria:{
		increaseValue:"Increase value",
		decreaseValue:"Decrease value",
		navMonth:["Previous month", "Next month"],
		navYear:["Previous year", "Next year"],
		navDecade:["Previous decade", "Next decade"],
		removeItem:"Remove item",
		pages:["First page", "Previous page", "Next page", "Last page"],
		page:"Page",
		headermenu:"Header menu",
		openGroup:"Open column group",
		closeGroup:"Close column group",
		closeTab:"Close tab",
		showTabs:"Show more tabs",
		resetTreeMap:"Reset tree map",
		navTreeMap:"Level up",
		nextTab:"Next tab",
		prevTab:"Previous tab",
		multitextSection:"Add section",
		multitextextraSection:"Remove section",
		showChart:"Show chart",
		hideChart:"Hide chart",
		resizeChart:"Resize chart"
    },
    
    richtext:{
    	underline: "Underline",
   	 	bold: "Bold",
    	italic: "Italic"
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
- *timeFormat* - defines the way hours, minutes and seconds look; 
- *am*,*pm* - define the way time before and after noon is marked. 

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

- *select* - text label of the 'Select' button of the [multisuggest](api/refs/ui.multisuggest.md) 
(used in [multiselect](desktop/multiselect.md) input, editor and filter). The default value for North American locale is "Select".

**Data Export**

Text labels used in the page numbering line in the footer of the [exported PDF document](desktop/export_pdf.md). 

- *page* - text label of the "Page" part in the page numbering line
- *of* - text label of the "of" part in the page numbering line

**PDF Viewer**

Text labels for page switching and document options in desktop/pdfviewer.md.

- *of* - text label of the "of" part used in the page selector
- *automaticZoom* - text label of the zooming option for setting the document size automatically 
- *actualSize* - text label of the zooming option for setting actual size of the document 
- *pageFit* - text label of the zooming option for adjusting the document size to the page size
- *pageWidth* - text label of the zooming option for adjusting the document size to the page width
- *pageHeight* - text label of the zooming option for adjusting the document size to the page height

**Aria**

Text labels for widget interactive areas which properties cannot be configured by public API. These labels are set as values of the *aria-label* attribute and
are used by screen reading software to announce the purpose of the element: 

- *increaseValue* - aria label for "+" counter button
- *decreaseValue* - aria label for "-" counter button
- *navMonth* - aria labels for previous and next month buttons in calendar
- *navYear* - aria labels for previous and next year buttons in calendar
- *navDecade* - aria labels for previous and next decade buttons in calendar
- *removeItem* - aria label for multicombo "x" button
- *pages* - aria labels for pager navigation buttons
- *page* - aria label for pager numbered buttons
- *headermenu* - aria label for headermenu icon in datatable
- *openGroup* - aria label for "+" (open group) icon in datatable
- *closeGroup* - aria label for "-" (close group) icon in datatable
- *closeTab* - aria label for "x" icon on a closable tab in tabbar
- *showTabs* - aria label for "show more tabs" icon in a responsive tabbar
- *resetTreeMap* - aria label for "reset tree map" icon in a zoomed-in treemap
- *navTreeMap* - aria label for "level up" icon in a zoomed-in treemap
- *nextTab* - aria label for ">" icon in the carousel navigation panel
- *prevTab* - aria label for "<" icon in the carousel navigation panel
- *multitextSection* - aria label for "+" multitext icon
- *multitextextraSection* - aria label for "-" multitext icon
- *showChart* - aria label for "show chart" button in the chart legend
- *showChart* - aria label for "hide chart" button in the chart legend
- *resizeChart* - aria label for rangechart sizing handle

**RichText**

Text labels for the font style buttons in the desktop/richtext.md control.

- *underline* - text label of the "Underline" button
- *bold* - text label of the "Bold" button
- *italic* - text label of the "Italic" button

##Applying a Locale

Locales other than **en-US** should be set manually.

First, you need to include the corresponding js file of the locale in the head of your page. 

For example, to apply the French locale, include the **fr.js** file like this:

~~~html
<script src="//cdn.webix.com/site/i18n/fr.js"></script>
~~~

Then you should apply the chosen locale with the help of the **setLocale()** function that takes **locale name** as a parameter.

~~~js
webix.i18n.setLocale("fr-FR");
~~~

After this any method applied to the **webix.i18n** object will redraw date and numbers according to the rules described in the applied locale. 

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

{{sample 15_datatable/20_templates/08_locales.html}}

Other components like [list](desktop/list.md), [dataview](desktop/dataview.md) and datatree/index.md have quite the other way of data presenting. 
To ensure proper formatting, you should make use of a **template function:**

~~~js
template:function(obj){ 
	return webix.i18n.longDateFormatStr(obj.start)+"<br/>"+
       webix.i18n.priceFormat(obj.price);
} 
~~~

The format in use is defined by current locale. EN-US (default) locale sets **dateFormatStr** as *"%m/%d/%Y"* while **price** format is set as *"{obj}currency"* where *obj* is price value. 

{{sample 80_docs/dataview_formatting.html }}

@complexity:2
