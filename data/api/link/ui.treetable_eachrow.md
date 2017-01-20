@link: api/ui.datatable_eachrow.md


@params:
- handler		function		the handler function

@example:
$$("table").eachRow( 
	function (row){ 
       	console.log( dtable.getItem(row).title )
	}
)