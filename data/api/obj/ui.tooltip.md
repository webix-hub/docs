
{{memo a static text that is rendered in the absolutely positioned container}}

Generally, the component isn't intended for direct initialization. But if you decide to use it, use mouse events (onMouseOut, onMouseIn, onMouseMove etc.) to show/hide the tooltip box in the specified position. Check [tooltip](desktop/tooltip.md) documentation for more detailed description.

### Constructor

~~~js
webix.ui({
    view:"datatable",
    tooltip:true,
    columns:[
        {id:"name", header:"Name"},
        {id:"age", header:"Age"}
    ],
    data:[
        {id:1, name:"Ann", age:25},
        {id:2, name:"Tom", age:27}
    ]
});
~~~

### Where to start

- [Overview of Tooltip](desktop/tooltip.md)
- [Samples](http://docs.webix.com/samples/06_dataview/02_templates/06_tooltip.html)

