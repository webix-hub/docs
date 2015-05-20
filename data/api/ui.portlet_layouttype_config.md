layoutType
=============

@short:
	defines the borders of layout that will be created after drag-n-drop operation is finished 
    
@type: string 
@values:
- line	cells with border (default)
- clean	cells without border
- wide	cells with border and small space between siblings
- space	cells with border and wide space between siblings
- head	similar to "wide", but there is any border between the first and second cells
    
@example:

webix.ui({
	view:"portlet",
    layoutType: "space",
    rows: [
    ...
    ]
});

@template:	api_config
@descr:

@related:
	desktop/borders.md

	


