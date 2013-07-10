onMouseMove
=============

@short: attaches a dblclick behavior for component items with the specified CSS class. 

@type: function

@example:
webix.ui({
    view:"list",
    template:"#value# <div class='webix_remove_upload'>Del</div>"
    onMouseMove:{
        "webix_remove_upload":function(ev, id){
              webix.message("Danger area");
        }
    }
});

@template:	api_config
@related:
	desktop/event_handling.md
@relatedapi:
	api/mouseevents_onmousemove_event.md
	api/mouseevents_onmousemoving_event.md
    api/mouseevents_onmousemove_config.md

@descr:

- "onMouseMove" behavior is defined for component items rather than for the whole component
- Use the 'onMouseMove' handler to attach function to item clicking regardless of the CSS class; 

