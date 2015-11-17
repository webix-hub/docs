TreeMap
============

##API Reference

- [Methods, properties and events](api__refs__ui.treemap.html)
- [Samples](http://docs.webix.com/samples/60_pro/11_treemap/index.html)



##Overview

UI-related **TreeMap** inherits from [view](desktop/view.md) and allows visualizing hierarchical structures is a space-limited way. It takes most part of API from api/refs/treestore.md.

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


- **value** - (string) specifies what part of the TreeMap space an element takes relative to other elements of the same level

~~~js
webix.ui({
	view:"treemap",
	value: "#value#"
});
~~~

- **template** - (function) defines, what element is chosen, takes an item object as a parameter and returns either some item's property or an empty string (depending on the settings)

~~~js
webix.ui({
	view:"treemap",
	template: function(item){
		return item.category|| "";
	}
});
~~~


- **type** - (object) defines the peculiarities of the TreeMap rendering

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

- **url** - (string) url to the data source

~~~js
webix.ui({
	view:"treemap",
    ...
	url: "data/data_colors.json"
});
~~~

- **activeItem** - (boolean) specifies if childs of the branches will be rendered in the TreeMap, false by default

~~~js
webix.ui({
	view:"treemap",
	activeItem:true
});
~~~

- **subRender** - (boolean) defines if the sub-elements should be rendered for the first-level branches, true by default

~~~js
webix.ui({
	view:"treemap",
	subRender: false
});
~~~

- **headerTemplate** - (string) sets the template for the header label

~~~js
webix.ui({
	view:"treemap",
	headerTemplate: "#category#"
});
~~~

- **branch** - (string) sets the id of a sub-branch that will expand showing its sub-elements  

~~~js
webix.ui({
	view:"treemap",
	branch: "2.1"
});
~~~


Customizing TreeMap
----------------

Besides displaying the correlation of elements' values inside of TreeMap, you can also show the relations between items by some other parameter with the help of color.

<img src="desktop/treemap_colors.png">

For example, you can set color graduation for the TreeMap elements, depending on the number of comments they have. You should define a custom css class that will specify the logic of comments coloring:

~~~js
webix.ui({
	view:"treemap",
	value: "#views#",
	type:{
		cssClass: function(item){
			var css,
			comments = item.comments;

			if(!this.isBranch(item.id)){
				if(comments > 30)
					css = "item3";
				else if(comments > 20)
					css = "item2";
				else if(comments > 10)
					css = "item1";
				else
					css = "item0";
			}
			return css;
		},
	},
	url: "data/data_colors.json"
});
~~~


In the above example the cssClass parameter sets a function that takes an element object as a parameter. We want to color just the branches, so then we check if the element is a branch.

If it's true, the corresponding element will be colored according to the next logic: the more comments the items have, the more saturated their color will be.

The colors that correspond to this or that rule are specified in the css style definition:

~~~css
.item0{ background: #bbdefb; }
.item1{ background: #90caf9; }
.item2{ background: #64b5f6; }
.item3{ background: #42a5f5; }
~~~

{{sample 60_pro/11_treemap/02_colors.html}}

One-Level Rendering
---------------------

You can set the mode in which only first-level branches are displayed in the Treemap. 
For this purpose, we need to count the average number of comments in a branch. Let's specify the getCss function with the appropriate configuration.



~~~js
function getCss(item){
	var color = "",
	comments = item.comments,
	id = item.id,
	num = 0, sum = 0;

	if(this.isBranch(id)){
		// average number of comments in a branch
		this.data.eachLeaf(id,function(item){
			sum += item.comments*1;
		num++;
		});
		comments = sum/num;
	}

	if(comments > 30)
		color ="#26a69a";
	else if(comments > 20)
		color ="#4db6ac";
	else if(comments > 10)
		color ="#80cbc4";
	else
		color ="#b2dfdb";

	return { background: color};
}
~~~

As you can see, inside of the isBranch function we call the eachLeaf one. The method takes the leaf id and a function, where we pass the item object.

To get the sum of elements comments, we take comments of each item and summarize them. We also count the number of all items. And then we divide the sum by the number.

Thus, we get the average number of comments in a branch and can use this number in the template of the value parameter. 

Then we can pass the getCss function into the cssClass parameter of the type object an set the template that will render only the branches of the first level with their category names:


~~~js
webix.ui({
	view:"treemap",
	type:{
		cssClass: getCss
	},
	activeItem: true,
	subRender: false,
	headerTemplate: "#category#",
	template: function(obj){
		return obj.$level == 1? obj.category: "";
	},
	value: "#views#",
	url: "data/data.json"
});
~~~

{{sample 60_pro/11_treemap/03_one_level.html}}

Handling Events
-----------------

Since TreeMap component inherits its API from api/refs/treestore.md, it supports the handling of almost the same events. 
You can check the full list of events in the [API reference](api/refs/ui.treemap_events.md).

TreeMap supports various events that can be used to provide a custom behaviour for treemap.

There are 2 ways you can add a handler to the event:

- through the method [attachEvent()](api/link/ui.treemap_attachevent.md);
- through the parameter [on](api/link/ui.treemap_on_config.md).

{{note
Event names are case-insensitive
}}


###Method attachEvent()

You can attach several handlers to the same event and detach them using two respective methods:

{{snippet
A general way to attach/detach the event handler
}}
~~~js
// to attach event
var myEvent = $$("treemap").attachEvent("onItemClick", function () {
// event handler code
})

//to detach event
$$("treemap").detachEvent(myEvent);
~~~

###Parameter 'on'

With the help of parameter [on](api/link/ui.treemap_on_config.md) you can also attach any event(s) to a TreeMap object. But in contrast to 
using the api/link/ui.treemap_attachevent.md method you can't detach the attached events later.

{{snippet
Attaching the event handler through parameter 'on'
}}
~~~js
webix.ui({
	view:"treemap",
	...
    on: {
        onitemClick: function (id) {
            alert("item has just been clicked");
       }
	}
); 
~~~


###Cancelable Events 

All events with the subword '**onBefore**' can be cancelled.<br>
To cancel some event you should return **false** within the appropriate event handler.

{{snippet
Cancelling the event handler
}}
~~~js
var myEvent = $$("treemap").attachEvent("onBeforeSelect", function (id) {
 	... // some event handler code
	return false;
})
~~~

###Accessible objects and data 


Inside the event handler you can refer to the holder component through the keyword **this**. </br>
Besides, most event handlers get incoming argument(s), like the **id** of a data item (see [treemap events](api/refs/ui.treemap_events.md) to know exactly what arguments are passed inside event handler). 

Btw, using the **id** of a data item you can access this item itself and all its properties. For example:

{{snippet
Referring within the event handler
}}
~~~js
$$("treemap").attachEvent("onAfterSelect",function(id){
  var level = this.getItem(id).$level;
})
~~~

{{sample
60_pro/11_treemap/04_events.html
}}

Setting header
----------------

You can specify the displaying of branches' names in the header of the treemap. The header is set using the headerTemplate property of the component configuration.

~~~js
webix.ui({
	view:"treemap",
	headerTemplate: "#category#"
});
~~~

In our example, the item's category is taken as the value of the headerTemplate property. So, a Treemap with an opened first-level branch will look like this:

<img src="desktop/treemap_branch_header.png">



Let's enable the child branches of the "Healthcare" category to expand on click and display their titles in the header.

~~~js
webix.ui({
	view:"treemap",
	headerTemplate: "#category#",
    branch:"2.1" 
});
~~~

Now if we click on the "Health Economics" sub-branch of the "Healthcare" category, the header will be displayed as the "First-level branch header> Second-level branch header":

<img src="desktop/treemap_child_branch_header.png">

{{sample
60_pro/11_treemap/05_header.html
}}

@edition:pro