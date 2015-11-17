Sidemenu
==========

##API Reference

- [Methods, properties and events](api__refs__ui.sidemenu.html)
- [Samples](http://docs.webix.com/samples/28_sidemenu/index.html)


##Overview

UI-related **Sidemenu** inherits from [list](desktop/list.md) and lets users select the necessary item from the list of grouped items and see its content on the page. 

<br>

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/sidemenu_front.png" />

<br>


Initialization
----------------

To initialize Sidemenu, you need to define all the necessary parameters in the webix.ui() constructor:

~~~js
webix.ui({
	view: "sidemenu",
	id: "menu",
	width: 200,
	position: "left",
	body:{
		view:"list",
		borderless:true,
		scroll: false,
		template: "<span class='webix_icon fa-#icon#'></span> #value#",
		data:[
			{id: 1, value: "Customers", icon: "user"},
			{id: 2, value: "Products", icon: "cube"},
			{id: 3, value: "Reports", icon: "line-chart"},
			{id: 4, value: "Archives", icon: "database"},
			{id: 5, value: "Settings", icon: "cog"}
		]
	}
});
~~~

{{sample
	28_sidemenu/02_left.html
}}

Configuration settings
--------------------

- position - (string) defines the position of the sidemenu on the screen,possible values are: "left", "right", "top", "bottom"

~~~js
webix.ui({
	view:"sidemenu",
    position:"left"
});
~~~

- width - (number) sets the width of the sidemenu

~~~js
webix.ui({
	view:"sidemenu",
    width: 200
});
~~~

- body - (object) specifies the inner content of the sidemenu, includes the following parameters:

	- view:"list" - the list view that is used as the basis of sidemenu
    - borderless - (boolean) defines, whether the list will have its own borders, true by default
    ~~~js
	webix.ui({
		view: "sidemenu",
		body:{
			view:"list",
			borderless:true
		}
	});
	~~~

    - scroll - (boolean) specifies, whether scroll is enabled in the list, false by default    
    ~~~js
	webix.ui({
		view: "sidemenu",
		body:{
			view:"list",
			scroll: false
		}
	});
	~~~
    - template - (string) defines a template for a menu item, by default, a menu item is shown as an icon from the Font Awesome collection on the left and a text on the right
    ~~~js
	webix.ui({
		view: "sidemenu",
		body:{
			view:"list",
			template: "<span class='webix_icon fa-#icon#'></span> #value#"
		}
	});
	~~~
    - data - (array) sets the configuration of sidemenu items
    ~~~js
	webix.ui({
		view: "sidemenu",
		body:{
			view:"list",
			data:[
				{id: 1, value: "Customers", icon: "user"},
				{id: 2, value: "Products", icon: "cube"},
				{id: 3, value: "Reports", icon: "line-chart"}
            ]
		}
	});
	~~~
    - select - (boolean) defines, whether sidemenu items should be selectable
    ~~~js
	webix.ui({
		view: "sidemenu",
		body:{
			view:"list",
			select:true
		}
	});
	~~~
    - type - (object) contains the configuration of menu items' appearance
	~~~js
	webix.ui({
		view: "sidemenu",
		body:{
			view:"list",
			type:{
				height: 40
			}
		}
	});
	~~~
    
Styling Sidemenu
---------------

You can customize the appearance of the Sidemenu and its items. For this purpose, you should redefine the needed attributes of the related css class in the "style" block of your page:

~~~css
<style>
	.my_menu .webix_view{
		background-color: #ECEFF1;
	}
	.my_menu .webix_list_item{
		line-height: 35px;
		border-bottom-color: #ddd;
	}
</style>
~~~				

There are two CSS classes:

- **.webix_view** - a CSS class for styling the whole sidemenu
- **.webix_list_item** - a CSS class for styling the items of sidemenu

When you've defined the necessary CSS settings, you need to specify the "css" parameter in the sidemenu configuration and set the name of your css class as a parameter:

~~~js
webix.ui({
	view: "sidemenu",
	css: "my_menu"
});
	
~~~

Adding the "Menu" button
-----------------------

In order to save space on the page, you can make the menu collapsible and add the Menu button. Clicking this button will collapse and expand menu.

The Menu button is usually placed on the toolbar of the application. So, let's place it next to application's label.

~~~js
webix.ui({
	rows:[
		{view: "toolbar", id:"toolbar", elements:[
			{
				view: "icon", icon: "bars",
				click: function(){
					if( $$("menu").config.hidden){
						$$("menu").show();
					}
					else
						$$("menu").hide();
				}
			},
			{
				view: "label",
				label: "Demo"
			}
		]},
		{
        	template: "Click 'menu' icon to show a menu"
		}
	]
});
~~~

The view: "icon" has the "bars" type of the icon. On clicking this icon, we check, whether the menu is hidden. 
If the menu is initially hidden, it will be shown on the icon's click. If it's shown, it should be hidden on click.