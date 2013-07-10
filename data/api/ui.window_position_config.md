position
=============


@short: sets position of the window relative to the the screen
	

@type: string
@example:

webix.ui({
	view:"window",
    position:"center",
    ..window config
}).show();

@template:	api_config
@relatedsample:
	10_window/07_center.html
@relatedapi:
	api/ui.window_top_config.md
    api/ui.window_left_config.md

@descr: The property is used to centering the window. Unlike absolute window positioning, where you manually set its top and left offset, it ensures that the component will always take the adequate position on the screen. 


