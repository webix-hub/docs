Customizing "Details" Form
=============================

Details form is intended for editing events' details.

(image)

For customizing the 'Details form' you should use the **'scheduler.config.form'** object. 
In this object you must specify all the controls you want the form to contain inside.

Into **'scheduler.config.form'** you can put any Form control (read about the controls in the related article desktop/controls.md).

By default, **'scheduler.config.form'** looks like:

~~~js
scheduler.config.form = [
	{view:"text",     id:'text',       label:scheduler.locale.labels.label_event, name:'text'},
    {view:"datetext", id:'start_date', label:scheduler.locale.labels.label_start, name:'start_date', dateFormat:scheduler.config.form_date},
    {view:"datetext", id:'end_date',   label:scheduler.locale.labels.label_end,   name:'end_date',   dateFormat:scheduler.config.form_date},
    {view:"toggle",   id:'allDay',     label:"", align: "right", value:"0", options: [
		{value:"0",label:scheduler.locale.labels.label_time},               
        {value:"1",label:scheduler.locale.labels.label_allday}
    ]},
    {view:"textarea", id:'details',    label:labels.label_details,                name:'details',	 height:150}
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

**Related sample**: samples/01_basic/06_custom_form.html