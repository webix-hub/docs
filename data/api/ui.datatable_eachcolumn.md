eachColumn
=============



@short: iterates over all visible columns in the table
	
@params:
- handler	function	the handler function
- all		boolean 	 if true, hidden columns are included into a loop



@example:
dtable.eachColumn( 
	function (col){ 
       	console.log( dtable.getColumnIndex(col) )
	}
)



@template:	api_method
@descr:

- The loop variable **i** is the column id;
- The order of iteration is the current columns order.



