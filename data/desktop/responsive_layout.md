Responsive Layouts 
==========================

Webix [layout](desktop/layout.md) and [accordion](desktop/accordion.md) structures can respond to the changes of window size by hiding & showing or moving their rows (cols) depending on currently available space.

It occurs when: 

- Layout or accordion are initialized without an HTML container, and hence, feature no fixed sizing; 
- The size of any component in such a layout/accordion is bigger than the space available for its rendering.

The right way to solve this issue is to apply fixed sizing for inner components. Read more on initial [component sizing](desktop/dimensions.md).

Responsive behavior features 2 modes: 

- Views are hidden and can be shown back; 
- Views are moved to another place in layout.

**Initial Layout**

<img src="desktop/responsive1.png">

##Responsive Hiding

To enable view hiding and showing on window resizing, set **responsive** property of a layout/accordion to *true*.

~~~js
webix.ui({
   view:"layout", //optional line
   responsive:true, 
   cols:[
   		{view:"list", ...},
    	{view:"template", ...}
    	{view:"datatable", ...}
    ]
});   
~~~

{{sample 01_layout/12_responsive_hidden.html}}

When space is not enough the last view from the left is hidden first. 

**After Window Resizing**

<img src="desktop/responsive3.png">

##Responsive Moving

To enable component moving during window resizing, provide an ID of the target layout as a value of **responsive** attribute of a parent layout of the needed component: 

~~~js
webix.ui({
    id:"a1", rows:[
    	{ responsive:"a1", cols:[ //parent layout for template 
             { view:"list", ...},
             { view:"template", ... }, //template will be moved to "a1" layout
             { view:"datatable", ... } 
        ]}
    ]
});
~~~

When space is not enough middle and right views are more likely to be moved. 

{{sample 01_layout/11_responsive.html}}

**After Window Resizing**

<img src="desktop/responsive2.png">

{{note
If accordion items are placed into layout during resizing, they will behave like layout rows and cols.  
}}

For layouts and accordions that lie inside an HTML container the functionality can be switched on by calling [resize()](api/link/ui.layout_resize.md) method after the container has been resized: 

~~~js
webix.event("divId", "resize", function(e){
    $$("layout").resize();
}); 
~~~

Responsive Layouts API
----------------------

###Events

- **onResponsiveHide** - fires when some view is hidden/moved because of responsive attribute processing
- **onResponsiveShow** - fires when some view is shown/restored because of responsive attribute processing

You can use events to make some changes in the app (when side menu is hidden, the icon on a toolbar can be shown, for example)

~~~js
webix.attachEvent("onResponsiveHide", function(id){
    if (id === "side_menu_id")
        $$("topbar_menu_button").show();
});
~~~

###Properties

Inside of the responsive layout you can mark some cell as non-responsive, so they will not be moved/hidden, even if there isn't enough space to show them.

~~~js
webix.ui({
   responsive:"hide", cols:[
     { view:"list", responsiveCell:false, width:320 }, // will always be visible
     { view:"template", minWidth:500 } // will be hidden if the space isn't enough
   ]
});
~~~

Flex Layout
------------

The FlexLayout component will try to place all components in a single row, but if space is not enough, a single line of layout will be divided into a few sub-lines.

~~~js
webix.ui({ view:"flexlayout", cols:[... ]});
~~~

**Initial Flexlayout**

<img src="desktop/initial_flex_layout.png">

**After Window Resizing**

<img src="desktop/resized_flex_layout.png">

FlexLayout can be used as a top level view, which is perfect for mobile apps.

~~~js
webix.ui({
	margin:10, padding:0, type:"wide",
	view:"flexlayout",
	cols:[
		{ view:"list", data:[
			{ value:"Albert Brown" },{ value:"Mono Delorini" }
		], minWidth:320, select:true },
		{ view:"list", data:[
			{ value:"Accounts" },{ value:"History" },{ value:"Settings" }
		], minWidth:320, select:true },
		{ 
        	template:"Try to resize screen, or open this sample on a mobile device",
			minWidth:320, minHeight:400
		}
	]
});
~~~

{{sample 01_layout/14_flex_top.html}}

or, it can be placed inside of a fixed layout to provide a dashboard-like view.

{{sample 01_layout/16_flex_dashboard.html}}

###Limitations

- This feature will work only in the latest Chrome, Safari, Firefox versions and in IE11+.

- FlexLayout must always define columns, there is no support for rows-based FlexLayout.

- When placing a FlexLayout inside of other Webix structures, you need to use scrollview around the FlexLayout

~~~js
webix.ui({
 cols:[
  { view:"scrollview", body: {
   view:"flexlayout",
   cols:[
    ...
   ]
  }},
  { }
 ]
});
~~~

{{sample 01_layout/16_flex_dashboard.html}}

###FlexDataLayout

{{note This widget is available in PRO version only}}

<img src="desktop/flexdatalayout.png">

FlexDataLayout widget behaves as desktop/data_layout.md and renders each cell as an element of [FlexLayout](desktop/responsive_layout.md).

In other words, it is a perfect solution for dashboard-like applications.

~~~js
var subconfig = {
	rows:[
		{ template:"Report: #month# 2016", type:"header", name:"$value" },
		{ view:"chart", type:"line", preset:"plot",
			xAxis:{ template:"'#ind#" },
			yAxis:{ },
			minWidth:300, height:300, name:"sales", value:"#sales#"}
	]
};

var flex = {
	margin:10, padding:0, type:"wide",
	view:"flexdatalayout",
	cols:[ subconfig ],
	url:"data/year.js"
};
~~~

{{sample 60_pro/13_layout/06_flex_datalayout.html}}