eachSubItem
=============

@short:iterates through all childs (of any level) of the specified branch
	

@params:
- pid			string		the parent (branch) id
- code		function	a function that needs calling for each data item


@example:
tree.data.eachSubItem("2", function(obj){ console.log(obj.id); });

@template:	api_method

@descr:

Note, 

- api/treestore_eachsubitem.md iterates through all child nodes of the branch (without the specified parent node).
- The  api/treestore_eachsubitem.md's function takes the **data object** as a parameter.
- If you want to iterate only through the first-level childs of a branch - use the api/treestore_eachchild.md method.

@related:
	datatree/getting_value.md
@relatedapi:
	api/treestore_each.md
    api/treestore_eachopen.md
    api/treestore_eachchild.md


