onItemCheck
=============


@short: called when the checkbox inside the tree item was checked
	
@params:
- id		id		id of related item
- state		boolean	state of checkbox

@example:

tree.attachEvent("onItemCheck". function(id, state){
    webix.message("Item " + id + " was " + (state? "checked" : "unchecked"));
})

@template:	api_event
@descr:
