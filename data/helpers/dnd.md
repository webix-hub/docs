Drag-and-drop
=============

DnD syntax
---------

If you want to make some element on page draggable you can use 

~~~js
webix.DragControl.addDrag(node);
~~~
where *node* - id or html node object ( or object itself )


If you want to define some area as drop target you can use
~~~js
webix.DragControl.addDrop(node);
~~~
where *node* - id or html node object ( or object itself )

### Controlled dnd 


If you want to control different aspects of dnd process, you can use the above methods but with extra parameters

To make an element draggable
~~~js
webix.DragControl.addDrop(node, ctrl);
~~~
where:
- *node* - id or html node object.
- *ctrl* - set of the drag control methods.

And similar for the drop target:
~~~js
webix.DragControl.addDrag(node, ctrl);
~~~


#### Set of the drag control methods 

There are 6 control methods: 3 of them have sense for drag element  (addDrag) and 3 - for drop target (addDrop).   
All of these methods have default values and you need to redefine them just if you want to set the custom behavior.
  
  

addDrag() related methods:
+ *onDrag* - defines dragging behavior.
+ *onDragCreate* - defines starting dnd behavior (if the function is defined it will return html node (not text ) which will be used as drag marker).
+ *onDragDestroy* - defines ending dnd behavior. 


addDrop() related methods:
+ *onDragIn* - defines marker's behavior within the drop area (If you want to deny drop area, return false).
+ *onDragOut* - defines marker's behavior  out of the drop area.
+ *onDrop* - defines dropping behavior.





~~~js
{
  top:5,  //position of drag marker relative to mouse cursor
  left:5,
  onDragIn:function(s,t,e){ ... },   //drag moves in potential drop area
  onDragOut:function(s,t,e){ ... },  //drag moves out from the drop area
  onDrop:function(s,t,e){ ... },     //drag was released
  onDrag:function(s,t,e){ ... },     //drag is started
  onDragCreate(source_master, e)     //dnd is started
  onDragDestroy(source_master, text) //dnd is finished
}

~~~
Where:
+ *s* - source html object.
+ *t* - target html object.
+ *e* - native event.
+ *source_master* - control object related to source of dnd.
+ *text* - content of drag marker.

If any of onDrag handlers redefined - there won't be the default processing of the action, code expects that your custom handler will do all job. 


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
  