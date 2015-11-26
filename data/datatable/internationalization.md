Internationalization of DataTable
=========================
DataTable provides support for numbers, currency and date internationalization. 

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


To localize your app into some other language, you should do the following:

1. [Create a locale file](datatable/internationalization.md#creatinglocales).
2. [Activate the locale](datatable/internationalization.md#activatingthelocale).

Creating locales
-----------------------

Locale is created in a separate *js* file named as **"ll-CC"**, 
where 

- **ll** - a two-letter language code;
- **CC** - a two-letter country code.

{{snippet
Creating Spanish (Spain) locale for DataTable. The 'es-ES.js' file
}}

~~~js
webix.i18n.locales["es-ES"]={   //"es-ES" - the locale name, the same as the file name
  groupDelimiter:" ",         //a mark that divides numbers with many digits into groups
  groupSize:3,                //the number of digits in a group
  decimalDelimiter:",",       //the decimal delimiter
  decimalSize:2,              //the number of digits after the decimal mark

  dateFormat:"%d/%m/%Y",      //applied to columns with 'format:webix.i18n.dateFormatStr'
  timeFormat:"%H:%i",         //applied to columns with 'format:webix.i18n.dateFormatStr'
  longDateFormat:"%d %F %Y",  //applied to columns with 'format:webix.i18n.longDateFormatStr'
  fullDateFormat:"%d.%m.%Y %H:%i",//applied to cols with 'format:webix.i18n.fullDateFormatStr'

  price:"{obj} EUR",//EUR-currency name.Applied to cols with 'format:webix.i18n.priceFormat'
  calendar:{
	 monthFull:["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", 
    			"Septiembre", "Octubre", "Noviembre", "Diciembre"],
	 monthShort:["En", "Feb", "Mar", "Abr", "Mayo", "Jun", "Jul", "Ago", "Sep", "Oct", 
    			"Nov", "Dic"],	
	 dayFull:["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"],
   	 dayShort:["Dom", "Lun", "Mar", "Mier", "Jue", "Vier", "Sab"]
  }
};
~~~
- **monthFull** - the full names of months starting from January;
- **monthShort** - the short names of months starting from January;
- **dayFull** - the full names of week days starting from Sunday;
- **dayShort** - the short names of week days starting from Sunday.

Activating the locale
---------------------------------

To activate locale:

1. Include the related locale file on the page;
2. Call *webix.i18n.setLocale('locale_name')* ( **!before DataTable initialization**).

~~~js
<script src="../locale/es-ES.js" type="text/javascript" charset="utf-8"></script>

<script>
	webix.i18n.setLocale("es-ES");
	grid = new webix.ui({ 
    	view:"datatable",
		columns:[
			{ header:"Date",  id:"start", format:webix.i18n.dateFormatStr},
			{ header:"LongDate",width:170, id:"start",format:webix.i18n.longDateFormatStr},
			{ header:"Price",  id:"number", format:webix.i18n.priceFormat },
		],
     	...
    });         
</script>
~~~

{{sample 15_datatable/20_templates/08_locales.html }}

