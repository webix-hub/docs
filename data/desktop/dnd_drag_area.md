Defining Drag Area
=============

{{note
Predefined drag area is usedful when using drag-n-drop on **touch devices** as slide movements over drag area will be interpreted as dragging rather than scrolling.
}}

<img src="datatable/limiting_draggable_area.png"/>

{{sample 22_dnd/03_drag_handle.html}}

By default any draggable item or component can be dragged by clicking and holding left mouse on any of its areas, but sometimes it looks more convenient 
to define a separate area that will be the only place you can click to drag the item. 

Such area may be defined by icon on the item included into the item data template.

{{snippet
Create an icon
}}
~~~css 
<style type="text/css">
	.webix_drag_handle{
	background-image:url(./handle.png); // path to the image icon
	background-repeat: no-repeat;
	cursor:n-resize; //type of the cursor to signify DnD ability
			}
</style>
~~~

{{snippet
Define drag area
}}
~~~js
webix.ui({
	view:"list", 
	template: "#data#<div class='webix_drag_handle'></div>"
    on:{
		onBeforeDrag:function(data, e)
		return (e.target||e.srcElement).className == "webix_drag_handle";
        }
 });
~~~

**OnBeforeDrag** event triggers a function that sets 'webix_drag_handle' class for both target and source elements.

###Drag Area with Datatable

To define a drag area for [Webix Datatable](datatable/index.md) you should either add template to some column or add a separate column with drag area CSS:

~~~js
view:"datatable",
drag:true,
columns:[
	{ id:"title",	fillspace:true, header:"Film title" },
	{ id:"drag", header:"",	template:"<div class='webix_drag_handle'></div>", width:35}
]
~~~
{{sample 15_datatable/22_dnd/05_handle_dnd.html}}

In case of **column drag-n-drop**, drag area can be defined as well:

~~~js
view:"datatable",
dragColumn:true,
columns:[
	{ id:"votes", header:"<div class='webix_drag_handle'></div>Votes", width:120},
~~~

{{sample 15_datatable/22_dnd/08_columns_handle.html}}

###Related Articles

- [Defining Drag Marker](desktop/dnd_drag_marker.md) 
- [DnD with Tree and TreeTable Components](desktop/dnd_hierarchy.md) 
- [DnD Between Different Component](desktop/dnd_external_data.md) 

@complexity:3