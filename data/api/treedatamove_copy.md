copy
=============

@short:
	makes a copy of an item

@params:
- sid		id				id of source item
- tindex	number			index at which copy will be created
* tobj		WebixView		optional, target view
* details	object			optional, extra parameters for moving

@returns:

- id		id		id of the created copy

@example:


@template:	api_method
@descr:

Details object can contain the next properties:

~~~js
details = {};
details.newId = "123"; // a new id for the moved item
details.parent = "a2"; // the id of a new parent element
~~~


If the parent is defined, **tindex** will be the child index inside the target branch.

If **parent** is not defined, the value will be set to **0** (will be added to tree root).

In case **newId** is not defined, the new ID will be the same as the ID of the 
source item (**sid**), which is not desirable during copying within one and the same component.
