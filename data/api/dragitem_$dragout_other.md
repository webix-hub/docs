$dragOut
=============


@short: method called when item moved out of possible drop landing during dnd
	
@params:
- source     HTMLElement     DOM element on which dnd action started
- old_target     HTMLElement     DOM element of drop from which item was moved out
- new_target     HTMLElement     new DOM element which will be used as drop target ( can be null )
- ev      Event      native html event

@example:

@template:	api_method
@descr:

{{note method not purposed for direct call! It is an extension point. }}

You can override it with your own logic, but be sure to check dnd related events first, as they are provide much more convinient way for dnd handling. 


