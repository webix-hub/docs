onColumnResize
=============


@short: fires when width of column was changed
	

@params:
- id				string			id of the column
- newWidth			number			the new width set for the column
- oldWidth			number			the previous width of the column
- user_action		boolean			true if column was resized by user action

@example:

$$("table").attachEvent("onColumnResize", function(id,newWidth,oldWidth,user_action){
	alert("New column width: " + this.getColumnConfig(id).width );
});


@template:	api_event
@descr:




@seolinktop: [web development library](https://webix.com)
@seolink: [javascript datatable](https://webix.com/widget/datatable/)