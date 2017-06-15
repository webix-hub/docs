head
=============


@short:
	sets the view header 

@type: object, string
@example:
webix.ui({
	view:"window",
	height:250,
	head:"My Window",
	body:{
		template:"Some text"
	}
}).show();

@template:	api_config
@related: 
	desktop/window.md
@relatedapi:
	api/ui.window_gethead.md
    api/ui.window_body_config.md
@relatedsample:
	10_window/01_init.html
@defined:	ui.window	
@descr:

If `head` value is a string, then [Webix template](api/refs/ui.template.md) is used to build the head. 

If you need a more complex header, define the needed configuration through object definition:

~~~js
head:{
	view:"toolbar", cols:[
		{view:"label", label: "This window can be closed" },
		{ view:"button", label: 'Close Me', click:"$$('win3').close();"}
	]}
}
~~~





@seolinktop: [javascript ui library](https://webix.com)
@seolink: [js window](https://webix.com/widget/window/)