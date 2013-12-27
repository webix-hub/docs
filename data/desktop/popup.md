Popup
==============

###Overview

Popup is a variant of a ui-related [window](desktop/window.md). Unlike it, the popup disappears as you click 
somewhere outside it. Popup is be used to alert some info as well can form a popup menu. 

<img style="display:block; margin-left:auto;margin-right:auto;"  src="desktop/popup.png"/>



###Initialization

Popup consists of **body** (both taking either view or text template) without the **head** section. 

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

There exist more **positioning options**. All of them are described in a [separate documentation article](desktop/window_positioning.md).

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
- [Window and Popup Positioning](desktop/window_positioning.md)
- [Control Guide](desktop/controls.md)
- [Toolbar](desktop/toolbar.md)
- [Changing Visibility of Components](desktop/visibility.md)
- [Popup CSS Image Map](desktop/popup_css.md)

