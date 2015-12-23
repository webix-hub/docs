
{{memo a movable popup window}}

The window consists of the header and the body, can be modal or modaless. The window body can contain any content. The header is set by a template. Check [window](desktop/window.md) documentation for more detailed description.

### Constructor

~~~js
var window = webix.ui({
    view:"window",
    id:"my_win",
    head:"My Window",
  	width: 200,
  	height: 200,
    body:{
        template:"Some text"
    }
}).show();
~~~

### Where to start

- [Overview of the Window Widget](desktop/window.md)
- [Samples](http://docs.webix.com/samples/10_window/index.html)
