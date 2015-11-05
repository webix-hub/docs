TreeMap
============

##API Reference

- [Methods, properties and events](api__refs__ui.treemap.html)
- [Samples](http://docs.webix.com/samples/28_sidemenu/index.html)



##Overview

UI-related **TreeMap** inherits from [view](desktop/view.md) and allows visualizing hieararchical structured is a space-limited way. It takes most part of API from api/refs/treestore.md.

<br>

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/treemap_front.png" />

<br>

Initialization
-------------

To initialize TreeMap on the page, you need to specify the necessary configuration:

~~~js
webix.ui({
	view:"treemap",
	select: true,
	template: function(item){
		return item.label||"";
	},
	value: "#value#",
	data: [
		{ id:"1", label: "Technology", data:[
			{ id:"1.1", value:"50" },
			{ id:"1.2", value:"30" },
			{ id:"1.3", value:"20" }
		]},
		{ id:"2", label: "Healthcare", data:[
			{ id:"2.1", value:"80" },
			{ id:"2.2", value:"10" },
			{ id:"2.3", value:"60" },
			...
		]},
    	...
    ]
});
~~~

The parameters are the following:

- select - (boolean) if set to true, allows selecting branches
- template - (function) defines, what element is chosen, takes an item object as a parameter and returns either the item's label or an empty string (depending on the settings)
- value - (string) specifies what part the element takes relative to other elements of the same level


{{sample
	60_pro/11_treemap/01_init.html
}}

Configuration settings
-------------------------------

There are more parameters that you can set to configure the TreeMap in the needed way:


- value - (string) specifies what part the element takes relative to other elements of the same level

~~~js
webix.ui({
	view:"treemap",
	value: "#value#"
});
~~~

- template - (function) defines, what element is chosen, takes an item object as a parameter and returns either some item's property or an empty string (depending on the settings)

~~~js
webix.ui({
	view:"treemap",
	template: function(item){
		return item.category|| "";
	}
});
~~~


- type - (object) defines the peculiarities of the TreeMap rendering

For example, you can set the cssClass function or the template one inside of the type property:

~~~js
webix.ui({
	view:"treemap",
	type:{
		cssClass: function(item){
			// css config	
		},
		template: function(item){
			return item.category|| "";
		}
	}
});
~~~

- url - (string) url to the data source

~~~js
webix.ui({
	view:"treemap",
    ...
	url: "data/data_colors.json"
});
~~~

- activeItem - (boolean) false by default
- subRender - (boolean) defines if the sub-items can be rendered for the branches, true by default
- headerTemplate - (string) sets the template for the TreeMap header

"#category#"