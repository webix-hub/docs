addDrag
=============



@short:
	registers drag area

@params:
- node		id,element		html node or ID
- ctrl		object		hash code of the drag control methods



@example:

<div id="myDrag"><div>

webix.DragControl.addDrag("myDrag",{
		move:function(source, target, obj){
			var index = -1;
			if (target) 
            	//defining position of the target item
            	index = obj.getIndexById(target); 
				obj.add({
					title:"new item",
					rank: "0"
				}, index);
		}
});

@template:	api_method
@relatedsample:
	15_datatable/22_dnd/02_in_out.html
@related:
	helpers/dnd.md
@relatedapi:
	api/dragcontrol_adddrop.md
@defined:	DragControl	
@descr:

When a draggable div with **myDrag** ID is dropped over the datatable item, it takes its place (defined by index). If index cannot be retrieved, the item takes the last position
and is added to the end of the datatable. 
