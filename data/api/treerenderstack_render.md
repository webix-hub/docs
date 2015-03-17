getItemNode
=============


@short: returns html element of item by item's id
	

@params: 
- id      string     item id


@returns:
- node    HTMLElement    html element of related item
	

@example:

var node = view.getItemNode("a1");

@template:	api_method
@descr:

{{note may return null if target item is not rendered yet }}