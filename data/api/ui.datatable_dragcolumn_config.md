dragColumn
=============


@short: enables drag-and-drop support for columns
	

@type: bool,string
@example:
webix.ui({
	view:"datatable",
    ...
    dragColumn:true
});

@template:	api_config
@related:
	datatable/drag_and_drop.md#movingcolumns
@relatedsample:
	15_datatable/22_dnd/06_columns.html
@relatedapi:
	api/link/ui.datatable_drag_config.md
@descr:
{{note
The property allows you to set the mode when users will drag columns instead of rows.
}}

As a string the parameter can take only one value:

 - **'order'** 
 
With such a value set, items can't be dragged out of the calling object boundaries.
Also, while dragging an item the remaining items are automatically rearranged so that when you drop the item to the final destination the remaining items won't need to do any rearrangements.