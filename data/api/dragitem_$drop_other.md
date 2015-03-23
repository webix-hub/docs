$drop
=============


@short: method called when item dragged and dropped on valid target
	
@params:
- source    HTMLElement     DOM element on which dnd action started
- target	HTMLElement     DOM element of possible drop landing
- ev      	Event      native html event

@example:
webix.DragControl.addDrop("myDrop",{
	$drop:function(source, target){...}
});
@template:	api_method

@related:
	helpers/dnd.md
@relatedsample:
	15_datatable/22_dnd/02_in_out.html
@descr:

{{note The method isn't purposed for direct call! It is an extension point. }}

You can override it with your own logic, but be sure to check dnd related events first, as they are provide much more convinient way for dnd handling. 

