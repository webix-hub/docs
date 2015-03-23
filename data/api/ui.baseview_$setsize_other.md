$setSize
=============


@short: sets the component size 
@params: 
- x      number      the component width
- y      number      the component height

@returns:

- changed    boolean     returns true if new size differs from the previous one

@example:
@relatedapi:api/ui.baseview_$getsize_other.md, api/ui.baseview_resize.md
@related:
	desktop/custom_component.md
@template:	api_method
@descr:


{{note The method is used in the inner logic and not intended for direct use. <br>
To set a new size, please define new *width*, *height* values and call
the api/ui.baseview_resize.md method. }}