{{memo an organizational chart widget for creating hierarchical diagrams}}

The component supports data loading from different sources. You can customize the look and feel of Organogram items by using templates, 
uniting child elements of items into list blocks and redefining the applied css styles.
It's also possible to create your own css style for Organogram. Check desktop/organogram.md documentation for more detailed description.

### Constructor

~~~js
var chart = webix.ui({
	view:"organogram", 
    container:"mydiv", 
    ...config options goes here..
})
//or, in case of jQuery
$("#mydiv").webix_organogram({
	...config options goes here..
});
~~~

### Where to start

- [Overview of Organogram Widget](desktop/organogram.md)
- [Samples](http://docs.webix.com/samples/60_pro/07_organogram/index.html)

