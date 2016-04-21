onBeforeAreaAdd
=============

@short:
	fires before a select area is added

@params:

- area			object 			the area object

@example:
$$('dtable').attachEvent("onBeforeAreaAdd", function(area){
   // some code here
   return true;
});

@template:	api_event
@descr:
The event can be blocked. Return false to block area adding.

The properties of the area object are:

- start - (object) the id object of the left top cell, contains two parameters: the row id and the column id
- end - (object) the id object of the right cell, contains two parameters: the row id and the column id
- preserve - (boolean) defines, if the previous select area should be saved, false by default
- area_name - (string) optional, the name used to address to an area to change or to delete it
- css - (string) optional, the css style for an area
- handle - (boolean) optional, defines, whether selection will be resized with or without a handle

@relatedapi:
- api/ui.datatable_onafterareaadd_event.md
- api/ui.datatable_onbeforearearemove_event.md