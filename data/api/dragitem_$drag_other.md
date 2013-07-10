$drag
=============


@short: method called when drag operation initiated
	
@params:
- source     element     DOM element on which dnd action started
- ev      event      native html event

@returns:
- htmltext     string     text which will be used in dnd placeholder, returning false or empty string will block dnd

@example:

@template:	api_method
@descr:

{{note method not purposed for direct call! It is an extension point. }}

You can override it with your own logic, but be sure to check dnd related events first, as they are provide much more convinient way for dnd handling. 



