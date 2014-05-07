ajax 
=============


{{memo Ajax operations (data loading, server side events). }}

~~~js
	webix.ajax("data.php");
	//or
	webix.ajax.post("data.php", {
		someParameter:"someValue"
	});
~~~

The lib can execute **get** and **post** requests in sync and async mode. For more details check [Ajax operations](helpers/ajax_operations.md) article.





Methods
-------

{{links
- api/ajax_del.md - issues a DELETE Ajax request to the server
- api/ajax_get.md - issues a GET Ajax request to the server
- api/ajax_getxhr.md - returns an xmlHttpRequest object
- api/ajax_header.md - sets the HTTP request header
- api/ajax_post.md - issues a POST Ajax request to the server
- api/ajax_put.md - issues a PUT Ajax request to the server
- api/ajax_sync.md - 'says' to send requests synchronously
}}




Other
-----

{{links
- api/ajax_master_other.md - 
}}


@index:
- api/refs/ajax_methods.md
- api/refs/ajax_others.md

