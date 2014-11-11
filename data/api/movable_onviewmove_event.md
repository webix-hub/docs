onViewMove
===================

@short: fires while view is moving

@params:
- pos	object	current position
- e		Event		mouse event object

@template:api_event

@example:

window.attachEvent("onViewMove", function(pos, e){
	//code
});

@relatedapi:
	api/movable_onviewmoveend_event.md
@related:
	desktop/window.md

@descr:

Position object (pos) contains coordinates:
	
- pos.x - horizontal offset;
- pos.y - versical offset.

The event fires each time the view is moved to the new position, so you'll have 
**multiple move events** during the view moving. 
