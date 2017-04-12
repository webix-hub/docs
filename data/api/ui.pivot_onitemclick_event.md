onItemClick
=============

@todo:
	check 

@short:
	fires when an item is clicked

@params:

- itemId		string|number			the item id

@example:
$$("mypivot").attachEvent("onItemClick", function(id){
	webix.message(id);
});

// or attach the handler to the event in the pivot config
webix.ui({
	view:"pivot",
	id:"mypivot",
	on:{
   		onItemClick:function(id){
        	webix.message(id);
   		}
	}
});

@template:	api_event
@descr:

