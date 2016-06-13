show
======

@short:
	makes the component visible
    
@params:

* node			HTMLElement			optional, html element where the popup  is shown 
* position 		object				optional, object that may contain pos, x and y properties (see details)
* point 		string				optional, the popup pointer (arrow) direction  ("top", "left", "right", "bottom")


@example:
//specifying an HTML node near which a window will be shown
$$("window").show(node); 

// placing the window above the node
$$("window").show(node, {pos:"top"});

// setting the window's position
$$("window"). show({
    x:300, //left offset from the right side
    y:50 //top offset
});


@template:	api_method
@defined:	ui.baseview	

@relatedapi:
	api/ui.baseview_hide.md
    api/ui.baseview_hidden_config.md
@related:
	desktop/window_positioning.md#settingpositionviastateobject
    desktop/show_switching.md
	desktop/visibility.md
    
@descr:

####Position

The properties of the position object are:

- pos - {string} optional, "top", "left", "right", "bottom";
- x - {number} horizontal offset;
- y - {number} vertical offset.

Position object may be passed as the first argument instead of *node*. 

####Method usage

This method helps showing the **views that were hidden before**:

- either with api/ui.baseview_hide.md method;
- or with api/ui.baseview_hidden_config.md parameter. 

The same effect as **show()** can be achieved if you set the api/ui.baseview_hidden_config.md parameter in the 
view constructor to the *true* value.

**Performance tip**

With standard views (not windows) you can use an alternative to the api/ui.baseview_hide.md, 
api/ui.baseview_show.md api, namely the api/refs/ui.multiview.md functionality to switch between views.
