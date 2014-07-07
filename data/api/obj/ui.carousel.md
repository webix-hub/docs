
{{memo a container control that provides continuous, circular navigation through a set of pictorial content blocks. One block is visible at a time}}

The control supports any content inside of it. The content blocks can be arranged vertically or horizontally, supplemented or not with the navigation control panel. Check [carousel](desktop/carousel.md) documentation for more detailed description.

### Constructor

~~~js
	var carousel = webix.ui({
		view:"carousel", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_carousel({
		...config options goes here..
	});
~~~

