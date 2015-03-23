checkboxRefresh
=============


@short:
	controls behavior of checkbox editors in grid

@type: boolean
@example:

webix.ui({
	view:"datatable",
    checkboxRefresh:true
})

@template:	api_config
@relatedapi:
	api/link/ui.datatable_refresh.md
@related:
	desktop/redefinition.md
@relatedsample:
	15_datatable/04_editing/08_custom_checkbox.html
@descr:


If set to true, then after checkbox state changing, row will be repainted. 