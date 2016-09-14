$dragIn
=============


@short: method called when item moved on possible drop landing during dnd
	
@params:
- source     	HTMLElement     DOM element on which dnd action started
- target     	HTMLElement     DOM element of possible drop landing
- ev      		Event      		native HTML event

@returns:
- target     HTMLElement     DOM element which will be saved as drop target ( to ignore drop landing - return null value ) 

@example:

@template:	api_method
@descr:

{{note The method isn't purposed for direct call! It is an extension point. }}

You can override it with your own logic, but check drag-n-drop related events first, as they provide much more convenient way for drag-n-drop handling. 


