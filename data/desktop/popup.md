Popup
==============

###Overview

Popup is a variant of a ui-related [window](desktop/window.md). Unlike it, the popup disappears as you click 
somewhere outside it. Popup is be used to alert some info as well can form a popup menu. 

<img src="desktop/popup.png"/>

{{sample 10_window/02_popup.html }}

###Initialization

Popup consists of **head** and **body** (both taking either view or text template) with **head** section being rather optional. 

The component should be made visible with the **show()** method you call during the component initialization (if, of course, you want the popup to appear on page loading).

~~~js
webix.ui({
	view:"popup",
    id:"my_popup",
	head:"My Window",
	body:
		template:"Some text" 
		}
}).show();
~~~

{{sample 10_window/02_popup.html }}

###Popup Sizing and Positioning

For adequate work, you need to specify the dimensions of your popup as well as its offsets (**top** and **left**). Otherwise, the component occupies the whole screen or sticks to its 
top left corner respectively. 

~~~js
webix.ui({
 	view:"popup", 
	width: 400, height:300,
	top:200, left: 300
}).show();
~~~

Popup position can be set within the **show();** method as well: 

~~~js
webix.ui({
	view:"popup",
    ...
}).show({
    clientX:650, //left offset from the right side
    clientY:50 //top offset
	});
~~~

{{sample 98_docs/Window_offset.html}}

To place the popup in the center of the screen, include **position** property into the component's constructor and set its value to **"center"**:

~~~js
webix.ui({
	view:"popup",
    position:"center",
    ..//popup config
})
~~~

To set the new position for a window, use the following method: 

~~~js
$$('my_window').setPosition(100, 100); //left and top offset
~~~

###Creating a Popup Menu

<img src="desktop/button_popup.png"/>

{{sample 10_window/05_popup_menu.html }}

To create a popup menu that will appear on button click, you should create a button with **popup** property that takes popup **ID** as value. 

The popup is hidden initially. Toolbar and popup are inited within different **webix.ui** containers. 

{{snippet
Popup Menu
}}
~~~js
webix.ui({
       view:"toolbar", 
       elements:[
       		{view:"button", label: 'Menu', popup:"my_pop"}, 
        	...
        ]
});

webix.ui({
       view:"popup",
       id:"my_pop",
       body:{
       		view:"list", 
        ...}
}).hide();
~~~

{{sample
10_window/05_popup_menu.html
}}

###API Reference

[Methods, properties and events](api__refs__ui.popup.html)

###Related Articles

- [Window](desktop/window.md)
- [Control Guide](desktop/controls.md)
- [Toolbar](desktop/toolbar.md)
- [Changing Visibility of Components](desktop/visibility.md)
- [Popup CSS Image Map](desktop/popup_css.md)
