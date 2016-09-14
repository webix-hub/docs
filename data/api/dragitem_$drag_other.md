$drag
=============


@short: method called when drag operation initiated
	
@params:
- source     	HTMLElement     DOM element on which dnd action started
- ev      		Event      		native HTML event

@returns:
- htmltext     string     text which will be used in dnd placeholder, returning false or empty string will block dnd

@example:

@template:	api_method
@descr:

{{note method not purposed for direct call! It is an extension point. }}

You can override it with your own logic, but check drag-n-drop related events first, as they provide much more convenient way for drag-n-drop handling. 



