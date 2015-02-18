onBeforeDataSend
=============


@short: called before sending data to server side
	

@params:
- details	object		object with data details (see below)

@example: 
	
dp.attachEvent("onBeforeDataSend", function(details){
    //... some code here ... 
});

@template:	api_event

@relatedapi:
	api/dataprocessor_onafterdatasend_event.md
    desktop/dataprocessor.md
	
@descr:

The event parameter, **details**, consists of: 

- **data** (*object*)	- data object;
- **id** (*string, number*) - ID of a data item on client side;
- **operation**	(*string*) - operation name ("update, "insert", "delete"););

and looks like: 

~~~js
{
	id:5,
    operation:"update",
    data:{
    	id:5, 
        title:"The Godfather",
        rating:"9.2"
    }

}
~~~


