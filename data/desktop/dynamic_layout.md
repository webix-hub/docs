Adding/Removing Views Dynamically
===============

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
