@link: api/editability_editable_config.md

@short:allows/denies editing in the table

@relatedsample:
	15_datatable/04_editing/01_basic.html
    
@relatedapi:
	api/link/ui.datatable_editaction_config.md
    
@related:
	datatable/editing.md
    desktop/edit.md
    
@descr:

To allow only programmatic editing, set the api/link/ui.datatable_editaction_config.md parameter
to the *none* value.

~~~js
webix.ui({
    view:"datatable",
    editable:true,
    editaction:"none"
    ...
});
~~~