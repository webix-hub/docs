yCount
=============


@short:
	defines height of datatable in rows

@type: number
@example:

//grid will height enough to show 20 rows of data
webix.ui({
   view:"datatable",
   yCount:20
});


@template:	api_config
@related:
	datatable/columns_configuration.md
@descr:

Possible values for the property are:

- desired **number**;
- 0 to disable yCount ( calculate the number of item on the base of component size).

{{sample 10_window/05_popup_menu.html}}


