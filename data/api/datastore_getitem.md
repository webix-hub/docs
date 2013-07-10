getItem
=============


@short:
	gets the object of the data item with the specified id

@params:
- id		id		the item id


@returns:
-obj  object	the object of a data item

@example:
//'record' variable will contain an object of the related DataTable row, 
var record = grid.getItem("rowId");
 
//you can access data members directly
var title = record.title;

@related:
	desktop/data_object.md


@template:	api_method
@defined:	DataStore	
@descr:


