show
=============


@short:
	makes the component visible
    
@params:

* node      obj       HTML node near which the window will be shown, or configuration object with exact position

@example:

$$("my_window").show();

@template:	api_method
@defined:	ui.baseview	

@relatedapi:
	api/ui.window_hide.md
@related:
    desktop/visibility.md
    desktop/window.md
    
@relatedsample:
	10_window/01_init.html
    10_window/08_position.html
    
@descr:

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



