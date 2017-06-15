Creating SpreadSheet on a Page
============================

##Files to include

You need to include the following files in the head section of your document:

~~~html
<script src="codebase/webix.js" type="text/javascript"></script>
<script src="codebase/spreadsheet.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="codebase/webix.css">
<link rel="stylesheet" type="text/css" href="codebase/spreadsheet.css">
~~~

##Initialization

To initialize SpreadSheet and load it with data, use the code as in:

~~~js
//webix.ready() function ensures that the code will be executed when the page is loaded
webix.ready(function(){
	//object constructor
    webix.ui({
		view:"spreadsheet",
        //loaded data object
		data: base_data
	});
});
~~~

{{sample
65_spreadsheet/01_basic/01_init.html
}}

@seolinktop: [widget library](https://webix.com)
@seolink: [javascript spreadsheet library](https://webix.com/spreadsheet/)