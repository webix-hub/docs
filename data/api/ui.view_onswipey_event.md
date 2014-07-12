onSwipeY
=============


@short:
	occurs on vertical swipe movement

@params:
- start_context			object		object with parameters of swipe movement start
- current_context		object 		object with parameters of swipe movement end


@example:
webix.attachEvent("onSwipeX",function(start_context,current_context){
	//your code here
});

@template:	api_event
@descr:

Parameters of the start_event_context and current_event_context objects are given below:

- x - {number} horizontal event position
- y - {number} vertical event position
- target - {object} the html element where the event started/ended
- time - {Date object} the time of event start/end

To check whether the swipe direction is "from bottom to top" or "from top to bottom", you can calculate the difference between currentContext.y and startContext.y. 
If the difference is positive, swipe movement direction was "from bottom to top". In case of a negative value, the direction was "from top to bottom".

~~~js
// example of usage
webix.attachEvent("onSwipeY",function(c1,c2){
   if( c2.y - c1.y > 0 ){
        // swipe from bottom to top
    }
   else{
       // swipe from top to bottom
   }
});
~~~