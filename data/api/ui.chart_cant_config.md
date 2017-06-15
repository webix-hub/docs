cant
=============


@short:
	defines the slope angle of 3D pie 

@type: number
@example:
webix.ui({
	view: "chart",
	type:"pie3D",
    container:"chartDiv",
	value:"#sales#",
	label:"#month#",
	cant:0.7,
	data:month_dataset
});

@template:	api_config
@defined:	ui.chart	
@related: 
	desktop/pie_charts.md
@descr:
The parameter can take value from 0 to 1.<br>
The default value is 0.5 .



@seolinktop: [javascript website framework](https://webix.com)
@seolink: [chart widget](https://webix.com/widget/charts/)