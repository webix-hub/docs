scrollX
=============


@short:  enables/disables horizontal scrolling
@type:	boolean

@example:

webix.ui({
	view:"datatable",
	scrollX:false,
	...
})


@template:	api_config

@related:
	datatable/sizing.md#scrolling
	desktop/scroll_control.md
@relatedapi:
	api/ui.datatable_scrolly_config.md
	api/ui.datatable_scrollaligny_config.md
    api/ui.datatable_scroll_config.md

@relatedsample:
	15_datatable/09_columns/03_scrolls.html
	15_datatable/09_columns/02_autosize_column.html

@descr:

By default, horizontal scrolling is enabled. It will be disabled automatically, if you set the api/ui.datatable_autowidth_config.md parameter to <i>true</i>.


