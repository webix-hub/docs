getAllSelectAreas
=============
 

@short:
	returns an object that contains configuration objects of all select areas in the datatable

@params:

@returns:

- areas			object			an object with config objects of all select areas


@example:

var areas = $$("dtable").getAllSelectAreas();

@template:	api_method
@descr:
Each returned object of the select area contains the following parameters:

- *start*	- (object) the id object of the left top cell, contains two parameters: the row id and the column id
- *end* - (object) the id object of the right cell, contains two parameters: the row id and the column id
- *preserve* - (boolean)	defines, if the previous select area should be saved, false by default
- *area_name* - (string)	optional, the name used to address to an area to change or to delete it
- *css* - (string) optional, the css style for an area
- *handle* - (boolean) optional, defines, whether selection will be resized with or without a handle

@relatedapi:
- api/ui.datatable_addselectarea.md
- api/ui.datatable_removeselectarea.md
- api/ui.datatable_getselectarea.md

@related:
datatable/area_selection.md

@relatedsample: 60_pro/01_datatable/06_api/14_area_selection.html

@edition:pro