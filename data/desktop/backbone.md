Backbone Integration 
============

**Backbone.js** is a lightweight Javascript framework that allows for adding structure to client-side code in the MVC pattern. Backbone works in conjunction with its hard-weight dependency, **Underscore.js**, 
the utility library that provides a lot of the functional programming support and contains a number of functions as well as specialized helpers for function binding, javascript templating,and so on. 

Backbone is based on the **MVC principle** that translates as Model, View and Controller classes where:

### Bonuses of Backbone usage: 

- The approach used in the framework helps get rid of unstructured 'Spaghetti' code in your applications;
- All the changes are performed on Models. The corresponding views respond to these changes are re-render themselves according to the new info, which eliminates the need of either looking through the DOM structure to
find the necessary ID or update HTML manually;
- Tasks are clearly divided between application parts;
- RESTful API (Representational state transfer). 

To get the profound knowledge of the framework, go to the <a href="http://www.backbonejs.org">Backbone.js homepage. </a>

## How it can be used

Webix and Backbone can be cross-integrated on multiple levels

- Webix components can load data from backbone collection, check desktop/backbone_collections.md for more details
- Webix components can be wraped in a Backbone Views, check desktop/backbone_views.md for more details
- visibility of Webix Components can be controlled by Backbone router, check desktop/backbone_routers.md for more details

## Example of usage

To integrate Backbone framework into your webpage your should set links to it the same way you did it with this library (into the document head). Be attentive to specify the right relative paths to the places where the files
are stored on your machine. The important point - library need to be included BEFORE webix.js: 

~~~html
	<head>
		<link rel="stylesheet" href="../../codebase/webix.css" type="text/css" media="screen" charset="utf-8">
		
		<script type="text/javascript" src="./.../jquery.js"></script>
		<script type="text/javascript" src="./.../underscore.js"></script>
		<script type="text/javascript" src="./.../backbone.js"></script>
		<script type="text/javascript" src="../../codebase/webix.js"></script>

		<title>Backbone integration</title>
	</head>
~~~


### Defining View

Instead of warking with raw webix configuration we can create a View similar to normal Backbone View

~~~js
var view  = new WebixView({
	el: document.body,
	config:{
		view:"list", template:"#title#"
	}
});
~~~

### Creating a Model

~~~js
FilmRecord = Backbone.Model.extend({});
FilmList = Backbone.Collection.extend({
	model: FilmRecord,
	url:"./common/data.json"
});
~~~

### Rendering the view

Now, when we have a view and model we can render our page
~~~js
//get data
var list = new FilmList();
list.fetch();

//render view
view.render();
view.getRoot().sync(list);
~~~

{{sample 30_backbone\03_load_collection.html }}

### Conclusion
Above code renders View and fill it from collection of Models. As you can see it forms bettwen Backbone code and Webix components. 

Need to say, the above scenario is not the only way to use Webix and Backbone together. Check the below docs for more details. 

## Working with Backbone.js

- [Loading from Backbone Collections](desktop/backbone_collections.md)
- [Using webix in Backbone Views](desktop/backbone_views.md)
- [Working with Backbone Routers](desktop/backbone_routers.md)


@index: 
  - desktop/backbone_collections.md
  - desktop/backbone_views.md
  - desktop/backbone_routers.md

@complexity:3