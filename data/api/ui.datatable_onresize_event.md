onResize
=============


@short: fires when the width or height of DataTable was changed
	

@params:
- width    number    the current widht
- height    number    the current height

@example:
dtable.attachEvent("onResize", function(width, height){
    webix.message("Datatable takes "+(width*height)+" square pixels");
});

@template:	api_event
@related:
	datatable/sizing.md
@descr:


