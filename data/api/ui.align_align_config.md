align
=============

@short:
	the alignment of the widget within the parent container

@type: string
@example:

//center align
{ align:"center,middle", body:{ view:"datepicker", width:200 }},
//bottom-right corner
{ align:"bottom,right", body:{ view:"datepicker", width:200 }},
//specific padding
{ align:"absolute", left:30, top:30, bottom:60, body:{ view:"datepicker", width:200 }}

@template:	api_config
@descr:
The possible values for the align property are:

- "left", "right", "center" - for the x-align
- "top", "bottom", "middle" - for the y-align
- "absolute" - for the absolute align


@related:
desktop/alignment.md

@relatedsample:
01_layout/17_align.html
