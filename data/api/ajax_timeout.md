timeout
=============


@short: max time for ajax request in milliseconds
	

@params:


- time       int     timeout in milliseconds

@example:

webix.ajax().timeout(3000).get("data.php");


@template:	api_method
@descr:

If connection is slow and data loading takes more than defined number of milliseconds, ajax call will be stop and will trigger a error callback.