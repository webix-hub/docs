$dragOut
=============


@short: method called when item moved out of possible drop landing during dnd
	
@params:
- source     element     DOM element on which dnd action started
- old_target     element     DOM element of drop from which item was moved out
- new_target     element     new DOM element which will be used as drop target ( can be null )
- ev      event      native html event

@example:

@template:	api_method
@descr:

{{note method not purposed for direct call! It is an extension point. }}

You can override it with your own logic, but be sure to check dnd related events first, as they are provide much more convinient way for dnd handling. 


