setCursor
=============


@short:
	sets the position of the cursor

@params:
- cursor      id      the cursor position
	

@example:
var data = new webix.DataCollection({ 
		..//collection config
	});

$$('list').attachEvent("onAfterSelect", function(id){  
		data.setCursor(id); 

@relatedapi:
	api/CollectionBind_getCursor.md
@related:
	desktop/nonui_objects.md
@relatedsample:
	80_docs/nonui.html
@template:	api_method
@defined:	CollectionBind	
@descr:


The cursor position is the ID of an item that the cursor is set on, **not** the item index.