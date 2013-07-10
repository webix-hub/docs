onDblClick
=============

@short: attaches a dblclick behavior for component items with the specified CSS class. 

@type: function

@example:
webix.ui({
    view:"list",
    template:"#value# <div class='webix_remove_upload'>Del</div>"
    onDblClick:{
        "webix_remove_upload":function(ev, id){
              this.remove(id);
        }
    }
});

@template:	api_config
@related:
	desktop/event_handling.md
@relatedapi:
	api/mouseevents_onitemdblclick_event.md
    api/mouseevents_ondblclick_config.md

@descr:

- "onDblClick" behavior is defined for component items rather than for the whole component
- Use the 'onItemDblClick' handler to attach function to item clicking regardless of the CSS class; 
