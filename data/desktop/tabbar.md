Tabbar
================

##API Reference

- [Methods, properties and events](api/refs/ui.tabbar.md) 
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

{{sample 02_toolbar/02_tabbar.html }} 


####Main properties

- **multiview** (boolean)- if *true*, it links tabs to multiview cells; 
- **options** (array, object) - defines buttons for switching between views. [Details](desktop/controls_guide.md#defininginitialvalues);
- **value** (string) - 
	- within **options** array it sets titles for tabs;
    - within Tabbar constructor it defines the tab that will be shown initially on page loading.
- **type** (string) - if set to "bottom", the tabbar gets other styling, more suitable for tabs placed under the multiview. It can be done by changing the order of layout rows;
- **close** (boolean) - if *true*, the "close" functionality for each tab is provided. Each tab can be closed by clicking a dedicated icon on it. 

Compare top and bottom tabbar in a sample: 

{{sample 13_form/01_controls/08_tabbar.html }}

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

{{sample 20_multiview/11_close_button.html}}

##Showing and Hiding Options

There's a possibility to hide and show tabs using Tabbar API. To apply this feature, make use of the api/link/ui.tabbar_showoption.md
and api/link/ui.tabbar_hideoption.md methods correspondingly.
Both methods take the view id as a parameter.

For example, you can hide a form view placed into one of the tabs:

~~~js
webix.ui({
	rows:[
		tabbar,
		data,
		{view: "form", cols:[
			{},
			{ view:"toggle", offLabel:"Hide Form", onLabel:"Show Form", on:{
				onChange: function(value){
					if(value)
						$$("tabbar").hideOption("formView");
					else
						$$("tabbar").showOption("formView");
				}
			}}
		]}
	]
});
~~~


{{sample 20_multiview/14_hide_options.html}}

##Tab Icons

<img src="desktop/tabs_icons.png"/>

Icons are defined through additional HTML provided within the tab **value**: 

~~~js
 { view:"tabbar", options: [
	{ value: "<span class='webix_icon fa-film'></span>List", id: 'listView' }
 ]}   
~~~

{{sample 20_multiview/05_tabbar_with_icons.html}}

More about different types of defining icons in Webix you can learn in the desktop/icon_types.md article.

##Advanced Tabbar Usage

- [Adding and Deleting Tabs (Options) on the Go](desktop/tabs_options.md)
- [Dynamic Tabbar](desktop/responsive_tabbar.md)



@index: 
	  - desktop/responsive_tabbar.md