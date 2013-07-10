type
=============


@short:
	object that specifies items presentation

@type: object
@example:
list = webix.ui({
	view:"list",
	...
	type:{
		height:50
	}
})

@template:	api_config
@relatedsample:
	02_toolbar/13_search_field.html
@related:
	desktop/html_templates.md
    desktop/type.md
@defined:	RenderStack	
@descr:
Attributes of the **type** object:

- **css** - (*string*) the name of a css class that will be applied to component's items (the default name of the applied class is 'default').
- **height** - (*number*) the height of an item in the component.
- **template** - (*function, string*) an html template that will define item presentation in the component.
- **width** - (*number*) the width of the items list.
- **subsign** - (*bool*) - for menu: if *true* shows an array of menu items that feature a submenu. 
