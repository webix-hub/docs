setItemState
=============


@short: set update state for the item
	

@params:

- itemId       id      id of the item
- state        bool    update state 


@example:

//mark as updated
webix.dp($$("myview")).setItemState(id, "update"); 
//unmark
webix.dp($$("myview")).setItemState(id, false); 




@template:	api_method
@descr:


State values are : "update", "insert", "delete"