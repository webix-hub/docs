gravity
=============


@short:
	sets the view gravity (1 by default)

@type: number
@related:
	desktop/dimensions.md#rel
@relatedsample:
	01_layout/08_min_size.html
@example:
//equal sizes
webix.ui({
	cols:[
		{ gravity:1, template:"left" },
		{ gravity:1, template:"right" }
	]
});

//the left area two times wider than the right one
webix.ui({
	cols:[
		{ gravity:2, template:"left" },
		{ gravity:1, template:"right" }
	]
});

@template:	api_config
@defined:	ui.baseview	
@descr:
The parameter is used to set relative size proportions for the elements within
the common parent container.

