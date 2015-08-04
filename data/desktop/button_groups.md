Manipulating Groups of Buttons
======================

In case of image buttons, you can use a function to define differently-sized buttons for a toolbar. 

<img src="desktop/imagebutton_group.png"/>

{{sample 02_toolbar/09_toolbar_image_button_box.html }}

Image button is a derivation from a standard button. It is defined with an **image** property where you specify the path to the necessary image.

Button type depends on its size with typical sizes being 18, 24, 32 and 48. If you have the images stored in different folders with corresponding titles,
you can make use of a custom function to set the needed size. 

~~~js
function buttons(size){ 
	return  [
	{ view:"button", type:"image"+size,
		image:"../common/imgs/"+size+"/save.gif", width:size+14}, //for image button
	{ view:"button", type:"image"+size, label:"Save", 
		image:"../common/imgs/"+size+"/save.gif", width:size+60} 
        //for image button with a text label - it should be wider
	];
}
~~~	

Then, when defining properties of a toolbar constructor, include the function into its **cols** property and pass the necessary parameter into it.  

~~~js
webix.ui({
	view:"toolbar", paddingY:2, height:28,
	cols: buttons(18)
});
~~~

The toolbar above will initially work with icons measuring 18 pixels in width while the width of the button itself is calculated withtin the function. 
