eachColumn
=============



@short: iterates over all visible columns in the table
	
@params:
- handler	function	the handler function



@example:
dtable.eachColumn( 
	function (col){ 
       	console.log( dtable.getColumnIndex(col) )
	}
)



@template:	api_method
@descr:

- The loop variable **i** is the column id;
- The order of iteration is the current columns order;
- If some columns have been hidden by api/ui.datatable_hideColumn.md method, they are not included into a loop.



