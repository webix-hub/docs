Number Formatting Methods
=================

There are predefined methods for number formatting:

##Localization

~~~js
var string1 = webix.i18n.numberFormat("123.45");
var string2 = webix.i18n.intFormat("123.45")
var string3 = webix.i18n.priceFormat("123.45");
~~~

They will format data according to rules stated in the current locale.

Applying locales within component:

~~~js
//datatable
{ header:"LongDate", width:170,  id:"start", format:webix.i18n.numberFormat }

//other components
template:function(obj) {return webix.i18n.numberFormat(obj.start); }
~~~
Dive into [Date and Number localization](desktop/localization.md) article.

##Custom Formatting

If you need to format number with custom formatting rules you can use methods in the api/refs/number.md class that offers two methods: [format](api/number_format.md) and [numToStr](api/number_numtostr.md). 

Here you need to specify rules right in a data component.

~~~js
var string1 = webix.Number.format("123.45",{
	groupDelimiter:",",
	groupSize:3,
	decimalDelimiter:".",
	decimalSize:2
});
~~~

Applying format within a component:

~~~js
//datatable
{ header:"LongDate", width:170,  id:"votes", format:webix.Number.numToStr({
	groupDelimiter:"",
    groupSize:0,
    decimalDelimiter:",",
    decimalSize:5
   }); 
}

//other components
template:function(obj) {
	return webix.Number.numToStr(obj.votes, {
		groupDelimiter:"",
    	groupSize:0,
    	decimalDelimiter:",",
    	decimalSize:5	
	});
} 
~~~

{{sample 15_datatable/20_templates/04_numbers.html}}

@complexity:2