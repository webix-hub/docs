getNextSiblingId
=============

@short: returns the id of the next sibling of the specified node
	

@params:
- id  	id		ID of the node in question

@returns:
- id 	id		ID of the next sibling or false if there isn't any

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

$$('tree1').getNextSiblingId("part1"); // returns 'part2'
@template:	api_method
@relatedapi:
	api/treestore_getprevsiblingid.md
@related:
	datatree/getting_value.md
@descr:


