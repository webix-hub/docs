copy
=============


@short:
	copies an item to the same or another object

@params:
- sid		id		the id of the copied object
- tindex	number		the index of the copy
- tobj		object		the object that an item is copied to
- details		object		extra parameters for copying


@example:
gridb.attachEvent("onBeforeDrop", function(context, ev){
   	for (var i=0; i< context.source.length; i++){
		context.from.copy(context.source[i],context.start,this,{newId:webix.uid()});
	}
	return false;
});

@related:
	desktop/extend.md
    desktop/dnd_events.md
@relatedsample:
	13_form/02_api/02_attributes.html
    15_datatable/22_dnd/03_events.html
@template:	api_method
@defined:	DataMove	
@descr:

Details object can contain the next properties:

~~~js
details = {};
details.newId = "123"; //new id for moved item
~~~

In the sample above:

- **sid** is the ID of each dragged item;
- **tindex** is the ID from which DnD was started;
- **tobj** is a datatable object where the items are dropped to;
- **newId** is generated automatically with *webix.uid()* method. 




