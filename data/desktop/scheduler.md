Scheduler and Gantt Integration
=========================

Both Scheduler and Gantt are nice planning tools from <a href="http://dhtmlx.com">DHTMLX JS library</a>. While Scheduler is an event calendar, the Gantt is a chart to display a long-term project schedule.

{{note JS files for these components aren't included into Webix lib package and should be taken from [https://github.com/webix-hub/components](https://github.com/webix-hub/components). }}

##DHTMLX Scheduler

Scheduler is Javascript feature-rich event calendar that can create and display events as well as show a schedule for a day, week and month. Full info about it can be found in 
the dedicated section of <a href="http://dhtmlx.com/docs/products/dhtmlxScheduler/index.shtml">DHTMLX site</a>.

<img src="desktop/scheduler.png"/>

###Scheduler Initialization

To include Scheduler into your app, you need to add a link to a dedicated library file into your document head section. Note that in a documentation sample this file is included in another way, but in your real app you should
the pattern below: 

~~~html
<script type="text/javascript" src="./scheduler.js"></script>
~~~

And then init the view:

~~~js
//path from which extra libraries are autoloaded
webix.codebase = "./";

webix.ui({
	view:"webix-scheduler", 
	date:new Date(2010,0,5),
	mode:"week",
	init:function(){...}, //scheduler config
	ready:function(){
		scheduler.parse("..events data..")
	}
});
~~~

{{sample 32_thirdparty/04_scheduler.html}}

###Scheduler properties

- **date** (function) - defines the start date of the scheduler. In the sample above, it is th 5the of January, 2010; If you pass no parameters into the *new Date()*
constructor, the component will show current date;
- **mode** (string) - defines the type of presentation - day, week or month;
- **init** - specifies a function to be executed on component initializing. The property may include:
  - *scheduler.config.xml_date* - defines data format, e.g. "%Y-%m-%d %H:%i";
  - *scheduler.config.first_hour* (integer) - specifies an hour to start the day;
  - *scheduler.config.multi_day* (boolean) - allows/forbids creating events that last several days.
- **ready** - specifies a function to be executed when the component is fully loaded;
- **parse** (string) - XML string with predefined events.

Check <a href="http://dhtmlx.com/docs/products/dhtmlxScheduler/index.shtml">Scheduler Documentation</a> for more details.

Read more about date formatting methods in the [corresponding chapter of the manual](helpers/date_formatting_methods.md). 

##DHTMLX Gantt Chart 

DHTMLX Gantt is a chart for visualizing project schedule that allows for easy setting and showing dependencies between tasks. It's highly customizable and features flexible API.  
Full into about it can be found in the dedicated section of <a href="http://dhtmlx.com/docs/products/dhtmlxGantt/">DHTMLX site</a>.

<img src="desktop/gantt.png"/>

###Gantt Initialization

To include Scheduler into your app, you need to add a link to a dedicated library file into your document head section. 

~~~html
<script type="text/javascript" src="./gantt.js"></script>
~~~
 And then init the view:
 
~~~js
 webix.ui({
	view:"dhx-gantt", 
	init:function(){...},
	ready:function(){
		gantt.parse(tasks); //adding tasks
	}
});
~~~

Related sample: <a href="http://webix-hub.github.io/components/gantt/sample.html">Gantt Chart</a>

###Gantt Properties

- **init** - functions to execute on initialization;
- **ready** - specifies a function to be executed when the component is fully loaded.

###Related Articles

- [Text Editor Integration](desktop/text_editors.md)
- [Chart Integration](desktop/chart_integration.md)
- [Integration with Geographical Maps](desktop/maps.md)

@complexity:2