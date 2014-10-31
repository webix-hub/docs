Read-only Mode
============

The mobile scheduler can be used in 2 modes:

- **Edit** (by default)
- **Read-only**

To activate the **read-only** mode you should set the **scheduler.config.readonly** option to true. 
Beware! The option should go before the code line with scheduler initialization.

From now on, users can't modify events. The 'Add', 'Edit', 'Delete event' buttons, allowing to do it, will be hidden.

~~~js
scheduler.config.readonly = true;
webix.ready(function(){
	webix.ui.fullScreen();
	webix.ui({
		view: "scheduler",
		id: "scheduler"
	});
	$$("scheduler").load("../php/events.php","scheduler");
});
~~~

{{sample
01_basic/04_readonly.html
}}
