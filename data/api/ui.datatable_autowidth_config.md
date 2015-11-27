autowidth
=============


@short: adjusts Datatable size to its content horizontally
	

@type: boolean
@example:
webix.ui({
	view:"datatable",
	autowidth:true,
	...
});


@template:	api_config
@defined:	ui.datatable	

@relatedsample:
	15_datatable/11_sizing/05_auto_size.html
@relatedapi:
	api/ui.datatable_autoheight_config.md
@related:
	datatable/sizing.md#autosizing

@descr:

If a Datatable features 5 columns with 100px width each, the resulting width will be 500px plus borders. 

To adjust a component to the size of a parent container omit this property.  

To stretch the Datatable columns within the container, you need to set **fillspace** to at least one of its columns.

~~~js
columns:[
	{ id:"title", header:"Title", fillspace:true }
]
~~~


