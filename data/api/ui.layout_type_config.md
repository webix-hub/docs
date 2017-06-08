type
=============


@short:
	defines the layout borders 
    
@type: string 
@values:
- line			cells with border (default)
- clean			cells without border
- wide			cells with border and wide space between siblings
- space			cells with border and wide space between siblings plus padding from the parent container
- head			cells with border and small space between siblings
- form			cells without border and with padding around all of them
    
@example:

webix.ui({
	type: "space",
    rows: [
      ...
    ]
});

@template:	api_config
@defined:	ui.layout	
@descr:

@related:
	desktop/borders.md
@relatedsample:
	01_layout/05_header_complex.html
