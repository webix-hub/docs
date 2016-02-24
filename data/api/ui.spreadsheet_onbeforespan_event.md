onBeforeSpan
=============

@short:
	fires before cells' are merged

@params:

- row			number			the number of the row that the span starts with
- column		number			the number of the column that the span starts with
- value			string			the value of the span

@example:

$$("ssheet").attachEvent("onBeforeSpan", function(row, column, value){
	// some code here
    return true;
});


@template:	api_event
@descr:
return false to block cell's merging
