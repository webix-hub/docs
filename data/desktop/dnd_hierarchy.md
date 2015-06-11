Drag-and-Drop with Tree and TreeTable
=============

In case of tree and treetable where data is presented in a hierarchical way, it's vital to specify how tree nodes would be dragged between different levels. 

By default, if a tree node is dragged into the branch of the same level as its parent, it becomes the first child of this branch. At the same time, if you drop lower-level nodes to the higher-level branches 
(the mouse is released over this higher-level node) the dragged node takes its level and become the previous child of this node. )

In addition, if you drag-and-drop the tree branch it is moved together with its leaves. 

<img src="desktop/dnd_basic.png">

{{sample 15_datatable/31_treedrag/01_basic_dnd.html}}

Event handling within DnD can help you change dragging as well as dropping pattern. 

For instance, if you want to prevent DnD on a top level items as well in leaf items, you should block it before the dragged element reaches the dropping area: 

~~~js
on:{
	onBeforeDragIn:function(config, id){
		if (!id) return false;						//block dnd on top level
		if (!this.getItem(id).$count) return false;	//block dnd in leaf items
}}
~~~

Dropping process can be as well customized. To enable dropping of the nodes into a tree branch as its children you should state that the dropping target is a parent branch. 

~~~js
on:{
	onBeforeDrop:function(context){
		context.parent = context.target;	//drop as child
		context.index = -1; 				//as last child
}}
~~~

{{sample 15_datatable/31_treedrag/04_drop_as_child.html}}

The posiition of a dropped item is set in the following way: the item becomes the first child if it is dropped over an opened tree branch; in other cases, e.g. the item is dropped over the leaves of a tree branch is takes
the next position relative to the child it is dropped over:



~~~js
on:{
	onBeforeDrop:function(context){
		if (this.getItem(context.target).$count && this.getItem(context.target).open){
			//drop as first child if the item is dropped into an opened tree branch
			context.parent = context.target;
			context.index = 0;
        } else {
			//in other cases, the dropped item takes the next next position 
			context.index++;
		}
	}
}
~~~

{{sample 15_datatable/31_treedrag/05_drop_next.html }}

###Related Articles

- [Defining Drag Area](desktop/dnd_drag_area.md) 
- [Defining Drag Marker](desktop/dnd_drag_marker.md) 
- [DnD Between Different Component](desktop/dnd_external_data.md) 

@complexity:3