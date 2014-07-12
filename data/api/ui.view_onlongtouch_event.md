onLongTouch
=============


@short:
	 fires on holding finger in some position for a certain period of time 
     
@params:

- context 	object		object with event parameters

@example:
webix.attachEvent("onLongTouch",function(context){
	//your code here
})

@template:	api_event
@descr:
The time period is defined by the webix.Touch.longTouchDelay property.

Parameters of the context object are the following:

- x - {number} horizontal event position
- y - {number} vertical event postion
- target - {object} the html element where the event started
- time - {Date object} the time of event start