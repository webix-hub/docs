Tabview
==========================

##Overview

Tabview is a **hybrid** component that is made of a [multiview](desktop/multiview.md) and [tabbar](desktop/controls.md#tabbar). 

Tabview allows for quick initialization of a multiview with a built-in ability to [switch between the views](desktop/tabbar_switching.md).

It also features dedicated methods to add and remove views together with the corresponding tabs.

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
	cells:[
		{
		 header:"List",
		 body:{
			id:"listView",
			view:"list", ...
		}},
        {
		 header:"Form",
		 body:{
			id:"formView",
			view:"form", ...
		}}
	]
});
~~~
{{sample 02_toolbar/03_tabview.html }}


Each tabview cell features:

- **header** - string with a heading for the cell, displayed as **tab title**;
- **body** - configuration object for the **component** that is placed in this cell. 

{{note
Note that switching between views is enabled automatically via a [tabbar](desktop/controls.md#tabbar) control. For more customization, use a [multiview](desktop/multiview.md) component and choose the needed switching method. 
}}

##Working with Tabview

Hybrid nature of a tabview allows configuring each of its parts separately:

- though the same-name object properties in the initial configuration:

These  configuration objects may contain native properties of [multiview](desktop/multiview.md) and [tabbar](desktop/controls.md#tabbar)
that need to be redefined. If the configurations are omitted, default values will be used. 

~~~js
webix.ui({ 
	view:"tabview", 
    id:"my_tabview",
  	cells: [], 
    tabbar:{
    	...
    }, 
    multiview:{
    	...
    }
}); 
~~~

- by accessing multiview and tabbar objects to work with them dynamically:

~~~js
var tabbarObj = $$("my_tabview").getTabbar();
var multiviewObj = $$("my_tabview").getMultiview();
~~~

All the API methods, events and properties of a api/refs/ui.tabbar.md and api/refs/ui.multiview.md respectively are applicable to these objects. 

###Enabling animation

By default the switching of tabview tabs is not animated. Since animation is a [multiview](desktop/multiview.md) feature, it can be enabled within **multiview** configuration. 

~~~js
view:"taview",
cells:[],
multiview:{
    animate:true
}
~~~

The **animate** property may take an object with [advanced animation settings](desktop/animation.md). 

###Setting icons for tabs

<img src="desktop/tabs_icons.png"/>

Icons for the tabbar tabs are set via additional HTML in the tab **header**:

~~~js
view:"tabview",
cells:[
	{ header:"<span class='webix_icon fa-film'></span>List",
	  body:{}
    }
 ]   
~~~

{{sample 20_multiview/05_tabbar_with_icons.html}}

More about different types of defining icons in Webix you can learn in the desktop/icon_types.md article.

###Defining tabs that can be closed

Closing functionality is a [tabbar](desktop/controls.md#tabbar) feature. 

<img src="desktop/tabs_closable.png"/>

To make all tabs closable, **close** property should be set to *true* in the **tabbar** configuration: 

~~~js
view:"tabview",
tabbar:{
	close:true
}
~~~

To make a separate tab closable, use the **close** proerty in its configuration: 

~~~js
view:"tabview",
cells:[
	{ header:"List",
      close:true,
	  body:{...}
    }
 ] 
~~~

{{sample 20_multiview/11_close_button.html}}

###Responsive tabbar

Tabbar default feature. If the tabs are wider than the available space, some of them are pushed to a popup list and can be reached though the related menu. 

<img src="desktop/responsive_tabbar.png">

Everything is done fully automatically, though customization options for tab and popup width, icons, etc. are available through the **tabbar** configuration: 

~~~js
view:"tabview",
tabbar:{
	popupWidth:300, 
    tabMinWidth:120
}
~~~

Study the topic in detail in the dedicated [documentation article](desktop/responsive_tabbar.md). 

###Adjusting tab dimensions

The width of each tab can be set separately:

~~~js
view:"tabview",
cells:[
	{ header:"List", width:150, body:{...} },
    { header:"Form", width:250, body:{...} },
 ] 
~~~

If tabs are of different width and height, they usually take the size of the smallest tab once the user switches to it. 

To avoid this behavior, you should use the **fitBiggest** property in the **multiview** configuration object: 

~~~js
view:"tabview", 
multiview:{ 
	fitBiggest:true 
}
~~~

{{sample 20_multiview/09_fit_biggest.html}}

###Adding and removing cells dynamically

The functionality is described in detail in the desktop/tabs_options.md article. 

##API Reference

[Methods, properties and events](api__refs__ui.tabview.html)

###Related Articles

- desktop/multiview.md
- desktop/show_switching.md
- desktop/tabbar_switching.md
- desktop/tabs_options.md


