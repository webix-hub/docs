start
=============


@short:sets the top (vertical resizing) or left (horizontal resizing) initial relative position of the 'resize' marker
	

@type: number
@example:
var resizeStick = new webix.ui.resizearea({
        container:"box",
        dir:"x",
        start:240,
        ...
});


@template:	api_config
@relatedapi:
	api/ui.resizearea_eventPos_config.md
    api/ui.resizearea_dir_config.md
	api/refs/html.md
	
@descr:

The code example below allows you to coincide the 'resize' marker and event positions:

- <i>webix.html.pos(e).y</i> -  the vertical event position (y-coordinate of a point where the event occures)
- <i>webix.html.offset(parentContainer).y</i> - the y-coordinate of the top left corner of the parent container 
~~~js
var parentContainer = document.getElementById("resizeDiv");

webix.event(parentContainer,"mousedown",function(e){
     res = new webix.ui.resizearea({
           container:parentContainer,
           dir:"y",
           eventPos:webix.html.pos(e).y,
           height: 5,
           start:webix.html.pos(e).y-webix.html.offset(parentContainer).y,
           width: parentContainer.offsetWidth,
           border: 1
     });
})
~~~

