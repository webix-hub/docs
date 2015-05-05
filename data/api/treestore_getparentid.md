getParentId
=============


@short: get the ID of the parent node of the specified item
	

@params:
- id 	id 		ID of the child node

@returns:
- id 	id 	ID of the parent node

@example:
tree = new webix.ui({
    view:"tree",
    data: [
        { id:"branch1", value:"The Shawshank Redemption", data:[
            { id:"part1", value:"Part 1" },
            { id:"part2", value:"Part 2" }
        ]}
    ]
});
 
var child = tree.getParentId('part1'); // -> 'branch1'

@template:	api_method
@related:
	datatree/getting_value.md
@relatedapi:
	api/link/ui.tree_getfirstchildid.md
@descr:
