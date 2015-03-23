editNext
=============


@short: closes the current editor and opens one in the next cell of the row
	



@returns:
- false	boolean	false

@example:
$$('mylist').editNext();

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


@relatedapi:
	api/link/ui.datatable_edit.md
    api/link/ui.datatable_editstop.md
    api/link/ui.datatable_focuseditor.md
@related:
	datatable/editing.md
	desktop/edit.md
