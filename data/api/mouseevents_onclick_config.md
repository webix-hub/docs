onClick
=============


@short: attaches a click behavior for component items with the specified CSS class. 
	

@type: hash
@example:


@template:	api_config
@descr:




@example:
webix.ui({
    view:"list",
    template:"#value# <div class='webix_remove_upload'>Del</div>"
	onClick:{
		"webix_remove_upload":function(ev, id){
		      this.remove(id);
		}
    }
});

@template:	api_config
@related:
	desktop/event_handling.md
@relatedsample:
	21_upload/06_progress_bar.html
@relatedapi:
	api/mouseevents_onitemclick_event.md
    api/mouseevents_onclick_config.md
	api/renderstack_click_config.md

@descr:

- "onClick" behavior is defined for component items rather than for the whole component
- Use the 'onItemClick' handler to attach function to item clicking regardless of the CSS class; 
- For standard Webix buttons you'd better use the **click** property to attach a function; 
- on_click handler can override the default onclick event:

~~~js

grid = new webix.ui({
view:"datatable",
columns:[
		{ id:"rank",	header:"", css:"rank",  		width:50},
		{ id:"title",	header:"Film title",width:200},
		{ 	id:"", template:"<input class='delbtn' type='button' value='Delete'>",	
			css:"padding_less",width:100 }],		
on:{
	"onItemClick":function(id, e, trg){ 
		webix.message("Click on row: " + id.row+", column: " + id.column);}
	} //default click behavior that is true for any datatable cell
},
// click behavior for the cell with a button styled with 'delbtn' class
onClick:{ 
	"delbtn":function(e, id, trg){
		webix.message("Delete row: "+id); 
		return false; //here it blocks default behavior
	}
});		

~~~





