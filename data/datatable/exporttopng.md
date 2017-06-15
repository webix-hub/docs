Export to PNG
=================

To export data from datatable or treetable into a PNG file, you need to call the api/_topng.md method. 
The method takes the following parameters:

- **id** - (string) the id of the exported view
- **name** - (string) optional, the name of the created PNG file

For example, if you want to export a datatable to a PNG file, you need to initialize a datatable:

~~~js
{
	view:"datatable",
	id: "myDataTable",
	// datatable configuration
	...
}
~~~

and then call the toPNG() method with the datatable id as its parameter:

~~~js
webix.toPNG($$("myDataTable"));	
~~~

{{sample 15_datatable/10_export/02_png.html}}

@seolinktop: [web control library](https://webix.com)
@seolink: [javascript datatables](https://webix.com/widget/datatable/)