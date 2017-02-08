Localization
===============

By default, all names and titles in Pivot are defined in English, but you can set any other language by specifying a custom locale for the page. 

~~~js
webix.i18n.pivot = {
	columns: "Columns",
	count: "count",
	fields: "Fields",
	filters: "Filters",
	max: "max",
	min: "min",
	operationNotDefined: "Operation is not defined",
	pivotMessage: "[Click to configure]",
	rows: "Rows",
	select: "select",
	sum: "sum",
	text: "text",
	values: "Values",
    windowTitle: "Pivot Configuration",
	windowMessage: "[move fields into required sector]"
};

// and then initialize Pivot and see your custom names
webix.ui({
	view:"pivot",
	//...
});
~~~

{{sample 61_pivot/01_init/05_locale.html}}