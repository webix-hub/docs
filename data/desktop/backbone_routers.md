Working with Backbone Routers
===========================

## BackBone Router - Webix Way

Take that you have a list and a template and you want to show one or another based on the app state. 
To create a UI we can use a Webix code like next:

~~~js
webix.ui({
	container:"app1_here", rows:[
		{ template:"Click on item", type:"header" },
		{
			cells:[
				{ view:"list", url:"common/data.json", template:"#title#", select:true, id:"mylist"},
				{ template:"Details page<br>not implemented :)<br><button onclick='history.back()'>Back</button>", id:"details" }
			]
		}
	]
});
~~~

Now, let's create a **Backbone Router**. 

~~~js
var routes = new (Backbone.Router.extend({
	routes:{
		"":"index", 
		"films/:id":"details"
	},
	details:function(id){
		$$("details").show();
	},
	index:function(){
		$$("mylist").show();
	}
}));
~~~

As you can see the router shows the necessary view based on current document url. To have app working we need to add few more lines of code

~~~js
$$("mylist").attachEvent("onAfterSelect", function(id){
	routes.navigate("films/"+id, { trigger:true });
});
Backbone.history.start();
~~~
{{sample 30_backbone/06_routes_webix.html}}

Those lines defines the navigation rule, after selecting item in the list and starting the router.  
That is all. With few lines of code we have attached backbone router to the Webix View

## BackBone Router - Backbone Way

Now lets try to recreate the same app, but more similar to the native Backbone approach. Instead of creating Webiv UI directly, lets define a Views for both states

~~~js
var layout = new WebixView({
	el:"#app1_here",
	config:{
		rows:[
			{ template:"Click on item", type:"header" },
			{
				view:"list", url:"common/data.json",
				template:"#title#", select:true,
				id:"mylist"
			}
		]
	}
});

DView = Backbone.View.extend({
	el:"#app1_here",
    tagName: "div",
	render: function(){
        $(this.el).html("Details page<br>not implemented :)<br><button onclick='history.back()'>Back</button>");
    },
});
var template = new DView();
~~~

Now router will look a bit more different 

~~~js
var routes = new (Backbone.Router.extend({
	routes:{
		"":"index", 
		"films/:id":"details"
	},
	details:function(id){
		template.render();
	},
	index:function(){
		layout.render();
		$$("mylist").attachEvent("onAfterSelect", function(id){
			routes.navigate("films/"+id, { trigger:true });
		});
	}
}));
~~~
{{sample 30_backbone/07_routes_views.html}}

Instead of switching the active view in Webix Layout, we are rendering different Backbone View based on current state. Still - the result behavior is the same. 


### Updating section of layout

When using Views we can update not only top View, but some section in Webix Layout

Lets create 3 View, one will be used as layout, two others - sections which can be shown in our layout in different cases

~~~js
var template = new WebixView({
	config:{ template:"Details page<br>not implemented :)<br><button onclick='history.back()'>Back</button>" }
});
var list = new WebixView({
	config:{
		view:"list", url:"common/data.json",
		template:"#title#", select:true,
		id:"mylist"
	}
});
var layout = new WebixView({
	el:"#app1_here",
	config:{
		rows:[
			{ template:"Click on item", type:"header" },
			{ }
		]
	}
});
~~~

Now router will look like next

~~~js
var routes = new (Backbone.Router.extend({
	routes:{
		"":"index", 
		"films/:id":"details"
	},
	details:function(id){
		template.el = layout.root.getChildViews()[1];
		template.render();
	},
	index:function(){
		list.el = layout.root.getChildViews()[1];
		list.render();
		$$("mylist").attachEvent("onAfterSelect", function(id){
			routes.navigate("films/"+id, { trigger:true });
		});
	}
}));
~~~

Above code locates necessary cell in the layout and renders the View in the target cell. 

{{sample 30_backbone/08_routes_layout.html}}
