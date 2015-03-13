Configuring Organogram
=====================

Specifying appearance
--------------------

The dimensions of items in Organogram, their arrangement and content, 
as well as the position of the component in relation to the container can be customized with the help of the **item type**.

The following properties can be set in the **type**:

- **width** - the width of an item in pixels, must be fixed

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

- **marginX, marginY** - horizontal and vertical spaces between two items, respectively 

~~~js
{
	marginX: 20,
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

- **scroll** - boolean, a scroll if the size of container is less than the diagram itself will appear

~~~js
{
	scroll: true
}
~~~

- **autowidth**,**autoheight** - boolean, enlarge the size of container to adjust it to parent view size by width or by height, correspondingly

~~~js
{
	autowidth: true,
    autoheight: true
}
~~~

{{sample
34_organogram/03_autoheight.html
}}

{{sample
34_organogram/04_autowidth.html
}}

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


Creating list blocks
--------------------

There's a possibility to make a list block inside of an item. 

**[change the image]**

<img src="desktop/organogram_list_blocks.png">

Elements of a list can be specified by the mark ">". To parse this sign correctly,
we will set it as a "&gt;" html character code.
In the parent of the items that we want to turn into a list, we will specify the **type** property with the value "list".

So the data template will be defined as follows:

~~~js
var orgChart = new webix.ui({
	container:"testA",
    view:"organogram",
    template: function(obj, type, marks){
		var parentId = this.getParentId(obj.id);
		var html = "";
		// if director
		if(!parentId){
				html = "<img src='common/photo.png' class='photo' >";
		}
		// if list item
		else if(marks && marks.list_item){
			html = " &gt; ";
		}
			return html+obj.value;
		},
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
34_organogram/02_list.html
}}

Styling separate items
----------

You can set a specific style for a particular item by using the **css** attribute inside the data source.

<img src="desktop/organogram_style.png">

To set the selection shown in the above picture you need to specify separate css rules for the top item and a child one: 

~~~js
<style>
	.webix_organogram_item.top{
    	background-color: #ffe0b2;
		border-color: #ffcc80;
	}
    
	.webix_organogram_item.webix_selected{
		background-color: #2196f3;
		border-color: #2196f3;
	}
</style>

<script>
orgChart = new webix.ui({
    container:"box",
    view:"organogram",
    data:[
    	{id:"root", value:"Board of Directors", $css: "top",  data:[
			{ id:"1", value:"Managing Director", 
              $css:{background:"#ffe0b2", "border-color":"#ffcc80"}, data:[
				{id:"1.1", value:"Base Manager", data:[
					{ id:"1.1.1", value:"Store Manager" },
					{ id:"1.1.2", value:"Office Assistant", data:[
							{ id:"1.1.2.1", value:"Dispatcher", data:[
								{ id:"1.1.2.1.1", value:"Drivers" }
						]}
					]},
					{ id:"1.1.3", value:"Security" }
				]},
			
			]}
		]}
	]
});
</script>
~~~

- **.webix_organogram_item** - css class for an item
- **.webix_organogram_item.top** - css class for the top item
- **.webix_organogram_item.webix_selected** - css class for the selected item

Thus, we've applied the css rule "top" to the top item and set the same css to the item with the id:"1" directly in the data set.
The rule "webix_selected" changed the default colors of items selection.

