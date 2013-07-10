filterMode
=============


@short: defines the pattern for tree item filtering
	
@type: object
@example:
view:"tree", 
filterMode:{
	showSubItems:false,
	level:2
}

@template:	api_config
@relatedsample:
	17_datatree/04_api/03_filter.html
@related:
	datatree/filtering.md
@descr:

The filterMode property is an object that can contain 2 attributes:

- **showSubItems** - (bool) defines whether the tree must display childs of the filtered items (true) or the filtered items would be displayed as childs of the root node (false). The default value - true;
- **level** - (number) sets the nesting level to filter items from (one-based numbering).

