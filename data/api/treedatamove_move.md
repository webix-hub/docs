move
=============

@short:
	move item to new position

@params:
- sid		id		id of source item
- tindex	number		new item index
* tobj		view	target view
- details	object	extra parameters for moving

@returns:

- id		id		id of moved item ( new id, if it was changed ) 

@example:


@template:	api_method
@descr:


details can contain the next properties

~~~js
details = {};
details.newId = "123"; //new id for moved item
details.parent = "a2"; //id of new parent element
details.copy = false;  //creates new item, instead of moving
~~~

If parent is defined - index will be child index inside the target branch

