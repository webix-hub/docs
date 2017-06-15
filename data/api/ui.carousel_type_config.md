type
=============

@short:
	defines the layout borders 
    
@type: string 
@values:
- line		cells with border
- clean		cells without border (default)
- wide		cells with border and small space between siblings
- space		cells with border and wide space between siblings
- head		similar to wide, but there is no border between the first and second cells
    
@example:

webix.ui({
	view:"carousel",
	type:"space", 
    rows:[
		...
	]
});

@template:	api_config
@defined:	ui.layout	
@descr:

@related:
	desktop/borders.md





@seolinktop: [javascript framework](https://webix.com)
@seolink: [javascript image slideshow](https://webix.com/widget/carousel/)