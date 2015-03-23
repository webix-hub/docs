resizeColumn
=============


@short: enables/disables horizontal resizing of columns
@type: boolean

@example:
webix.ui({
	view:"datatable",
	resizeColumn:true,
	...
});

@template:	api_config	
@related:
    datatable/columns_configuration.md
@relatedapi:
	api/ui.datatable_resizerow_config.md
@descr:

By default, the parameter is disabled. 

When enabled, the method doesn't actually resize the datatable. After page refresh, size returns to the initial one (provided that you haven't saved the table's state).