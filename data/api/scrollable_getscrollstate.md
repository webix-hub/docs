getScrollState
=============


@short:
	returns the scroll position


@returns:
- pos       object         scroll position object as ({x:scrollLeft,y:scrollTop})

@example:
var scPos = $$("mylist").getScrollState(); // ({x:some,y:some})
var posx = scPos.x;
var posy = scPos.y;


@template:	api_method
@related: 
	desktop/scroll_control.md
@defined:	Scrollable	
@descr:


