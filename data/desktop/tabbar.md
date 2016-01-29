Tabbar
================

##API Reference

- [Methods, properties and events](api__refs__ui.tabbar.html) 
- [Shared functionality](desktop/controls_guide.md)

##Overview

UI-related tabbar is an integral button that allows for changing between views in a [multiview](desktop/multiview.md) layout. Its tabs can be nested with
images and icons. 

<img src="desktop/tabbar.png" />




##Initialization


~~~js
rows:[
	{view:"tabbar", id:'tabbar', value: 'listView', multiview:true, options: [
		{ value: 'List', id: 'listView'},
    	{ value: 'Form', id: 'formView'},
    	{ value: 'Empty', id: 'emptyView'}]
	},
	//and then goes multiview
	{cells:[...]}
]    
~~~

{{editor http://webix.com/snippet/cfd06e82	Tabbar}}


####Main properties

- **multiview** (boolean)- if *true*, it links tabs to multiview cells; 
- **options** (array, object) - defines buttons for switching between views. [Details](desktop/controls_guide.md#defininginitialvalues);
- **value** (string) - 
	- within **options** array it sets titles for tabs;
    - within Tabbar constructor it defines the tab that will be shown initially on page loading.
- **type** (string) - if set to "bottom", the tabbar gets other styling, more suitable for tabs placed under the multiview. It can be done by changing the order of layout rows;
- **close** (boolean) - if *true*, the "close" functionality for each tab is provided. Each tab can be closed by clicking a dedicated icon on it. 

Compare top and bottom tabbars in a sample: 

{{editor	http://webix.com/snippet/9a2e4dcc	Panel with Clickable Items ('tabbar')}}

##'Close' Button for Tabs

<img src="desktop/tabs_closable.png"/>

Tabs featuring a **close** property in the tab configuration gain the ability to be closed by clicking the dedicated "Cross" icon:

~~~js
//all tabs can be closed
{view:"tabbar", close:true, options:[...]}

//only "Tab1" can be closed
{view:"tabbar", options:[
	{id:1, value:"Tab1", close:true},
    {id:1, value:"Tab2"}
]}
~~~

{{editor http://webix.com/snippet/f6d7fafd	Tabview: Close Tab Button}}

##Tab Icons

<img src="desktop/tabs_icons.png"/>

Icons are defined through additional HTML provided within the tab **value**: 

~~~js
 { view:"tabbar", options: [
	{ value: "<span class='webix_icon fa-film'></span>List", id: 'listView' }
 ]}   
~~~

{{editor http://webix.com/snippet/3f36e77d	Multiview Tabbar with Icons}}

More about different types of defining icons in Webix you can learn in the desktop/icon_types.md article.

##Advanced Tabbar Usage

- [Adding and Deleting Tabs (Options) on the Go](desktop/tabs_options.md)
- [Dynamic Tabbar](desktop/responsive_tabbar.md)



@index: 
	  - desktop/responsive_tabbar.md