$dragOut
=============


@short: method called when item moved out of possible drop landing during dnd
	
@params:
- source     	HTMLElement     DOM element from which drag-n-drop action started
- old_target    HTMLElement     DOM element of drop from which item was moved out
- new_target    HTMLElement     new DOM element which will be used as drop target ( can be null )
- ev      		Event      		native HTML event

@example:

@template:	api_method
@descr:

{{note method not purposed for direct call! It is an extension point. }}

You can override it with your own logic, but check drag-n-drop related events first, as they provide much more convenient way for drag-n-drop handling. 


