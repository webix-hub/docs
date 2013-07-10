
{{memo ajax operations (data loading, server side events)}}

~~~js
	webix.ajax("data.php");
	//or
	webix.ajax.post("data.php", {
		someParameter:"someValue"
	});
~~~

The lib can execute **get** and **post** requests in sync and async mode. For more details check [Ajax operations](helpers/ajax_operations.md) article.



