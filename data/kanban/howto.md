General How-Tos
===================

This article is dedidated to the most obvious questions that may arise during the creation of Kanban Board.

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

How to define tags for tasks?
-------------------------------

There are 2 variants of specifying tags:

1) by setting the **tags** property in the item data. For example, in your datasource it can be something as in:

~~~js
webix.ui({
   view: "kanban",
   cols:[..],
   data: [...,{ id: "3", tags: "tag1,tag2,tag3", ...},...]
});
~~~

2) by setting tags dynamically

~~~js
var item = $$("myBoard").getItem("3");
item.tags = "tag1,tag2,tag3";
$$("myBoard").updateItem("3");
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

How to customize a task's content
--------------------------------------

The tasks' content is specified in the **templateBody**. By default, only an item's text is displayed in the body.

For example, if you need to show images in tasks you can redefine templateBody like this:

~~~js
webix.type(webix.ui.kanbanlist,{
	name: "cards",
	// template for item body
	// show item image and text
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















