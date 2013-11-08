Backbone Views
===============

{{note This feature is fully optional, you can safely init webix in any html container, so normal backone views will work fine enough.  }}


### Creating View

To create new View you can use

~~~js
var myview = new WebivView({
   el:"some",
   config:{
      template:"ABC"
   }
});
~~~
{{sample 30_backbone/01_view.html}}

Where

- el - html locator or html node of element in which view need to be rendered
- config - webix ui configuration

To render view somewhere on the page you need to call

~~~js
myview.render();
~~~

WebixView is an instance of Backbone.View

### Predefined methods of view

There are few methods which already implemented in view 

- render - renders the view
- destroy - calls the view destructor
- getRoot() - get the top webix control in the view
- getChild(id) - get the child webix control by its ID

### Extending View

Same as with Backbone View you can extend WebixView

~~~js
MyView = WebixView.extend({
    config:{
       view:"list", url:"data.json"
    },
    afterRender:function(){
       this.getRoot().attachEvent("onAfterSelect", function(id){
             alert(id);
       });
    }
});

var view1 = new MyView({ el : "areaA" });
var view2 = new MyView({ el : "areaB" });
~~~

You can predefine config, or add any custom methods to the view. 
There are 2 special methods which can be defined in such way

- beforeRender - will be called during rendering, before creating a webix ui
- afterRender - will be called during rendering, when webix ui is already created


### Nesting HTML view in Webix view

You can define template view, and later render there a normal Backbone View by using code like next

~~~js
//webix ui config
var ui_config ={
	isolate:true, type:"wide", rows:[
		{ template:"top", height:35 },
		{ type:"wide", cols:[
			{ template:"left", id:"left" },
			{ template:"center", id:"center" },
			{ template:"right", id:"right" }
		]},
		{ template:"bottom", height:35 }
	]
};

//create top level view
var v1 = new WebixView({
		config: ui_config,
		el: ".app1_here"
	});
	v1.render();

//html child view
cView = Backbone.View.extend({
    tagName: "h2",
	render: function(){
        $(this.el).html("Child View");
    },
});

//create child view
var v2 = new cView();
	v2.render();
	v1.getChild("left").setContent(v2.el);
~~~

setContent method of webiv ui is used to attach Backbone View to template

{{sample 30_backbone/02_nested_views.html }}

### Nesting Webix view in other Webix view

Similar to above , you can render a Webiv view as child view with code like next

~~~js
//create top level view
var v1 = new WebixView({
		config: ui_config,
		el: ".app1_here"
	});
	v1.render();

//create child webix view
var v3 = new WebixView({
		config: ui_config,
		el:v1.getChild("right")
	});
	v3.render();
~~~

{{sample 30_backbone/02_nested_views.html }}

Place where ui component need to be attached is defined through "el". New view will replace the target component. 