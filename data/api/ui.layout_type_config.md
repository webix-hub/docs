type
=============


@short:
	defines the layout borders 
    
@type: string 
@values:
- line	cells with border (default)
- clean	cells without border
- wide	cells with border and small space between siblings
- space	cells with border and wide space between siblings
- head	similar to "wide", but there is any border between the first and second cells
    
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
