threeState
=============

@short: defines three-state checkboxes for the tree. Flase by default. 
	

@type: bool
@example:
webix.ui({
	view:"tree",
	template:"{common.icon()} {common.checkbox()} {common.folder()} #value#",
	threeState: true,
	...
});

@template:	api_config
@related:
	datatree/checkboxes.md
@relatedsample:
	17_datatree/02_checkbox/02_three_state.html
@descr: 

Three state checkboxes define the peculiar behaviour of a checkbox tree, namely:

- When the user checks/unchecks a parent node - this parent node and all its child nodes (of each nesting level) are checked/unchecked;
- When the user checks/unchecks a child node - this only node is checked/unchecked. 



