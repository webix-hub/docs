Loading and Saving Events
=========================

##Loading Events


To load events to the scheduler you should use either the method [load()](api/link/dataloader_load.md) or the method [parse()](api/link/dataloader_parse.md):

~~~js
$$("scheduler_id").load("data/events.xml","xml");
//or 
$$("scheduler_id").parse([
	{ id:1, start_date:"2009-7-1 6:00", end_date:"2009-7-1 8:00", text:"Event 1"},
	{ id:2, start_date:"2009-7-2 6:00", end_date:"2009-7-2 8:00", text:"Event 2"}
],"json");
~~~

The method [load()](api/link/dataloader_load.md) takes 2 parameters and loads data from some external URL:

- **url** - the data url;
- **type** - the type of the loading data: 'json', 'xml' or 'scheduler'.

The method [parse()](api/link/dataloader_parse.md) also takes 2 parameters but loads data from a data object:

- **data** - the string or object, which represents data;
- **type** - the type of loading data: 'json', 'xml' or 'scheduler'.

**Related sample**: samples/01_basic/01_init.html

###Supported data types

The mandatory data fields:

- **start_date** - the start date of an event in the format 'yyyy-mm-dd hh:mm:ss' (format details);
- **end_date** - the end date of an event in the format 'yyyy-mm-dd hh:mm:ss' (format details);
- **text** - the title of an event.
 
The optional data fields:

- **details** - the description of an event;
- **any custom**.

####json

~~~js
[
 { id:1, start_date:"2011-05-24 00:00:00", end_date:"2011-06-08 00:00:00", 
   text:"French Open", details:"Philippe-Chatrier Court Paris, FRA" },
 { id:2, start_date:"2011-06-10 00:00:00", end_date:"2011-06-13 00:00:00", 
   text:"Aegon Championship", details:"The Queens Club London, ENG" }
]
~~~

####xml

~~~xml
<data>
	<item id="1">
		<start_date>2011-05-24 00:00:00</start_date>
		<end_date>2011-06-08 00:00:00</end_date>
		<text>French Open</text>
		<details>Philippe-Chatrier Court Paris, FRA</details>
	</item>
        ...
</data>
~~~

####scheduler

~~~html
<data>
	<event id="1">
		<start_date>2011-05-24 00:00:00</start_date>
		<end_date>2011-06-08 00:00:00</end_date>
		<text>French Open</text>
		<details>Philippe-Chatrier Court Paris, FRA</details>
	</event>
        ...
</data>
~~~

Saving data
------------

The mobile scheduler lets you save data back to DB: during initialization of the scheduler you should specify the appropriate server file in the parameter 'save' of the object constructor.

~~~js
webix.ready(function(){
	webix.ui({
		view: "scheduler",
		id: "scheduler",
		save: "php/events.php"
	});
	$$("scheduler").load("php/events.php","scheduler");
});
~~~

If you use dhtmlxConnector, the path to its file can be set as this parameter. In this case dhtmlxConnector will do all the server work.

**Related sample**: samples/01_basic/05_data_saving.html