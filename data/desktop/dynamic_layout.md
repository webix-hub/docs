Dynamic UI Modification
=========================

Adding/Removing Views Dynamically
---------------------------------

You can add and remove components dynamically after you've already inited layout and set some components. It works for:

- **layout** rows and cols;
- **multiview** cells;
- **accordion** and **carousel** panels;
- **toolbar** controls;
- **form** controls.
	
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


The newly added view can be sized during adding according to [common rules](desktop/dimensions.md) as well as later on via [property (re)defining](desktop/redefinition.md).

###Removing View

**removeView()** method removes components from layouts and is called from the parent component to remove any of its children. The method takes a child **view object** or its **id** as an argument. 

{{snippet
Removing a button from the toolbar
}}
~~~js
$$("toolbar").removeView(id);
~~~

Rebuilding Application Layout
--------------------------------

Besides its main purpose - instantiation of Webix component, [webix.ui](helpers/top_ten_helpers.md) method can also be used for changing layout. 
Thus, it can be used to:

- **redraw layouts** (layout, multiview, form, accordion) that feature arrays in their structure:

~~~js
webix.ui({
	view:"form", id:'myform', elements:[...]
});

//redraw form with new elements
webix.ui([..new elements..], $$('myform'));
~~~

- **replace** any existing object:

~~~js
webix.ui({
	id:'mylayout',
	rows:[
    	{view:'toolbar', ...}
    	{view:'datatable', id:'mydatatable' ...},
    ]
});

//replace datatable
webix.ui({..new config..}, $$('mylayout'), $$('mydatatable'));
~~~

In this case **webix.ui()** takes the following **parameters**:

- component configuration (JSON object);
- parent component ID;
- ID or index of the component being replaced.

BTW, if you don't specify the ID for the component, it will be generated automatically. You can always get the component ID  by using:

~~~js
var id = component.config.id;
~~~


Reloading layout from the server
---------------------------------

To load a new configuration from the server - you can use the following technique:

~~~js
webix.ajax("config.json", function(text){
    webix.ui(webix.DataDriver.json.toObject(text), $$('layout_id'));
});
~~~

where the config.json contains the new configuration.