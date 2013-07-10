getFirstChildId
=============

@short:  gets the ID of the first child of the specified branch
	
@params:
- id 	id 		the parent (branch) id

@returns:
-id		string 	returns the id of the first child of the specified branch. If there are not any, returns <i>null</i>

@example:
tree.data.getFirstChildId(tree.getSelectedId()); 
	//returns the ID of the first child of selected item
    
@template:	api_method
@related:
	datatree/getting_value.md
@relatedapi:
	api/link/ui.tree_getparentid.md
@relatedsample:
	17_datatree/90_tests/03_checked.html
@descr:


