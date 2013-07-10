onContext
=============


@short: a property used to define custom context-click (right click) handlers for elements in the DataTable cells<br> 	

@type: hash

@example:
var dtable = webix.ui({
	view:"datatable",
	...
	data:[
		{ text:"<div class='myActive'>click here</div>" }
	],
    onContext:{
    	"myActive":function(id, event, target){
			webix.message("Active area was right-clicked");
		}
    }
});

@template:	api_config
@descr:

It's a hash property that contains all available handlers.<br>
All the handlers (existing and newly-) are specified by the related class name.
