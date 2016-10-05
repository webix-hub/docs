onAfterSync
=============

@short: called when server side response received and processed
	

@params:
- statusObj		object		object with item ID and operation status
- text			string		full text of server side response
- data			object		AJAX response object
- loader		object		AJAX loader object


@example: 
	
dp.attachEvent("onAfterSync", function(statusObj, text, data, loader){
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

