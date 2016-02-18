onBeforeSpan
=============

@short:
	fires before cells' are merged

@params:

- cell
- value

@example:

$$("ss").attachEvent("onBeforeSpan", function(cell, value){
	// some code here
    return true;
});


@template:	api_event
@descr:
return false to block cell's merging
