Tooltip Implementation
=================

Tooltip stands out of the fixed pattern. It lies above other ui-related components, which makes it similar to  [window](desktop/window.md) and 
[popup](desktop/popup.md). 

Tooltip is connected with some component or its item and becomes visible when you place a mouse pointer over it and disappears when it leaves the area. Doesn't it 
resemble onMouseOver/onMouseOut events? Still, event handling is quite the [other story](desktop/event_handling.md). 

<img src="desktop/tooltip.png"/>

Here, you don't need any specific code to make it work. You should just include a tooltip into the necessary component abd specify the info to be shown inside a tooltip area. 

Tooltip may include text as well as items from the dataset. 

~~~js
webix.ui({
	view:"dataview",
	...
    tooltip:{
		template:"<span class='webix_strong'>Rating: </span> #rating#<br/>
        <span class='webix_strong'>Votes: </span> #votes#"
	}
});
~~~

{{sample 06_dataview/02_templates/06_tooltip.html }}

By default, tooltip is placed on the same level with the mouse pointer, 20 px to the right from it. 

To change this pattern, specify the coordinates relative to the mouse pointer as values of **dx** and **dy** properties. 

~~~js
tooltip:{
	template:"<span class='webix_strong'>Rating: </span> #rating#<br/>
    <span class='webix_strong'>Votes: </span> #votes#",
	dx: 10, //20 by default
	dy:5    // 0 by default
}
~~~

##Datatable Tooltip

Datatable tooltip is defined is quite another way. Several steps are possible: 

- Setting **tooltip:true** for the whole component. It enables tooltip functionality for the grid and shows tooltip for each column showing the row value that stands as ID for this column.

{{snippet
General datatable tooltip
}}
~~~js
webix.ui({
	view:"datatable",
    tooltip:true,
    columns:[
    	{id:"name", header:"Name"},
        {id::"age", header:"Age"}
    ],
    data:[
    	{id:1, name:"Ann", age:25},
        {id:2, name:"Tom", age:27}
    ]
});
//the tooltip for the first column of the first row is "Ann"
~~~

- **Customizing** tooltip data for each column. Tooltip should be switch on for the whole grid:

~~~js
webix.ui({
	view:"datatable",
    tooltip:true,
    columns:[
    	{id:"name", header:"Name", tooltip:"My name is #name#. I'm #age#."},
        {id::"age", header:"Age"}
    ],
    data:[
    	{id:1, name:"Ann", age:25},
        {id:2, name:"Tom", age:27}
    ]
});
//tooltip for the first column of the first row is "My name is Ann. I'm 25."
~~~

- Setting tooltip for datatable **header**. Tooltip should be switch on for the whole grid:

~~~js
webix.ui({
	view:"datatable",
    tooltip:true,
    columns:[
    	{id:"name", header:"<span title='My tooltip text'>Name</span>"},
        {id::"age", header:"Age"}
    ]
});
//tooltip for the Name column is "My tooltip text"
~~~

### Advanced tooltip configuration

Instead of defining tooltip for each column separately, you can define tooltip once for all columns


~~~
webix.ui({
    view:"datatable",
    tooltip:function(obj, common){
        //obj - row object
        //common.column - configuraton of related column

        return "<i>"+obj[common.column.id]+"</i>";
    },
    columns:[
        {id:"name", header:"<span title='My tooltip text'>Name</span>"},
        {id::"age", header:"Age"}
    ]
});
~~~


@complexity:2