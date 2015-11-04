attachProgress
=============


@short:
	asssigns handler for data saving actions

@params:
- start		function	handler will be called for data saving start
- end		function	handler will be called for data saving end
- error		function	handler will be called for data saving error

@example:
	
webix.dp("myview").attachProgress(function(){
    webix.message("Saving...");
}, function(){
    webix.message("Saved!");
}, function(response){
    webix.message("Error!");
});




@template:	api_method
@descr:


API is experimental and can be removed in next versions