maxWidth
=============


@short: sets the maximum width for the view
@type:  number
@example:
webix.ui({
	view:"some",
	maxWidth:1000,
	...
});


@template:	api_config
@relatedsample:
	01_layout/02_resize_limit.html
@relatedapi:
    api/ui.baseview_minwidth_config.md
    api/ui.baseview_maxheight_config.md
    api/ui.baseview_minheight_config.md
@related:
	desktop/layout.md
    desktop/dimensions.md
    desktop/controls_guide.md
@descr:


* The view can take the width not bigger than the specified value.
* If there is not enough space for the specified width - the view will shrink down.
* During resizing the view can't take the size bigger than the value of **maxWidth**.