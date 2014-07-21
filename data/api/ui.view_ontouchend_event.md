onTouchEnd
=============


@short:
	 occurs when the touch event is ended

@params:

- start_context			object		object with parameteres of touch event start
- current_context		object 		object with parameteres of touch event end

@example:

webix.attachEvent("onTouchEnd",function(start_context,current_context){
    //your code here
});

@template:	api_event
@descr:

Parameters of the **start_context** and **current_context** objects are given below:

- x - {number} horizontal event position
- y - {number} vertical event position
- target - {object} the html element where the event started/ended
- time - {Date object} the time of event start/end
