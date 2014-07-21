onTouchStart
=============


@short:
	when some webix view has been touched 

@params:

- context 	object		object with event parameters

@example:
webix.attachEvent("onTouchStart",function(context){
	//your code here
})

@template:	api_event
@descr:

Parameters of the context object are the following:

- x - {number} horizontal event position
- y - {number} vertical event position
- target - {object} the html element where the event started
- time - {Date object} the time of event start