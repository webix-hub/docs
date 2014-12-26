editValue
=============


@short: defines which data item is editable (in case of several data item in the cell/line)
	
@type: string
@example:

webix.ui({
	view:"list",
    template:"#id#.#name#",
    editable:true,
    editValue:"name",
    ...
})


@template:	api_config
@related: 
	desktop/edit.md
    desktop/editing.md
@relatedsample:
	06_dataview/05_edit/01_init.html
@descr: Editvalue is defined for components containing more than one data item in its cell or record.

In the list above each record contains item **ID** and **name**, but only name is editable. 


