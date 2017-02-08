Backbone Views
===============

{{note This feature is fully optional, you can safely initialize Webix in any HTML container, so normal Backbone views will work fine enough.  }}


### Creating View

To create a new View you can use the next code:

~~~js
var myview = new WebixView({
   el:".app1_here",
   config:{
      rows:[
      	{template:"ABC"},
        {cols:[...]},
        {view:"some"}
      ]
   }
});
~~~

- **el** - HTML locator or HTML node of the element in which a view needs to be rendered;
- **config** - Webix UI configuration.

To render view somewhere on the page you should call:

~~~js
myview.render();
~~~

{{sample 30_backbone/01_view.html}}

###Isolating Views

It's a good practice to **isolate** backbone views that are comprised of several Webix views so that you can use same IDs in another Backbone view on the page:

~~~js
var ui_config={
	isolate:true, rows:[
		{template:"ABC", id:"abc"},
        {cols:[...]},
        {view:"some"}
    ]
};

var firstview = new WebixView({
   el:".app1_here",
   config: ui_config
});

var secondview = new WebixView({
   el:".app2_here",
   config:ui_config
});
~~~

Each Backbone view has a template with *abc* ID, but since config features an *isolate* property you can still refer to the necessary template (for instance in view functions that refer to these components). 

You can also render any Webix view directly into an HTML element: 

~~~js
$(".app1_here").webix_list({
	id:"mylist", width:200, //config
	template:"#title#", select:true
});
~~~

{{sample 30_backbone/03_load_collection.html }}

### Predefined methods of view

WebixView is an instance of Backbone.View. 

There is a few methods that are already implemented in views created with this constructor:

- **render()** - renders the view;
- **destroy()** - calls the view destructor;
- **getRoot()** - get the top Webix control in the view;
- **getChild(id)** - get the child Webix control by its ID.

### Nesting HTML view into Webix view

You can define a template view, and later render there a normal Backbone View by using the code like next:

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

- **getChild** method is used here to get layout child with "left" ID;
- **setContent(content)** method of Webix view is used here to attach Backbone View to template.

{{sample 30_backbone/02_nested_views.html }}

### Nesting Webix view into another Webix view

Similar to the method above, you can render a Webix view as layout child view with the code like next:

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

The place where a UI component need to be attached is defined through "el". New view (*v3*) will replace the child of *v1* view. 

### Extending View

Same as with Backbone View you can extend WebixView:

~~~js
MyView = WebixView.extend({
    config:{
       view:"list", url:"data.json"
    },
    afterRender:function(){ ...},
    beforeRender:fucntion(){ ...}
    someMethod:function(){ ...}
});

var view1 = new MyView({ el : "areaA" });
~~~

There are 2 special methods that can be defined in such way:

- **beforeRender()** - will be called during rendering before creating a Webix view;
- **afterRender()** - will be called during rendering when Webix view is already created. It's a good place to **define event handlers** for Webix components of this Backbone view or **load collection data**.

And at the same time you can add you custom methods here. 

~~~js
MyView = WebixView.extend({
	config:{
    	rows:[
   	 		{view:"list", id:"mylist", ..},
            {view:"template", id:"details", ..}
        ]
    },
	afterRender:function(){
    	//adding a handler to list selection
		this.getChild("mylist").attachEvent("onAfterSelect",_.bind(this.listSelected,this));
		//syncing view data with collection
		this.getChild("mylist").sync(this.options.collection);
	},
	listSelected:function(id){ 
		this.getChild("details").parse({ "id": id });
	}
});
~~~

{{sample 30_backbone/05_views_models.html }}

Webix event handling pattern is described in the corresponding [documentation article](desktop/event_handling.md). 

