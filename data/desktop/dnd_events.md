Drag-and-Drop Events
=============

DnD event system allows you to customize the process of drag-and-drop and adjust it to your needs. 

<img src="desktop/dnd_events.png">

##Copying with DnD

Basically, drag-and-drop of component items means that you remove an item from one component and place it to the other one. Still if needed, you 
can **copy items with DnD** by actually leaving a dragged item in the source component and making its copy in the target one. 

For these needs, we refer to the **onBeforeDrop** event and associate a copying function with it. Also, we make use of **source** and **from** properties of the DnD context object.  

~~~js
gridb.attachEvent("onBeforeDrop", function(context, ev){
   	for (var i=0; i< context.source.length; i++){
		context.from.copy(context.source[i],context.start,this,webix.uid());
	}
	return false;
});
~~~

Here we **copy** each item (that is dragged) from the source object with the help of the dedicated function. It takes the following arguments: 

- **context.source[i]** - the ID of the copied object;
- **context.start** - the index of the copy;
- **this** - the object that an item is copied to (since the fucntion is attached to **gridb**, **this** refers to it)
- **webix.uid()** -the ID of the copy-item, here it's generated automatically with the [tool](helpers/top_ten_helpers.md#webixuid) for getting an unique (in frames of a session) ID. 


##Displaying Titles of Dragged Items

In case of [datatable](datatable/index.md), the whole rows can be dragged to other components as well as moved between datatable instances. 

By default, the whole row is displayed while being dragged, which is not always convenient and pleasant to see. Sometimes, it would be enough to display the value of the main column during DnD. The same happends with
[dataview](desktop/dataview.md) and [list](desktop/list.md), the components that feature several [template](desktop/html_templates.md) values in each item. 

Here, the **onBeforeDrag** event is needed as the functionality should be enabled as soon as we hook on the necessary item. Also, as above, we take **source** and **from** properties from the DnD context object. 

~~~js
grida.attachEvent("onBeforeDrag", function(context, ev){
	context.html = "<div style='padding:8px;'>";
	for (var i=0; i< context.source.length; i++){
		context.html += context.from.getItem(context.source[i]).title + "<br>" ;
	}
	context.html += "</div>";
});
~~~

Here we create a **div** container for the DnD context item and define 8-px padding for it. Then, with each of the dragged items from the source we take a **title** value from the dataset and close a *div* container. 

{{sample 15_datatable/22_dnd/03_events.html }}

###Related Articles

- [Defining Drag Area](desktop/dnd_drag_area.md) - learn how to set a dragging handle to a component item;
- [Defining Drag Marker](desktop/dnd_drag_marker.md) - how to set a DnD message and mark by color the dropping area;
- [DnD with Tree and TreeTable Components](desktop/dnd_hierarchy.md) - how to observe hierarchy during DnD;
- [DnD Between Different Component](desktop/dnd_external_data.md) - how to use the **externalData** property while dragging an item from one component to another;

@complexity:3