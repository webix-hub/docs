onTouchEnd
=============


@short:
	 occurs when touch movement is ended

@params:

- start_context			object		object with parameteres of touch movement start
- current_context		object 		object with parameteres of touch movement end

@example:

webix.attachEvent("onTouchEnd",function(start_context,current_context){
    //your code here
});

@template:	api_event
@descr:

Parameters of the start_event_context and current_event_context objects are given below:

- x - {number} horizontal event position
- y - {number} vertical event position
- target - {object} the html element where the event started/ended
- time - {Date object} the time of event start/end
