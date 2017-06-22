Creating Query Builder on a Page
=============================

To start working with Query Builder, you need to initialize it on a page. For this you need to take 2 simple steps:

1. Include the necessary JS and CSS files into an HTML file.
2. Call the object constructor.

Files to Include
------------------

There are 4 files that you should include on a page:

~~~html
<!-- js files -->
<script src="codebase/webix.js" type="text/javascript"></script>
<script type="text/javascript" src="codebase/querybuilder.js"></script>
<!-- css files -->		
<link rel="stylesheet" type="text/css" href="codebase/webix.css">
<link rel="stylesheet" type="text/css" href="codebase/querybuilder.css">
~~~

Initialization
------------------

To initialize Query Builder, you need to specify its configuration as follows:

~~~js
webix.ui({
	view: "querybuilder",
	id: "querybuilder",
	fields: [
		{ id:"fname", 	value:"First Name", type:"string" },
		{ id:"lname", 	value:"Last Name",  type:"string" },
		{ id:"age",  	value:"Age", 		type:"number" },
		{ id:"bdate",  	value:"Birth Date", type:"date" }
	]
})
~~~

The main configuration property is **fields**. It is an array of field objects that will be used for filtering the dataset.

Each field object has three properties:

- **id** - (*string*) the field id
- **value** - (*string*) the field value
- **type** - (*string*) the type of the field. Can have the following values: *string*, *number*, *date*. 

{{sample 66_querybuilder/01_initialization/01_init.html}}

@todo: check link to the sample

@edition:pro