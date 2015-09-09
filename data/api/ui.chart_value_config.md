value
=============


@short:
	defines values for the vertical axis
    
@type: template
@example:
webix.ui({
	view:"chart",
	type:"bar",
	value:"#sales#",
	label:"#year#",
	...
});

@relatedsample:
	08_chart/01_initialization/01_load_xml.html
    08_chart/07_area_chart/01_init.html
@related:
	desktop/chart_types.md
    desktop/chart_scales.md
@template:	api_config
@defined:	ui.chart	
@descr:
As a function, the property accepts a data object and is called for each data item:

~~~js
webix.ui({
	view:"chart",
	value:"#sales#",
	...
})
//is equal to
webix.ui({
	view:"chart",
	value:function(obj){ return obj.sales; },
	...
})
~~~