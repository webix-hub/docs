init
=============

@short: inits Webix component defined by markup in HTML layout
	

@params:
- node	string	 datasource (by default data is taken from document body).
- target	string	where should the newly created component be placed. 

@example:
//data is taken from and placed to document body
webix.markup.init();

@template:	api_method
@relatedsample:
	23_markup/01_html/01_init.html
	23_markup/02_xhtml/01_init.html
@relatedapi:
	api/markup_parse.md
@related:
	desktop/html_init.md
@descr:

By default, markup is taken from **document.body** node while the target either concides with datasource node or specified manually.

Data can be as well taken from separate file or come as server response:

~~~js
	webix.ajax("data/config.xml", function(text, data){
		var config = webix.markup.parse(text, "xml");
		webix.ui(config);
	});
~~~

{{sample 23_markup/02_xhtml/04_by_ajax.html}}



