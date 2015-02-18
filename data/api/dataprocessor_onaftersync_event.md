onAfterSync
=============

@short: called when server side response received and processed
	

@params:
- obj		object		object with item ID and operation status
- text		string		full text of server side response
- data		object		ajax response object
- loader	object		ajax loader object


@example: 
	
dp.attachEvent("onAfterSync", function(id, text, data, loader){
    //... some code here ... 
});

@relatedapi:
	api/dataprocessor_onbeforesync_event.md

@template:	api_event

	
@descr:

The first parameter, **object** looks like: 

~~~js
{
	id:1,
    status:"insert" //or "update", "delete"
}
~~~

