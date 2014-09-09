type
=============

@short:
	defines the layout borders 
    
@type: string 
@values:
- line   cells with the border
- clean 	cells without the border
- wide  	cells with the border and small space between siblings
- space  	cells with the border and wide space between siblings
- head   	similar to *wide*, but there is no any border between the first and second cells
    
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



