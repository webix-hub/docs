onBeforeSync
=============


@short: called when server side response received, but not processed yet
	

@params:
- obj		object		object with item ID and operation status
- text		string		full text of server side response
- data		object		ajax response object
- loader	object		ajax loader object

@example: 
	
dp.attachEvent("onBeforeSync", function(id, text, data, loader){
    //... some code here ... 
});

@relatedapi:
	api/dataprocessor_onaftersync_event.md

@template:	api_event


	
@descr:


