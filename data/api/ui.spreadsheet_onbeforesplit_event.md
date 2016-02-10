onBeforeSplit
=============

@short:
	fires before merged cells are splitted

@params:

- cell
- value
- group

@example:

$$("ss").attachEvent("onBeforeSplit", function(cell, value, group){
	// some code here
    return true;
});


@template:	api_event
@descr:
return false to block cell's splitting

