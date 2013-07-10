@link: api/editability_edit.md

@descr:
{{note
The method has been created for components compatibility and isn't handy for direct use.<br> We strongly encourage you to use api/ui.datatable_editrow.md, api/ui.datatable_editcolumn.md, 
api/ui.datatable_editcell.md instead of this method.
}}

The input object parameter should contain 2 attributes:

- **row** - (*string*) the row id
- **column** - (*string*) the column id

<br>
Note, the method will work **only** with the enabled api/link/ui.datatable_editable_config.md parameter:

~~~js
webix.ui({
    view:"datatable",
    editable:true,
    ...
});
~~~


@relatedapi:
    api/ui.datatable_editrow.md
    api/ui.datatable_editcolumn.md
    api/ui.datatable_editcell.md
@related: 
	datatable/editing.md
    desktop/edit.md
