Drag-n-Drop 
==================

##Basics of DnD

Here we speak about simple dragging and dropping of items within one and the same component as well as between different views and their instances. The information about how to make any app element draggable
is to be found in the [dedicated article](helpers/dnd.md) of the documentation. 

###Drag-and-Drop Modes

All the components you'd like to work with must have **drag** property, both source and target components. In case of several instances of one and the same component, it would be enough to enable DnD. 
For adequate DnD between different components study [external data functionality](desktop/dnd_external_data.md). 

The property has several values to define DnD mode:

- drag:*true* - enables drag-n-drop within the component, allows taking items into its other instances and different components on the page;
- drag:*"order"* - enables DnD in the **reorder mode**, allows dragging component item within one component thus changing their order;
- drag:*"source"* - enables dragging items from the component without an ability to drop data from other components;
- drag:*"target"* - enables dropping data to the component. It can take data from outside, but you cannot drag anything from it. 

**Mutlidrag** mode (dragging of several items at a time is possible) is enabled by setting multi selection ability within the component.

Multi Selection:

- multiselect: true - selection of several items regardless of their heirarchy;
- multiselect:"level" - selection of several items belonging to one and the same hierarchical level within the same tree branch. 

{{snippet
Treetable Multidragging
}}
~~~js
webix.ui({
	view:"treetable",
    ..//treetable config
 	multiselect:true, 
 	drag:true
})
~~~

{{sample 
15_datatable/31_treedrag/03_multidrag.html
}}

{{note
Reorder mode works only with non-hierarchical components like [datatable](datatable/index.md), [list](desktop/list.md) and [x-list](desktop/xlist.md). 
}}

{{sample 22_dnd/02_drag_order.html}}

Now, let's proceed to the true drag-and-drop between the components. 


###Drag-and-Drop Context and Events

In essence, DnD is a a set of sequential events: first you hook on the necessary component item, then drag it to the desired position and drop the item releasing the mouse button.  

Therefore, the component with draggable items as well as the one with a dropping ability, gets the following events: 

- **onBeforeDrag** - fires before DnD is started;
- **onBeforeDragIn** -fires before a dragged item is moved over the dropping area;
- **onBeforeDrop** - fires when the dragged item is moved over the dropping area;
- **onAfterDrop** -fires after the dropping has happened;
- **onDragOut** - fires when a dragged item moves out of the dropping area.

They are used to control the DnD process and customize it on different stages since any event can trigger any custom function you'd like to associate this event with. For instance, the **onBeforeDrag** associates a drag handle 
with draggable items. 

Functions attached to these events have **context** and **native event** as arguments. 

**Native event** is a DOM event that happens during drag-and-drop while **context** is an object with the following properties: 

- **from** - the source object;
- **to** - the target object;
- **source** - the ID of the dragged item(s);
- **target** - the ID of the drop target, null for drop on empty space;
- **start** - the ID from which DnD was started.

##Drag-and-Drop - Advanced Level

- [Defining Drag Area](desktop/dnd_drag_area.md) - learn how to set a dragging handle to a component item;
- [Defining Drag Marker](desktop/dnd_drag_marker.md) - how to set a DnD message and mark by color the dropping area;
- [DnD with Tree and TreeTable Components](desktop/dnd_hierarchy.md) - how to observe hierarchy during DnD;
- [DnD Between Different Component](desktop/dnd_external_data.md) - how to use the **externalData** property while dragging an item from one component to another;
- [Drag-and-Drop Events](desktop/dnd_events.md) - how to use DnD event system for custom DnD, e.g. copying items with drag-and-drop. 

@index:
	- desktop/dnd_drag_area.md
    - desktop/dnd_drag_marker.md
    - desktop/dnd_hierarchy.md
    - desktop/dnd_external_data.md
    - desktop/dnd_events.md

@complexity:2
