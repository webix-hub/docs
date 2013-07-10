scrollY
=============


@short:  enables/disables vertical scrolling
@type:  bool

@example:

webix.ui({
	view:"datatable",
	scrollY:false,
	...
})


@template:	api_config

@related:
	datatable/sizing.md#scrolling
	desktop/scroll_control.md
@relatedapi:
	api/ui.datatable_scrollx_config.md
	api/ui.datatable_scrollaligny_config.md
    api/ui.datatable_scroll_config.md

@relatedsample:
	15_datatable/09_columns/03_scrolls.html

@descr:

By default, vertical scrolling is enabled. It will be disabled automatically, if you set the api/ui.datatable_autoheight_config.md parameter to <i>true</i>.



