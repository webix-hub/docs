onLoadError
=============


@short: occurs when server side response is invalid and can't be procesed
	

@params:
- text		string		full text of server side response
- data		object		ajax response object
- loader	object		ajax loader object

@example: 
	
some.attachEvent("onLoadError", function(text, data, loader){
    //... some code here ... 
});

@template:	api_event
@descr:


It will not fire for valid responses, which informs about data saving problem, but only for non-parsable responses