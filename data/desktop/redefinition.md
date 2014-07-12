Changing Properties of Components
=================

###Defining New properties

The properties of Webix components can be changed after initialization each time the **define()** method is applied to them. 
It takes the following arguments:

- a **component's property** you want to change;
- the **new value** for this property as arguments. 

The method can be applied to any object pointed to by its ID: 

~~~js
//loads new data to the list
$$("mylist").define("url", "new_data.xml");
 
//sets new height for the list
$$("mylist").define("height", 300);
 
//changes the label of the button
$$("button1").define("label", "New value");
~~~

The method as well takes **hash** of **property-value** pairs to change multiple properties at once: 

~~~js
//set new data and height for the list
$$("mylist").define({
	url: "new_data.xml",
	height: 300
});
~~~

###Applying Property Changes

In order that new properties came into force, you should apply either of these methods to the redefined component:

- **refresh()** - used to repaint a single component and doesn't affect page structure. It's used for data-containing components ([list](desktop/list.md), [datatable](datatable/index.md), [chart](desktop/chart.md) etc. 
and all [controls](desktop/controls.md)).
- **reconstruct()** - used to rebuild the component that affect page structure. It concerns components that build application layout and house other components and control: 
[layout](desktop/layout.md), [multiview](desktop/multiview.md), [accordion](desktop/accordion.md), [carousel](desktop/carousel.md), [form](desktop/form.md) and [toolbar](desktop/toolbar.md). 

~~~js
$$("layout").define("rows", [ {view:"button", ...}, {view:"label", ...} ]);
$$("layout").reconstruct();
~~~

- **resize()** - adjusts a component to the new size. 

###Changing the Component's Config

The desired configuration parameter can be accessed and changed through the **config** property as well. 

~~~js
//reading height
var height = $$("myList").config.height;
//setting new height
$$("myList").config.height = 400;
$$("muList").resize();
~~~

Changing component properties via config comes handy when getting and setting values for **component items** that are stored in an **array** that is a property itself. 

{{snippet
Defining width of a datatable column
}}
~~~js
webix.ui({
	view:"datatable",
    id:"mytable",
	columns:[
		{ id:"col_1", header:"Film title",width:200},
        { id:"col_2", header:"Released" , width:80}]
        })
//reading 1st column width 
var colWidth = $$("mytable").config.columns[0].width; // 200

//resizing the 1st column

dtable.resize();

~~~

###Item Properties Redefining

Type with data-containing components denotes the way each data item looks like rather than look-and-feel of the whole component. 

~~~js
webix.ui({
	view:"list",
    type:{
    	width:200, //item width
        height: 50
        },
    width: 250 //list width
    ..
});
~~~

To redefine width of the item, you should use **customize()** method instead of **define()** - the arguments are the same:

~~~js
$$("list1").customize({ width:210}); //item width changes
$$("list1").refresh();
~~~

More about [Type Implementation](desktop/type.md).

@complexity:2