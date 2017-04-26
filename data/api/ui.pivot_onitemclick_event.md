onItemClick
=============

@short:
	fires when a data item is clicked

@params:

- id		string|number|object			the item id
- e			Event		a native event object	
- node		HTMLElement		the target HTML element

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

Item id depends on Pivot type. 

For Pivot Datatable it is an object with the following properties: 

- row	(string|number)  data item id
- column  (string)  column id

For Pivot Chart id is a string or number that points to a data item id.

