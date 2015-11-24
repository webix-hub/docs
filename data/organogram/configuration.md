Customizing Organogram
=====================


The dimensions of items in Organogram, their arrangement and content, 
as well as the position of the component in relation to the container can be customized with the help of the **item type**.

Common configuration
---------------------

The following properties can be set in the [type](desktop/type.md) to customize the whole component:


- **autowidth** - boolean, adjusts the container to fit the chart width

~~~js
webix.ui({
	view: "organogram",
    autowidth: true,
    ...
});	
~~~

- **autoheight** - boolean, adjusts the container to fit the chart height

~~~js
webix.ui({
	view: "organogram",
    autoheight: true,
    ...
});	
~~~

Items configuration
----------------------

The appearance of Organogram items can also be changed by setting the following properties in the **type** parameter: 


- **lineColor** - color of the line that connects items in organogram

~~~js
webix.ui({
    view: "organogram",
    type: {
        lineColor: "#90caf9"
    },
    ...
});
~~~

- **width** - the width of an item in pixels, must be a fixed number

~~~js
webix.ui({
	view: "organogram",
    type:{
	     width: 120 
    },
    ...
});
~~~

- **height** - the height of an item, "auto" by default, fits to the content's height

~~~js
webix.ui({
	view: "organogram",
    type:{
	   height: 100
    },
    ...
});
~~~

- **padding** - the space between the organogram and the container borders

~~~js
webix.ui({
	view: "organogram",
    type:{
        padding: 20
    },
    ...
});
~~~

- **marginX** - horizontal space between two items

~~~js
webix.ui({
	view: "organogram",
    type:{
        marginX: 20
    },
    ...
});
~~~

- **marginY** - vertical space between two items

~~~js
webix.ui({
	view: "organogram",
    type:{
        marginY: 20
    },
    ...
});
~~~


- **template** - defines inner html for each item, "#value#" by default

~~~js
{
	template: webix.template("#value#")
}
~~~

If you want to set any other html content for some item you should redefine the **template** property.
For example, let's set images for chart items:

~~~js
var orgChart = new webix.ui({
	container:"testA",
    view:"organogram",
    template: function(obj){
    	var image = obj.img;
		
		if(image){
			html = "<img src='"+image+"' class='photo'>";
		}
		return (image||"")+obj.value;
	}
});
~~~

You can also apply a custom template to specify elements of the list. Let's mark the list items by the mark ">". 
To parse this sign correctly, we will set it as a **"&amp;gt;"** html character code.

~~~js
var orgChart = new webix.ui({
	container:"testA",
    view:"organogram",
    template: function(marks){
    	var html = "";
		if(marks && marks.list_item){
			html = " &gt; ";
		}
			return html;
	}
});
~~~

{{sample
60_pro/07_organogram/07_templates.html
}}


Creating list blocks
--------------------

There's a possibility to make a list block inside of an item. 

<img src="desktop/organogram_list_blocks.png">


To create a list block, you need to specify the **$type** property with the value "list" in the parent of the items that you want to turn into a list.

Let's have a look at the organogram in the above picture. The items of the 4th level are united into lists.

For example, to unite the child items of the "Research" item ("Base research" and "Collaborative research with industries"), 
we should set the **$type** property with the value "list" in its definition.

The same actions should be performed with the "Development", "Teaching" and "Traning" items and their child items.

The code will look like this:

~~~js
var orgChart = new webix.ui({
	container:"testA",
    view:"organogram",
    data: [
    	{id:"1", value:"Center Director", data:[
    		{ id:"1.1", value:"Research &amp; Development", data:[
    			{ id:"1.1.1", value:"Research", $type: "list", data:[
    				{ id:"1.1.1.1", value:"Base research" },
    				{ id:"1.1.1.2", value:"Collaborative research with industries" }
    			]},
    			{ id:"1.1.2", value:"Development", $type: "list", data:[
    				{ id:"1.1.2.1", value:"Faculty development workshops" },
    				{ id:"1.1.2.2", value:"Student development" }
    			]}
    		]},
    		...
    	]}
    ]
});
~~~
 
{{sample
60_pro/07_organogram/02_list.html
}}

###Customizing List Blocks

By default, list items in the block are placed into a standard HTML list. To separate them visually and show their dependence on one and the same parent, 
define the following values within the Organogram type: 

- **listMarginX** - space between the vertical line and block items;
- **listMarginY** - space between two block items in the line.

<img src="desktop/organogram_list_blocks_margin.png"/>

~~~js
webix.ui({
	view:"organogram",
	type:{
    	listMarginX: 20,
    	listMarginY: 20
	}
});    
~~~

{{sample 60_pro/07_organogram/08_list_blocks.html}}



@edition:pro

