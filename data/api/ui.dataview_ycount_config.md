yCount
=============


@short:
	adjusts the view height to display the defined number of items in a column

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
- 0 to disable yCount ( calculate the number of item on the base of component size).

{{sample 10_window/05_popup_menu.html}}

@related:
	desktop/dataview.md
@relatedapi:
	api/ui.dataview_xcount_config.md
@relatedsample:
	06_dataview/01_initialization/03_fixed_sizing.html


@seolinktop: [mvc library](https://webix.com)
@seolink: [dataview download](https://webix.com/widget/dataview/)