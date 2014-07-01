Creating Mobile Scheduler
=========================

To use the mobile scheduler in your application you should make 2 steps:

1. Include related CSS and JS files into your HTML file.
2. Call the object constructor.

Included files
---------------

You need to include 2 files. They are:

~~~html
<link rel="STYLESHEET" type="text/css" href="codebase/dhxscheduler_mobile.css">
<script src="codebase/dhxscheduler_mobile.js" type="text/javascript"></script>
~~~

Initialization
---------------

To initialize the component you should use the following code:

~~~js
//webix.ready() function ensures that code will be executed when the page is loaded
webix.ready(function(){
    //method allows hiding the address bar on iPhone/iPod to save space for the app
    webix.ui.fullScreen();
    //object constructor
    webix.ui({
        view: "scheduler",
		id: "scheduler"
    });
    //the method load() lets you populate the scheduler with data
    $$("scheduler").load("../common/mobile.xml","scheduler");
});
~~~

**Related sample:** samples/01_basic/01_init.html

