getContext
=============


@short:

	gets drag-n-drop context object


@returns:
- obj     object    dnd context 

@example:
var dnd = webix.DragControl.getContext();
			if (dnd.from.name){ //ignoring non-ui dnd
				var value = dnd.from.getItem(dnd.source[0]).title;
				target.innerHTML=value;

@template:	api_method
@defined:	DragControl	
@relatedsample:
	15_datatable/22_dnd/02_in_out.html
@related:
	helpers/dnd.md
@descr:


The drag-and-drop context can have the next properties:

- **from** - the source object
- **to** - the target object
- **source** - the id of the dragged item(s)
- **target** - the id of the drop target, null for drop on empty space
- **start** - the id from which DND was started