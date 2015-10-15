Building App Architecture
============

##Basic principles

Before using library components you need to draw the scheme of their arrangement and define the way they would be positioned towards each other. It can 
be done with the help of four interface-building components, namely: 

- [Layout](desktop/layout.md)
- [Multiview](desktop/multiview.md)
- [Accordion](desktop/accordion.md)
- [Scrollview](desktop/scrollview.md)
- [Carousel](desktop/carousel.md)

{{note
All the interface-building components inherit from **[view](desktop/view.md)**, a base class or, simply put, a container where you ought to place the 
component before working with it.
}}

[Layout](desktop/layout.md) allows dividing a page into **rows** and **columns** to organize sections to put other components. All of them will be visible within the same page
at the same time. 

Similar functionality you can find with a [form](desktop/form.md) and [toolbar](desktop/toolbar.md) components that house **controls** (input fields, checkboxes, buttons, etc.)  organized under the same pattern as layout 
(**rows** and **cols**). See [Controls Guide](desktop/controls.md) to learn the variety of controls offered by this lib.

[Mutliview](desktop/multiview.md), [carousel](desktop/carousel.md), [accordion](desktop/accordion.md) and [scrollview](desktop/scrollview.md) allow presenting different views in one and the same area 
when you are short of space. They differ in the ways of switching between these views:

- for **multiview cells** you need a dedicated button to switch between them;
- **accordion items** are expanded and collapsed on clicking their headers;
- **scrollview** allows scrolling through the whole content it houses;
- **carousel panes** change in turn by clicking on them or swiping (on touch devices).

All layout types are initialized within the **webix.ui** constructor and can be nested into each other:

~~~js
webix.ui({
	view:"layout", rows:[
     {...}, //any component
     {...}
    ]
});
~~~

##Layout

If you just divide the page into **rows** or **columns** (cols) - you'll get standard **layout** to display the components side by side. 

~~~js
webix.ui({
	rows:[
     {...}, //any component
     {cols:[
     	{...},
        {...}
    ]
});
~~~

[More about Layout](desktop/layout.md).

##Form

Form helps divide the page into **rows** and **cols** to create a layout for controls. Unlike **layout**, this component should be initialized directly, using the view name. 

~~~js
webix.ui({
	view:"form",
	elements:[
     {...}, //any control
     {cols:[
     	{...},
        {...}
    ]
});
~~~

If form controls are placed into the **elements** array - they will be arranged in **rows**. 

More about [Form](desktop/form.md)

##Accordion

Accordion consists of items each of which takes a separate row or column with a header and can be collapsed and expanded. 

~~~js
webix.ui({
	view:"accordion", rows:[
    	{view:"accordionitem", header:"Item1", body:{ ...}},
        {header:"Item2", body:{...}}
    ]  //two ways of accordion item initialization are equal
});
~~~

If you place an array of objects with **body** and **header** into layout row/column - you'll automatically get **accordion** with **accordion items** without direct initialization. 

~~~js
webix.ui({
	rows:[
    	{header:"Item1", body:{ ...}},
        {header:"Item2", body:{...}}
    ]  
});
~~~

[More about Accordion](desktop/accordion.md).

##Scrollview

**Scrollview** is standard layout with a scrollbar. It can house any HTML content, any layout or component in its **body**:

{{snippet
Scrollview
}}
~~~js
webix.ui({
	view:"scrollview",
    body:{
    	rows:[{...}, {...}]
    },
    scroll:"y" //scrolling direction
});
~~~


More about [Scrollview](desktop/scrollview.md).

##Carousel 

**Carousel rows** and **cols** are shown in turn, one by one, on clicking dedicated buttons or swiping on touch devices:

{{snippet
Carousel
}}
~~~js
webix.ui({
	view:"carousel",
    cols:[
    	{...},
    	{...}
    ]
});
~~~

More about [Carousel](desktop/carousel.md)

##Multiview

Multiview is a layout with multiple hidden views that are shown in turn with one view being always visible. 

~~~js
webix.ui({
	view:"multiview", //optional line
    cells:[
    	{...},
        {...}
    ]
});
~~~

Note that for mutliview you should provide the logic for switching between views. It can be a [tabbar](desktop/controls.md#tabbar) 
or a [segmented](desktop/controls.md#segmented) button. 

If you just define **cells** you'll automatically get **multiview**, if you add **tabs** to **cells** within one and the same constructor - it will turn into **tabview**. 
In this case, a switching button is not needed as tabs perform this function.

~~~js
webix.ui({
	view:"tabview", //optional line
	tabs:[
    	{id:"1", ...},
        {id:"2", ...}
    ],
    cells:[
    	{id:"1", ...},
        {id:"2", ...}
    ]
});
~~~

More about [Multiview](desktop/multiview.md) and [Tabview](desktop/tabview.md). 


##Isolating IDs inside Layouts

{{note
Basic  rules of ID assignement can are described [here](desktop/view.md#viewid).
}}

The features is true to all the layout types described above. It allows for **using the same IDs** for components lying in different layout sections while preserving the ability to **access the needed component** without ambiguity. 

Layout section should be equipped with an [isolate](api/ui.layout_isolate_config.md) property:

~~~js
webix.ui({
   cols:[
     { id:"col1", isolate:true, rows:[ 
        { view:"list", id:"mylist" },
     ]},
     { id:"col2", isolate:true, rows:[
        {view:"list", id:"mylist" },
     ]}
   ]
});
~~~

The [list](desktop/list.md) view is used twice in the "app" but in different layout columns with **isolate** functionality switched on. 

To address such lists separately, use yhe ID of its parent layout section:

~~~js
var list1 = $$("col1").$$("mylist");
var list2 = $$("col2").$$("mylist");

//Otherwise, you'll get the last view 
var list2 = $$("mylist");
~~~

###What's Next

- To learn how to set various **border types** or create a borderless design, consult the [dedicated article](desktop/borders.md).
- To learn how to **set headers** for components in layout rows, cols, multiview cells, etc, study the [corresponding article](desktop/setting_headers.md).
- Layouts can be **sized** according to common rules described in the [Sizing Components](desktop/dimensions.md) article. 
- Layouts can respond to changes of window size. Learn [how to tune responsive behaviour](desktop/responsive_layout.md).

@index:
  - desktop/view.md
  - desktop/responsive_layout.md

@complexity:1