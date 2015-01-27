Creating Kanban Board on a page
================================

In order to start using Kanban Board you need to initialize it on the page. 
It requires 2 simple steps:

1. Include the necessary JS and CSS files into HTML file.
2. Call the object constructor.

Included files
-------------

There are 4 files that you need to include:

~~~html
<!-- js files -->
<script src="codebase/webix.js" type="text/javascript"></script>
<script src="codebase/kanban/kanban.js" type="text/javascript"></script>
<!-- css files -->
<link rel="stylesheet" href="codebase/webix.css" type="text/css" charset="utf-8">
<link rel="stylesheet" href="codebase/kanban/kanban.css" type="text/css" charset="utf-8">
~~~

Initialization
----------------

Use the following code to initialize Webix Kanban Board:

~~~js
//webix.ready() function ensures that the code will be executed when the page is loaded
webix.ready(function(){
	//object constructor
	webix.ui({
		view:"kanban", 
        type:"space",
        //the structure of columns on the board
		cols:[
			{ header:"Backlog",
				body:{ view:"kanbanlist", status:"new" }},
			{ header:"In Progress",
				body:{ view:"kanbanlist", status:"work" }},
			{ header:"Testing",
				body:{ view:"kanbanlist", status:"test" }},
			{ header:"Done",
				body:{ view:"kanbanlist", status:"done" }}
		],
        //url to the file with data collection
		url: "tasks.php"
	});
});
~~~

{{sample
63_kanban/01_basic/01_init.html
}}