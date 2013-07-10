onAfterDropOrder
=============

@short: called when dnd reording fully finished

@params:
- source	id		id of dragged item
- target	id		id of item, on which position it was dropped
- e			object	native html event
	
@example:
$$("myform").attachEvent("onAfterDropOrder", function(source, target, e){
    ...
});

@template:	api_event
@descr:
