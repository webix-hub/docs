
{{memo a draggable border in a layout }}

The component is used to make some view placed into a layout draggable by a specific border. Draggable borders differ visually from the undraggable ones. Check [layout](desktop/layout.md) documentation for more detailed description.

### Constructor

~~~js
webix.ui({  
  id:"layout",
  rows:[
    { template:"row 1" },
    { view:"resizer" },
    { template:"row 2" },
    { view:"resizer" },
    { cols:[
      { template:"column 1" },
      { view:"resizer"},
      { template:"column 2" },
    ]}
  ]
});
~~~

### Where to start

- [Overview of Resizer](desktop/layout.md#resizerlines)
- [Samples](http://docs.webix.com/samples/01_layout)


