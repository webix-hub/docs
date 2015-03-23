addDrop
=============


@short:
	registers drop area

@params:
- node		id,HTMLElement		html node or ID
- ctrl		object		hash code of the drag control methods
- master_mode		boolean		flag which can be used if node in question has multiple inner areas, some of them can be used in DND and some not


	

@example:
webix.DragControl.addDrop("myDrop",{
				$drop:function(source, target){
					var dnd = webix.DragControl.getContext();
					if (dnd.from.name){ //ignoring non-ui dnd
                    	// setting which value to drop if case of multiselect 
						var value = dnd.from.getItem(dnd.source[0]).title; 
						target.innerHTML=value;
					}
				}
});

@template:	api_method
@relatedapi:
	api/dragcontrol_adddrag.md
@relatedsample:
	15_datatable/22_dnd/02_in_out.html
@related:
	helpers/dnd.md
@defined:	DragControl	
@descr:

In the code above, only UI components can be dragged (non-ui and DataValue, DataRecord and DataCollection).In addition, if several items from the source datatable are dragged, 
only the first one reached the taget textarea. 

