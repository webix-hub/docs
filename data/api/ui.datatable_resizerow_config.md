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

// define the size of area where resizing can start
webix.ui({
    view:"datatable",
    resizeRow:{size:6},
    ...
});

// allow resizing only in the header
webix.ui({
	view:"datatable",
	resizeRow:{headerOnly:true},
	...
});


@template:	api_config	
@related:
    datatable/sizing.md#resizing
@relatedapi:
	api/ui.datatable_resizecolumn_config.md
@descr:

By default, the parameter is disabled. 

When enabled, the method doesn't actually resize the datatable. After page refresh, size returns to the initial one (provided that you haven't saved the table's state).

@seolinktop: [js framework](https://webix.com)
@seolink: [download datatable](https://webix.com/widget/datatable/)