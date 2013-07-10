show
=============


@short:
	makes the component visible
    
@params:

@example:

$$("my_window").show();
@template:	api_method
@defined:	ui.baseview	

@relatedapi:
	api/ui.baseview_hide.md
    api/ui.baseview_hidden_config.md
@related:
    desktop/show_switching.md
	desktop/visibility.md
@relatedsample:
	10_window/01_init.html
    
@descr:
The same effect can be achieved if you set the api/ui.baseview_hidden_config.md parameter in the view constructor to the *true* value.

### Performance tip

As alternative to the api/ui.baseview_hide.md, api/ui.baseview_show.md api, you can use the api/refs/ui.multiview.md component to switch between views.
