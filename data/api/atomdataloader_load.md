load
====


@short: Loads data from an external data source.

@params:
- url		string		the data url
* type		string		(optional) the type of data to load: 'json' (default), 'xml', 'jsarray', 'csv'
* callback		function		(optional) the callback function

@returns: 
promise	 object		"promise" object

@related:
	desktop/data_loading.md
@relatedapi:
	api/atomdataloader_url_config.md
	api/atomdataloader_parse.md
	api/atomdataloader_data_config.md
	api/atomdataloader_datatype_config.md
@relatedsample:
	40_serverside/01_php_vanila/06_form_loading.html


@example:
$$("mylist").load("data.xml", "xml");

@template:	api_method
@defined:	AtomDataLoader
@descr:

###Function signatures

The **load** method can be used with up to three parameters:

- By default, the data type is set to *'json'*:
~~~js
$$("component_id").load("some/path/data.json");
~~~

- You can also pass a callback function:
~~~js
$$('component_id').load("some/path/data.json", function(text, data, http_request){
  // do something with data.json()
});
~~~

- If you need to specify both the data type and the callback:
~~~js
$$("component_id").load("some/path/data.xml", "xml", function(text, data, http_request){
  // do something with the data object
});
//or
$$("component_id").load("some/path/data.xml", "xml", {
  error: function(text, data, http_request){
    webix.alert("error");
  },
  success:function(text, data, http_request){
    webix.message("success");
  }
});
~~~

###Callback 
By default, the loading is asynchronous, so you will need to use the callback to trigger some action after loading is finished.

The callback function takes 3 parameters:

1. The text of the response
2. The data object of the response
3. The raw HTTP request object

###Return Value

The method returns a [Promises/A+ compatible promise](http://promisesaplus.com/) object than contains the eventual result of an AJAX request.

Webix uses the [Promiz.js library](https://github.com/zolmeister/promiz) for promises. Learn more at:

- desktop/data_loading.md#promiseapiindataloading
- helpers/ajax_operations.md#promiseapiforajaxrequests

###Error handlers
The callback can be defined as a combination of **error** and **success** functions (you can use only one of them if you want to).


###Post and synchronous loading
As the **load** method doesn't provide direct ability to use *post* and *sync*, you can use the api/link/ui.datatable_parse.md method instead:

~~~js
// sync data loading
var result = webix.ajax().sync().get("some.json");
$$("component_id").parse(result.responseText);
~~~

~~~js
// using POST for data loading
var result = webix.ajax().post("mydata.php", "some=value", function (text) {
  $$("component_id").parse(text);
});
~~~
