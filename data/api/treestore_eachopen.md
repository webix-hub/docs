eachOpen
=============

@short: iterates through opened nodes of the tree (both parent and child)
	

@params:
- code		function		a function that needs calling for each data item
* master		object		an object that the  function is applied to (<i>this</i> by default)
* pid			string		the parent node id. Used to iterate through a specific branch


@example:


@template:	api_method
@descr:


@example:
//iterates through all items of the tree
tree.data.eachOpen(
	function(obj){
    	console.log(obj.value)
    }
);

//iterates through items with $parent="2"
tree.data.eachOpen(
	function(obj){
    	console.log(obj.value)
    }, this, "2");

@template:	api_method
@descr:

Note, 

- api/treestore_eachopen.md iterates through both parent and child nodes.
- The api/treestore_eachopen.md's function takes the **data item object** as a parameter.
- If you specify the 3rd parameter (**pid**), api/treestore_eachopen.md will iterate only through child nodes of the branch (without iterating through the specified parent node).

@related:
	datatree/getting_value.md
@relatedapi:
	api/treestore_each.md
    api/treestore_eachchild.md
    api/treestore_eachsubitem.md