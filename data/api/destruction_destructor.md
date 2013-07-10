destructor
=============


@short:
	destructs the calling object




@example:
function recreate_grid(){
	if (grid)
		grid.destructor();

	grid = new webix.ui({
  	..//new grid config
    });
}

@template:	api_method
@defined:	Destruction	

@relatedsample:
	15_datatable/20_templates/08_locales.html
@related: 
	tutorials/start_coding.md
@descr:

The destructor removes all HTML elements of the object, and detaches all related events.

Unloading destructors for all on-page components are called automatically and generally, you don't need to care about this. 
