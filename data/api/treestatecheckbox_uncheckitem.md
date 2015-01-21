uncheckItem
=============
@short:unchecks the checkbox in the tree item
	

@params:
- id	string	the id of an item to uncheck


@example:
tree = new webix.ui({
    view:"tree",
  	template:"{common.icon()} {common.folder()} {common.checkbox()} #value#",
    ...
});
tree.uncheckItem('node1'); //'node1' is the item id

@template:	api_method
@descr:

@relatedapi:
	api/treestatecheckbox_checkitem.md
@related:
	datatree/checkboxes.md