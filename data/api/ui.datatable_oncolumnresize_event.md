onColumnResize
=============


@short: fires when width of column was changed
	

@params:
- id				string			id of the column
- newWidth			number			the new width set for the column
- oldWidth			number			the previous width of the column

@example:

$$("table").attachEvent("onColumnResize", function(id, newWidth, oldWidth){
	alert("New column width: " + this.getColumnConfig(id).width );
});


@template:	api_event
@descr:


