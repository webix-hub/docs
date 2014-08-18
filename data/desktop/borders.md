Setting Borders to the Components
==========

Webix allows setting **borders**, **margin** and **padding** to the components and layout blocks. They should be specified within layout blocks and components 
to which you wish to apply the settings. 

Within the [form](desktop/form.md) component borders are set in the same way. 

###Border Types

Borders can be applied to:

- **layout blocks** (rows, cols, cells);
- the **whole layout** and its variations (**multiview, tabview**);
- any **UI component**;
- **part of UI component** (window or accordion body, head). 

Border type is set by the **type** parameter. 

~~~js
webix.ui({  
    type:"space", 
	rows:[
    	{ ... },
        { ... }
        ]
});
~~~

<img src="desktop/border_type.png"/>

By default rows and columns feature thin borders, which can as well be set manually as **type: 'line'**. To completely rid of borders you should either set a **'clean'** type or add **borderless**:*true* parameter.

Note that the chosen border, or borderless state is applied only the the layout block it's defined for it's children still feature the default border. You should set a border for them manually:

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

Here layout rows feature **space** border while a template that lies in one of these rows is **borderless**.

###Margin and Padding

**Margin** specifies space from the view to the left inner border of its parent container (set "margin-left" property) while **padding** sets the offset from the component contents to 
its borders.

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