
{{memo a singular pane of the accordion component}}

Each accordion pane consists of a header and a body. The body of a pane can be collapsed/expanded by clicking on the appropriate header. Check [accordionitem](desktop/accordionitem.md) documentation for more detailed description.

### Constructor

~~~js
var accordionitem = webix.ui({
  	view:"accordion",
  	height:600,
  	rows:[
    {
      view:"accordionitem",
      header:"Pane 1",
      headerHeight:50,
      body:"Pane body 1",
    },
    { 
      view:"accordionitem",
      header:"Pane 2",
      body:"Pane body 2", 
      collapsed: true
    }]
});
~~~

### Where to start

- [Overview of Accordionitem](desktop/accordionitem.md)
- [Samples](http://docs.webix.com/samples/80_docs/accordionitem.html)

