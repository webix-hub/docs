Resizing Components
==============

The component can be resized in two ways: 

- Setting new dimensions to the component itself and applying **resize().**
- Setting new dimensions to the component container and applying **adjust()** to the component. 

{{note
On-page resizing with [resizer lines](desktop/layout.md#resizer)  and [responsive behavior on window resizing](desktop/responsive_layout.md) is discussed separately. 
}}

##Resizing the Component

The component is resized by changing values of its width and height properties.

The properties can be changed in two ways: 

- with the help of **define()** method:

{{snippet
Resize the dataview from 500px to 700px in width
}}
~~~js
dtable = new webix.ui({
	view:"datatable",
    width: 500,
    ...
})

dtable.define("width", 700);
dtable.resize();

//or both width and height
dtable.define({
	width:700,
    height:500
});
dtable.resize();
~~~

{{editor http://webix.com/snippet/4c2b7c8c	Dynamic adjusting to the parent container}}

- by getting directly to the component **config**:

{{snippet
Changing dataview width and height
}}
~~~js
$$("dview").config.width = 261;
$$("dview").config.height = 700;
$$('dview').resize();
~~~

{{editor http://webix.com/snippet/8b16fa4e	Resizing}}

##Resizing the Component's Container

Container is an HTML node you place your component into. 

When you resize the container size and (optionally) call **adjust()** method for the component in it - component will change its dimensions to match with the container new size.

{{snippet
Placing datatable in testA container
}}
~~~js
<div id="testA" style="width:500px;"></div>
...
grid = new webix.ui({
 	view:"datatable",
    container:"testA",
    ....
});
~~~

Container can be resized in two ways: 

- via **DOM reference**

~~~js
document.getElementById('testA').style.height="455px";
grid.adjust();
~~~

{{editor http://webix.com/snippet/8b16fa4e	Resizing}}

- using webix **toNode()** method:

~~~js
webix.toNode("testA").style.width = "700px";
grid.adjust();
~~~

{{editor http://webix.com/snippet/4c2b7c8c	Dynamic adjusting to the parent container}}

Component can be as well adjusted to the [dynamically-sized container](desktop/dimensions.md#dyn). 

##Resizing Several Components at a Time

If you need to resize several components lying inside one and the same parent component (like [dataviews](desktop/dataview.md), [lists](desktop/list.md), [datatables](datatable/index.md) inside one and the same 
[layout](desktop/layout.md) with its own ID, you can redefine their dimensions, call the **resize()** function from the parent and pass the *true* parameter to it. 

~~~js
webix.ui({
	view:"layout", //optional
	rows:[
    	{view:"dataview"},
    	{view:"list"},
    	{view:"datatable"}
    ]
});


$$("dataview1").define("width", 300);
$$("list1").define("width", 350);
$$("datatable1").define("width", 420);

$$(layout1).resize(true);
~~~

For altering dimensions of the component children use the corresponding method: 

~~~js
$$('accordion').resizeChildren();
~~~

Study the [Sizing Components](desktop/dimensions.md) article to learn about initial component sizing. 

@complexity:2