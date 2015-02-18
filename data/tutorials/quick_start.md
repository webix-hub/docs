Quick Start Guide
=================

What do you need to start working with **webix UI** library? There's nothing better than practise! So let's create some simple design. 

Following steps will take you from downloaded library package to your own app. 

##Tools

To code with the library you don't need any specific tools - any text editor with syntax highlighting like notepad will do. Of course, the editor should 
allow saving text files to html format as well as correctly process script and style includes. 

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

This variant is suitable only to the Webix version distributed under GPLv3.

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

This variant is also suitable only to the Webix version distributed under GPLv3.

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

3 . The apps are to placed between *script* tags. The components you create are inited inside the [view](desktop/view.md).

{{snippet
Just a clean page
}}
~~~js
webix.ui({
	//components
})
~~~

Here you should be aware of the following: 

- first you declare base elements, create the app layout and then nest it with ui components;
- don't forget to specify the ID of any element you'd like to refer to later;
- to ensure than your code is executed after the page is fully loaded, you can make use of the **webix.ready(function(){ ....})**, which is our alternative to 
the onDocumentReady event;

~~~js
webix.ready(function(){
	webix.ui({
			....
	});
});
~~~



4 . In the end let's insert some component into the view. Let it be dataview. 

<img src='tutorials/simple_dataview.png'></img>

~~~js
webix.ui({
    view:"dataview",
    width:517,
    height: 250,
    template:"<div class='rank'>#rank#.</div>"+
    	+"<div class='title'>#title#</div><div class='year'>#year# year</div>",
    type:{
        height: 80,
        width: 250 //dimensions of each dataview item
        },
    data:[
            { id:1, title:"The Shawshank Redemption", year:1994, rank:1},
            { id:2, title:"The Godfather", year:1972, rank:2},
            { id:3, title:"The Godfather: Part II", year:1974, rank:3},
            { id:4, title:"The Good, the Bad and the Ugly", year:1966, rank:4},
            { id:5, title:"My Fair Lady", year:1964, rank:5},
            { id:6, title:"12 Angry Men", year:1957, rank:6},
            ],
    datatype:"json",
	select:1
});
~~~

{{sample
80_docs/simple_dataview.html
}}

####Comments: 

- One of the key properties of the any component and any item is its **ID**, the unique string or number that helps us refer to the object. **ID** 
should be specified if you are going to work with this component/item later as all fucntions  and events are attached to the component through its ID; 
- **template** property defines the way of data presentation within the component item;
- **type** constructor allows manipulating the properties of each item rather than the component as a whole; 
- **data** - defines the datasource for the component;
- **datatype**  - defines [format](desktop/data_types.md) of the incoming data. In case of JSON, datatype specifying is optional. 

See also 

 - [Basic App Tutorial](tutorials/basic_app.md)
 - [Start Coding with the webix UI](tutorials/start_coding.md)
 
@complexity:1