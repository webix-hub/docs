Recurring Events Functionality
===============================

Enabling functionality
--------------------

By default, scheduler doesn't support recurring events. To enable such functionality you should include 2 special files
instead of regular dhtmlxscheduler_mobile.js, dhtmlxscheduler_mobile.css:

- **dhxscheduler_mobile_rec.js**
- **dhxscheduler_mobile_rec.css**

The files support all the existing functionality of the standard scheduler + recurring events.

Once the recurring events are enabled, the details form starts look like shown below:

(image)

To set a single event with such a form, the user must choose the option **Never** in the **Repeat field**.

(image)

**Related sample**: samples/02_recurring/01_recurring.html

Format details
------------------

A recurring event is stored in the database as a single record that contains all fields of regular events + 2 additional:

- **rec_type** - defines the logic of repetition;
- **event_length** - the actual time length of an event in seconds.

However, the fields **start_date** and **end_date** slightly change their meaning:

- **start_date** - the start date of the first event in a series in the format 'yyyy-mm-dd hh:mm:ss' (format details);
- **end_date** - the end date of the last event in a series in the format 'yyyy-mm-dd 00:00:00' (format details).

For example, a recurring event that starts on January 3, 2013 at 10:00, repeats every day and 
ends on January 13, 2013 at 12:00 will be presented in the db as follows:

~~~js
id:1,
start_date:"2013-01-03 09:00:00",
end_date:"2013-01-13 00:00:00",
text:"some_text",
details:"",
rec_type:"day____",
event_length:"7200"
~~~

The client side gets data from the **rec_type** field as a string of the following format:

**[type]&#95;[count]&#95;[day]&#95;[count2]&#95;[days]#[extra]**

- **type** - the type of repetition: 'day','week','month','year';
- **count** - the interval between events in the “type” units;
- **day** and **count2** - define the day of a month (first Monday, third Friday, etc.);
- **days** - a comma-separated list of the affected week days;
- **extra** - the extra info that can be used to change presentation of recurring details.

Examples of the **rec_type** data:

- day_3___ - each three days;
- month_2___ - each two month;
- month_1_1_2_ - the second Monday of each month;
- week_2___1,5 - Monday and Friday of each second week; 

The double or triple underline indicates that the related parameters of the string are omitted.

~~~js
webix.ready(function(){
	webix.ui.fullScreen();
	webix.ui({ view:"scheduler", id:"scheduler"});	
 
    var data = [
		{
			id:1,
			start_date:"2012-06-01 09:00:00",
			end_date:"2092-02-01 09:00:00",
			text:"going to the job",
			details:"",
			rec_type:"week_1___1,2,3,4,5",
			event_length:"7200"
		},
                ...
	];
 
	$$("scheduler").parse(data);
});
~~~

Setting recurring events (repetition variations)
---------------------------------------------------

As it was mentioned above, the **Repeat field** allows setting 4 different repetition steps: 'day','week','month','year'.

(5 images)

Customizing the 'Details' form
----------------------------------

The recurring 'Details form' uses the same customization technique as the standard form does.

Just the **'scheduler.config.form'** template for recurring events will look like:

~~~js
scheduler.config.form = [
	{view:"text",     id:'text',          label:scheduler.locale.labels.label_event, name:'text'},
    {view:"datetext", id:'start_date',    label:scheduler.locale.labels.label_start, name:'start_date', dateFormat:scheduler.config.form_date},
    {view:"datetext", id:'end_date',      label:scheduler.locale.labels.label_end,   name:'end_date', dateFormat:scheduler.config.form_date},
    {view:"toggle",   id:'allDay',        label:"", align: "right",value:"0", options:[ 
		{value:"0",label:scheduler.locale.labels.label_time},
        {value:"1",label:scheduler.locale.labels.label_allday}
    ]},
    {view:"rectext",   id:'rec_type',     label:scheduler.locale.labels.recurring.repeat, readonly:true},
    {view:"textarea",  id:'details',      label:scheduler.locale.labels.label_details,    height:110},
    {view:"input",     id:'event_length', type:"hidden",}
];
~~~