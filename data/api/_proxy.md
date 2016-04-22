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
@related: desktop/server_proxy.md
@relatedsample:
	/40_serverside/03_php_custom/02_datatable_saving_rest.html
@descr:

Possible types of proxy objects are: 

- offline
- cache
- local
- connector 
- rest
- post 
- sync 
- indexdb
- faye 
- binary
- json

More information about each proxy can be found in the [related article](desktop/server_proxy.md).




