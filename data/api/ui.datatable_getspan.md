getSpan
=============

@short:
	returns the config array for a span or null, if there are no spans

@params:

@returns:
- span		array		config for a span



@example:
var span = $$("dtable").getSpan();

@relatedapi:
- api/ui.datatable_addspan.md
- api/ui.datatable_removespan.md

@related:
datatable/rowspans_colspans.md

@template:	api_method
@descr:
the elements of the returned array are:

- id - (number,string,object) id of the row that starts colspan/rowspan
- column - (string)	id of the column that starts colspan/rowspan
- width - (number) how many columns should the span include
- height - (number)	how many rows should the span include
- value - (string) optional, the value that the span area should display
- css - (string) optional, css class that should be applied to the span area

