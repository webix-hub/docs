getSelectArea
=============


@short:
	returns the object of the select area

@params:
- area_name			string			optional, the name of the select area 


@returns:

- area		object			the object of the select area

@example:

$$("dtable").getSelectArea();

@template:	api_method
@descr:
if the area_name parameter isn't passed, the method returns the last selected area

The returned object of the select area contains the following parameters:

- start	- (object) the id object of the left top cell, contains two parameters: the row id and the column id
- end - (object) the id object of the right cell, contains two parameters: the row id and the column id
- preserve - (boolean)	defines, if the previous select area should be saved, false by default
- area_name - (string)	optional, the name used to address to an area to change or to delete it
- css - (string) optional, the css style for an area
- handle - (boolean) optional, defines, whether selection will be resized with or without a handle

@relatedapi:
- api/ui.datatable_addselectarea.md
- api/ui.datatable_removeselectarea.md