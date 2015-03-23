$drop
=============

@short:
	called when mouse was released over drop area and defines dropping behavior

@params:
- s		object		source html object
- t		object		target html object
- d		object		dropped html object
- e		Event		event object



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

