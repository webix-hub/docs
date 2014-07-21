onBeforeSync
=============


@short: called when server side response received, but not processed yet
	

@params:
- id		id			id of saved record
- text		string		full text of server side response
- data		object		ajax response object
- loader	object		ajax loader object

@example: 
	
some.attachEvent("onBeforeSync", function(id, text, data, loader){
    //... some code here ... 
});

@template:	api_event


	
@descr:


