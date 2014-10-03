onCheck
========================



@short: fires when a checkbox is checked or unchecked in the datatable item
	

@params:
- row		number		id of the row
- column	string		id of the column
- state		number		new checkbox state

@example:

datatable.attachEvent("onCheck", function(rwo, column, state){
	//code
));


@template:	api_event

@relatedsample:
	15_datatable/14_events/01_log_all_events.html

@descr:

Checkbox state is **0** or **1** by default, if other is not stated by **checkValue** and **uncheckValue** properies of the column: 

~~~js
{id:"ch", template:"{common.checkbox()}", checkValue:"On", uncheckValue:"Off"}
~~~

