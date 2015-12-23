Dynamic UI Modifications
=========================

Webix lib offers several ways to alter the already initialized layout: 

- you can **add any view** to the existing layout, including complex views that have a number of child components;
- you can **remove any view** from existing layout;
- you can **reconfigurate** layout-like comopnent by passing an array of new children views to it;
- you can **replace** any view in layout by another view. 

Let's consider these possibilities in detail:

Adding/Removing Views Dynamically
---------------------------------

You can add and remove components dynamically after you've already initialized layout and set some components. It works for:

- [layout](desktop/layout.md) rows and cols;
- [multiview](desktop/multiview.md) cells;
- [accordion](desktop/accordion.md) and [carousel](desktop/carousel.md) panels;
- [toolbar](desktop/toolbar.md) controls;
- [form](desktop/form.md) controls.
	
Adding and removing views is implemented with the help of the **addView()** and **removeView()** methods. 

###Adding View

To add the new view (layout row and column, multiview cell, accordion panel, as well as any toolbar or form control) - specify the **view object** and **position** to insert. 

{{snippet
Adding a button to the toolbar
}}
~~~js
var id = $$("toolbar").addView({
	view:"button", value:"new button", 
}, index);
~~~

**Index** defines position where the new component or control should be inserted among the children of the parent component. It can be 

- first (index 0);
- last (index -1);
- any. Index of any view can be derived with the help of [index](api/ui.baselayout_index.md) method that can be called for layout-like Webix components ([layout](desktop/layout.md), [multiview](desktop/multiview.md),
[accordion](desktop/accordion.md), [carousel](desktop/carousel.md), [form](desktop/form.md), [toolbar](desktop/toolbar.md)). 

{{snippet
Adding View
}}
~~~js
webix.ui({
	id:"layout1",
	rows:[
    	{view:"text", id:"text1"},
    	{view:"button", value:"Add View", click:addView}
    ]
});

var pos = $$("layout1").index($$("text1"));
$$("layout1").addView({view:"text", id:"text2"}, pos);
~~~

{{sample 13_form/02_api/05_add_view.html}}

The newly added view can be sized during adding according to [common rules](desktop/dimensions.md) as well as later on via [property (re)defining](desktop/redefinition.md).

###Removing View

**removeView()** method removes components from layouts and is called from the parent component to remove any of its children. The method takes a child **view object** or its **id** as an argument. 

{{snippet
Removing a button from the toolbar
}}
~~~js
$$("toolbar").removeView(id);
~~~

{{sample 13_form/02_api/05_add_view.html }}

Rebuilding Application Layout
--------------------------------

Here we look at advanced possibilities of [webix.ui()](api/_ui.md) method. 

Besides its main purpose - instantiation of Webix component, it method can also be used for changing layout provided that additional params are passed to it. 

All in all, its parameters include:

- **configuration object** - (object, array) - a JSON object with the application config of any level of complexity;
- **parent element** - (id or object) - Webix component that acts as a parent to an object you are going to init (first param);
- **replacement object** -(id, index or object)- Webix component in a parent object that will be replaced by an object you are going to init (first param).

Thus *webix.ui()* constructor can be used to:

- **redraw layouts** ([layout](desktop/layout.md), [multiview](desktop/multiview.md), [form](desktop/form.md), [accordion](desktop/accordion.md)) that feature arrays in their structure:

~~~js
webix.ui({
	view:"form", id:'myform', elements:[...]
});

//redraw form with new elements
webix.ui([..new elements..], $$('myform'));
~~~

{{sample 01_layout/13_reconfiguration.html}}

- **replace** any existing object:

~~~js
webix.ui({
	id:'mylayout',
	rows:[
    	{view:'toolbar', ...},
    	{view:'datatable', id:'mydatatable' ...},
    ]
});

//replace datatable
webix.ui({..new config..}, $$('mylayout'), $$('mydatatable'));
~~~

{{sample 01_layout/13_reconfiguration.html}}

Reloading layout from the server
---------------------------------

To load a new configuration from the server - you can use the following technique:

~~~js
webix.ajax("config.json", function(text){
    webix.ui(webix.DataDriver.json.toObject(text), $$('mylayout'), $$('mydatatable'));
});
~~~

where the *config.json* contains the new configuration.