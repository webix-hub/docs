Setting Borders for Components
==========

Webix allows setting **borders**, **margin** and **padding** for components and layout blocks. They should be specified within layout blocks and components 
to which you wish to apply the settings. 

Within the [form](desktop/form.md) component borders are set in the same way. 

###Border Types

Borders can be applied to:

- **layout blocks** (rows, cols, cells);
- the **whole layout** and its variations (**multiview, tabview**);
- any **UI component**;
- **part of UI component** (window or accordion body, head). 

Border type is set by the **api/ui.layout_type_config.md** parameter. 

~~~js
webix.ui({  
    type:"space", 
	rows:[
    	{ ... },
        { ... }
        ]
});
~~~

The following border types are available:

<img src="desktop/border_type.png"/>

Besides the above mentioned border types, there is also the **type:"form"** type, which specifies that layout cells are rendered without borders and with padding around all of them.

By default rows and columns feature thin borders, which can as well be set manually as **type:"line"**. 
To completely get rid of borders, you should either set the **"clean"** type or add **borderless**:*true* parameter.

Note that the chosen border as well as borderless state is applied only to the layout block it's defined for, 
while its children still feature the default border. You should set a border for them manually:

~~~js
webix.ui({
	container:"divD",
	type:"space", 
	rows:[
    	{ template:"text", borderless:true },
        { ... }
    ]
});
~~~

Here layout rows feature the **space** border, while a template that lies in one of these rows is **borderless**.

###Margin and Padding

**Margin** specifies the space from the view to the left inner border of its parent container (sets the "margin-left" property) 
while **padding** sets the offset from the component contents to its borders.

~~~js
webix.ui({
	type:"space", 
    margin:30,
    padding:20, 
    cols:[{ }]
});
~~~

**Padding** can be set separately in horizontal and vertical modes: 

- padding - offset for all the borders;
- paddingX - offset for left and right borders;
- paddingY - offset for upper and bottom borders.

@complexity:1