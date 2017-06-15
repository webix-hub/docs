

{{memo A control used for visualization of complex hierarchical data in a compact way }}

The component is used for space-saving presentation of big tree-like data. Relations between tree elements are reflected using the correlation of rectangles' sizes or graduation of their colors. One-level rendering of tree data is also possible with Treemap. Check [treemap](desktop/treemap.md) documentation for more detailed description.

### Constructor

~~~js
var treemap = webix.ui({
    view:"treemap",
    select: true,
    template: function(item){
        return item.label||"";
    },
    value: "#value#",
    data: [
        { id:"1", label: "Technology", data:[
            { id:"1.1", value:"50" },
            { id:"1.2", value:"30" },
            { id:"1.3", value:"20" }
        ]},
        { id:"2", label: "Healthcare", data:[
            { id:"2.1", value:"80" },
            { id:"2.2", value:"10" },
            { id:"2.3", value:"60" }
        ]}        
    ]
});
~~~

### Where to start

- [Overview of the Treemap Widget](desktop/treemap.md)
- [Samples](http://docs.webix.com/samples/60_pro/11_treemap/index.html)

@seolinktop: [javascript ui framework](https://webix.com)
@seolink: [treemap visualization](https://webix.com/widget/treemap/)