Absolute Layout
=================

The *abslayout* view presents a layout that allows specifying the exact location of elements inside it, without using usual rows/columns configuration.
The child elements are placed into layout's cells and their sizes are set by hardcoded values.

<img src="desktop/absolute_layout.png">

So, you need to define the containter first:

~~~html
<div id='layout_div' style='width:800px; height:600px; margin:20px;'></div>
~~~

Then create the "abslayout" view inside of the container and set the necessary elements inside of the layout. For each child view specify the 
exact top and left positions:

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

@edition:pro