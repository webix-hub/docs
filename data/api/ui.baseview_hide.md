hide
=============


@short:
	hides the view



@example:

$$('mylist').hide();


@template:	api_method
@defined:	ui.baseview	

@relatedapi:
	api/ui.baseview_show.md
    api/ui.baseview_hidden_config.md
@related:
    desktop/show_switching.md
	desktop/visibility.md
@relatedsample:
	10_window/05_popup_menu.html
    
@descr:
The same effect can be achieved if you set the api/ui.baseview_hidden_config.md parameter in the view constructor.

### Performance tip

As alternative to the api/ui.baseview_hide.md, api/ui.baseview_show.md api, you can use the api/refs/ui.multiview.md component to switch between views.
