
{{memo a static popup window}}

The window can contain any content, be modal or modeless. The main use case - displaying popup content on some action (e.g. click). Check [popup](desktop/popup.md) documentation for more detailed description.

### Constructor

~~~js
var popup = webix.ui({
	view:"popup",
    id:"my_popup",
  	height:250,
  	width:300,
    body:{
        template:"Some text" 
    }
}).show();
~~~

### Where to start

- [Overview of the Popup Widget](desktop/popup.md)
- [Samples](http://docs.webix.com/samples/10_window/index.html)