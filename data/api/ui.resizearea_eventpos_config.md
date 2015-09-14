eventPos
=============


@short:the top (vertical resizing) or left (horizontal resizing) absolute event position

	

@type: number
@example:
var parentContainer = document.getElementById("resizeDiv");

webix.event(parentContainer,"mousedown",function(e){
  
  var resizeStick = new webix.ui.resizearea({
       container:parentContainer,
       dir:"y",
       eventPos:webix.html.pos(e).y,
       height: 5,
       start:webix.html.pos(e).y-webix.html.offset(parentContainer).y,
       width: parentContainer.offsetWidth,
   });
   
})
    
@relatedapi: 
	api/ui.resizearea_start_config.md
    api/ui.resizearea_dir_config.md
    api/refs/html.md
@template:	api_config

	
@descr:
Setting a pure number value doesn't make any sense.

