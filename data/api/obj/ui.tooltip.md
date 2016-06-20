
{{memo A static text that is rendered in the absolutely positioned container. }}

Generally, the component isn't intended for direct initialization. But if you decide to use it, use mouse events (onMouseOut, onMouseIn, onMouseMove etc.) to show/hide the tooltip box in the specified position.
Check [Tooltip](desktop/tooltip.md) documentation for more detailed description.

### Constructor

~~~js
webix.ui({
  view:"tooltip", 
  template:"My #value#",
  height:100
}).show({id:1, value:"template"}, {x:0, y:0});
~~~

### Where to start

- [Overview of Tooltip](desktop/tooltip.md)
- [Samples](http://docs.webix.com/samples/06_dataview/02_templates/06_tooltip.html)


