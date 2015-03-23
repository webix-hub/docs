prerender
=============


@short: invokes the full rendering of DataTable data 
@type: boolean

@example:
webix.ui({
	view:"datatable",
	prerender:true,
	...
});

@template:	api_config
@defined:	ui.datatable	


@related:
	datatable/integration.md

@relatedapi:
	api/ui.datatable_render.md



@descr:

* The parameter doesn't give advantages for non-touch devices (slower than with a standard data loading).  
* On touch devices it allows you to get a bit more smooth scrolling (anyway, it's not usable with big datasets)
* **Not related** to dynamical loading. 
