Quick Start with Tree
=========================================

This tutorial will walk you through creating a basic application containing Tree. 
You will learn how to initialize a Tree, populate it with data and set the desired configuration.

<img src="datatree/quick_start.png"/>

The final code of the tutorial can be used as the start point while creating applications using Tree.

{{sample
	80_docs/quick_start_datatree.html
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
	<link rel="stylesheet" href="../codebase/webix.css" type="text/css" 
    	charset="utf-8">
</head>
<body>
	<script>
        //here you will place your JavaScript code
	</script>
</body>
</html>
~~~

Object constructor
---------------------------------
After you have included the necessary files, you can move to Tree initialization.<br>
To create a new Tree object you need to use the next constructor:

{{snippet
Tree constructor
}}
~~~js
webix.ui({ 
	view:"tree" 
});
~~~

In fact, it's enough to initialize a Tree. However, it's also possible to put a tree inside of an HTML container.

Placing Tree on a page
------------------------------------

To set a tree in a particular position of a page, you can put it in a container.
For that, you should create a *div* container. Let's create a container with the "box" id: 

~~~html
<div id="box" style="width:400px;height:200px;"></div>
~~~

After that you need to use the above mentioned Tree constructor and specify the created container via the corresponding [property](api/link/ui.tree_container_config.md):

{{snippet
Basic Tree configuration
}}
~~~js
webix.ui({
	container:"box",
	view:"tree"
});
~~~

Loading data
------------

There are different ways to load data into Tree (read about them in chapter datatree/loading_data.md ).

We will use the easiest of the ways and specify data directly in the constructor with the help of the api/link/ui.tree_data_config.md property:

{{snippet
Loading data into the tree
}}
~~~js
webix.ui({
	// container:"box",
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
	80_docs/quick_start_datatree.html
}}


General configuration settings
-----------------------------------

On the previous steps, we have defined a primary configuration for Tree. 
For more available settings, read other articles in this documentation, such as:

- datatree/node_templates.md - available templates for customizing data content;
- datatree/selection.md - describes how to enable selection in the tree;
- datatree/sorting.md and datatree/filtering.md - says about means for sorting and filtering.

What's next
----------------------

What can we suggest you to do next?

- Check the code sample of the mentioned above example (use the link above);
- Read about [possible data formats](datatree/data_formats.md) and how you can [get data from database](datatree/loading_data.md#loadingfromadatabase);
- Find out about [nodes manipulations](datatree/nodes_manipulations.md) (adding, deleting nodes etc.);
- Check other [supplied samples](http://docs.webix.com/samples/17_datatree/index.html). 
