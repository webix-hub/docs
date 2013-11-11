Advanced Drag-and-Drop
==============================

Here we speak about **advanced drag-n-drop options** and find solutions how to make any elements on the page draggable and control each stage of DnD. 

For simple dragging and dropping of items within one and the same component as well as between different views and their instances - study the atricle about [built-in Webix DnD options](desktop/dnd.md).

DnD syntax
---------

If you want to make some element on page draggable you can use 

~~~js
webix.DragControl.addDrag(node);
~~~
where *node* - id or html node object ( or object itself )

{{sample 22_dnd/05_html_dnd_in.html}}

If you want to define some area as drop target you can use
~~~js
webix.DragControl.addDrop(node);
~~~
where *node* - id or html node object ( or object itself ).

### Controlled DnD 


If you want to control different aspects of dnd process, you can use the above methods but with an extra **control parameter** (**$drag** or **$drop**) with a custom function:
~~~js
//for dragging
webix.DragControl.addDrag(node, $drag:function(source, target, event){...});
//for dropping
webix.DragControl.addDrop(node, $drop:function(source, target, event){...});
~~~

The control function takes three parameters: 

- **source** - source html object;
- **target** - target html object;
- **event** - native event. 

This is how you can set value of an input by drag-n-drop

~~~js
webix.DragControl.addDrop("mytext", {
	$drop:function(source, target, event){
		var dnd = webix.DragControl.getContext();
		target.value = dnd.from.getItem(dnd.source[0]).title; // setting source item title as input value
	}
});
~~~

{{sample 22_dnd/04_html_dnd.html }}

DnD context 
-----------

Context object of dnd can be accessed as:

~~~js
var state = webix.DragControl.getContext();
~~~
it is also available as parameter in all dnd related events

~~~js
state = {
    source:[1,2,3], //array of IDs for dragged elements
    target:id, //ID of currently active target item
    from:some_obj, // reference to the source object
    to:some_obj, // reference to the target object
    html:text //optional, custom text, which is rendered as drag-item
}
~~~

#### Set of the drag control methods 

There are 6 DnD control event: 3 of them are used for dragged element  (addDrag) and 3 - for drop target (addDrop). All these events can be used to define a custom behavior for elements included in current dra-n-drop. 

**addDrag()** related events:

- *onDrag* - fires when the elements is dragged;
- *onDragCreate* - fires the moment drag has been created;
- *onDragDestroy* - fires when drag has been completed; 

**addDrop()** related events:

- *onDragIn* - fires when a dragged element enters the drop area (If you want to deny drop area, return false).
- *onDragOut* - fires when a dragged elements leaves the drop area.
- *onDrop* - fires when you drop the dpagged element.


~~~js
{
  onDragIn:function(source, target, event){ ... },   //drag moves in potential drop area
  onDragOut:function(source, target, event){ ... },  //drag moves out from the drop area
  onDrop:function(source, target, event){ ... },     //drag was released
  onDrag:function(source, target, event){ ... },     //drag is started
  onDragCreate:function(from, event){ ... }     //dnd is started
  onDragDestroy:function:(from, text){ ... } //dnd is finished
}

~~~
Where:

- **source** - source html object;
- **target** - target html object;
- **event** - native event;
- **from** - control object related to source of dnd;
- **text** - content of drag marker.

If any of onDrag handlers redefined - there won't be the default processing of the action, code expects that your custom handler will do all job. 

Samples of usage
----------------

### Drag from custom HTML 

~~~html
<div package="DragPackage" version="1.0" maintainer="Webix Team" 
	id="drag_1" 
	style='width:150px; height:50px; color:white; background-color:navy;'>
	Drag me into the dataview
</div>
~~~

~~~js
webix.DragControl.addDrag("drag_1");
data1.attachEvent("onBeforeDrop",function(context){
	if (context.from == webix.DragControl){
		this.add({
			Package:context.source.getAttribute("package"),
			Version:context.source.getAttribute("version"),
			Maintainer:context.source.getAttribute("maintainer")
        }), this.getIndexById(context.target || this.getFirstId());
		return false;
	}
	return true;
});
~~~


### Drag to custom HTML 

~~~html
<div id="data_container2" style="width:400px;height:396px;border:1px solid red;">
	Drop some item here
</div>	
~~~

~~~js
webix.DragControl.addDrop("data_container2",{
	onDrop:function(source, target, d, e){
		var context = webix.DragControl.getContext();
		var item = context.from.getItem(context.source[0]);
		
		var d = document.createElement("DIV");
		d.innerHTML = item.Package+" - "+item.Version;
		target.appendChild(d);
	}
});
~~~

@complexity:3
  