minWidth
=============


@short: sets the minimal width for the view
@type:  number
@example:
webix.ui({
	view:"some",
	minWidth:100,
	...
})


@template:	api_config
@relatedsample:
	01_layout/02_resize_limit.html
@relatedapi:
    api/ui.baseview_maxwidth_config.md
    api/ui.baseview_maxheight_config.md
    api/ui.baseview_minheight_config.md
@related:
	desktop/layout.md
    desktop/dimensions.md
    desktop/controls_guide.md
@descr:


* The view can take the width not less than the specified value.
* If more (free) space is available - the view will take it.
* During resizing the view can't take the size lesser than the value of **minWidth**.

