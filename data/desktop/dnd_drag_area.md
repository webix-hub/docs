Defining Drag Area
=============

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

###Related Articles

- [Defining Drag Marker](desktop/dnd_drag_marker.md) 
- [DnD with Tree and TreeTable Components](desktop/dnd_hierarchy.md) 
- [DnD Between Different Component](desktop/dnd_external_data.md) 

@complexity:3