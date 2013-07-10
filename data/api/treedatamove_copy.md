copy
=============

@short:
	makes a copy of item

@params:
- sid		id		id of source item
- tindex	number		index at which copy will be created
* tobj		view	target view
- details	object	extra parameters for moving

@returns:

- id		id		id of created copy

@example:


@template:	api_method
@descr:


details can contain the next properties

~~~js
details = {};
details.newId = "123"; //new id for moved item
details.parent = "a2"; //id of new parent element
~~~

If parent is defined - index will be child index inside the target branch
