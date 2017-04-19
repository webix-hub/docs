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
- view		object		Webix UI object placed into the fieldset
	




@template:	api_method
@descr:


