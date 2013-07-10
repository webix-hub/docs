{{memo a container with scrolls}}

Place it in the layout if you want to have a scroll around few other views (not necessary if you need a scroll in one single view). Check [scrollview](desktop__scrollview.md) documentation for more detailed description.

### Constructor

~~~js
	var scrollview = webix.ui({
		view:"scrollview", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_scrollview({
		...config options goes here..
	});
~~~
