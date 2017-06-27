AbsoluteLayout
=================

The AbsoluteLayout view presents a layout that allows specifying the exact location of elements inside it, without using usual rows/columns configuration.

The child elements are placed into layout's cells and their sizes are set by hardcoded values. For each child view the exact position should be specified via
the **top**/**left**,**bottom**/**right** properties:

<img src="desktop/absolute_layout.png">
 
~~~js
webix.ui({
	container:"layout_div",
	view:"abslayout",
	cells:[
		{ view:"text", label:"Name", labelAlign:"right",
			top: 100, left:350, width:200, height: 40 },
		{ view:"text", label:"Email", labelAlign:"right",
			top: 100, left:550, width:200, height: 40 },
		{ view:"textarea", label:"My text box", labelPosition:"top",
			top: 140, left:100, width:650, height: 100 },
		{ view:"button", label:"My text box",
			top: 260, left:260, width:400, height: 40 }
	]
}).show();
~~~

{{sample 60_pro/13_layout/01_abslayout.html}}

Using Relative Elements in Absolute Layout
-----------------

It is also possible to specify the elements' positions as relative so that they will take all available space. 
For this, you need to set the **relative:true** attribute in the child view configuration.

~~~js
webix.ui({
	container:"layout_div",
    view:"abslayout",
    cells:[
    	{ view:"list", select:true,
            item:{
            	height:62,
            	template:"#rank#. #title# <br> #votes#",
           	},
            data:big_film_set,
            relative:true 
        },
        { view:"button", value:"+", css:"addButton",
           bottom: 20, right:35, width:50, height: 60}
   	]
}).show();
~~~

In the above example we have specified an abslayout and placed two views inside of it:

- a list view with relative positioning
- a button view with absolute positioning

{{sample 60_pro/13_layout/07_abslayout_mixed.html}}

@edition:pro