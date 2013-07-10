locate
=============


@short: converts an HTML node or event object to in-table position
	

@params:
- node    element,event    an HTML node or event object


@returns:

- pos    object    the cell position

@example:
var pos = dtable.locate(event);
alert(pos.row); //the row id
alert(pos.col); //the column id
alert(pos.rind); //the row index
alert(pos.cind); //the column index	




@template:	api_method
@descr:

The method can be used to locate the related cell from some event handler.

The result object contains:

- pos.row - the row id
- pos.col - the column id
- pos.rind - the row index
- pos.cind - the column index

