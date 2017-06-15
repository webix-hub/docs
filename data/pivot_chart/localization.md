Localization
===============

By default, all names and titles in Pivot Chart are in English, but you can change it by setting a custom locale for the page. 

~~~js
webix.i18n.pivot = {
	apply: "Anwenden",
	bar: "Balken",
	cancel: "Abbrechen",
	groupBy: "Gruppieren nach",
	chartType: "Diagramm Typ",
	count: "zahl",
	fields: "Felder",
	filters: "Filtern",
	logScale: "Logarithmischen Skala",
	line: "Linien",
	max: "max",
	min: "min",
	operationNotDefined: "Operation ist nicht definiert",
	radar: "Netzdiagramm",
	select: "auswahl",
	settings: "Einstellungen",
	sum: "summe",
	text: "text",
	values: "Werte",
	valuesNotDefined: "Werte oder Gruppenfeld ist nicht definiert",
	windowMessage: "[ziehen Felder auf gewunschten Sektor]"
};


//and then initialize Pivot Chart and see your custom names
webix.ui({
	view:"pivot",
    //...
});
~~~

{{sample 61_pivot/02_chart/05_locale.html}}

@seolinktop: [lightweight js framework](https://webix.com)
@seolink: [javascript pivot grid](https://webix.com/pivot/)