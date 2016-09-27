onBeforeValueChange
=============


@short:
fires before the value of a cell is changed

@params:

- row			number		the row id
- column		number		the column id
- newValue		string		the new value		
- oldValue		string		the old value

@example:

$$("ssheet").attachEvent("onBeforeValueChange",function(row,column,newValue,oldValue){
	// your code here
    return true;
});

@template:	api_event
@descr:

