Creating Scheduler
=========================

To use Scheduler in your application you should make 2 steps:

1. Include related CSS and JS files into your HTML file.
2. Call the object constructor.

Included files
---------------

You need to include 4 files. They are:

~~~html
<!-- js files -->
<script src="codebase/webix.js" type="text/javascript"></script>
<script src="codebase/scheduler.js" type="text/javascript"></script>
<!-- css files -->
<link rel="stylesheet" href="codebase/webix.css" type="text/css" charset="utf-8">
<link rel="stylesheet" href="codebase/scheduler.css" type="text/css" charset="utf-8">
~~~

Initialization
---------------

To initialize the component you should use the following code:

~~~js
//webix.ready() function ensures that the code will be executed when the page is loaded
webix.ready(function(){
    //the method allows to adjust a main view to screen size
    webix.ui.fullScreen();
    //object constructor
    webix.ui({
        view: "scheduler",
		id: "scheduler"
    });
    //the method load() lets you populate the event calendar with data
    $$("scheduler").load("../common/mobile.xml","scheduler");
});
~~~

{{sample
01_basic/01_init.html
}}

Basic configuration properties
----------------------------------
Here is a list of configuration properties with examples of usage. All of them have default values, but you can redefine them if you need.


- **scheduler.config.init_date** -  (date object) the initial date of the scheduler (by default, the current date)

~~~js
scheduler.config.init_date = new Date(2014,5,1);
~~~

- **scheduler.config.multi_day** - (boolean) enables rendering of multi-day events (true by default)

~~~js
scheduler.config.multi_day = true;
~~~
- **scheduler.config.multi_day_limit** - (numeric) sets the maximum number of visible items in a multi-day list (3 by default)

~~~js
scheduler.config.multi_day_limit = 4;
~~~

- **scheduler.config.server_utc** - (boolean) enables converting server-side dates from utc to a local time zone (and backward) while sending data to the server (false by default)

~~~js
scheduler.config.server_utc = true;
~~~

- **scheduler.config.separate_short_events** - (boolean) allows preventing short events from overlapping ( true by default)

~~~js
scheduler.config.separate_short_events = false;
~~~

- **scheduler.config.recurring** - (boolean) enables the recurring view (false by default)

~~~js
scheduler.config.recurring = true;
~~~