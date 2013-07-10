eachChild
=============

@short: iterates through the first-level childs of the specified branch
	

@params:
- pid			string		the parent (branch) id
- code		function	a function that needs calling for each data item
* master		object		an object that the function is applied to (<i>this</i> by default)


@example:
tree.data.eachChild("1.2",function(obj){ console.log(obj.id)});

@template:	api_method
@descr:

Note, 

- api/treestore_eachchild.md iterates through the first-level child nodes of the branch (without the specified parent node).
- The  api/treestore_eachchild.md's function takes the **data object** as a parameter.
- If you want to iterate through all childs of a branch - use the api/treestore_eachsubitem.md method.

@related:
	datatree/getting_value.md
@relatedapi:
	api/treestore_each.md
    api/treestore_eachopen.md
    api/treestore_eachsubitem.md