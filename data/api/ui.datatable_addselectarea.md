addSelectArea
=============

@short:
	adds a select area

@params:
- start			object			the id object of the left top cell, contains two parameters: the row id and the column id
- end			object			the id object of the right cell, contains two parameters: the row id and the column id
- preserve		boolean			defines, if the previous select area should be saved, false by default
- area_name		string			optional, the name used to address to an area to change or to delete it
- css			string			optional, the css style for an area
- handle		boolean			optional, defines, whether selection will be resized with or without a handle


@example:
$$("dtable").addSelectArea(start,end,preserve);


@template:	api_method
@descr:

@relatedapi:
- api/ui.datatable_getselectarea.md
- api/ui.datatable_removeselectarea.md
