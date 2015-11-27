mapEvent
=============


@short:
	routes events from one object to another

@params:
- map		object		the hash of event-object relations




@example:
// As a result, when the second list is clicked, the function that was initially 
// attached only to the first one, will be executed for it as well:
webix.ui({
    rows:[
        { view:"list", id:"list1", data:list_data, on:{
            onItemClick:getItemValue
        }},
        { view:"list", id:"list2", data:list_data}
    ]
});
 
//here event name should be in the lower case
$$("list2").mapEvent({onitemclick:$$("list1")});

//handler
function getItemValue(id){
    var obj = this.$eventSource || this;
    var value = obj.getItem(id).value;
    webix.message("List: "+obj.config.id+", clicked: "+id);
 
}


@template:	api_method
@defined:	EventSystem	
@descr:

Note that if you need to access the object for which the handler is called at the moment, you can do it via $eventSource property while this will always point to the object for which the handler is attached initially


@related: 
	desktop/event_handling.md
@relatedapi:
	api/refs/eventsystem.md

