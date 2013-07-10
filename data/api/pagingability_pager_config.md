pager
=============


@short: 	defines paging configuration ( creates a 'ui.pager' object)
	

@type: object
@example:

webix.ui({
	view:"datatable", 
	pager:{
		container:"paging_here",
		size:100,
		group:5
	}
})

@template:	api_config
@descr:

The parameter has the following attributes:

- **container** - the container where the pager controls will be placed into;
- **size** - the number of records per page;
- **group** - the number of pages in the pager.


@relatedapi: 
	api/refs/ui.pager.md
@related:
	desktop/paging.md
@relatedsample:
	06_dataview/19_paging/02_dynamic_paging.html
