collapsed
=============


@short:
	displays the cell collapsed initially

@type: boolean
@example:
webix.ui({ 
	view:"accordion",
 	rows:[{
		header:"panel 1",
		body:"content 1"
	},
    { 
		header:"panel 2",
		body:"content 2",
		collapsed:true //the second cell will be collapsed initially
	}]
})

@template:	api_config
@defined:	ui.accordionitem	
@relatedsample:
	01_layout/03_header.html
@related: 
	desktop/accordionitem.md
@descr:


