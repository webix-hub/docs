Drag-and-drop support
==========================

Tree has built-in support for internal/external drag-and-drop. 


Common use
-------------------------------------
To enable drag-and-drop support for a tree, set the api/link/ui.tree_drag_config.md parameter to *true*:

{{snippet
	Enabling drag-and-drop support for Tree
}}
~~~js
tree = new webix.ui({
	view:"tree",
	...
	drag:true
})
~~~

{{sample
	17_datatree/22_dnd/01_basic_dnd.html
}}
	
The 'order' mode
-------------------------
There is a special drag-and-drop mode - 'order'.

In such a mode,  items can't be dragged out of the tree container boundaries.
Also, while dragging an item the remaining items are automatically rearranged so that when you drop the item to the final destination the remaining items won't need to do any rearrangements.

To enable the d-n-d support and activate the 'order' mode, just set the api/link/ui.tree_drag_config.md parameter to *order*.

{{snippet
Activating the 'order' mode for items
}}

~~~js
webix.ui({
		view:"tree",
		...
        drag:'order'
});
~~~

{{sample
17_datatree/22_dnd/07_order_mode.html
}}

The 'source-target' mode
-----------------------------
When you have several trees on the page, you may want to set specific tree(s) as the source of dnd (to drag items from) 
and specific tree(s) as the target of dnd (to drag items to).

- To set a tree as the dnd source (the user can drag items from the tree but can't drag to it), you should set the api/link/ui.tree_drag_config.md parameter to *source*.
- To set a tree as the dnd target (the user can drag items to the tree but can't drag from it), you should set the <br> api/link/ui.tree_drag_config.md parameter to *target*.

{{snippet
Using the 'source-target' mode
}}
~~~js
//you can drag items only from treeA to treeB.
//Dragging within treeA is denied. Dragging from treeB to treeA is denied.
treeA = new webix.ui({
	view:"tree",
	...
	drag:"source"
});	

treeB = new webix.ui({
	view:"tree",
	...
	drag:"target"
});
~~~
{{sample
	17_datatree/22_dnd/05_drop_next.html
}}

Advanced
--------------------------------------------
Information stated in the [Common part](#common) is enough in most cases. The current part should be used just if you want to customize existing drag-and-drop behaviour.

The part will describe the next things:

- [Custom text of the dragging items](#custom_text);
- [Denying dragging specific items](#denying_dragging);
- [Custom dropping behaviour](#custom_dropping);
- [Related events and the order in which these events are invoked.](#events)


###Custom text of the dragging items {#custom_text}

To redefine the text displaying for the dragging item(s), you should use the api/link/ui.tree_onbeforedrag_event.md event.<br> The desired template is set through the **context.html** property. 
You can use any HTML while specifying the value for the property.

<img src="datatree/dnd_custom_text.png"></img>

{{snippet
Displaying a custom text for dragging items
}}
~~~js
tree.attachEvent("onBeforeDrag", function(context, ev){
	context.html = "<b>You are dragging now</b> - "+ treea.getItem(context.source).value;
});
~~~
{{sample
	17_datatree/22_dnd/03_multidrag.html
}}

###Denying dragging specific items {#denying_dragging}
To deny dragging specific items you can use the api/link/ui.tree_onbeforedrag_event.md event and return *false* each time you want to block the operation.

{{snippet
Denying dragging even items
}}
~~~js
tree.attachEvent("onBeforeDrag", function(context, ev){

	if (tree.getItem(context.source).$level == 2){
    	return true;     // allows dragging items with the 2nd nesting level
    }
    return false;        // denies dragging in any other case
});
~~~
            
From now on, each time d-n-d is started, the item level will be checked, and the item can be dragged only if its level equal to 2.

###Custom dropping behaviour {#custom_dropping}
To specify custom behaviour for the 'drop' operation you can use the api/link/ui.tree_onbeforedrop_event.md event.

Let's assume you want to specify the following behaviour:

- When you drag item(s) to the closed folder, the item is inserted as a subling;
- When you drag item(s) to the opened folder, the item is inserted as a child.

{{snippet
	Custom dropping behaviour
}}
~~~js
tree.attachEvent("onBeforeDrop", function(context, ev){
	if (this.getItem(context.target).$count && this.getItem(context.target).open){
		//drop as the first child
		context.parent = context.target;
		context.index = 0;
	} else {
		//drop as the next subling 
		context.index++;
	}
});
~~~
{{sample
	17_datatree/22_dnd/05_drop_next.html
}}<br>
{{sample
	17_datatree/22_dnd/04_drop_as_child.html
}}

###Related events {#events}

{{note
In the default scenario there is no need to use any of the mentioned events, because Tree will process all the operations on its own. 
Use the events only when the default behavior needs customizing.
}}

The following events are generated while d-n-d process:

- api/link/ui.tree_onbeforedrag_event.md - fires before the mouse button is pressed and moved over a draggable item
- api/link/ui.tree_onbeforedragin_event.md - fires before a dragged element is moved over the droppable area
- api/link/ui.tree_ondragout_event.md - fires when a dragged element is moved outside of the droppable area
- api/link/ui.tree_onbeforedrop_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.tree_onafterdrop_event.md - fires after drag-n-drop was finished

####Events order

Let's assume you have 2 same trees and drag an item from the 1st tree to the 2nd one.

<img src="datatree/events_order.png"/>

So, here is the order in which events are invoked in trees:

1. api/link/ui.tree_onbeforedrag_event.md fires in **tree1**. <br> *Returning 'false' from the event handler will block the current dnd operation.*
2. api/link/ui.tree_onbeforedragin_event.md / api/link/ui.tree_ondragout_event.md fire in **tree1** as you drag the item within the **tree1**'s container. <br> *Returning 'false' from the event handler will deny dropping to the related tree.*
3. api/link/ui.tree_onbeforedragin_event.md / api/link/ui.tree_ondragout_event.md fire in **tree2** as you drag the item within the **tree2**'s container. <br> *Returning 'false' from the event handler will deny dropping to the related tree.*
4. api/link/ui.tree_onbeforedrop_event.md fires in **tree2**. <br> *Returning 'false' from the event handler will block the current dnd operation.*
5. api/link/ui.tree_onafterdrop_event.md fires in **tree2**.



