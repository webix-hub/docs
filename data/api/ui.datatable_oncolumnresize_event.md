onColumnResize
=============


@short: fires when width of column was changed
	

@params:
- id	id		id of the column

@example:

$$("table").attachEvent("onColumnResize", function(id){
	alert("New column width: " + this.getColumnConfig(id).width );
));


@template:	api_event
@descr:


