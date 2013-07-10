Scheduler Integration
=========================

###Overview

Sceduler is an organizer to create and display events. It can show a schedule for a day, week and month.

<img src="desktop/scheduler.png"/>

###Scheduler Initialization

To include a scheduler into your app, you need to add a link to a dedicated library file into your document head section.

~~~html
<head>
	<script src="../../codebase/thirdparty/scheduler.js" type="text/javascript" 
    charset="utf-8">
    </script>
</head>
~~~

~~~js
	webix.ui({
		view:"webix-scheduler", 
		date:new Date(2010,0,5),
		mode:"week",
		init:function(){...},
		ready:function(){
							scheduler.parse("")
					}
		});


~~~

{{sample 32_thirdparty/04_scheduler.html }}

###Scheduler properties

- **date** (function) - defines the start date of the schedular. In the sample above, it is th 5the of January, 2010; If you pass no parameters into the *new Date()*
constructor, the component will show current date;
- **mode** (string) - defines the type of presentation - day, week or month;
- **init** - specifies a function to be executed on component initializing. The property may include:
  - *scheduler.config.xml_date* - defines data format, e.g. "%Y-%m-%d %H:%i";
  - *scheduler.config.first_hour* (integer) - specifies an hour to start the day;
  - *scheduler.config.multi_day* (boolean) - allows/forbids creating events that last several days.
- **ready** - specifies a function to be executed when the component is fully loaded;
- **parse** (string) - XML string with predefined events.

Read more about date formatting methods in the [corresponding chapter of the manual](helpers/date_formatting_methods.md). 

###Related Articles

- [Text Editor Integration](desktop/text_editors.md)
- [Chart Integration](desktop/chart_integration.md)
- [Integration with Geographical Maps](desktop/maps.md)

@complexity:2