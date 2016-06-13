attachEvent
=============

@short:
	attaches the handler to an inner event of the component (allows behaviour customizations)

@params:
- type		string			the event name, case-insensitive
- functor	function		the function object or name
* id		string		the event id


@returns:
	event id		id		the id of the attached event handler

@example:
dtable.attachEvent("onAfterLoad",function(){
	this.select(2);
})

	
@template:	api_method
@defined:	EventSystem	

@related: 
	desktop/event_handling.md
@relatedsample:
	08_chart/08_dynamic/02_events.html
@relatedapi: 
	api/refs/eventsystem.md,
	api/eventsystem_detachevent.md, 
	api/eventsystem_hasevent.md
	api/eventsystem_callevent.md
	

@descr:

### How the handler is provided

You can use the method with an inline function or 
provide just the global function reference. In the second case, 
be sure that the function is visible from the calling point. 


~~~js
function doTask(){ ... };
dtable.attachEvent("onBeforeLoad", doTask); //uses the reference
dtable.attachEvent("onBeforeLoad", "doTask"); //will work as well, but not recommended
~~~

### The handler id

The last parameter allows you to define the id of the attached handler. 
If it was not specified, some unique value will be assigned as the id.
The only purpose of such id - [detaching the handler from an event](datatable/events_handling.md#methodattachevent)
(in most cases you don't need to care about the handler's id).


### Handler function parameters

Check the related documentation to get the full list of parameters. The amount and meaning will vary for different events.

The value which is returned by an event can change behavior of component. Returning <i>true</i> or <i>nothing</i> will be considered as the positive signal, while returning <i>false</i> will be considered as a signal to stop the current activity. 

~~~js
dtable.attachEvent("onBeforeSelect", function(id){
    if (id == 123)
		return false; //blocks selection of a specific element
});
~~~


