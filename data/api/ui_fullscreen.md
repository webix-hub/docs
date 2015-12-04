fullScreen
=============

@short:
	for mobile devices; makes the application take all available screen space

@example:
webix.ui.fullScreen();


@template:	api_method
@descr:

To make an app work correctly in the full-screen mode you should fulfil 2 requirements:

1.  All the code must be placed into **webix.ready()** to ensure that it will be called just after the page has been completely parsed.
2. **webix.ui.fullScreen()** must be placed before components' definitions, i.e. before **webix.ui()** blocks.

~~~js
webix.ready(function(){
	webix.ui.fullScreen();
	webix.ui({
                ...
	})
})
~~~

{{note
  If you need to return the address bar, just touch the status bar. To hide the address bar again - refresh the page.
}}