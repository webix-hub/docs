position
=============

@short: sets position of the window relative to the the screen
	
@values:
- center	places the window in the center of the viewport
- top	forces the window to appear from the top of the page with slide animation and horizontal centering

@type: string, function

@example:

webix.ui({
	view:"window",
    position:"center",
    //..window config
}).show();

@template:	api_config
@relatedsample:
	10_window/07_center.html
@relatedapi:
	api/ui.window_top_config.md
    api/ui.window_left_config.md
@related:
	desktop/window_positioning.md
@descr:

The positioning function takes default window position as parameter and allow to modify its aspects.

~~~js
webix.ui({
    view:"window",
    head:"",
    body:{...},
    position:function(state){ 
        state.left = 20; //fixed values
        state.top = 20;
        state.width -=60; //relative values
        state.height +=60;
    }
});    
~~~

Default window position is a top left corner of the viewport. 




@seolinktop: [html5 library](https://webix.com)
@seolink: [javascript window](https://webix.com/widget/window/)