Recurring Events 
===============================

Enabling functionality
--------------------

You can set a repetition period for events in the scheduler. 
For this purpose, you should enable the recurring events functionality, by means of using the following configuration property:

**scheduler.config.recurring = true;**

Once the recurring events are enabled, the "Edit form" starts looking like shown below:
<br><br>
<img src="mobile_scheduler/recurring_edit_form.png"/>
<br><br>

To set a single event in this form, the user must choose the option **Never** in the **Repeat field**.
<br><br>
<img src="mobile_scheduler/recurring_repetition_type.png"/>
<br><br>

{{sample
62_scheduler/02_recurring/01_recurring.html
}}

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

Repetition variations
---------------------------------------------------

As it was mentioned above, the **Repeat field** allows setting 4 different repetition steps: 

- **'daily'**

<img src="mobile_scheduler/daily_repetition.png"/>

- **'weekly'**

<img src="mobile_scheduler/weekly_repetition.png"/>

- **'monthly'**

<img src="mobile_scheduler/monthly_repetition.png"/>

- **yearly'**

<img src="mobile_scheduler/yearly_repetition.png"/>

You can also set the date of **repetition's end**:

<img src="mobile_scheduler/ending_repetition.png"/>



Customizing the 'Edit' form
----------------------------------

The recurring 'Edit form' uses the same [customization technique](mobile_calendar/details_form.md) as the standard form does.

There's only a difference in the **'scheduler.config.form'** template. For recurring events it will look like:

~~~js
scheduler.config.form = [
	{	
    	view: "text",		
        label: scheduler.locale.labels.label_event,	
        name: 'text', 
        labelWidth: 90
    },
	{
    	view: "datetext",	
        label: scheduler.locale.labels.label_start,	
        id: 'start_date',	
        name: 'start_date', 
        dateFormat: scheduler.config.form_date, 
        labelWidth: 90
    },
	{
    	view: "datetext",	
        label: labels.label_end,		
        id: 'end_date',		
        name: 'end_date', 	  
        dateFormat: scheduler.config.form_date, 
        labelWidth: 90
    },
	{
    	view: "checkbox",	
        id: 'allDay',	
        name: 'allDay', 
        label: scheduler.locale.labels.label_allday,  
        value: 0, 
        labelWidth: 100
    },
	{
    	view: "rectext",	
        label: scheduler.locale.labels.recurring.repeat,	
        id: 'rec_type',	
        name: 'rec_type', 
        readonly: true, 
        labelWidth: 90
    },
	{
    	view: "textarea",	
        label: scheduler.locale.labels.label_details,	
        id: 'details',	
        name: 'details',		
        height: 110, 
        labelWidth: 90
    },
	{
    	view: "text",	
        hidden: true, 
        id: 'event_length', 
        name: 'event_length'
    }
];
~~~