{{memo an editable table  that can easily display huge data sets }}

The component is full of various possibilities: filtering, sorting, pagination, editing, nadigation, drag-and-drop, internatialization, export to PDF, Excel etc. It also provides the dynamic mode for fast handling thousands of records.
  Check [datatable](datatable/index.md) documentation for more detailed description.

### Constructor

~~~js
	var datatable = webix.ui({
		view:"datatable", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_datatable({
		...config options goes here..
	});
~~~

### Where to start

- [Overview of DataTable Widget](datatable/index.md)
- [Samples](http://docs.webix.com/samples/15_datatable/index.html)