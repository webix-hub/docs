
{{memo a horizontal toolbar}}

The component can contain various elements inside it (actually, the same elements that the form can contain): an icon, a button, a label, an input box etc. Check [toolbar](desktop/toolbar.md) documentation for more detailed description.

### Constructor

~~~js
var toolbar = webix.ui({
	view:"toolbar",
    id:"myToolbar",
    cols:[
        { view:"button", id:"LoadBut", value:"Load", width:100, align:"left" },
        { view:"button", value:"Save", width:100, align:"center" },
        { view:"button", value:"Info", width:100, align:"right" }
    ]
});
~~~

### Where to start

- [Overview of the Toolbar Widget](desktop/toolbar.md)
- [Samples](http://docs.webix.com/samples/02_toolbar/index.html)