body
=============


@short:
	defines the cell content (a view or some HTML)

@type: string,object
@example:
webix.ui({ 
	view:"accordion",
 	rows:[{ 
		header:"panel 1",
		body:{ 
        	id:"films",
			view:"list",
			template:"#title#",
            data: film_set
		}
	},
	{ 
		header:"panel 2",
		body:"this is the second pane"
	}]
})

@related:
	desktop/accordionitem.md
    desktop/window.md
@relatedsample:
	01_layout/03_header.html
	10_window/01_init.html

@template:	api_config
@defined:	ui.accordionitem	
@descr:




@seolinktop: [easy javascript framework](https://webix.com)
@seolink: [javascript accordion](https://webix.com/widget/accordion/)