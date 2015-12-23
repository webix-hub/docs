
{{memo a horizontal or vertical layout with the header(s)}}

The component consists of cells arranged vertically or horizontally. The header is an optional part of the cell, i.e. in one and the same layout some cells can be with headers, some cells - without. By clicking on the header the user can collapse/expand the related cell. Check [layout](desktop/layout.md) documentation for more detailed description.

#### Constructor

~~~js
var headerlayout = webix.ui({
  cols:[
    { header:"col 1", body:"content 1", width:150},
    { header:"col 2", body:"content 2", width:150},
    { header:"col 3", body:"content 3", width:150}
  ]
});
~~~


### Where to start

- [Overview of Headerlayout](desktop/layout.md#headers)
- [Samples](http://docs.webix.com/samples/01_layout/07_header_all.html)
