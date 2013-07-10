xCount
=============


@short:
	defines width of view in items

@type:  int
@example:

//width of view will be enough to show 2 items
webix.ui({
	view:"list", 
	xCount:6,
	scroll:"x",
	layout:"x",
});

@template:	api_config
@relatedapi:
	api/ui.list_ycount_config.md
@related:
	desktop/list.md
@relatedsample:
	05_list/08_xlist.html
@descr:

The property make sense only for a horizontal list (the one featuring "x" layout).

Possible values for the property are:

- desired **number**;
- **"auto"** (to calculate the number of item on the base of component size).



