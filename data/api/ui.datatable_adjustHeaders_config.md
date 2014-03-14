adjustHeaders
=============


@short: when enabled column auto-sizing will take header width in account
@type: boolean

@example:
webix.ui({
	view:"datatable",
	adjustHeaders:true,
	...
});

@template:	api_config
@defined:	ui.datatable	
@related:
	datatable/columns_configuration.md
@descr:
You need to have "adjust" property set in column's config, or call grid.adjustColumn to trigger the auto-sizing
