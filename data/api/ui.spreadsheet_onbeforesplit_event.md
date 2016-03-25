onBeforeSplit
=============

@short:
	fires before merged cells are splitted

@params:

- row			number			the number of the row that the span starts with
- column		number			the number of the column that the span starts with
- value 		array           the array with values of the deleted span 


@example:

$$("ssheet").attachEvent("onBeforeSplit", function(row, column, value){
	// some code here
    return true;
});


@template:	api_event
@descr:
return false to block cell's splitting

