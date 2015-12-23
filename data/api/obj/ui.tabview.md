
{{memo a container control with a navigation tab panel that keeps a set of views and displays one view at a time}}

The component optimizes the process of creating tabbed structures on the page - elements that present multiple groups of content switched by tabs. Check [tabview](desktop/tabview.md) documentation for more detailed description.

### Constructor

~~~js
var tabview = webix.ui({
	view:"tabview",
	cells:[     
      {
        header:"Form",
        body:{
        	template:"Form Content"     
      	}      
      },
      { header:"Empty", 
       	body:{
          template:"Some content"
        } 
      }
    ]
});
~~~

### Where to start

- [Overview of the Tabview Widget](desktop/tabview.md)
- [Samples](http://docs.webix.com/samples/02_toolbar/03_tabview.html)
