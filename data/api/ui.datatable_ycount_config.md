yCount
=============


@short:
	defines height of datatable in rows

@type: int
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
- **"auto"** (to calculate the number of item on the base of component size).

{{sample 10_window/05_popup_menu.html}}


