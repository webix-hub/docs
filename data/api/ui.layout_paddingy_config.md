paddingY
=============


@short: sets the top and bottom padding (applies the specified value to both sides)
	

@type: number
@example:
webix.ui({
	view:"toolbar", 
    paddingY:10,
	cols:[
		{ view:"button", value:"Load" },
		{ view:"button", value:"Save" },
        { view:"button", value:"Delete" }
	]
});

@template:	api_config
@relatedapi:
	api/ui.layout_paddingX_config.md
    api/ui.layout_padding_config.md
@descr:
The image below shows how the script above applies the <i>paddingY</i> property.

<br>

<img src="api/paddingY_image.png"> </img>



@seolinktop: [html5 framework](https://webix.com)
@seolink: [ui layout](https://webix.com/widget/layout/)