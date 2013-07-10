cells
=============

@short:
	the array with views objects

@type: object
@example:
webix.ui({
	view:"multiview", //optional
	cells:[
     	{ view:"list", id:"listview", ... },
		{ view:"form", id:"formview", elements:[...] }
	]
});

@template:	api_config
@defined:	ui.multiview	
@related:
    desktop/tabview.md
    desktop/tabbar_switching.md
    desktop/show_switching.md
@relatedsample:
	20_multiview/02_navigation.html
    02_toolbar/02_tabbar.html
    02_toolbar/03_tabview.html
@descr:

- Multiview cells may contain any ui [components](desktop/components.md) and [layout](desktop/layout.md) elements you like. 
- Each cell features the unique ID to apply methods like show() and back() to it. 
- If you layout features **cells** property object, it automatically becomes the multiview, so you needs specify view name. 
- switching between cell is implemeted with integral buttons([tabbar](desktop/controls.md#tabbar) and [segmented](desktop/controls.md#segmented)), [tabview](desktop/tabview.md) or 
dedicated functions. 

