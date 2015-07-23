blockselect
=============


@short: enables/disables block selection
@type: boolean, string

@example:
webix.ui({
	view:"datatable",
	blockselect:"box",
	...
});

@template:	api_config

@related:
	datatable/selection.md

@relatedapi:
	api/ui.datatable_multiselect_config.md
	api/ui.datatable_select_config.md

@relatedsample:
	15_datatable/05_selection/02_row_selection.html
	15_datatable/05_selection/04_multi_cell_selection.html
	15_datatable/05_selection/08_block_selection.html

@descr:

Possible values are: 

- true (default) - overlay box is placed over the grid while dragging to mark potentially selected area
- "box" - overlay box is placed over the potentially selected items while dragging
- "select" - native datatable selection with select-related events firing on each cell selection



