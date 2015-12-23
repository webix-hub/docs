Working with Backbone Routers
===========================

Take that you have a [list](desktop/list.md) and a [template](desktop/template.md) and you want to show either one or another by clicking on their elements. 
There you can have different patterns depending on how you init the components:

- [Backbone Router for pure Webix Views](#webix)
- [BackBone Router for Backbone-integrated Views](#backbone)
- [BackBone Router for Updating Layout Sections](#layout)

## Backbone Router for pure Webix Views {#webix}

To create a UI we can use a Webix code like next:

~~~js
webix.ui({
  container:"app1_here", rows:[
	 {template:"Click on item", type:"header" },
	 {cells:[
	   {view:"list", url:"data.json", template:"#title#", select:true, id:"mylist"},
	   {template:"<button onclick='history.back()'>Back</button>", id:"details" }
	]}
  ]
});
~~~

Now, let's create a **Backbone Router**. 

~~~js
var routes = new (Backbone.Router.extend({
	routes:{
		"":"index", 
		"films/:id":"details" //details() f-n is triggered
	},
	details:function(id){
		$$("details").show(); //it shows template with film details
	},
	index:function(){
		$$("mylist").show();
	}
}));
~~~

As you can see the router shows the necessary view based on current document URL. After switching to "details" template, the application receives a hashbang url *localhost/myapp.html#films/id* 
to show in it the ID of a currently selected list item.

To have the app working we need to add a few extra lines of code:

~~~js
$$("mylist").attachEvent("onAfterSelect", function(id){  //navigation rule
	routes.navigate("films/"+id, { trigger:true }); 
});
Backbone.history.start(); //router starts memorizing its steps
~~~

{{sample 30_backbone/06_routes_webix.html}}

These lines define the **navigation rule** after selecting an item in the list and **starts the router**.  Template, in its turn, uses an existing router and makes a **step back** on button click (look at its code above).

## BackBone Router for Backbone-integrated Views {#backbone}

Now lets try to recreate the same app, but stick closer to the native Backbone approach. Instead of creating Webix UI directly, lets define Backbone-Webix integrated views for both states:

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
	el:"#app1_here", //the same element as above
    tagName: "div",
	render: function(){
        $(this.el).html("<button onclick='history.back()'>Back</button>");
    },
});
var template = new DView();
~~~

Now a router looks a bit more different: 

~~~js
var routes = new (Backbone.Router.extend({
	routes:{
		"":"index", 
		"films/:id":"details" //details() f-n is triggered
	},
	details:function(id){
		template.render(); //it renders the template into its "el"
	},
	index:function(){
		layout.render(); //rendereing layout back
        //attaching select event after rendering 
		$$("mylist").attachEvent("onAfterSelect", function(id){
			routes.navigate("films/"+id, { trigger:true });
		});
	}
}));
~~~
{{sample 30_backbone/07_routes_views.html}}

Instead of switching between views in Webix layout we are rendering different Backbone Views into one and the same element depending on current state. Still, the resulting behavior is the same. 

Yet, the router should be triggered separately at once after the app has been initialized:

~~~js
//init app
Backbone.history.start();
~~~

### Updating Layout Section {#layout}

When using views we can update not only the top view, but any section of Webix [layout](desktop/layout.md) in it.

Lets create 3 views, one is layout while the two others (list and template) are children of this layout. They will be shown in this layout in different cases:

~~~js
var template = new WebixView({
	config:{ template:"<button onclick='history.back()'>Back</button>" }
});
var list = new WebixView({
	config:{
		view:"list", url:"common/data.json",
		template:"#title#", select:true,
		id:"mylist"
	}
});
//layout wil Webix config
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

The router for such pattern is as follows:

~~~js
var routes = new (Backbone.Router.extend({
	routes:{
		"":"index", 
		"films/:id":"details"
	},
	details:function(id){
    	//setting node for template as layout child view 
		template.el = layout.root.getChildViews()[1]; 
		template.render();
	},
	index:function(){
    	//setting node for list as layout child view 
		list.el = layout.root.getChildViews()[1];
		list.render();
		$$("mylist").attachEvent("onAfterSelect", function(id){
			routes.navigate("films/"+id, { trigger:true });
		});
	}
}));
~~~

The code above locates the necessary cell in the layout and renders the needed view into the target cell. 

{{sample 30_backbone/08_routes_layout.html}}
