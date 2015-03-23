escape
=============


@short: custom escaping function
	

@type: boolean
@example:

var dp = new webix.DataProcessor({
    master:$$("list"),
    escape:function(value){
         return window.escape(value); //non-utf escaping
    }
})

@template:	api_config
@descr:


By default dataprocessor uses utf-8 escaping ( encodeURIComponents ). 