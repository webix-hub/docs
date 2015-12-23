
{{memo a structured table of 2 columns that presents 'name:value' pairs for a list of properties}}

The component can be used for creating various on-page editors. The value field can be presented by any control - a text field, a checkbox, a drop-down list box etc. Check [property](desktop/property_sheet.md) documentation for more detailed description.

### Constructor

~~~js
var property = webix.ui({
	view:"property",  
  	id:"sets", 
  	width:300,
    elements:[
       { label:"Layout", type:"label"},
       { label:"Data url", type:"text", id:"url"},
       { label:"Data type", type:"select", options:["json","xml","csv"], id:"type"},
       { label:"Use JSONP", type:"checkbox", id:"jsonp"}
    ]
});
~~~

### Where to start

- [Overview of the Property Sheet Widget](desktop/property_sheet.md)
- [Samples](http://docs.webix.com/samples/07_property/index.html)