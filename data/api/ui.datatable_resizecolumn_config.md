resizeColumn
=============


@short: enables/disables horizontal resizing of columns
@type: boolean/object

@example:
webix.ui({
	view:"datatable",
	resizeColumn:true,
	...
});

// define the size of area where resizing can start
webix.ui({
	view:"datatable",
	resizeColumn:{size:6},
	...
});

// allow resizing only in the header
webix.ui({
	view:"datatable",
	resizeColumn:{headerOnly:true},
	...
});


@template:	api_config	
@related:
    datatable/sizing.md#resizing
@relatedapi:
	api/ui.datatable_resizerow_config.md
@descr:

By default, the parameter is disabled. 

When enabled, the method doesn't actually resize the datatable. After page refresh, size returns to the initial one (provided that you haven't saved the table's state).

