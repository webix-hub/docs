
{{memo a pop-up window displayed on firing the 'contextMenu' event (mouse right-clicks)}}

The component presents a plain window that can contain any content. Check [context](desktop/context.md) documentation for more detailed description.

### Constructor
{{snippet
HTML
}}
~~~html
<!--Right click the area-->
<div id="areaA" style=" background-color:#ffffbb; width:500px; height:300px;"></div>
~~~
{{snippet
JS
}}
~~~js
var context = webix.ui({
    view:"context",
    body:{  template:"text" }, 
    width:300, 
    height:200,
    master:"areaA"
});
~~~

### Where to start

- [Overview of the Context Widget](desktop/context.md)
- [Samples](http://docs.webix.com/samples/03_menu/index.html)