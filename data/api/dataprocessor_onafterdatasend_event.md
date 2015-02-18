onAfterDataSend
=============

@short: fires the moment data has gone to server
	
@params:
- details	object	object with data details (see below)

@example:
//dp is a dataprocessor object
dp.attachEvent("onAfterDataSend", function(details){
	//code
});

@related:
	desktop/dataprocessor.md
@relatedapi:
	api/dataprocessor_onbeforedatasend_event.md
@template:	api_event
@descr:

The event parameter, **details**, consists of: 

- **data** (*object*)	- data object;
- **id** (*string, number*) - ID of a data item on client side;
- **operation**	(*string*) - operation name ("update, "insert", "delete");

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
