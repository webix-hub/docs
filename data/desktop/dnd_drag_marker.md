Defining Drag Marker 
=============

Drag Marker is a graphical element that appears in the dropping area and helps clearly see the position where the dragged element needs to be dropped. 

<img src="desktop/drag_marker.png">

{{sample 17_datatree/22_dnd/06_custom_marker.html }}

The look-and-feel of the drag marker is set via a div element with a **CSS class** where you set all its properties (positioning, borders, background color, marker text (if any), etc.. ). 

~~~css
.my_line_mark{
	border-top:1px dashed orange;
	width:100%; height:1px;
	position:absolute;
	left:0px;
	display:none;
}
~~~

The div element is placed into the document body:

~~~js
var marker = webix.html.create("div", {
		"class":"my_line_mark"
},"&nbsp");
document.body.appendChild(marker);
~~~

The library features a [set of functions for working with HTML](api__refs__html.html). One of them, **create()**, makes an HTML div container with Javascript means, assigns a CSS to it while the content of the new 
HTML block is empty, which is signified by *&nbsp*. 

After that, you should extend the already initialized component with the drag marker functionality. Here the **$dragMark** property comes to your help. Its value is a function that 
makes the marker visible as soon as the dragged element reaches the target area. Marker dimensions depend on the dimensions of an element being dragged:  

~~~js
webix.extend(treea, {
	$dragMark:function(context, ev){
		marker.style.display = 'none';
		if (context.target){
			var pos = webix.html.offset(ev.target); // position of the target view
			var box = webix.html.offset(this.$view); // current position of the dragged element

			marker.style.display = 'block'; // shows the marker
			marker.style.top = pos.y+"px"; // sets top offset of the marker
			marker.style.left = box.x+"px"; //sets left offset of the marker 
			marker.style.width = this.$view.offsetWidth+"px"; //set the marker width
		}	
	}
}, true);	
~~~

Comments: 

- the function takes **DnD context** ([described above](desktop/dnd.md)) and native DOM event as parameters;
- initially the drag mark is not displayed and becomes visible only in the target area;
- firstly, properties of a dragged element are found out; then they define properties of the drag marker;
- **webix.html.offset** method gets the absolute top and left postioning of an HTML element specified as an argument;
- **offsetWidth** DOM method returns width of an element, including borders and padding.

##Adding and Removing Marks

**addCss()** and **removeCss()** methods can help you apply any style for your drag marker defined as a CSS class. They are also used within a **$dragMark** function, but here you heedn't create a separate HTML container 
for the marker. 

~~~js
webix.extend(treeb, {
	$dragMark:function(context, ev){
		if (this.my_marked && this.my_marked != context.target){
			this.removeCss(this.my_marked, "my_custom_mark", true);
			this.my_marked = null;
		}
		if (context.target){
			this.my_marked = context.target;
			this.addCss(context.target, "my_custom_mark", true);
		}	
	}
}, true);
~~~

- **my_custom_mark** is a CSS class for  drag marker;
- a marker is added only to a target component (the mark becomes visible as you drag an item to the target);
- a marker is hidden the moment a dragged item leaves the target area as well as the moment you drop an item there.  


###Related Articles


- [Defining Drag Area](desktop/dnd_drag_area.md)
- [DnD with Tree and TreeTable Components](desktop/dnd_hierarchy.md) 
- [DnD Between Different Component](desktop/dnd_external_data.md)

@complexity:3