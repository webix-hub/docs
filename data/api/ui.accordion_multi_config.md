multi
=============


@short:
	enables/disables mode when several panels can be visible at once

@type: boolean,string
@example:
webix.ui({
	cols:[{ view:"accordion",
    	multi:true,
		...
	}]
})

@template:	api_config
@defined:	ui.accordion	
@relatedsample:
	01_layout/03_header.html
@related:
	desktop/accordion.md

@descr:

Possible value here are:

- **true**  - all panels can be expanded as well as collapsed at a time;
- **false** (default) - only one panel can be (and must be) visible at a time;
- **"mixed"** - all panels can be expanded at a time, but you cannot close them all. One pane remains visible. 


