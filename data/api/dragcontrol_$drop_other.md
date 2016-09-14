$drop
=============

@short:
	called when mouse was released over drop area and defines dropping behavior


@params:
- source    HTMLElement     DOM element on which dnd action started
- target	HTMLElement     DOM element of possible drop landing
- ev      	Event      		native HTML event


@example:
webix.DragControl.addDrop("myDrop",{
	$drop:function(source, target){
		var dnd = webix.DragControl.getContext();
			if (dnd.from.name){ //ignoring non-ui dnd
				var value = dnd.from.getItem(dnd.source[0]).title;
				target.innerHTML=value;
			}
	}
});

@template:	api_method
@related:
	helpers/dnd.md
@relatedsample:
	15_datatable/22_dnd/02_in_out.html
@relatedapi:
	api/dragcontrol_$drop_other.md
    api/dragcontrol_adddrop.md
    api/dragcontrol_getcontext.md
@defined:	DragControl	
@descr:

