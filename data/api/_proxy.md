proxy
=============


@short: creates proxy object
	

@params:
- type           string          type of proxy object
- source         string          url or datasource name


@returns:
- proxy          object          proxy object
	

@example:

var proxy = webix.proxy("cache", "users/data.php");
mytable.load(proxy);

@template:	api_method
@descr:


