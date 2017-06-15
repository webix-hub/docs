editColumn
=============
@short: enables the edit mode for the specified column 

@params:

- id   string   the column id




@example:
dtable.editColumn("title"); // enables the edit mode for the 'title' column

@template:	api_method
@descr:
By default, the method sets the cursor to the first cell of the column.

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
    api/ui.datatable_editrow.md
    api/ui.datatable_editcell.md
    api/link/ui.datatable_editstop.md
    api/link/ui.datatable_editcancel.md
@related:
	datatable/editing.md
    desktop/edit.md


@seolinktop: [js framework](https://webix.com)
@seolink: [javascript datagrid library](https://webix.com/widget/datatable/)