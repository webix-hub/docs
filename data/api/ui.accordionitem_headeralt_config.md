headerAlt
=============


@short:
	sets the label of the header in the collapsed state

@type: string,function
@example:
webix.ui({ 
    view:"accordion",
    rows:[{
        header:"panel 1",
        headerAlt:"panel 1 (closed)",
        body:"content 1"
    },
    { 
        header:"panel 2",
        headerAlt:"panel 2 (closed)",
        body:"content 2"
    }]
});

@relatedsample:
	01_layout/03_header.html
@relatedapi:
    api/ui.accordionitem_headeraltheight_config.md
    api/ui.accordionitem_header_config.md
	api/ui.accordionitem_headerheight_config.md
@related: 
    desktop/accordionitem.md
@template:	api_config
@defined:	ui.accordionitem	
@descr:


@seolinktop: [lightweight js framework](https://webix.com)
@seolink: [accordion menu](https://webix.com/widget/accordion/)