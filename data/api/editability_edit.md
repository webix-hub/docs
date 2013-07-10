edit
=============



@short:
	enables the edit mode for the specified item

@params:
- id		object		the object defining the position of a cell



@example:
dtable.edit({
		row:2,
        column:"title"
});

@template:	api_method
@defined:	EditAbility	

@related:
	datatable/editing.md
    desktop/edit.md
@relatedsample:
	15_datatable/04_editing/04_select.html


@descr:

Note, the method will work **only** with the enabled api/link/ui.datatable_editable_config.md parameter:

~~~js
webix.ui({
    view:"datatable",
    editable:true,
    ...
});
~~~

The input object parameter should contain 2 attributes:

- **row** - (*string*) the row id
- **column** - (*string*) the column id



Still, for [datatable](datatable/index.md) it's better to use its [editCell](api/ui.datatable_editcell.md), [editRow](api/ui.datatable_editrow.md) and [editColumn](api/ui.datatable_editcolumn.md) methods. 

The method is useful when **adding a hotkey** to open edit state. 

~~~js
webix.UIManager.addHotKey("enter", function(view){
	var pos = view.getSelectedId();
	view.edit(pos); //edit selected item on pressing 'enter'
}, gridc);
~~~

{{sample 15_datatable/04_editing/04_select.html}}