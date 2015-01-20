checkItem
=============
@short:
	checks the checkbox it the tree item

@params:
- id	string	the id of an item to check


@example:
tree = new webix.ui({
    view:"tree",
  	template:"{common.icon()} {common.folder()} {common.checkbox()} #value#",
    ...
});
tree.checkItem('node1'); //'node1' is the item id
@template:	api_method
@relatedsample:
	17_datatree/02_checkbox/02_three_state.html
@descr:
The method checks/unchecks the checkbox by turn.

@relatedapi:
	api/treestatecheckbox_uncheckitem.md
@related:
	datatree/checkboxes.md