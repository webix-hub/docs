{{memo page navigation controls}}

The component has a little sense on its own, but can be used with other data-based components such as DataTable, DataView, List. Not purposed for direct initialization. Check [pager](desktop/paging.md) documentation for more detailed description.

### Constructor

~~~js
	var pager = webix.ui({
		view:"pager", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_pager({
		...config options goes here..
	});
~~~
