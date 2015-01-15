Creating File Manager on a page
================================

There are two simple steps you need to complete to initialize File Manager on a page:

1. Include the necessary JS and CSS files into HTML file.
2. Call the object constructor.

Included files
-------------

You need to include 4 files on a page:

~~~html
<!-- js files -->
<script src="codebase/webix.js" type="text/javascript"></script>
<script src="codebase/filemanager.js" type="text/javascript"></script>
<!-- css files -->
<link rel="stylesheet" href="codebase/webix.css" type="text/css" charset="utf-8">
<link rel="stylesheet" href="codebase/filemanager.css" type="text/css" charset="utf-8">
~~~

Initialization
---------------

The code below initializes File Manager and populates it with data:

~~~js
//webix.ready() function ensures that the code will be executed when the page is loaded
webix.ready(function(){
	//object constructor
    webix.ui({
		view:"filemanager",
        id:"files"
	});
    // loading data source
    $$("files").load("data/files.php");
});
~~~

{{sample
64_file_manager/01_basic/01_init.html
}}