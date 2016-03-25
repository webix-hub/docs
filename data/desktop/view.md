View
=============
View is a base class for all the ui-related components. It's a place where you put them before working. A pure view doesn't contain
any information yet it may come with borders.

View performs a function of a placeholder to the layout components and layout itself. All of them are initialized according to the following scheme:

~~~js
webix.ui({
	view:"dataview",
    ...
});
~~~

##View ID

Views themselves can be put into other views thus creating a complex app structure with parent and child components. Any view features its unique **ID**
 that differentiates it from other views in the application: 

{{snippet
Default ID
}}
~~~js
var layout = webix.ui({
	rows:[
		{view:"list", ...}, //gets "$list1" ID
        {view:"list", ...} //gets "$list2" ID
    ]
});
~~~

Then, you can get the objects of these views as: 

~~~js
//getting list 1 object
var list1 = layout.getChildViews()[0]; 
..or
var list1 = $$("$list1");

//getting list 2 object
var list2 = layout.getChildViews()[1]; 
..or
var list2 = $$("$list2");
~~~

Still, it's much more convenient to define custom "speaking" IDs to the views. 

{{snippet
Custom ID
}}
~~~js
webix.ui({
	id:"lists",
	rows:[
		{view:"list", id:"order-list"}, 
        {view:"list", id:"data-list"} 
    ]
});
~~~

Then, you can get the objects of these views as: 

~~~js
//getting list 1 object
var list1 = $$("lists").getChildViews()[0]; 
..or
var list1 = $$("$order-list");

//getting list 2 object
var list 2 = $$("lists").getChildViews()[1]; 
..or
var list2 = $$("$data-list");
~~~

Working within several views you can refer to the components with respect to their hierarchy or by using the view's unique ID. 

**Note that:**	

- Using auto-generated IDs is unsafe as they may change dynamically;
- The ID of any component can be found in its object as **view.config.id**;
- View IDs are reflected in HTML as a **view_id** attribute of a topmost div of a component;

##Empty View

Views can as well be **empty**. An empty view is two braces **{}** you put between meaningful components to leave space between them. 

{{snippet
Spacer between buttons on toolbar
}}
~~~js
webix.ui({
	view:"toolbar", cols:[
    	{view:"button", value:"but1" },
        {},
        {view:"button", value:"but2"}
    ]
})
~~~

##Views in HTML

Views can be placed into **HTML containers** and take the dimensions of these containers (if any)

~~~js
//body section
<div id="mylayout" style="width:600px;height:400px;"></div> 

//script section
webix.ui({
	view:"layout",
    container:"mylayout",
    rows:[...]
	...
});
~~~

##Basic View Methods

###1 . getParentView() & getTopParentView()

The method is called from any view and is used to get the parent object of this view. 

~~~js
webix.ui({
	view:"layout", id:"my_layout", rows:[
		{view:"toolbar", id:"my_Bar", cols:[
    		{view:"button", id:"my_button", ..}
    	]},
        {view:"template", ...}
     ]
});

var t = $$("my_button").getParentView(); //  returns toolbar object 
var l = $$("my_button").getTopParentView(); //  returns layout object 
~~~

###2 . getFormView()

The method returns an object of a **parent form** for the control it is called for. It's especially useful in case of complex forms:

~~~js
webix.ui({
	view:"form", id:"my_form", elements:[
		{view:"text"},
        {cols:[
    		{view:"combo", id:"my_combo", ..}
    	]},
        {view:"checkbox", ...}
     ]
});

$$("my_combo").getFormView(); //returns "my_form" object
~~~

###3 . getChildViews()

This method, on the contrary, returns, an array of all the children of the calling component. Array members are numbered starting from 0. 

For instance, if you have a toolbar within the layout and the toolbar itself comes with three buttons, the function will return the following: 

~~~js
var bar_id = $$("my_layout").getChildViews()[0].config.id; //toolbar ID

var but_id = $$("my_toolbar").getChildViews()[1].config.id //ID of the 2nd button
~~~

###4 . index() 

Like the above mentioned one, this method works with views containing other views that are stored in an array ( the property may be called *cols, rows, elements, options* depending on the component).

Getting the view's index means getting its position in the array (zero-based numbering.) Method is called from the parent view and takes the ID of the necessary child view as parameter. 

~~~js
webix.ui({
	rows:[
    	{id:"cell1", view:"list", ...},
        {id:"cell2", view:"form", ...},
        {id:"cell3", view:"dataview", ...}
    ]
});

$$("mylayout").index($$("cell1")); //-> returns 0 for the 1st array element
~~~

###5 . getNode()

The method helps us get an HTML container of the component. 

~~~js
<div id="my_box"></div>
...
webix.ui({
	view:"toolbar", id:"my_bar", ...
});
   
var box = $$("my_bar").getNode; 
~~~

###6 . getInputNode()

The method works with form controls  defined by **input** tag in HTML, the simplest being [text](desktop/text.md). It returns DOM element related to the input with all its properties. 

~~~js
{view:"form", elements: [
 	{ view:"button", id:"b1", value:"Login", type:"form" },
 	{...}
]}
 
$$("b1").getInputNode();//-> <input type="button" style="height:27px; width:149px" value="Login">
~~~

Dimensions here are library defaults for the button. 

See the [corresponding chapter](api__refs__ui.view.html) of API Reference to learn about view's methods, parameters and events. 