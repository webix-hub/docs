$dragIn
=============


@short: method called when item moved on possible drop landing during dnd
	
@params:
- source     HTMLElement     DOM element on which dnd action started
- target     HTMLElement     DOM element of possible drop landing
- ev      Event      native html event

@returns:
- target     HTMLElement     DOM element which will be saved as drop target ( to ignore drop landing - return null value ) 

@example:

@template:	api_method
@descr:

{{note The method isn't purposed for direct call! It is an extension point. }}

You can override it with your own logic, but be sure to check dnd related events first, as they are provide much more convinient way for dnd handling. 


