Backbone Integration 
============

**Backbone.js** is a lightweight Javascript framework that allows for adding structure to client-side code in the MVC pattern. Backbone works in conjunction with its hard-weight dependency, **Underscore.js**, 
the utility library that provides a lot of the functional programming support and contains a number of functions as well as specialized helpers for function binding, javascript templating,and so on. 

Backbone is based on the **MVC principle** that translates as Model, View and Controller classes where:

- **Model** is a code that retrieves and populates the data. It features key-value building and custom events;
- **View** is an HTML representation of this or that Model. It responds to all the changes that occur within the Model;
- **Controller** that allows you to save the state of your javascript application via a hashbang url;
- in this framework you also get acquainted with **Collection** class, an ordered set of Models. Typically, any Collection uses one type of Model while one and the same Model can belong to many Collections.

##Bonuses of Backbone usage: 

- The approach used in the framework helps get rid of unstructured 'Spaghetti' code in your applications;
- All the changes are performed on Models. The corresponding views respond to these changes are re-render themselves according to the new info, which eliminates the need of either looking through the DOM structure to
find the necessary ID or update HTML manually;
- Tasks are clearly divided between application parts;
- RESTful API (Representational state transfer). 

To get the profound knowledge of the framework, go to the <a href="http://www.backbonejs.org">Backbone.js homepage. </a>

##Backbone Linking

To integrate Backbone framework into your webpage your should set links to it the same way you did it with this library (into the document head). Be attentive to specify the right relative paths to the places where the files
are stored on your machine: 

~~~html
	<head>
		<link rel="stylesheet" href="../../codebase/webix.css" type="text/css" media="screen" charset="utf-8">
		<script src="../../codebase/webix.js" type="text/javascript" charset="utf-8"></script>

		<script type="text/javascript" src="./.../jquery.js"></script>
		<script type="text/javascript" src="./.../underscore.js"></script>
		<script type="text/javascript" src="./.../backbone.js"></script>

		<title>Backbone integration</title>
	</head>
~~~

##Backbone Implemention

###1 . Builiding App Architecture

Here we resort to webix means. Notice that the first column contains standard webix object while the second one is made with the help of Backbone intergation: 

~~~js
webix.ui({
	cols:[
		{ // 1st col
         template:"<h3>#name#</h3><li>Size: #size#</li><li>Age: #age#</li>", 
         data:{name:"Borg Alpha", size:35, age:12}
         },
		{ // 2nd col
        css:{"text-align":"center"}, 
        view:"template", // the view will be described in frames of a Backbone view
        id:"center"  // the ID backbone view will refer to
        }                      
 	 ]
  });
~~~

###2 . Creating a Model - View Pattern 

Model and View classes are created by extending **Backbone.Model** or **Backbone.View** respectively. On this stage you can (optionally) specify public methods for the classes (*initialize* and *render* being the most popular ones). 

{{snippet
Creating a Model 
}}
~~~js
var BorgItem = Backbone.Model.extend({});  

//here we've got the model for data storage. No additonal methods are defined. 
~~~

{{snippet
Creating a View 
}}
~~~js
	var BorgView = Backbone.View.extend({
		el:$$('center').$view,
		template:_.template("<h3><%= name %></h3><li>Size: <%= size %></li><li>Age: <%= age %></li>"),
		render:function(model){
				var html = this.template(model.toJSON());
				$(this.el).html(html); 
					}
				});
~~~
 
Comments: 

 - the element (**el**) defines the DOM element with ID "center";
 - **_.template** is compiled using Underscore functionality. Hash signs are replaced with < %=percent signs%>, html tags are possible ( here it is < li >); 
 - **render** method renders view template from model data and updates *this.el* with new HTML.
 
 ### 3 . Rendering View Instance into HTML
 
~~~js
	var view = new BorgView(); //creating an instance of a Borgview View
    
	view.render(new BorgItem({  //populating this instance with data from the BorgItem model
					name:"Borg Alpha",
					size:35,
					age:12
				}));
 
~~~

####Conclusion:

All in all it works like this: 

You create a **BorgItem** Model object that later populates the instance of **BorgView** view with the data. In the BorgView constructor you specify DOM element to render the view to as well as the data source.

{{sample 30_backbone/01_view.html }}

##Working with Backbone.js

- [Creating Backbone Collections](desktop/backbone_collections.md)
- [CRUD Operations with Backbone Integration](desktop/backbone_crud.md)
- [Working with Backbone Routers](desktop/backbone_routers.md)


@index: 
  - desktop/backbone_collections.md
  - desktop/backbone_crud.md
  - desktop/backbone_routers.md

@complexity:3