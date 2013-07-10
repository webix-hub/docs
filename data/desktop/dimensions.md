Sizing components
==============

You can set dimensions for the components and their items in three ways. 

- [Fixed Sizing](#fix)
- [Auto Sizing](#auto)
- [Relative Sizing](#rel)
- [Dynamic sizing](#dyn)

Later on, you can dynamically [resize](desktop/resizing.md) the components. 

##Fixed Sizing {#fix}

Fixed dimensions are set by **width** and **height** parameters that can be applied to components and their items as well as to the whole [layout](desktop/layout.md). 

{{snippet
Layout Sizing
}}
~~~js
webix.ui({
	id:"layout",
	height:600,
	width:700,
	rows:[
		{template:"row 1",height:20},
		{template:"row 2"},
			{cols:[
				{id:"a1",
				template:"column 1",
				width:150}]
					}]
			}).show();
~~~

{{sample 01_layout/01_resizer.html }}

When giving fixed dimensions to the components in layout, don't forget that layout rows and columns will adjust to the sizes of the nested components automatically. 

###Control Sizing

[Controls](desktop/controls.md) feature **inputWidth** and **inputHeight** properties that define dimensions of input areas and button text values. 

{{snippet
Button Sizing
}}
~~~js
{ view:"button", value:"Prev", type:"prev", width:100, inputWidth: 70, height:20 }
~~~

Read more about the possibilities of control sizing in the [Controls Guide](desktop/controls_guide.md)

###Component Item Sizing 

If you want to specify the dimensions of an item rather than the component, include height and width parameters into the component's **type** property . 

{{snippet
Dataview Component and Items with Fixed Dimensions
}}
~~~js
webix.ui({
    view:"dataview",
    width: 500, //component's dimensions
    height: 250,
    type:{ 
    	height: 80,
        width: 250 //dimensions of each dataview item
    }
    ...
});
~~~

{{sample 98_docs/simple_dataview.html}}

###Sizing Limits

During dynamic [resizing](desktop/resizing.md) or when the component is inited in [layout](desktop/layout.md) with at least one [resizer line](desktop/layout.md#resizer), minimum and maximum dimensions are very helpful. They are set with the help of the following properties:

- **minWidth** and **minHeight** (number) - on resizing the component cannot takes less space than specified. If more space is available, the component will take it. 

- **maxWidth** and **maxHeight** (number) -on resizing the component cannot take more space than specified. At the same time, the component may take smaller width nd height values and take smaller space. 

##Auto Sizing {#auto}

###1.Autosizing to the dimensions of the parent container. 

By default components are autosized to the dimensions of the parent HTML-container. 

{{snippet
Inline CSS
}}
~~~html
<div id="areaA" style="width: 320px, height: 400px"></div>
<script type="text/javascript" charset="utf-8">
	webix.ui({
		 container: "areaA", //corresponds to the value of <div> id parameter
         view:"list", 
         ... 
         })
</script>
~~~

Auto sizing adjusts the component or its item to available space (parent container, if these's the one; otherwise, to the document body). If there're several components or several layout columns on the page, each of
which, they will equally distribute available space among them. 


###2.Content Autosizing.

If you define **autoheight** as *true* the height of layout rows will be adjusted to their contents.

How does this property work? By setting autoheight to the [template](desktop/template.md) we let it 'go' to its contents (text, as a rule) and calculate itself the height of the text on the screen. This height will be the
template's height and the corresponding layout row will adjust to this parameter. 

{{snippet
Autoheight for view Template
}}
~~~js
rows:[
		{ template:"html->my_box1", autoheight:true},
		{ template:"Area 1"},
		{ template:"html->my_box2", autoheight:true}
      ]  
~~~

{{sample 04_template/02_autoheight.html}}

Some components also feature the **autowidth** property. 

###3.Item Content Autosizing

To adjust item's width to its contents you should use **adjusting** or **auto height** depending on the component.

**Datatable column width** is adjusted to its contents:

{{snippet
Datatable Column Sizing
}}
~~~js
columns:[
	{ id:"rank", header:"", css:"rank", adjust:true },
	...]
~~~

{{sample 15_datatable/09_columns/01_size_by_content.html }}

**Auto height** is set within component **type** that defines properties of an item (not the whole component):

{{snippet
List Content 
}}
~~~js
webix.ui({
	view:"list",
    width:250,
    type:{
    	height:"auto"
    }
});
~~~

In addition, component width and height can be adjusted to the **predefined dimensions of HTML elements** of its items. For these needs, set **sizeToContent** property for a component:

{{snippet
Dataview Item Sizing
}}
~~~js
webix.ui({
	view:"dataview",
	template:"#title#<br/> Year: #year#, rank: #rank#",
	sizeToContent:true
});
~~~

Note that even in case these HTML elements are different for different items, the dimensions are measured only once (for the first input, as a rule) and then sizing is performed. 
At the same time, some of them may be smaller or bigger. 

{{sample 06_dataview/01_initialization/05_type_sizing.html }}

##Relative Sizing {#rel}

Relative dimensions can be defined with the help of the **{gravity:x}** parameter which makes one component **x** times bigger then the other. 

{{snippet
One of the 'Save' buttons is twice bigger then the other one. 
}}

~~~js
webix.ui({
	view:"toolbar"
		{ view:"button", value:"Load", width:200 },
		{  margin:4, borderless:true, rows:[
						{ view:"button", value:"Save",  gravity:2 },
						{ view:"button", value:"Save"}
                        ...
         })
~~~
{{sample 02_toolbar/05_toolbar_lines.html }}

##Dynamic Sizing {#dyn}

Dynamic sizing ensures adequate visibility of components regardless of screen size and makes them dynamically respond to changing window dimensiions.

By default, dynamic sizing is true for components that feature no sizing of its own and are not placed into any sized HTML container. Such components take space of the 
entire screen and are resized as the browser window resizes. 

To enable dynamic sizing in other situations, take the following steps:

- create div container and give **relative dimensions** to it;
- put a Webix component into it (define the **container** property within the component);
- ensure that the component is **adjusted** to its container each time you resize browser window. 

~~~js
<div id="testA" style='width:50%; height:50%;'></div>
...
grid = new webix.ui({
	container:"testA",
	view:"datatable",
    ... 
});

webix.event(window, "resize", function(){ grid.adjust(); })
~~~
{{note
Note that events to HTML nodes are attached via [event()](api/_event.md) method rather than attachEvent(). 
}}

###Related Articles:

- [Event Handling](desktop/event_handling.md)
- [Component Resizing](desktop/resizing.md)

@complexity:1