minColumnHeight
=============


@short: sets the minimum height for a row
@type:  number

@example:
webix.ui({
	view:"datatable",
	minColumnHeight:40,
	...
});

@template:	api_config
@defined:	ui.datatable	
@related:
	datatable/sizing.md
    datatable/columns_configuration.md
@relatedapi:
	api/ui.datatable_mincolumnwidth_config.md
@descr:

By default, the parameter is 26px.  
Affects while row resizing only. If you need to set the default row height you need to use the api/ui.datatable_rowheight_config.md parameter.