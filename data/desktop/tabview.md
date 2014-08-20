Tabview
==========================

##Overview

Tabview is a **hybrid** component that is made of a [multiview](desktop/multiview.md) and [tabbar](desktop/controls.md#tabbar). It allows for quick initialization of a multiview with a built-in ability to [switch between the views](desktop/tabbar_switching.md).

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/tabview.png"/>

<br>

##Initialization

There's no need to create a multiview and switching buttons for it. Everything lies within one and the same **"tabview"** component with **cells** property that contains 
collections of views.

{{snippet
Tabview
}}
~~~js
webix.ui({
	view:"tabview",
    animate:false,
	cells:[
		{
		 header:"List",
		 body:{
			id:"listView",
			view:"list", ...
			}
		},
        {
		 header:"Form",
		 body:{
			id:"formView",
			view:"form", ...
			}
		}
	]
});
~~~
{{sample 02_toolbar/03_tabview.html }}


Each tabview cell features:

- **header** - string with a heading for the cell, displayed as **tab title**;
- **body** - **component** object that is placed in this cell. 

{{note
Note that switching between views is enabled automatically via a [tabbar](desktop/controls.md#tabbar) control. For more customization, use a [multiview](desktop/multiview.md) component and choose the needed switching method. 
}}

##API Reference

[Methods, properties and events](api__refs__ui.tabview.html)

###Related Articles

- desktop/multiview.md
- desktop/show_switching.md
- desktop/tabbar_switching.md


