editaction
=============


@short: defines the action on which editors will be opened
	

@type: string
@example:
webix.ui({
    view:"datatable",
    editable:true,
    editaction:"dblclick"
    ...
});

@values:
- click	(default) opens the editor on a single click
- dblclick	opens the editor on a double click
- custom	allows only programmatic editing (denies opening editors for manual editing)
@template:	api_config
@descr:

@relatedsample:
	15_datatable/04_editing/01_basic.html
    15_datatable/04_editing/03_multiple_editors.html
@relatedapi:
	api/link/ui.datatable_editable_config.md
@related:
	desktop/edit.md