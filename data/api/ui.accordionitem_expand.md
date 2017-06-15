expand
=============



@short:
	expands the specified accordion item


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
$$('item1').expand();

@template:	api_method
@defined:	ui.accordionitem	
@descr:

@relatedapi:
	api/ui.accordionitem_collapse.md
@related: 
	desktop/accordionitem.md

@seolinktop: [javascript dashboard framework](https://webix.com)
@seolink: [accordion tabs](https://webix.com/widget/accordion/)