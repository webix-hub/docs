xCount
=============


@short:
	adjusts the view width to display the defined number of items in a row

@type: number
@example:
webix.ui({
	view:"dataview",
	data:big_film_set,
	xCount:4, yCount:2
		});
@template:	api_config
@defined:	ui.dataview	
@descr:

Possible values for the property are:

- desired **number**;
- **"auto"** (to calculate the number of item on the base of component size).

@related:
	desktop/dataview.md
@relatedapi:
	api/ui.dataview_ycount_config.md
@relatedsample:
	06_dataview/01_initialization/03_fixed_sizing.html


