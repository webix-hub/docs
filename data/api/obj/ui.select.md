
{{memo a single-selection drop-down list box}}

The component can be populated with data from the server side or a file: each item in the list will correspond to an item in the data source. Multi-selection mode isn't supported. Check [select](desktop/select.md) documentation for more detailed description.

### Constructor

~~~js
var select = webix.ui({
	view:"select", 
  	label:"Branch", 
  	value:1, options:[
    	{id:1, value:"Master" },
    	{id:2, value:"Release" }
  	]
});
~~~

### Where to start

- [Overview of the Select Control](desktop/select.md)
- [Samples](http://docs.webix.com/samples/13_form/01_controls/02_select.html)

