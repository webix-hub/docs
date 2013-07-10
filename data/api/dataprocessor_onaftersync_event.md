onAfterSync
=============

@short: called when server side response received and processed
	

@params:
- hash		hash		hash of per-item responses
- text		string		full text of server side response
- data		object		ajax response object
- loader	object		ajax loader object


@example: 
	
some.attachEvent("onAfterSync", function(hash, text, data, loader){
    //... some code here ... 
});

@template:	api_event


	
@descr:


