Quick Start Guide
=================

What do you need to start working with **Webix UI** library? There's nothing better than practice! So let's create some simple design that will include Tree and DataTable components. 

<img src='tutorials/simple_app.png'></img>

The following steps will take you from downloaded library package to your own app. 

##Tools

To code with the library you don't need any specific tools - any text editor with syntax highlighting like notepad will do. Surely, the editor should 
allow saving text files to HTML format as well as correctly process script and style includes. 

##Including Library into the webpage

1 . Create a simple html-page. Specify **HTML5** doctype for it.

2 . Install Webix for your future app. There can be several ways:

- Include 2 Webix files (**webix.js** and **webix.css**) directly from Webix CDN 

~~~html
<!DOCTYPE HTML>// specifies document type
<html>
    <head>
    <link rel="stylesheet" href="http://cdn.webix.com/edge/webix.css" type="text/css"> 
    <script src="http://cdn.webix.com/edge/webix.js" type="text/javascript"></script>  
    </head>
    <body>
        <script type="text/javascript" charset="utf-8">
 
... // here your app will "take shelter"
        </script>
    </body>
</html>
~~~

If you need to get one of the older Webix versions, you shoud include the necessary number of version
into the links to the code files:

~~~html
<link rel="stylesheet" href="http://cdn.webix.com/2.2/webix.css" type="text/css"> 
<script src="http://cdn.webix.com/2.2/webix.js" type="text/javascript"></script> 
~~~

This variant is suitable only for the Webix version distributed under GPLv3.

- Include Webix files via **Nuget** or **Bower** package managers by a single command. You don't need to download anything.

{{snippet
NuGet
}}
~~~js
nuget install Webix

//If you use Microsoft Visual Studio, execute this from Package Manager Console
install-package Webix
~~~

{{snippet
Bower
}}
~~~js
bower install webix
~~~

This variant is also suitable only for the Webix version distributed under GPLv3.

- Download and unzip the library to the necessary directory. Include **webix.js** and **webix.css** files into the document's head section.

~~~html
<!DOCTYPE HTML>// specifies document type
<html>
    <head>
    <link rel="stylesheet" href="../../codebase/webix.css" type="text/css"> 
    <script src="../../codebase/webix.js" type="text/javascript"></script>  
    </head>
    <body>
        <script type="text/javascript" charset="utf-8">

... // here your app will "take shelter"

        </script>
    </body>
</html>
~~~



##Component Initializing

3 . The apps are to be placed between the *script* tags. The components you create are initialized inside the [view](desktop/view.md).

{{snippet
Just a clean page
}}
~~~js
webix.ui({
	// components
});
~~~

Here you should be aware of the following: 

- to ensure that your code is executed after the page is fully loaded, you can make use of the **webix.ready(function(){ ....})**, which is our alternative to 
the onDocumentReady event;

~~~js
webix.ready(function(){
	webix.ui({
			....
	});
});
~~~

Next we'll declare base elements, create the app layout and finally nest it with ui components.


4 . At this step we'll specify an HTML container for the app with the following properties: 

~~~html
<style>
#app_here{
	width:1000px; height:400px; margin:20px;
}
</style>
...
<div id="app_here"></div>
~~~

Then we'll create a layout structure which will be put into the above created container:

- a layout with 2 rows
- the 2nd row will contain one more layout with 3 columns


~~~js
webix.ui({
	container:"app_here",
	view:"layout", // optional
    rows:[
    	{...},
        { view:"layout", // optional
         cols:[
           {...},
           {...},
           {...}
        ]}    	
    ]		
});
~~~

As the value of the **container** property the id of HTML element should be specified.<br>
Note that you can easily omit the **view:"layout"** lines and start setting rows and columns at once.


5 . Now we can insert some components into the layout view.

We'll put a template that will serve as the app's header into the 1st row.


~~~js
webix.ui({
	container:"app_here",
    rows:[
    	{ view:"template", type:"header", template:"My App!"},
        { cols:[
           {...},
           {...},
           {...}
        ]}    	
    ]		
});
~~~

- you can easily omit the **view:"template"** definition; 
- the "header" type of template is used to set headers for layout rows/columns; 



6 . It's high time to place components into the 2nd row. The 3 columns of the 2nd row will be occupied by Tree and DataTable components and a resizer line between them:

~~~js
webix.ui({
	container:"app_here",
	rows:[
	   { type:"header", template:"My App!" },
	   { cols:[
		  { view:"tree",id:"mytree", gravity:0.3, select:true, data:tree_data, 
          	datatype:"json"},
		  { view:"resizer" },
		  { view:"datatable", id:"mydatatable", autoConfig:true, data:small_film_set, 
          	datatype:"json"}
		]}
     ]
});
~~~

Let's analyze the above code in detail:


- one of the key properties of any component and any item is its **ID**, the unique string or number that helps us refer to the object. **ID** 
should be specified if you are going to work with this component/item later as all functions are applied and events are attached to the component through its ID; 
- the **gravity** parameter sets relative size proportions for the elements within the common parent container;
- the **select** property enables item selection in the tree; 
- the **data** parameter defines the datasource for the component;

We use JSON in the sample, so the items of the tree_data dataset look like this:

~~~js
[
	{ id: "1", type: "folder", value: "Music", css:"folder_music", data:[..child items..]},
    ...
]
~~~

The small_film_set dataset includes data items in the next mode:

~~~js
[
	{ id:1, title:"The Shawshank Redemption", year:1994, votes:678790, rating:9.2, rank:1},
    ...
]
~~~
- the **datatype** property defines the [format](desktop/data_types.md) of the incoming data. In case of JSON, datatype specifying is optional;
- the **autoConfig** property creates columns of datatable on the basis of data properties. Headers of columns are based on property names in dataset.


7 . At the last step we'll illustrate the usage of ids. In order to refer to a component the following structure should be used - **$$("id")**.<br>
We will use the Tree method api/link/ui.tree_open.md to open the tree branches and the DataTable method api/ui.datatable_select.md to select the 1st item of the datatable.

~~~js
webix.ui({
	container:"app_here",
	rows:[
	   { type:"header", template:"My App!" },
	   { cols:[
		  { view:"tree",id:"mytree", gravity:0.3, select:true, data:tree_data, 
          	datatype:"json"},
		  { view:"resizer" },
		  { view:"datatable", id:"mydatatable", autoConfig:true, data:small_film_set, 
          	datatype:"json"}
		]}
     ]
});

$$("mytree").open(1);
$$("mytree").open(2);

$$("mydatatable").select(1);
~~~

The ready app is presented in the following picture:

<img src='tutorials/simple_app.png'></img>

{{sample
80_docs/simple_app.html
}}

See also 

 - [Basic App Tutorial](tutorials/basic_app.md)
 - [Start Coding with the webix UI](tutorials/start_coding.md)
 
@complexity:1