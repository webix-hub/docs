zIndex
=============


@short: returns the maximum used z-index
	
@returns:
- zindex	number		the maximum z-index value

@example:
//to be on the top
div.style.zIndex = webix.ui.zIndex();

@template:	api_method
@descr:

Each time you call the method, the maximum z-index increases. So each next method call retrieves the value bigger than older ones. 
