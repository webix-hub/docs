
{{memo a container control that presents multiple horizontal or vertical panes}}

A collection of panes that make up the component allows you to organize the content in a space-saving way. <br> The main difference from a standard layout is that accordion can be collapsed/expanded by clicking on the header of a pane. Check [accordion](desktop/accordion.md) documentation for more detailed description.

### Constructor

~~~js
var accordion = webix.ui({
    view:"accordion",
    type:"wide",
    cols:[
        { header:"col 1", body:"content 1", width:150 },
        { header:"col 2", body:"content 2", width:150 },
        { header:"col 3", body:"content 3", width:150 },
        { header:"col 4", body:"content 4", width:150 },
        { header:"col 5", body:"content 5", width:150 }
    ]
});
~~~


### Where to start

- [Overview of Accordion Widget](desktop/accordion.md)
- [Samples](http://docs.webix.com/samples/01_layout/index.html)


@seolinktop: [html5 framework](https://webix.com)
@seolink: [javascript accordion](https://webix.com/widget/accordion/)