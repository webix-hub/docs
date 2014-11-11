onViewMoveEnd
===============

@short: fires when view has stopped moving

@params:

@example:

window.attachEvent("onViewMoveEnd", function(){
	//code
});

@template:api_event

@related:
	desktop/window.md
@relatedapi:
	api/movable_onviewmove_event.md
    
@descr:

The event does not have any parameters, but you can always get view coordinates via its [getNode](api/ui.baseview_getnode.md) 
method that returns view HTML: 

~~~js
var top = window.getNode().offsetTop;
var left = window.getNode().offsetLeft;
~~~