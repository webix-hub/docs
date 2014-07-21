onSwipeX
=============


@short:
	occurs on a horizontal swipe movement

@params:

- start_context			object		object with parameters of swipe event start
- current_context		object 		object with parameters of swipe event end

@example:

webix.attachEvent("onSwipeX",function(start_context,current_context){
	//your code here
});


@template:	api_event
@descr:

Parameters of the **start_context** and **current_context** objects are given below:

- x - {number} horizontal event position
- y - {number} vertical event position
- target - {object} the html element where the event started/ended
- time - {Date object} the time of event start/end


To check whether the swipe direction is "from right to left" or "from left to right", you can calculate the difference between currentContext.x and startContext.x. 
If the difference is positive, swipe movement direction was "from left to right". In case of a negative value, the direction was "from right to left".

~~~js
// example of usage
webix.attachEvent("onSwipeX",function(c1,c2){
   if( c2.x - c1.x > 0 ){
        // swipe from left to right
    }
   else{
       // swipe from right to left
   }
});
~~~