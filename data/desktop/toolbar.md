Toolbar
=============

##API Reference

- [Methods, properties and events](api__refs__ui.toolbar.html)
- [Samples](http://docs.webix.com/samples/02_toolbar/index.html)


##Overview

Ui-related toolbar inherits from [layout](desktop/layout.md). It is the place to nest all the possible controls including, buttons, 
labels, icons, checkboxes, combos, etc. For the full list of controls please refer to the library's [Controls Guide](desktop/controls.md). 

<img style="display:block; margin-left:auto;margin-right:auto;"  src="desktop/toolbar.png" />


##Initialization

Toolbar controls are put into the **elements** array and are arranged into a horizontal line. 

To distinguish between horizontal and vertical control arrangement, use **cols** and **rows** arrays respectively. 

{{snippet
A three-button toolbar
}}
~~~js
webix.ui({
	view:"toolbar",
    id:"myToolbar",
	cols:[
		{ view:"button", id:"LoadBut", value:"Load", width:100, align:"left" },
		{ view:"button", value:"Save", width:100, align:"center" },
		{ view:"button", value:"Info", width:100, align:"right" }]
});		
~~~

{{sample 02_toolbar/04_toolbar_align.html}}


Specify the ID of a toolbar as well as ID-s of all the necessary controls if you want to work with them later. 

{{note
There exists a possibility to specify [common configuration](desktop/common_config.md) for all controls included into this or that toolbar. 
}}


##Working with Toolbar

###Image Buttons

<img src="desktop/image_buttons.png"/>

{{sample 02_toolbar/07_toolbar_image_button.html }}

Differently-sized buttons can be included into the toolbar with the help of a custom function:

~~~js
webix.ui({
	container:"areaD",
	view:"toolbar",
	cols: buttons(48) /*here you specify the parameter you want to 
        				pass to the function defined later*/
});	
    
function buttons(size){
	return  [
	{ view:"button", type:"image"+size,
		image:"../common/imgs/"+size+"/save.gif", width:size+7},
	{ view:"button", type:"image"+size,
		image:"../common/imgs/"+size+"/copy.gif", width:size+7}
	];
}
~~~

More info about how to [manipulate button groups](desktop/button_groups.md).

###Icon Buttons

Icons can be nested into all the library conponents. Within toolbar, icon buttons look definitely stylish.

<img src="desktop/toolbar_icons.png"/>

{{sample 02_toolbar/11_toolbar_icons.html }}

Learn more about icon types in the [dedicated chapter of the manual](desktop/icon_types.md). 


##Related Articles

- [Controls](desktop/controls.md)
- [Tabview Functionality](desktop/tabview.md)
- [Toolbar CSS Image Map](desktop/toolbar_css.md)