Export to PNG
=================

To export data from datatable or treetable into a PNG file, you need to call the **toPNG()** method. 
The method takes the following parameters:

- **id** - (string) the id of the exported view
- **name** - (string) optional, the name of the created png file

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

{{editor http://webix.com/snippet/f9695489	Export to PNG}}
