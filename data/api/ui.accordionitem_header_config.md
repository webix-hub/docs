header
=============


@short:
	sets the label of the header in the expanded state

@type: bool,string,function
@example:
webix.ui({ 
    view:"accordion",
    rows:[{
        header:"panel 1",
        body:"content 1"
    },
    { 
        header:false //hides the header for the second cell
        body:"content 2"
    }]
})

@template:	api_config
@defined:	ui.accordionitem	
@relatedsample:
	01_layout/03_header.html
@relatedapi:
	api/ui.accordionitem_headerheight_config.md
    api/ui.accordionitem_headeralt_config.md
    api/ui.accordionitem_headeraltheight_config.md
@related:
	desktop/setting_headers.md
    desktop/accordionitem.md
@descr:
The *false* value will hide the header.
