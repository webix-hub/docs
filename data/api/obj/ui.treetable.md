
{{memo a control for presenting tree in a grid cell }}

The component is used to integrate a tree into an editable grid. There is a support for in-line node editing, drag-and-drop, filtering, checkboxes etc. Check [treetable](desktop/treetable.md) documentation for more detailed description.

### Constructor

~~~js
var treetable = webix.ui({
    view:"treetable",
    columns:[
      { id:"id", header:"", width:50},
      { id:"value",	header:"Film title", width:250,
       template:"{common.treetable()} #value#" },
      { id:"chapter", header:"Mode", width:200}
    ],    
    data: [
      { "id":"1", "value":"The Shawshank Redemption", "open":true, "data":[
        { "id":"1.1", "value":"Part 1", "chapter":"alpha"},
        { "id":"1.2", "value":"Part 2", "chapter":"beta", "open":true, "data":[
          { "id":"1.2.1", "value":"Part 1", "chapter":"beta-twin"}
        ]}
      ]}
    ]
});	
~~~

### Where to start

- [Overview of the Treetable Widget](desktop/treetable.md)
- [Samples](http://docs.webix.com/samples/15_datatable/30_treetable/index.html)