select
=============


@short: sets the selection mode in DataTable
	
@type: boolean,string

@values:

- cell			sets the cell selection
- row			sets the row selection
- column		sets the column selection
- true		sets the row selection
- false		disables selection


@example:
webix.ui({
	view:"datatable",
	select:"cell",
	...
})


@template:	api_config


@related:
	datatable/selection.md

@relatedapi:
	api/ui.datatable_multiselect_config.md
	api/ui.datatable_blockselect_config.md

@relatedsample:
	15_datatable/05_selection/02_row_selection.html
	15_datatable/05_selection/04_multi_cell_selection.html
	15_datatable/05_selection/08_block_selection.html

@descr:
Multiselection can be enabled the following way:

~~~js
webix.ui({
	view:"datatable",
    multiselect:true,
    ..//config
});
~~~

