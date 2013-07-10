move
=============




@short:
	moves the specified item to a new position

@params:
- sid		string	the id of the item to move
- tindex	number     the new position of the item (new index)
* tobj	  	object    the object that the item is moved to
* tid		string	the new item id


@returns:

- newid  string  the item id


@example:

//moving in the same list
$$('list').move("a12", 0);
$$('list').move("a13", -1);
//moves an item to a different list
var id = $$('list').move("a13", 0, $$("list2"));

@template:	api_method

@related:
	desktop/data_object.md
@relatedapi:
	api/datamove_movebottom.md
    api/datamove_movedown.md
    api/datamove_moveup.md
    api/datamove_movetop.md
@defined:	DataMove	
@descr:


