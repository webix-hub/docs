collapse
=============



@short:
	collapses the specified accordion item

	

@example:
webix.ui({
	container:"layout_div",
	view:"accordion",
	multi:true,
	cols:[
		{ header:"col 1", id:"item1", body:"content 1"},
		{ header:"col 2", id:"item2", body:"content 2"},
	]
});
...
$$('item1').collapse();

@template:	api_method
@relatedapi:
	api/ui.accordionitem_expand.md
@related: 
	desktop/accordionitem.md
@defined:	ui.accordionitem	
@descr:


