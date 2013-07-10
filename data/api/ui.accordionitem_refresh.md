refresh
=============



@short:
	refreshes the header label



@example:
webix.ui({
	container:"layout_div",
	view:"accordion",
	cols:[
		{ header:"col 1", id:"a1", body:"content 1"},
		{ header:"col 2", id:"a2", body:"content 2"}
	]
});

$$("a1").define("header","new header");
$$("a1").refresh(); // header:'col1' -> header:'new header'

@related:
	desktop/redefinition.md


@template:	api_method
@defined:	ui.accordionitem	
@descr:


