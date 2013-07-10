$dragMark
=============


@short: method called during dnd when some item in the component need to be marked as active drop target
	
@params:
- context     object     dnd context
- ev      event      native html event

@returns:
- dndflag     bool     returning false will prevent drag operation

@example:

@template:	api_method
@descr:

{{note The method isn't purposed for direct call! It is an extension point. }}

You can override it with your own logic, but be sure to check dnd related events first, as they are provide much more convinient way for dnd handling. 

The drag-and-drop context can have the next properties:

- **from** - the source object
- **to** - the target object
- **source** - the id of the dragged item(s)
- **target** - the id of the drop target, null for drop on empty space
- **start** - the id from which DND was started