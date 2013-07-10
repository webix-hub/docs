filterMode
=============


@short: defines filtering rules in tree-like components
	

@type: object
@example:
$$("grouplist").define("filterMode",{
   level:0,
   showSubItems:1
});

$$("grouplist").define("filterMode",{
   level:1
});

@template:	api_config
@descr:
{{note
Applicable just to <b>Grouplist</b>, <b>TreeTable</b>
}}

An input object can take 2 attributes:

- **level** - (*number*) sets the node to filter (one-based numbering). The '0' value says to filter all nodes
- **showSubItems** - (*bool*) defines whether the component should display childs of the filtered items

@relatedsample: 
	15_datatable/30_treetable/04_filter.html
    15_datatable/30_treetable/05_filter_custom.html
@related:
	datatable/filtering.md
	datatree/filtering.md
@relatedapi:
	api/link/ui.treetable_filter.md


