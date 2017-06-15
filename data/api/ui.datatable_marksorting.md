markSorting
=============


@short: marks the sorted column with a dedicated sign (asc/desc) in the header

@params:

- column_id		string		column ID
- direction		string		sorting direction
	


@example:
dtable = webix.ui({view:"datatable", ...})
 
dtable.markSorting("title", "asc");


@template:	api_method
@defined:	ui.datatable	
@descr:

The method is designed for the cases of programmatic sorting to indicated that the data in the datatable has been sorted.

~~~js
dtable.sort("title", "asc");
dtable.markSorting("title", "asc");
~~~

The method can be called with no parameter to remove all sotring signs from the datatable headers. 


@relatedsample:
	15_datatable/02_sorting/03_sort_api.html
@relatedapi:
	api/link/ui.datatable_sort.md
@related:
	datatable/sorting.md

@seolinktop: [web development library](https://webix.com)
@seolink: [javascript datatable](https://webix.com/widget/datatable/)