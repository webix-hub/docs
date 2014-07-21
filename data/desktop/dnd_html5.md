HTML5 DnD with Webix Views
============================

HTML5 brought native drag-n-drop techniques that can be used as well for Webix views. Here we study how to drag html nodes to a Webix [datatable](datatable/index.md) using HTML5 dnd. 

<img src="desktop/dnd_html5.png"/>

{{sample 22_dnd/06_native_dnd.html}} 

Firstly, we make the needed HTML nodes (here - colored divs below grid) **draggable** and assign a function to fire when you start dragging them:

~~~html
<div id="divA" draggable="true" ondragstart="drag(event)" > A </div>
~~~

And **enable drag-n-drop** in both directions (drag from here and drop here) within a Webix grid:

~~~js
view:"datatable",
..config..,
drag:true 
~~~

Secondly, we need to set which data matters during DnD. In HTML5 data is transferred with the help of (surprisingly) **dataTransfer** object. We need the following of its methods:

- **setData()** - to set transferred data as *{key1:value1, key2:value2}*;
- **getData(key)** - to get the needed data item by its key;

From HTML nodes we take their text values (innerHTML);

~~~js
function drag(ev){
	ev.dataTransfer.setData("title",ev.target.innerHTML);
}
~~~

When the dragged node is dropped on the target grid item, we **get the data from DataTransfer** and parse it into the item.

HTML5 events are handled with api/_event.md method that takes **node** or its **ID**, **event type**, **event handler** and **"this" object** as parameters. 
Event names are passed without **on** prefix:

~~~js
webix.event(mygrid.$view, "drop", function(e){ 
	var grid = $$(e); //e - id of drop target
	var id = grid.locate(e); // return ID of target grid item
	grid.getItem(id).title = e.dataTransfer.getData("title"); //setting new title 
	grid.refresh(id); //make the changes visible
});
~~~

At the same time, we need to prevent default drag-n-drop behavior, if we want HTML nodes to keep their position (in fact, copying of their innerHTML takes place);

~~~js
webix.event(mygrid.$view, "dragover", function(e){ e.preventDefault(); });
~~~

HTML5 Drag-n-Drop can be studied [here (Mozilla Developer Network)](https://developer.mozilla.org/en-US/docs/DragDrop/Drag_and_Drop).