each
=============

@short:iterates through the collection of tree data items
	

@params:
- code			function		a function that needs calling for each data item
- master		object			an object that the function is applied to (<i>this</i> by default)
- all			boolean			if true, hidden (as well as hidden by filtering) items are iterated
- pid			string			the parent node id. Used to iterate through a specific branch



@example:
//iterates through all items of the tree
tree.data.each(
	function(obj){
    	console.log(obj.value)
    }
);

//iterates through items with $parent="1.2"
tree.data.each(
	function(obj){
    	console.log(obj.value)
    }, this, true, "1.2");

@template:	api_method
@descr:

Note, 

- api/treestore_each.md iterates through both parent and child nodes.
- The api/treestore_each.md's function takes the **data item object** as a parameter.
- If you specify the 3rd parameter (**pid**), api/treestore_each.md will iterate only through child nodes of the branch (without iterating through the specified parent node).

@related:
	datatree/getting_value.md
@relatedapi:
	api/treestore_eachchild.md
    api/treestore_eachopen.md
    api/treestore_eachsubitem.md