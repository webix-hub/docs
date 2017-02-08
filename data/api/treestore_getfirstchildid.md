getFirstChildId
=============

@short:  gets the ID of the first child of the specified branch
	
@params:
- id 	id 		the parent (branch) id

@returns:
- id		string 		the id of the first child of the specified branch. If there aren't any, returns <i>null</i>

@example:
var firstChild = tree.data.getFirstChildId(tree.getSelectedId()); 
// returns the ID of the first child of selected item
    
@template:	api_method
@related:
	datatree/getting_value.md
@relatedapi:
	api/link/ui.tree_getparentid.md
@descr:


