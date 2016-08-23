show
=============


@short:
	makes the component visible
    
@params:

* force   boolean  when set to true command will show not only the current view but all parent views as well    (can be used for nested tabviews or nested mutliviews)
* animation  boolean  enables/disables animation during view showing

@example:

//default
$$("list").show();
//without animation
$$("list").show(false, false);

@template:	api_method
@defined:	ui.baseview	

@relatedapi:
	api/ui.baseview_hide.md
    api/ui.baseview_hidden_config.md
@related:
    desktop/show_switching.md
	desktop/visibility.md
    
@descr:

This method helps showing the **views that were hidden before**:

- either with api/ui.baseview_hide.md method;
- or with api/ui.baseview_hidden_config.md parameter. 

The same effect as **show()** can be achieved if you set the api/ui.baseview_hidden_config.md parameter in the 
view constructor to the *true* value.

**Performance tip**

With standard views (not windows) you can use an alternative to the api/ui.baseview_hide.md, 
api/ui.baseview_show.md api, namely the api/refs/ui.multiview.md functionality to switch between views.