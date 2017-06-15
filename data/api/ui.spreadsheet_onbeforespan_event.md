onBeforeSpan
=============

@short:
	fires before cells' are merged

@params:

- row			number			the number of the row that the span starts with
- column		number			the number of the column that the span starts with
- size			array			the number of cells in col and row spans

@example:

$$("ssheet").attachEvent("onBeforeSpan", function(row, column, size){
	// some code here
    return true;
});


@template:	api_event
@descr:
return false to block cell's merging


@seolinktop: [javascript dashboard framework](https://webix.com)
@seolink: [web spreadsheet](https://webix.com/spreadsheet/)