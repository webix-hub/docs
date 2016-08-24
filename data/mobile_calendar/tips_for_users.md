Tips for Users of dhtmlxScheduler 
===================================

1) Webix Scheduler as well as dhtmlxScheduler allows defining date formats. The details are given in the article mobile_calendar/date_format.md.

2) Scheduler supports multi-day and recurring events, too.

3) Webix Scheduler also allows applying templates to its views. Read more in the article mobile_calendar/calendar_templates.md.

4) Elements' sizes are customizable, too. This feature is described in the mobile_calendar/sizing.md article.

5) If you are going to use dhtmlxConnector to load and save data, you should do the following:

- define "scheduler" as "DataDriver" in the api/link/ui.proto_load.md method:

~~~js
...
$$("scheduler").load("data/events.php","scheduler");
...
~~~

- set the **save** property of the scheduler to apply connector for data saving:

~~~js
...
webix.ui({
	view: "scheduler",
	id: "scheduler",
 	save: "connector->data/events.php"
});
...
~~~

@spellcheck: DataDriver