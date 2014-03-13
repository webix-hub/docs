getPrevSiblingId
=============

@short: returns the id of the previous sibling of the specified node
	

@params:
- id  	id		ID of the node in question

@returns:
- id 	id		ID of the previous sibling or false if there isn't any
	

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

$$('tree1').getPrevSiblingId("part2"); // returns 'part1'

@template:	api_method
@related:
	datatree/getting_value.md
@relatedapi:
	api/treestore_getnextsiblingid.md
@descr:


