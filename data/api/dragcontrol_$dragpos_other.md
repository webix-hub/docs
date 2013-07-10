$dragPos
=============


@short: defines position of dragged item
	

@type: function

@example:

list.$dragPos = function(pos, e, node){
    pos.y = 10; //fix y position, so only horizontal drag will be possible
};

@template:	api_config
@descr:

Can be redefined for custom dnd behavior


There are 3 parameters: 
- pos object ( has x and y properties )
- event object
- html node of drag marker

You can modify pos.x and pos.y - updated values will be applied to drag marker