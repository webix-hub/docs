Introduction to Webix
======================

Including Library
----------------
 
1 . Create a simple HTML page. Specify **HTML5** doctype for it.

2 . Install Webix for your future app. There can be several ways:

#### Use CDN

Include 2 Webix files (**webix.js** and **webix.css**) directly from Webix CDN 

~~~html
<!DOCTYPE HTML>
<html>
    <head>
    <link rel="stylesheet" href="http://cdn.webix.com/edge/webix.css" type="text/css"> 
    <script src="http://cdn.webix.com/edge/webix.js" type="text/javascript"></script>  
    </head>
    <body>
        <script type="text/javascript" charset="utf-8">
 
        // here your app will "take shelter"

        </script>
    </body>
</html>
~~~

If you need to get one of the older Webix versions, you should include the necessary number of the version
into the links to the code files:

~~~html
<link rel="stylesheet" href="http://cdn.webix.com/2.2/webix.css" type="text/css"> 
<script src="http://cdn.webix.com/2.2/webix.js" type="text/javascript"></script> 
~~~

This variant is suitable only for the Webix version distributed under GPL.

#### Use Bower/NuGet/NPM

Install local Webix files via **NuGet**, **Bower** or **NPM** package managers by a single command. You don't need to download anything.

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

These two variants are suitable only for the Webix version distributed under GPL.

{{snippet
NPM
}}
~~~js
npm install webix
~~~

You can use this way to install both GPL and PRO Webix versions. 

If you have commercial Webix license, you need to enter [Webix Client area](https://webix.com/clients/#!/login) -> Users, to get npm access.

#### Download Webix package

Download and unzip the library to the necessary directory. Include **webix.js** and **webix.css** files into the document's head section.

~~~html
<!DOCTYPE HTML>
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



## UI initialization

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

Next we'll declare base elements, create the app layout and finally nest it with UI components.


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
- the second row will contain one more layout with 3 columns


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

We'll put a template that will serve as the application's header into the first row.


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



6 . It's high time to place components into the second row. The 3 columns of the second row will be occupied by Tree and DataTable components and a resizer line between them:

~~~js
webix.ui({
  container:"app_here",
  rows:[
     { type:"header", template:"My App!" },
     { cols:[
      { view:"tree", id:"mytree", gravity:0.3, select:true, data:tree_data },
      { view:"resizer" },
      { view:"datatable", id:"mydatatable", autoConfig:true, data:small_film_set }
    ]}
     ]
});
~~~

Let's look at the above code in detail:


- one of the key properties of any component and any item is its **ID**, the unique string or number that helps us refer to the object. **ID** 
should be specified if you are going to work with this component/item later as all functions are applied and events are attached to the component through its ID; 
- the **gravity** parameter sets relative size proportions for the elements within the common parent container;
- the **select** property enables item selection in the tree; 
- the **data** parameter defines the data source for the component;

We use JSON in the sample, so the items of the tree_data dataset look like this:

~~~js
[
  { id: "1", type: "folder", value: "Music", css:"folder_music", data:[..child items..]},
    ...
]
~~~

The grid_data dataset includes data items in the next mode:

~~~js
[
  { id:1, title:"The Shawshank Redemption", year:1994, votes:678790, rating:9.2, rank:1},
    ...
]
~~~
- the **autoConfig** property creates columns of datatable on the basis of data properties. Headers of columns are based on property names in dataset.


7 . At the last step we'll illustrate the usage of ids. In order to refer to a component the following structure should be used - **$$("id")**.<br>
We will use the Tree method api/link/ui.tree_open.md to open the tree branches and the DataTable method api/ui.datatable_select.md to select the first item of the datatable.

~~~js
webix.ui({
  container:"app_here",
  rows:[
     { type:"header", template:"My App!" },
     { cols:[
      { view:"tree",id:"mytree", gravity:0.3, select:true, data:tree_data },
      { view:"resizer" },
      { view:"datatable", id:"mydatatable", autoConfig:true, data:grid_data }
    ]}
  ]
});

$$("mytree").open(1);
$$("mytree").open(2);

$$("mydatatable").select(1);
~~~

The ready app is presented in the following picture:

<img src='tutorials/simple_app.png'></img>

You can check the live demo and play with code by the next link [http://webix.com/snippet/eadf0190](http://webix.com/snippet/eadf0190)

See also 

 - [Interactive step-by-step tutorial](http://webix.com/quick-start/introduction.html)
 - [Interactive DataTable tutorial](http://webix.com/quick-start/datatable.html)
 - [Interactive Form tutorial](http://webix.com/quick-start/controlsguide.html)
 
 
@complexity:1