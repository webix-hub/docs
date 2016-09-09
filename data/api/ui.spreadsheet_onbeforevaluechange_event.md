onBeforeValueChange
=============

@todo:
	check 

@short:
fires before the value of a cell is changed

@params:

- row			number		the row id
- column		number		the column id
- new_val		string		the new value		
- old_val		string		the old value

@example:

$$("ssheet").attachEvent("onBeforeValueChange",function(row,column,new_val,old_val){
	// your code here
    return true;
});

@template:	api_event
@descr:

