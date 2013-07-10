Quick start with Tree
=========================================

This is a tutorial that will walk you through creating a basic application containing Tree. 
You will learn how to initialize Tree customize it and populate with data.

<img src="datatree/quick_start.png"/>

The final code of the tutorial can be used as the start point while creating applications using Tree.

{{sample
	98_docs/quick_start_datatree.html
}}
A new HTML file and related code files
---------------------------------------------------
To start, create a new HTML file and include the related Webix code files in it.

Required code files are:

- *webix.css*
- *webix.js*

{{snippet
A basic html page with the included code files
}}

~~~html
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Quick start with Tree</title>
	<script src="../codebase/webix.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="../codebase/webix.css" type="text/css" charset="utf-8">
</head>
<body>
	<script>
        //here you will place your JavaScript code
	</script>
</body>
</html>
~~~

Placing Tree on a page
------------------------------------

On the next step, you should create a *div* container where you then place your tree. 

~~~html
<div id="box" style="width:400px;height:200px;"></div>
~~~

Object constructor
---------------------------------
After you have prepared the site for the tree you can move to its initialization.<br>
To create a new Tree object you need to use the next constructor:

{{snippet
Tree constructor
}}
~~~js
tree = new webix.ui({ view:"tree" })
~~~
<br>
The only mandatory parameter you should specify inside the constructor:

- [container](api/link/ui.tree_container_config.md) - the HTML container for Tree. We created it on the previous step. 

{{snippet
Basic Tree configuration
}}
~~~js
tree = new webix.ui({
		container:"box",
		view:"tree",
});
~~~


General settings
-----------------------------------
On the previous step, we have defined primary configuration for Tree. 
For more available settings, read other articles in this documentation, such as:

- datatree/node_templates.md - available templates for customizing data content;
- datatree/selection.md - describes how to enable selection in the tree;
- datatree/sorting.md and datatree/filtering.md - says about means for sorting and filtering.


Loading data
------------
There are different ways to load data into Tree (read about them in chapter datatree/loading_data.md ).<br> We will use the easiest of the ways and specify data directly in the constuctor with the help of the
api/link/ui.tree_data_config.md property:

{{snippet
Loading data into the tree
}}
~~~js
tree = new webix.ui({
	container:"testA",
	view:"tree",
	data: [
		{id:"root", value:"Cars", open:true, data:[
			{ id:"1", open:true, value:"Toyota", data:[
				{ id:"1.1", value:"Avalon" },
				{ id:"1.2", value:"Corolla" },
				{ id:"1.3", value:"Camry" }
			]},
			{ id:"2", open:true, value:"Skoda", data:[
				{ id:"2.1", value:"Octavia" },
				{ id:"2.2", value:"Superb" }
			]}
		]}
	]
});
~~~

Congratulations! Now you can run your app and it'll produce Tree shown at the very beginning.

{{sample
	98_docs/quick_start_datatree.html
}}


What's next
----------------------

What can we suggest you to do next?

- Check the code sample of the mentioned above example (use the link above);
- Read about [possible data formats](datatree/data_formats.md) and how you can [get data from database](datatree/loading_data.md#loadingfromadatabase);
- Find out about [nodes manipulations](datatree/nodes_manipulations.md) (adding, deleting nodes etc.);
- Check other [supplied samples]($${sample_http}17_datatree/). 
