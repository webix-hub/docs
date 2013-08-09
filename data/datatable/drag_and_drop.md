Drag-and-drop with Datatable
==============================
The library supports drag-and-drop within a table or several tables on the page.

Moving rows
------------------------------------------
To enable the drag-and-drop support for rows, set the api/link/ui.datatable_drag_config.md parameter to *true*.

{{snippet
Enabling the drag-and-drop support for rows
}}

~~~js
webix.ui({
		view:"datatable",
		...
        drag:true
});
~~~
{{note
To drag/drop rows between several tables you should enable the api/link/ui.datatable_drag_config.md parameter in each of them. 
}} 

{{sample 15_datatable/22_dnd/01_basic_dnd.html }}


###The 'order' mode
There is a special drag-and-drop mode - 'order'.

In such a mode,  rows can't be dragged out of the table boundaries.
Also, while dragging an item the remaining items are automatically rearranged so that when you drop the item to the final destination the remaining items won't need to do any rearrangements.

To enable the d-n-d support and activate the 'order' mode, just set the api/link/ui.datatable_drag_config.md parameter to *order*.

{{snippet
Activating the 'order' mode for rows
}}

~~~js
webix.ui({
		view:"datatable",
		...
        drag:'order'
});
~~~

{{sample
15_datatable/22_dnd/04_reorder_dnd.html
}}

Moving columns
--------------------------------------------
To enable the drag-and-drop support for columns, set the api/ui.datatable_dragcolumn_config.md parameter to *true*.

{{snippet
Enabling the drag-and-drop support for columns
}}

~~~js
webix.ui({
	view:"datatable",
	...
    dragColumn:true
});
~~~
{{note
To drag/drop columns between several tables you should enable the api/ui.datatable_dragcolumn_config.md parameter in each of them. 
}} 

{{sample
15_datatable/22_dnd/06_columns.html
}}

###The 'order' mode
There is the 'order' mode for the table columns.

In that mode, columns can't be dragged out of the table boundaries.
Also, while dragging a column the remaining columns are automatically rearranged so that when you drop the column to the final destination the remaining columns won't need to do any rearrangements.

To enable the d-n-d support and activate the 'order' mode for columns, just set the api/ui.datatable_dragcolumn_config.md parameter to *order*.

{{snippet
Activating the 'order' mode for columns
}}

~~~js
webix.ui({
	view:"datatable",
	...
    dragColumn:'order'
});
~~~

{{sample
15_datatable/22_dnd/07_columns_order.html
}}


Advanced
--------------------------------------------
Information stated in the [Common](#Common) part is enough in most cases.
The current part should be used just if you want to customize existing drag-and-drop behaviour.

The part covers the following topics:

- [Custom text of the dragging items](#custom_text);
- [Denying dragging of specific items](#denying_dragging);
- [Denying dropping to specific positions](#denying_dropping);
- [Switching between 'move' and 'copy' behaviors](#copy_behaviour);
- [Limiting the draggable area to a certain element](#limiting_draggable_area);
- [Related events](#events).

<h3 id="custom_text">Custom text of the dragging items</h3>

To redefine the text displaying for the dragging item(s), you should use the api/dragitem_onbeforedrag_event.md event.<br> The desired template is set through the **context.html** property. 
You can use any HTML specifying the value for the property.

<img src="datatable/custom_text_dnd.png"></img>

{{snippet
Displaying the number of the dragging items
}}
~~~js
dtable.attachEvent("onBeforeDrag", function(context, ev){
	context.html = context.source.length+" item(s)";
});
~~~

<h4>Some more use cases:</h4>

- A fixed image and the id of the dragged row:
{{snippet
Displaying the dragged row id and some image
}}
~~~js
dtable.attachEvent("onBeforeDrag", function(context, ev){
	context.html = "<img src='some.gif'></img> " + context.start;
});
~~~

- The text of the dragged items (in case of multiselect selection):
{{snippet
Displaying the title property of dragged items
}}
~~~js
dtable.attachEvent("onBeforeDrag", function(context, ev){
	context.html = "";
	for (var i=0; i< context.source.length; i++){
		context.html += context.from.getItem(context.source[i]).title + "<br>" ;
	}
});
~~~

{{sample
15_datatable/22_dnd/03_events.html
}}


<h3 id="denying_dragging">Denying dragging of specific items</h3>
To deny dragging of specific items you can use the api/dragitem_onbeforedrag_event.md event.

{{snippet
Denying dragging even items
}}
~~~js
dtable.attachEvent("onBeforeDrag", function(context, ev){
	if(dtable.getIndexById(context.start)%2==0){
		return false;      //denies dragging if the item index is even
    }
	return true;           //allows dragging in any other case
});
~~~
            
From now on, each time d-n-d is started, the item index will be checked, and the row can be dragged only if its index isn't even.

{{note

You can use the api/link/ui.datatable_addcss.md method to mark items and api/link/ui.datatable_hascss.md to check whether an item has a certain marking. 
}}

<h3 id="denying_dropping">Denying dropping to specific positions</h3>
To deny dropping to some positions, you can use the api/dragitem_onbeforedrop_event.md event and return false each time you want to block the operation.

Let's assume you specify a table on the page as below and want to deny dropping to the position of an item with 'id=2': 

{{snippet
Denying dropping to a specific position
}}
~~~js
var dtable = new webix.ui({
    view:"datatable",
    ...
    data:[
        { id:1, title:"The Shawshank Redemption", year:1994},
        { id:2, title:"The Godfather",            year:1972},
        { id:3, title:"The Godfather: Part II",   year:1974}
    ]
});
dtable.data.addMark(2,"type", false,"b"); // adds a flag (type='b') to an item with id=2

dtable.attachEvent("onBeforeDrop", function(context, ev){
//if an item has flag type='b', denies dropping to the position of this item
		if(dtable.data.getMark(context.target,"type")=='b') return false;
		return true;
});
~~~

<h3 id="copy_behaviour">Switching between 'move' and 'copy' behaviors</h3>
By default, rows are moved (not copied) while d-n-d.

To set the 'copy' behaviour, use the api/dragitem_onbeforedrop_event.md event. Specify inside the copy logic and return *false* to prevent drag-and-drop processing:

{{snippet 
Setting the 'copy' behaviour for d-n-d
}}
~~~js
dtable.attachEvent("onBeforeDrop", function(context, ev){
   	for (var i=0; i< context.source.length; i++){
		context.from.copy(context.source[i],context.start,this,webix.uid());
	}
	return false;
});
~~~
{{sample
15_datatable/22_dnd/03_events.html
}}

<h3 id="limiting_draggable_area">Limiting the draggable area to the specified element</h3>
You can provide a behaviour when the user could drag items only by the certain specified areas.

<img src="datatable/limiting_draggable_area.png"/>

To achieve such a behaviour, just follow this plan:

- Specify an element you want an item to be dragged by. 
- Set this element as the target object for the api/dragitem_onbeforedrop_event.md event (the target object is an object on which the event will occur).

~~~css
.webix_drag_handle{
	background-image:url(./handle.png);
	background-repeat: no-repeat;
}
~~~


~~~js

var dtable = new webix.ui({
    view:"datatable",
    //...
	columns:[
		{ id:"rank",	header:"", css:"rank" },
		{ id:"title",	header:"Film title" },
        { id:"year", 	header:"Released"},
		{ id:"drag",	header:"", template:"<div class='webix_drag_handle'></div>" }	
	],
	on:{
		onBeforeDrag:function(data, e){
				return (e.target||e.srcElement).className == "webix_drag_handle";
		}
	}
});	
~~~

{{sample
15_datatable/22_dnd/05_handle_dnd.html
}}<br>
{{sample
15_datatable/22_dnd/08_columns_handle.html
}}

<h3 id="events">Related events</h3>

The following events are generated while d-n-d process:

- api/link/ui.datatable_onbeforedrag_event.md - fires before the mouse button is pressed and moved over a draggable item
- api/link/ui.datatable_onbeforedragin_event.md - fires before a dragged element is moved over the droppable area
- api/link/ui.datatable_ondragout_event.md - fires when a dragged element is moved outside of the droppable area
- api/link/ui.datatable_onbeforedrop_event.md - fires before a dragged element is released over the droppable area
- api/link/ui.datatable_onafterdrop_event.md - fires after drag-n-drop was finished

In the default scenario there is no need to use any of the mentioned events, because DataTable will process all the operations on its own. But sometimes default behavior needs customizing - this is the time when the mentioned events can be used.


