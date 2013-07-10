on_dblclick
=============

@short: attaches a dblclick behavior for component items with the specified CSS class. 

@type: function

@example:
webix.protoUI({
	name:"mylist",
	defaults:{
		template:"#value# <div class='webix_remove_upload'>Del</div>"
	},
	on_dblclick:{
		"webix_remove_upload":function(ev, id){
		      this.remove(id);
		}
    }
}, webix.ui.list);

@template:	api_config
@related:
	desktop/event_handling.md
@relatedapi:
	api/mouseevents_onitemdblclick_event.md
    api/mouseevents_ondblclick_config.md

@descr:

- "on_dblclick" behavior is defined for component items rather than for the whole component
- Use the 'onItemDblClick' handler to attach function to item clicking regardless of the CSS class; 
