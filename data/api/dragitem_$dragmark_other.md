$dragMark
=============


@short: method called during drag-n-drop, when some item in the component should be marked as an active drop target
	
@params:
- context     	object     drag-n-drop context
- ev      		Event      native HTML event

@returns:
- dndflag     boolean     returning false will prevent drag operation

@example:

@template:	api_method
@descr:

{{note The method isn't purposed for direct call! It is an extension point. }}

You can override it with your own logic, but check drag-n-drop related events first, as they provide much more convenient way for drag-n-drop handling. 

The drag-and-drop context can have the next properties:

- **from** - the source object
- **to** - the target object
- **source** - the id of the dragged item(s)
- **target** - the id of the drop target, null for drop on empty space
- **start** - the id from which DND was started