adjust
=============

 

@short:
	adjusts the component to the size of the parent HTML container

@example:

$$('view').adjust();


@template:	api_method
@defined:	ui.baseview
@relatedapi:
	api/ui.baseview_resize.md
@related:
	desktop/resizing.md, 
    desktop/dimensions.md
@relatedsample: 
	15_datatable/11_sizing/02_resize_node.html
    
    
@descr:
The method changes the width and height of the component to fit the parent HTML container.<br>
If you want to resize the component in the layout according to its widht and height settings,
you need to use the api/ui.baseview_resize.md method.


~~~html
<div id='mybox' style='width:100px; height:200px;'></div>
~~~
~~~js
webix.ui({ view:"tree", id:"mytree", container:"mybox"});
...
document.getElementById('mybox').style.width = "200px"; //after the container box is resized
$$('mytree').adjust();                           //component needs adjusting to the new size
~~~

