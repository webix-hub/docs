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






<div class='h2'>Methods</div>

{{api
- api/ajax_bind.md - binds callback function to object
- api/ajax_del.md - issues a DELETE Ajax request to the server
- api/ajax_get.md - issues a GET Ajax request to the server
- api/ajax_getxhr.md - returns an xmlHttpRequest object
- api/ajax_headers.md - sets the HTTP request header(s)
- api/ajax_post.md - issues a POST Ajax request to the server
- api/ajax_put.md - issues a PUT Ajax request to the server
- api/ajax_response.md - sets response type of the request
- api/ajax_sync.md - 'says' to send requests synchronously
}}





<div class='h2'>Other</div>


{{api
- api/ajax_master_other.md - return a master component for the ajax request
}}


@index:
- api/refs/ajax_methods.md
- api/refs/ajax_others.md

