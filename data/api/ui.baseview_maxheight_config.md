maxHeight
=============


@short: sets the maximum height for the view
@type:  number
@example:

webix.ui({
	view:"some",
	maxHeight:1000,
	...
})


@template:	api_config
@relatedsample:
	01_layout/08_min_size.html
@relatedapi:
	api/ui.baseview_minheight_config.md
    api/ui.baseview_maxwidth_config.md
    api/ui.baseview_minwidth_config.md
@related:
	desktop/layout.md
    desktop/dimensions.md
    desktop/controls_guide.md
@descr:


* The view can take the height not bigger than the specified value.
* If there is not enough space for the specified height - the view will shrink down.
* During resizing the view can't take the size bigger than the value of **maxHeight**.