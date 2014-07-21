eachRow
=============

@short: iterates over all rows in the table
	

@params:
- handler	function	the handler function
* all	boolean    if true, hidden rows are included into a loop




@example:
dtable.eachRow( 
	function (row){ 
       	console.log( dtable.getItem(row).title )
	}
)

@template:	api_method
@descr:

- The loop variable **i** is the row id.
- Basically, the order of iteration is the order that rows were added to the table but not necessarily so.
- If the table loads data dynamically - just already parsed rows will be iterated.
- If you apply filtering to the table, all rows will be iterated, doesn't matter they meet filtering criteria or not.

