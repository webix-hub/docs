addSelectArea
=============

@short:
	adds a select area

@params:
- start			object			the id object of the left top cell, contains two properties: the row id and the column id
- end			object			the id object of the right cell, contains two properties: the row id and the column id
- preserve		boolean			defines, if the previous select area should be saved, false by default
* area_name		string			optional, the name used to address to an area to change or to delete it
* css			string			optional, the css style for an area
* handle		boolean			optional, defines, whether selection will be resized with or without a handle


@example:
$$("dtable").addSelectArea(start,end,preserve);


@template:	api_method
@descr:

@relatedapi:
- api/ui.datatable_getselectarea.md
- api/ui.datatable_removeselectarea.md
- api/ui.datatable_getallselectareas.md

@related:
datatable/area_selection.md

@relatedsample: 60_pro/01_datatable/06_api/14_area_selection.html

@edition:pro

@seolinktop: [html5 ui library](https://webix.com)
@seolink: [javascript data table](https://webix.com/widget/datatable/)