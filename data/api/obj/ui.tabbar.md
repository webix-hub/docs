
{{memo a panel that contains multiple clickable items}}

Items of the component combine icons with text labels. The component can be used to build a multi-item menu for navigating between views. Check [tabbar](desktop/tabbar.md) documentation for more detailed description.


### Constructor

~~~js
var tabbar = webix.ui({
    view:"tabbar", 
    id:"tabbar", 
    value:"listView", // the initially selected tab
    options: [
        {"id":"listView", "value":"List"},
        {"id":"formView", "value":"Form"},
        {"id":"emptyView", "value":"Empty"}
    ]
});
~~~

### Where to start

- [Overview of the Tabbar Control](desktop/tabbar.md)
- [Samples](http://docs.webix.com/samples/02_toolbar/02_tabbar.html)

