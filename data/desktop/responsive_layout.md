Responsive Layouts 
==========================

Webix [layout](desktop/layout.md) and [accordion](desktop/accordion.md) structures can respond to the changes of window size by hiding & showing or moving their rows (cols) depending on currently available space.

It occurs when: 

- Layout or accordion are inited without an HTML container, and hence, feature no fixed sizing; 
- The size of any component in such layout/accordion is bigger than the space available for its rendering. Fixed sizing is the right way to achieve it. Read more on initial [component sizing](desktop/dimensions.md).

Responsive behavior features 2 modes: 

- Views are hidden and can be shown back; 
- Views are moved to another place in layout.

**Initial Layout**

<img src="desktop/responsive1.png">

###Responsive Hiding

To enable view hiding and showing on window resizing, set **responsive** property of a layout/accordion to *true*.

~~~js
webix.ui({
   view:"layout", //optional line
   responsive:true, 
   cols:[
   		{view:"list", ...},
    	{view:"template", ...}
    	{view:"datatable", ...}
    ]
});   
~~~

{{sample 01_layout/12_responsive_hidden.html}}

When space is not enough the last view from the left is hidden first. 

**After Window Resizing**

<img src="desktop/responsive3.png">

###Responsive Moving

To enable component moving during window resizing, provide an ID of the target layout as a value of **responsive** attribute of a parent layout of the needed component: 

~~~js
webix.ui({
    id:"a1", rows:[
    	{ responsive:"a1", cols:[ //parent layout for template 
             { view:"list", ...},
             { view:"template", ... }, //template will be moved to "a1" layout
             { view:"datatable", ... } 
        ]}
    ]
});
~~~

When space is not enough middle and right views are more likely to be moved. 

{{sample 01_layout/11_responsive.html}}

**After Window Resizing**

<img src="desktop/responsive2.png">

{{note
If accordion items are placed into layout during resizing, they will behave like layout rows and cols.  
}}

For layouts and accordions that lie inside an HTML container the functionality can be switched on by calling [resize()](api/link/ui.layout_resize.md) method after the container has been resized: 

~~~js
webix.event("divId", "resize", function(e){
    $$("layout").resize();
}); 
~~~

