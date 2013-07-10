onBeforeDropOrder
=============

@short: called when dnd reording was made, but not applied yet

@params:
- source	id		id of dragged item
- target	id		id of item, on which position it was dropped
- e			object	native html event
	
@example:
$$("myform").attachEvent("onBeforeDropOrder", function(source, target, e){
    ...
});

@template:	api_event
@descr:

Can be blocked