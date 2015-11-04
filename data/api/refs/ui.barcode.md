ui.barcode 
=============

{{memo A machine-readable representation of data values. }}

The library supports 3 most common barcode types: ean8, ean13 and upcA. You can customize the barcode bars colors, text height and dimensions of the view. 
It's also possible to create a custom barcode. Check desktop/barcode.md documentation for more detailed description.

### Constructor

~~~js
var chart = webix.ui({
	view:"barcode", 
    container:"mydiv", 
    ...config options goes here..
})
//or, in case of jQuery
$("#mydiv").webix_barcode({
	...config options goes here..
});
~~~

### Where to start

- [Overview of Barcode Widget](desktop/barcode.md)
- [Samples](http://docs.webix.com/samples/60_pro/08_barcode/index.html)






@index:

