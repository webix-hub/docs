setStyle
=============


@short:
	sets a style for a cell

@params:

- row			number		the row's number
- column		number		the column's number
- style			object		an object with the style that should be set for the cell



@example:

$$("ssheet").setStyle(3, 2, style);

@template:	api_method
@descr:
Note that you can only set an already existing style, it means that you need either to get some style using the api/ui.spreadsheet_getstyle.md method or to add a new one
with the help of the api/ui.spreadsheet_addstyle.md method.


@relatedapi:
api/ui.spreadsheet_addstyle.md
api/ui.spreadsheet_getstyle.md
