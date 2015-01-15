eachColumn
=============



@short: iterates over all visible columns in the table
	
@params:
- handler	function	the handler function
* all		boolean 	 if true, hidden columns are included into a loop



@example:
dtable.eachColumn( 
	function (columnId){ 
       	console.log( dtable.getColumnIndex(columnId) )
	}
)



@template:	api_method
@descr:

- The handler function takes column ID as parameter;
- The order of iteration is the current columns order.



