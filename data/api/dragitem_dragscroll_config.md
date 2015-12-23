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


@values: 
- x		only X axis drag scroll
- y (true)		only Y axis drag scroll
- xy	drag scroll in both directions
- false 	disables drag scroll
  
@descr:
