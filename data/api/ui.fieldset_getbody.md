getBody
=============


@short: returns sub-view of fieldset
	

@example:

var set = webix.ui({
    view:"fieldset", label:"Test area",
    body:{
       view:"text", label:"Field B"
    }
});
var text = set.getBody();


@returns:
- view	object	webiv ui object, which is placed inside fieldset
	




@template:	api_method
@descr:


