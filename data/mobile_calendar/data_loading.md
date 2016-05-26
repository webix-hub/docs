Loading and Saving Data in Mobile Scheduler
=======================

Mobile Scheduler supports [data loading](desktop/data_loading.md) from JSON and XML data sources. By default, data is loaded into Scheduler in [JSON](desktop/data_types.md#nonhierarchicaldata) format.

~~~js
{
	id: 7,
	text: "some_text",
	start_date:"2014-05-11 00:00",
	end_date:"2014-05-18 00:00"
	...
}
~~~

Each data item (event) should have a unique *id* property and the following obligatory parameters:

- text - {string} the item's (event's) title
- start_date - {string} the start date of the event
- end_date - {string} the end date of the event

XML formats
--------------

There are two possible xml data types:

- "xml" - event items are described as &#60;item&#62; tags and properties as tag attributes


~~~js
$$("scheduler").load("events.php","xml");
~~~

Here is an example of "xml" data source:

~~~xml
<data>
<item id="2" start_date="2014-05-24 00:00:00" 
	   end_date="2014-06-08 00:00:00" text="French Open"></item>
<item id="3" start_date="2014-06-10 00:00:00" 
	   end_date="2014-06-13 00:00:00" text="Aegon Championship"></item>
<item id="4" start_date="2014-06-21 00:00:00" 
	   end_date="2014-07-05 00:00:00" text="Wimbledon"></item>
</data>
~~~

- "scheduler" - event items are described as &#60;event&#62; tags and properties as subtags

You can use "scheduler" data type (xml datasource), if you are going to use Connector for data loading and saving.

~~~js
$$("scheduler").load("events.php","scheduler");
~~~

In case of "scheduler" data type, the xml has the following format:

~~~xml
<data>
	<event id="2">
		<start_date>
			<![CDATA[ 2014-05-24 00:00:00 ]]>
		</start_date>
		<end_date>
			<![CDATA[ 2014-06-08 00:00:00 ]]>
		</end_date>
		<text>
			<![CDATA[ French Open ]]>
		</text>
		<details>
			<![CDATA[ Philippe-Chatrier Court Paris, FRA ]]>
		</details>
	</event>
	<event id="3">
		<start_date>
			<![CDATA[ 2014-06-10 00:00:00 ]]>
		</start_date>
		<end_date>
			<![CDATA[ 2014-06-13 00:00:00 ]]>
		</end_date>
		<text>
			<![CDATA[ Aegon Championship ]]>
		</text>
		<details>
			<![CDATA[ The Queens Club London, ENG ]]>
		</details>
	</event>
</data>
~~~

{{sample
62_scheduler/01_basic/01_init.html
}}

If you have a big data source, you can enable mobile_calendar/dynamic_loading.md and data will be loaded by parts: months or years. 



Saving data
-------------

There are several ways of saving data in Webix. The details on saving data are given in the [Data Saving](desktop/serverside.md#datasaving) article.

To save data in scheduler you can make use of DataProcessor and set the api/link/ui.proto_save_config.md property:

~~~js
webix.ready(function(){
	webix.ui({
    	view: "scheduler",
    	id: "scheduler",
    	save: ".../events.php"
	});
	$$("scheduler").load("events.php");
});
~~~

You can find more information in the chapter [Saving Data with Connectors](desktop/dataconnector.md#savingdatawithconnectors).

{{sample
62_scheduler/03_data/01_data_saving.html
}}

Or you can implement your own saving solution by using [events](mobile_calendar/handling_events.md).