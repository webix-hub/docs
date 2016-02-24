Components Export to PNG
===================

You can export Webix components to the PNG format. The components don't require any special configuration to be exported.

{{note
The described functionality is available both in Standard and Pro versions, but pay attention that the IE browser is supported starting from version 10.
}}


To export a component into a PNG file, you need to call the api/_topng.md method. The method takes the next parameters:

- **id** - (string, object) id or object of the exported view 
- **name** - (string) optional, name of an exported png file

For example, if you want to export a chart to a PNG file, you need to call the toPNG() method with the chart id as parameter:

~~~js
webix.ui({
	view:"chart",
	id: "myChart",
	// chart configuration
	...
});

webix.toPNG($$("myChart"));	
~~~

{{sample 19_api/07_export_png.html }}