add
=============

@short: adds a new item to the tree
	

@params:
- obj		object	the item object
* index		number	the position that the item will be added to (zero-based numbering)
* parentId		string	the parent id

@returns:
-itemId		string	ID of the newly added item

@example:
//inserts a new item into the branch with id='root'
tree.data.add({id:"item10", value:"NewItem"}, 0, "root" );

@relatedsample:
	17_datatree/04_api/06_add_delete.html
@related:
	datatree/nodes_manipulations.md#addingnodes
@template:	api_method
@descr:


