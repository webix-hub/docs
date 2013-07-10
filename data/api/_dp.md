dp
=============


@short: returns dataprocessor object
	

@params:
- name		string		id of view, or view object

@returns:
- obj		object		dataprocessor object

@example:
var dp1 = webix.dp("myview");
var dp2 = webix.dp(dtable);

var dp3 = webix.dp({
	master:$$('myview');
});

@template:	api_method
@descr:

If there was not dataprocessor for the component - new one will be created. 