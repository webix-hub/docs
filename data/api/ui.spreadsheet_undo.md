unDo
=============


@short:
	reverts the last change made to an item 

@params:
- id		string			optional, the id of an item 

@example:

//reverts the last change in an item
$$("ss").undo();

// brings the item back to the initial state
$$("ss").undo(id);

@template:	api_method
@descr:

