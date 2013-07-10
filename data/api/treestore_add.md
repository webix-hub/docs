add
=============

@short: adds a new item to the tree
	

@params:
- obj		object	the item object
- index		number	the position that the item will be added to (zero-based numbering)
- pid		string	the parent id

@returns:
-itemid		string	the item id

@example:
//inserts a new item into the branch with id='root'
tree.data.add({id:"item10", value:"NewItem"}, 0, "root" );


@template:	api_method
@descr:


