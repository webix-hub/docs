
{{memo a regular list of items}}

The component serves as the base class that defines properties, methods, and events common for all list-type controls. Check [list](desktop/list.md) documentation for more detailed description.

### Constructor

~~~js
var list = webix.ui({
  view:"list",
  width:250,
  height:200,
  template:"#title#",
  select:true,
  data:[
    { id:1, title:"Item 1"},
    { id:2, title:"Item 2"},
    { id:3, title:"Item 3"}
  ]
});
~~~

### Where to start

- [Overview of the List Widget](desktop/list.md)
- [Samples](http://docs.webix.com/samples/05_list/index.html)