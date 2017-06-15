Kanban Board General How-Tos
===================

This article is dedicated to the most obvious questions that may arise during the creation of Kanban Board.

How to add icons to Kanban Board?
-----------------------------

You need to specify icons array in the [type](desktop/html_templates.md#templatetypes) for Kanban Lists. The description of the used properties is given in the article kanban/templates.md#icons.

~~~js
webix.type(webix.ui.kanbanlist,{
	name: "cards",
	icons:[
		{
			id: "comments",
			tooltip: "Comments",
			icon:"comment-o",
			show: function(obj){ 
				return !!obj.comments 
			},
			template:"#comments.length#",
			click: function(e,id){
				var item = this.getItem(id);
				...
			}
		},
		{
			id: "edit",
			icon:"edit",
			tooltip: "Edit Task",
			click: function(e,id){
				var item = $$("myBoard").getItem(id);
				...
			}
		}
	]
});

webix.ui({
	view:"kanban", 
	...
	cols:[
		{ 
			header:"Backlog",
			body:{ 
				view:"kanbanlist", 
				status:"new", 
				type: "cards" 
			}
		},
		....
	]
});
~~~

{{sample
63_kanban/01_basic/02_icons.html
}}

How to define tags for tasks?
-------------------------------

There are 2 variants of specifying tags:

1) by setting the **tags** property in the item data. For example, in your data source it can be something as in:

~~~js
webix.ui({
   view: "kanban",
   cols:[..],
   data: [{ id: "1", tags: "tag1,tag2,tag3", ...},...]
});
~~~

2) by setting tags dynamically

~~~js
// get an item
var item = $$("myBoard").getItem("1"); // '1' is the item's id
// set the 'tags' property
item.tags = "tag1,tag2,tag3";
// update the item 
$$("myBoard").updateItem("1");
~~~

If you need to use custom logic for tags rendering, you can [redefine the **templateTags**](kanban/templates.md#template_tags).


How to add an avatar for a task's assignee?
-------------------------------------------

You need to specify **templateAvatar** in the [type](desktop/html_templates.md#templatetypes) for Kanban Lists. 

For example you can show &#60;img&#62; elements:

~~~js
webix.type(webix.ui.kanbanlist,{
	name: "cards",
	// avatar template
	templateAvatar: function(obj){
		if(obj.personId){
			return '<img class="avatar" src="../common/imgs/'+obj.personId+'.jpg" />';
		}
		return "";
	},
	...
});
~~~

{{sample
63_kanban/01_basic/03_user_avatars.html
}}

{{sample
63_kanban/02_events/02_avatar_onclick.html
}}

How to customize the task's content?
--------------------------------------

The tasks' content is specified in the **templateBody**. By default, only an item's text is displayed in the body.

For example, if you need to show images in tasks you can redefine templateBody like this:

~~~js
webix.type(webix.ui.kanbanlist,{
	name: "cards",
	// template for item body
	// show the item's image and text
	templateBody: function(obj){
		var html = "";
		if(obj.image)
			html += "<img class='image' src='../common/imgs/"+obj.image+"'/>";
		html += "<div>"+obj.text+"</div>";
		return html;
	},
	...
});
~~~
{{sample
63_kanban/01_basic/04_templates.html
}}

How to change the color of the task's border?
-------------------------------------

The default color of the tasks' left border is specified in the css class **.webix_kanban_list_content**.
Set the necessary color in the **border-left** property:

{{snippet
kanban.css
}}
~~~js
.webix_kanban_list_content {
  ...
  border-left: 3px solid #27ae60;
}
~~~
You can redefine this CSS rule and set a new color for all tasks in your Kanban board.

However, if you need to set a new color for a separate item, you need to define the **color** property in the item's data. 
So, there will be something like this in your data source:

~~~js
webix.ui({
   view: "kanban",
   id: "myBoard",
   ...,
   data: [...,{ id: "3", color: "red", ...},...]
});
~~~

The color of the left border can also be changed dynamically by means of updating the item:

~~~js
// get an item 
var item = $$("myBoard").getItem("3"); // '3' is the item's id
// set a new 'color' property
item.color = "red";
// update the item
$$("myBoard").updateItem("3");
~~~

How to change the status of an item?
-----------------------------------

The status of an item can be changed in two ways:

1) by dragging an item to a different column

2) by applying a new value to the item's 'status' property:

~~~js
// get an item 
var item = $$("myBoard").getItem("1");  // '1' is the item's id
// set the 'status' property
item.status = "work";
// update the item
$$("myBoard").updateItem("1");
~~~

How to forbid dragging items from/to a column?
--------------------------------------------

In case you need to forbid moving tasks from/to particular columns, you should make use of [Kanban Events](kanban/events.md).

For example, you may ban dragging to columns that aren't situated next to the source column.
Thus, tasks will be dragged only between two neighboring columns.

To implement this idea, the [onListBeforeDragIn](kanban/events.md#onlistbeforedragin) event can be used. 

The handler function will take 3 parameters:

- dragContext - {object} drag-n-drop context object with a set of properties:
	- from - the source object,
	- to - the target object,
	- source - the ID of the dragged item(s),
	- target - the ID of the drop target, null for drop on empty space,
	- start - the ID from which drag-n-drop started
- e - {event object} a native event object
- list - {object} the list object where the event has happened

~~~js
//specifying event handler
function onBeforeDragIn(dragContext,e,list){
	
    // item id
	var item =this.getItem(dragContext.start);

	// if we move an item from one list to another
	if(dragContext.from != dragContext.to){
    	//the status of the source column
		var statusFrom = dragContext.from.config.status;
        //the status of the target column 
		var statusTo = dragContext.to.config.status;
        //assigning indexes to statuses
		var statusIndex = {"new":0,"work":1, "test": 2, "done":3};
        //getting difference between the source and target columns' indexes
        //if it's more than 1, the item won't be moved
		var diff = Math.abs(statusIndex[statusFrom] - statusIndex[statusTo]);
		if(diff>1){
			return false;
		}
	}
	return true;
}

webix.ready(function(){
	webix.ui({
		view:"kanban",
		id: "myBoard",
        on:{
        	onListBeforeDragIn: onBeforeDragIn,
		},
     });
});
~~~

{{sample
63_kanban/02_events/03_drag_n_drop_events.html
}}

How to set the background color to the item?
----------------------------

To apply a specific CSS class for an item you can set the **$css** property for it. This class will be added to className of item element:

~~~js
webix.ui({
    view:"kanban", 
    data: [
       { id:"1", status:"new", text:"Task 1", $css: "critical", ... },
       ...
    ]
});
~~~

Here is an example of setting a new background color for an item with the 'critical' $css property:

~~~js
<style>
  .critical .webix_kanban_list_content{
    background-color: #fff2c1;
    border-color:  #e0d7b7;
    border-left-color:  #f5cf3d;
  }
</style>
~~~
{{sample
63_kanban/01_basic/05_styling.html
}}


@spellcheck: Tos



@seolinktop: [html5 framework](https://webix.com)
@seolink: [buy kanban board](https://webix.com/kanban/)