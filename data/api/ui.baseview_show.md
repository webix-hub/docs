show
=============


@short:
	makes the component visible
    
@params:

* node   obj  HTML node near which the window will be shown  (for use with windows)
* pos  obj  position object that includes relative position, X and Y values (for use with windows)

@example:

$$("my_window").show();
$$("some_hidden_view").show();

@template:	api_method
@defined:	ui.baseview	

@relatedapi:
	api/ui.baseview_hide.md
    api/ui.baseview_hidden_config.md
@related:
    desktop/show_switching.md
	desktop/visibility.md
    desktop/window.md
    
@relatedsample:
	10_window/01_init.html
    10_window/08_position.html
    
@descr:
This method helps showing the **views that were hidden before**:

- either with api/ui.baseview_hide.md method;
- or with api/ui.baseview_hidden_config.md parameter. 

The same effect as **show()** can be achieved if you set the api/ui.baseview_hidden_config.md parameter in the 
view constructor to the *true* value.

**Performance tip**

With standard views (not windows) you can use an alternative to the api/ui.baseview_hide.md, 
api/ui.baseview_show.md api, namely the api/refs/ui.multiview.md functionality to switch between views.

###Windows with Relative Positioning

Any window can be shown with or without position:

~~~js
window.show();
window.show({x:10, y:10});
~~~

If you want to position a window by some HTML node, pass into the show() function:

~~~js
window.show(node);
~~~

And right here you can make window position mode presize with params of the **position object**:

- **pos**  - position relative to the node ("top", "bottom"(default), "left", "right");
- **x** - horizontal shift (can be positive and negative);
- **y** - vertical shift (can be positive and negative).

~~~js
window.show(node, {x:10, y:10});
window.show(node, {pos:"left", x:10, y:10});
~~~



