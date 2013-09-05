getText
=============

@short: returns text value of a cell
	

@params:
- rowid       id         id of row
- colid       id         name of column


@returns:
- text        string      value of the cell as it rendered in a datatable

@example:

//get value
var val = $$("mytable").getItem(12).price;

//get rendered text
var val = $$("mytable").getText(12, "price");

@template:	api_method
@descr:




