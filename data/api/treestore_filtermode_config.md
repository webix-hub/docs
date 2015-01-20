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

The filterMode property is an object that can contain 3 attributes:

- **showSubItems** - (*boolean*) defines whether the tree should display children of the filtered items (*true*) 
(even if they don't match the filtering condition). The default value - *true*. 
- **openParents** - (*boolean*) - defines whether parents of the filtered items should be expanded (even if they don't match 
the filtering condition) so that user can effortlessly see the result of filtering. *True* by default. 
- **level** - (number) sets the nesting level to filter items from (one-based numbering).

