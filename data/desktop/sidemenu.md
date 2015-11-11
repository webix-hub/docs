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

