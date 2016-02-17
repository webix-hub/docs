removeSelectArea
=============


@short:
	removes a select area

@params:
- area_name		string		optional, the name of the select area that should be removed


@example:

$$("dtable").removeSelectArea();

@template:	api_method
@descr:
if the area_name parameter isn't passed, the method removes the last unnamed select area

@relatedapi:
- api/ui.datatable_addselectarea.md
- api/ui.datatable_getselectarea.md
- api/ui.datatable_getallselectareas.md

@related:
datatable/area_selection.md