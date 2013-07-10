padding
=============


@short: defines the space between the element borders and content (applies the specified value to all sides).
	

@type:number
@example:
webix.ui({
		container:"box",
		view:"toolbar",
        padding:10,
        cols:[
			{ view:"button", value:"Load" },
			{ view:"button", value:"Save" },
			{ view:"button", value:"Delete" }
		]
});

@template:	api_config
@relatedapi:
	api/ui.layout_paddingX_config.md
    api/ui.layout_paddingY_config.md
	
@descr:
The image below shows how the script above applies the <i>padding</i> property.

<br>

<img src="api/padding_image.png"> </img>

