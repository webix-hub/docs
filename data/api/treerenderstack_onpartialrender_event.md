onPartialRender
=============


@short: called when part of tree is repainted
	

@params:
- id		id		id of item which initiated repainting
- data		object	extra data realted to repainting
- type		string	type of repainting operaton

@example: 
	
some.attachEvent("onPartialRender", function(id, data, type){
    //... some code here ... 
});

@template:	api_event
@descr:


most common case - opening | closing of branches