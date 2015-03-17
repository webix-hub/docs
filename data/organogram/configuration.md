Configuring Organogram
=====================

The dimensions of items in Organogram, their arrangement and content, 
as well as the position of the component in relation to the container can be customized with the help of the **item type**.

The following properties can be set in the [type](desktop/type.md):

- **width** - the width of an item in pixels, must be a fixed number

~~~js
{
	width: 120 
}
~~~

- **height** - the height of an item, auto by default, fits to the content's height

~~~js
{
	height: "auto"
}
~~~

- **padding** - the space between the organogram and the container borders

~~~js
{
  	padding: 20
}
~~~

- **marginX** - horizontal space between two items

~~~js
{
	marginX: 20
}
~~~

- **marginY** - vertical space between two items

~~~js
{
    marginY: 20
}
~~~

- **lineColor** - color of the line that connects items in organogram

~~~js
{
 	lineColor: "#90caf9"
}
~~~


- **classname** - specifies a css rule for an item 

~~~js
classname:function(obj, common, marks){
	var css = "webix_organogram_item ";
	if (obj.$css){
		if (typeof obj.$css == "object")
			obj.$css = webix.html.createCss(obj.$css);
		css += " "+obj.$css;
	}

	if(marks && marks.list_item)
		css += " webix_organogram_list_item ";
	if(marks && marks.$css)
		css += marks.$css;
	css += " webix_organogram_level_"+obj.$level;
	return css;
}
~~~

- **listClassName** - defines a css rule for a container with list elements

~~~js
listClassName: function(obj){
	var css =  "webix_organogram_list webix_organogram_list_"+obj.$level;
	if (obj.$listCss){
		if (typeof obj.$listCss == "object")
			obj.$listCss = webix.html.createCss(obj.$listCss);
		css += " "+obj.$listCss;
	}
	return css;
}
~~~


- **autowidth** - boolean, adjusts the container to fit the component's width

~~~js
{
	autowidth: true
}
~~~


- **autoheight** - boolean, adjusts the container to fit the component's height

~~~js
{
    autoheight: true
}
~~~


- **template** - defines inner html for each item, "#value#" by default

~~~js
{
	template: webix.template("#value#")
}
~~~

For example, if you want to set an image for the parent item, you can do the following:

~~~js
var orgChart = new webix.ui({
	container:"testA",
    view:"organogram",
    template: function(obj){
    	var parentId = this.getParentId(obj.id);
    	var html = "";
		// if director
		if(!parentId){
			html = "<img src='common/photo.png' class='photo'>";
		}
		return html+obj.value;
	}
});
~~~

You can also specify elements of the list by the mark ">". To parse this sign correctly,
we will set it as a "&gt;" html character code.

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


Creating list blocks
--------------------

There's a possibility to make a list block inside of an item. 

<img src="desktop/organogram_list_blocks.png">


In the parent of the items that we want to turn into a list, we will specify the **type** property with the value "list".

So the data template will be defined as follows:

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

Thus, in the above code snippet we can see that the children of the "Research" and "Development" items were transformed into lists. 


{{sample
34_organogram/02_list.html
}}



