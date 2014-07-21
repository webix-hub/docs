url
=============


@short: server side data saving script
	

@type: string
@example:

var dp = new webix.DataProcessor({
    master:$$("list"),
    url:"some.php"
});

@template:	api_config
@related:
	desktop/dataprocessor.md
@descr:

If you are using connector on server side you can switch to related protocol by using

~~~js
var dp = new webix.DataProcessor({
    master:$$("list"),
    url:"connector->some.php"
});
~~~