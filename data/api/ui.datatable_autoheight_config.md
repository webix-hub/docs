autoheight
=============


@short:adjusts Datatable size to the its content vertically
	

@type: boolean
@example:
webix.ui({
	view:"datatable",
	autoheight:true,
	...
});

@template:	api_config
@defined:	ui.datatable	

@relatedsample:
	15_datatable/11_sizing/05_auto_size.html
@relatedapi:
	api/ui.datatable_autowidth_config.md
@related:
	datatable/sizing.md#autosizing

@descr:

If a Datatable features 10 rows, the resulting height will be <i>datatable.config.rowHeight</i>*10 plus borders.




@seolinktop: [javascript website framework](https://webix.com)
@seolink: [javascript data table](https://webix.com/widget/datatable/)