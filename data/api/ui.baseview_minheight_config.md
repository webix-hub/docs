minHeight
=============


@short: 	sets the minimal height for the view
@type:  number
@example:
webix.ui({
	view:"some",
	minHeight:100,
	...
});


@template:	api_config
@relatedsample:
	01_layout/08_min_size.html
@relatedapi:
	api/ui.baseview_maxheight_config.md
    api/ui.baseview_maxwidth_config.md
    api/ui.baseview_minwidth_config.md
@related:
	desktop/layout.md
    desktop/dimensions.md
    desktop/controls_guide.md
@descr:

* The view can take the height not less than the specified value.
* If more (free) space is available - the view will take it.
* During resizing the view can't take the size lesser than the value of **minHeight**.


