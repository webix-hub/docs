eachLeaf
=============

@short:
	iterates through the leaves (items with no sub-items) of the specified branch

@params:
- pid		string		the parent (branch) id
- code		function	a function that needs calling for each data item



@example:
tree.data.eachlLeaf("1.2",function(obj){ console.log(obj.id)});

@template:	api_method
@descr:

