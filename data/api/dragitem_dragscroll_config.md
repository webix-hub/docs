dragscroll
=============

@short:
	enables autoscroll of component during drag-n-drop

@type: boolean,string
@example:
webix.ui({
        view:"datatable",
        ...
        dragscroll:true
});


@template:	api_config
@defined:	DragControl	
@related:
	desktop/dnd.md


  
@descr:
As a string the parameter can take the following values:

- "x" - only x-axis drag scroll
- "y" - only y-axis drag scroll
- "xy" - drag scroll in both directions