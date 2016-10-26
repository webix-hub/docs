editCell
=============
@short:enables the edit mode for the specified cell 
	

@params:
- row	id		the row id
- col   id		the column id
* preserve	boolean	the <i>true</i> value 'says' to keep the previous editor opened
* show	boolean	the <i>true</i> value 'says' to scroll DataTable if the specified cell is out of the viewport


@example:
dtable.editCell(1, "title", true, true);

@template:	api_method
@descr:
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
    api/ui.datatable_editcolumn.md
    api/link/ui.datatable_editstop.md
    api/link/ui.datatable_editcancel.md
@related:
	datatable/editing.md
    desktop/edit.md

