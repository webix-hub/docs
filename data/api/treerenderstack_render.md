getItemNode
=============


@short: returns html element of item by item id
	

@params: 
- id      string     item id


@returns:
- node    HTMLElem    html element of related item
	

@example:

var node = view.getItemNode("a1");

@template:	api_method
@descr:

{{note may return null if target item is not rendered yet }}