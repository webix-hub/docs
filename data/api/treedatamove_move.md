move
=============

@short:
	move item to new position

@params:
- sid		id		id of source item
- tindex	number		new item index
* tobj		WebixView	target view
* details	object	extra parameters for moving

@returns:

- id		id		id of moved item ( new id, if it was changed ) 

@example:


@template:	api_method
@descr:

Details object can contain the next properties

~~~js
details = {};
details.newId = "123"; //new id for moved item
details.parent = "a2"; //id of new parent element
~~~

If parent is defined - **tindex** will be the child index inside the target branch.

If **parent** is not defined - the value will be set to **0** (will be added to tree root).

In case **newId** is not defined, the new ID will be the same as the ID of the 
source item (**sid**), which is not desirable during moving within one and the same component.

