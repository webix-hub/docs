load
=============



@short:
	loads data from an external data source

@params:
- url		string		the data url
* type		string		the type of data to load: 'json' (default), 'xml', 'jsarray', 'csv'
* callback		function		the callback function


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

###Different count of parameters

The method **load** can be used with different count of parameters:

- By default, data type is set to *'json'*: 
~~~js
$$('component_id').load("some/path/data.json");
~~~

- The same with the callback will look as in:
~~~js
$$('component_id').load("some/path/data.json", function(text, xml, http_request){
  //do something
});
~~~

- And if you need to specify the data type, above examples will look as in:
~~~js
$$('component_id').load("some/path/data.xml", "xml");
//or
$$('component_id').load("some/path/data.xml", "xml", function(text, xml, http_request){
  //do something
});
//or 
$$('component_id').load('some/path/data.xml',"xml", {
    error:function(text, xml, http_request){
        alert("error");
    },
    success:function(text, xml, http_request){
        alert("success");
    }
});
~~~
###Callback 
By default, the loading is async., so you will need to use the callback to trigger some action after loading is finished. 

The callback function takes 3 parameters:

1. The text of the response
2. The xml object of the response - presented only if the response was valid xml
3. The row http request object

###Error handlers
The callback can be defined as a combination of **error** and **success** functions (if you need you can use just one of these functions).
In this case, you should write the desired actions in the appropriate handler. 


### Post and sync. loading 
As the **load** method doesn't provide direct ability to use *post* and *sync*, you can use the api/link/ui.datatable_parse.md method instead:

~~~js
//sync data loading
var result = webix.ajax().sync().get("some.json");
$$('component_id').parse(result.responseText);
~~~

~~~js
//using POST for data loading
var result = webix.ajax().post("mydata.php", "some=value", function(text){
	$$('component_id').parse(text);
});
~~~



