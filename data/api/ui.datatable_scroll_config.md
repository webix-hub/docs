scroll
=============


@short:
	enables or disables scroll for the datatable

@example:

webix.ui({
    view:"datatable",
    scroll:false
});

@values:
- y (true)	 enables vertical scroll (the default value) 
- x	enables horizontal scroll
- xy	enables both scrolls
- false	 disables both scrolls

@type: boolean,string


@template:	api_config
@descr:


Enabled by default

@relatedapi:
	api/ui.datatable_scrollx_config.md
    api/ui.datatable_scrolly_config.md
    api/ui.datatable_scrollaligny_config.md
@related:
	desktop/scroll_control.md
	datatable/sizing.md#scrolling