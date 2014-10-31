Customizing the "Edit" Form
=============================

Whenever you need to edit events' details, make use of the "Edit" form. 
<br><br>
<img src="mobile_scheduler/edit_form.png"/>
<br>

For customizing the "Edit" form you should use the **'scheduler.config.form'** object. 
In this object you must specify all the controls you want the form to contain inside.

Into **'scheduler.config.form'** you can put any Form control (read about the controls in the related article desktop/controls.md).

By default, **'scheduler.config.form'** looks like:

~~~js
scheduler.config.form = [
	{	
    	view:"text",     
    	id:'text',       
    	label:scheduler.locale.labels.label_event, 
        labelWidth: 90,
    	name:'text'
    },
    {
    	view:"datetext", 
        id:'start_date', 
        label:scheduler.locale.labels.label_start, 
        name:'start_date', 
        labelWidth: 90,
        dateFormat:scheduler.config.form_date
    },
    {
    	view:"datetext", 
        id:'end_date',   
        label:scheduler.locale.labels.label_end,   
        name:'end_date',   
        dateFormat:scheduler.config.form_date
    },
    {
    	view:"checkbox",	
        id: "allDay", 
        name: "allDay", 
        label: scheduler.locale.labels.label_allday, 
        labelWidth: 100,  
        value:0},
    },
    {
    	view:"textarea", 
        id: "details",  
        name:"details",
        label: scheduler.locale.labels.label_details,                
        labelWidth: 90,
        height:150
    }
];

~~~

There are 3 mandatory controls which you can't remove 
(you are also not allowed to change or remove their parameters' 'ids' as they're used in the scheduler code files):

- **text**
- **start_date**
- **end_date**

Two last default controls are optional and you can remove them if needed:

- **allDay**
- **details**

{{sample
04_customization/03_custom_form.html
}}