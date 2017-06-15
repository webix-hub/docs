editRow
=============

@short: enables the edit mode for the specified row
	

@params:

- id   string   the row id




@example:
dtable.editRow(2); //enables the edit mode for the row with id=2

@template:	api_method
@descr:
By default, the method sets the cursor to the first cell of the row.

Note, the method will work **only** with the enabled api/link/ui.datatable_editable_config.md parameter:

~~~js
webix.ui({
    view:"datatable",
    editable:true,
    ...
});
~~~

@relatedsample:
	15_datatable/04_editing/03_multiple_editors.html
@relatedapi:
	api/link/ui.datatable_editable_config.md
    api/link/ui.datatable_editaction_config.md
    api/ui.datatable_editcolumn.md
    api/ui.datatable_editcell.md
    api/link/ui.datatable_editstop.md
    api/link/ui.datatable_editcancel.md
@related:
	datatable/editing.md
    desktop/edit.md



@seolinktop: [javascript component library](https://webix.com)
@seolink: [web datagrid](https://webix.com/widget/datatable/)