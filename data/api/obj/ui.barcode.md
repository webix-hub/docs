{{memo a machine-readable representation of data values}}

The library supports 3 most common barcode types: ean8, ean13 and upcA. You can customize the barcode bars colors, text height and dimensions of the view. 
It's also possible to create a custom barcode. Check desktop/barcode.md documentation for more detailed description.

### Constructor

~~~js
var barcode = webix.ui({
	view: "barcode",
	id:"barcode",
	type: "ean13",
	value: "123456789012"
});
~~~

### Where to start

- [Overview of the Barcode Widget](desktop/barcode.md)
- [Samples](http://docs.webix.com/samples/60_pro/08_barcode/index.html)
