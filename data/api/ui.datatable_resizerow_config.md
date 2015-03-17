resizeRow
=============


@short: enables/disables vertical resizing of rows
@type: boolean

@example:
webix.ui({
	view:"datatable",
	resizeRow:true,
	...
});

@template:	api_config	
@related:
    datatable/columns_configuration.md
@relatedapi:
	api/ui.datatable_resizecolumn_config.md
@descr:

By default, the parameter is disabled. 

When enabled, the method doesn't actually resize the datatable. After page refresh, size returns to the initial one (provided that you haven't saved the table's state).