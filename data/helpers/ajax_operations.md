Ajax Operations
==================

Sending Data
------------ 

The simplest AJAX call can be performed as:

~~~js
webix.ajax("some.php", function(text){
	webix.message(text); //show server side response
});
~~~

The above code makes an asynchronous GET request to the "some.php" script and shows its response through a callback function. 


### Passing parameters

You can pass extra parameters:

- by including them in the request string:

~~~js
webix.ajax("some.php?action=info&id=123");
~~~

- by a separate string with parameters:

~~~js
webix.ajax().get("some.php", "action=info&id=123");
~~~

- by using a separate JSON object:

~~~js
webix.ajax().get("some.php",{ action:"info", id:123 });

//nested JSON object is possible
webix.ajax().get("some.php",{ action:"info", id:{ row:123, column:"title" }});
~~~

In case of object notation, the library will escape values automatically except for FormData case. 

- by using FormData:

~~~js
var formData = new FormData();

formData.append("action", "info");
formData.append("id", "123");

webix.ajax().post("some.php", formData);
~~~


### Post mode

The same function can be used to make POST requests:

~~~js
webix.ajax().post("some.php");
~~~

Here you can use two methods to provide extra parameters:

~~~js
//$_POST["action"]="info", $_POST["id"]="123"
webix.ajax().post("some.php","action=info&id=123");
webix.ajax().post("some.php", { action:"info", id:123}); 
webix.ajax().post("some.php", { action:"info", id:{ row:123, column:"title" }}); 
~~~


{{note
Note that when passing extra parameters into the server script by a separate string/object, you should specify the type of a request (GET or POST).
}}

### Sync mode 


There are two ways that Ajax can access the server:

- synchronous (before continuing, script waits for the server to reply back).
- asynchronous (script continues page processing and handles the reply as it comes).

By default, all requests are performed in the asynchronous mode, but there is a synchronous alternative:

~~~js
webix.ajax().sync().get("some.php");
webix.ajax().sync().post("some.php");
~~~


### Callback

For asynchronous AJAX calls you can define a callback function as the last parameter of the method. For GET and POST requests the syntax is the same.

The callback function takes the following arguments: 

- **text** - full text of response;
- **data** - response data that should be parsed as JSON or XML, whichever is applicable. It features the following methods to get the data: 
	- *json()* - parses data as JSON;
    - *xml()* - parses data as XML;
    - *rawxml()* - gets raw XML data;
    - *text()* - gets response text;
- **XmlHttpRequest** - loader object.

GET requests: 

~~~js
webix.ajax("some.php", function(text, data, XmlHttpRequest){
	data = data.json();
    //..
}); 

webix.ajax().get("some.php", function(text, data, XmlHttpRequest){
	//...
}); 
~~~

POST request:

~~~js
webix.ajax().post("some.php", function(text, data, XmlHttpRequest){
	//...
}); 
~~~

If you pass parameters to the server side script, the syntax is as follows: 

~~~js
webix.ajax().get(url, params, callback);
webix.ajax().post(url, params, callback);
~~~


It's possible to define two callback methods, one for valid server side response and the second one for the error response:

~~~js
webix.ajax("some.php",{
	error:function(text, data, XmlHttpRequest){
		alert("error");
	},
	success:function(text, data, XmlHttpRequest){
		alert("success");
	}
});
~~~


If you need to trigger multiple callbacks after the method's execution is finished, you can define an array of callbacks as the last parameter:

~~~js
//GET requests
webix.ajax().get(url, [array of callbacks]);
webix.ajax().get(url, params, [array of callbacks]);

//POST requests
webix.ajax().post(url, [array of callbacks]);
webix.ajax().post(url, params, [array of callbacks]);
~~~


In some cases you may need to provide some extra data for callback, which can be done in the next way:

~~~js
function after_call(text){
	 alert("Call: "+this.data+", response: "+text);
};
webix.ajax().get("some.php", after_call, { data:"my ajax"});
~~~

Basically, the parameter after callback will be accessible as "this" in the callback method.

For **sync** requests, there is no callback, because there is no need for waiting:

~~~js
var xhr = webix.ajax().sync().get("some.php");
var text = xhr.responseText;
~~~

### Extra headers

If the server side code requires some extra headers, you can send them as: 

~~~js
webix.ajax().headers({
	"Sent-by":"My Script" // any custom headers can be defined in such a way
}).get("./data.php");
~~~

You can use headers in combination with asynchronous *get()* and *post()* methods.

### JSON sending

If you are working with a web service, you may need to send JSON content to the server side. It can be done as:

~~~js
webix.ajax().headers({
	"Content-type":"application/json"
}).post("./data.php", JSON.stringify(payload), function(text){
	//optional callback here
});
~~~


Incoming Data Parsing 
---------------------

#### Plain response

In general case you can use the *text* parameter of the callback to access the data:

~~~js 
webix.ajax("./data.php", function(text){
	webix.message(text);
})
~~~

#### JSON response

While you can use the above code to access raw text response, there is a more neat solution:

~~~js
webix.ajax("some.php", function(text, data){
	//text = '{ some :"abc"}'
	alert(data.json().some); //abc
});
~~~

the second parameter of response can provide you with a ready-to-use JSON object. 

#### XML response

The same as it was described above, you can use:

~~~js
webix.ajax("some.php", function(text, data){
	//text = '<data some='abc'></data>'
	alert(data.xml().some); //abc
});
~~~

If necessary, you can access raw XML object by using  *data.rawxml()*.


#### Other formats

{{snippet CSV}}
~~~js
webix.ajax("some.php", function(text, xml){
	var obj = webix.DataDriver.csv.toObject(text,xml);
	alert(obj[0][0]); //row and column indexes
});
~~~

{{snippet JSArray}}
~~~js
webix.ajax("some.php", function(text, xml){
	var obj = webix.DataDriver.jsarray.toObject(text,xml);
	alert(obj[0][0]); //row and column indexes
});
~~~
  

{{snippet HTML}}
~~~js
webix.ajax("some.php", function(text,xml){
	//text = '<ul><li some='abc'></ul>'
	var obj = webix.DataDriver.html.toObject(text,xml);
	alert(obj[0].some); //abc
});
~~~

#### Extra parameters

If all above is not enough, you can access raw xmlHttpRequest and poll it for additional data:

~~~js
webix.ajax("some.php", function(text,xml, ajax){
	alert(ajax.status);
});
~~~

Getting Binary Data
------------------------

Webix Ajax class offers a pattern for retrieving binary data objects from the server. 

It can be done with the dedicated **response()** method that allows setting responseType directly. Now only **"blob"** type is fully supported and 
**"document"** with some restrictions. 

~~~js
webix.ajax().response("blob").get("patch.zip", function(text, data){
  //data - is a data blob
});
~~~

Functionality will not work in IE8-IE9 as these browsers cannot work with blob objects at all.

Promise API for Ajax requests
------------------------

Webix is integrated with the [Promiz.js](http://promisesaplus.com/) library, which allows treating the result of asynchronous operations without callbacks. 

In other words, any Ajax request performed by Webix returns a **promise** object that represents the eventual result of this request.
It can be treated by the **then()** method that is automatically executed when server response arrives.

~~~js
//"promise" object is returned by either of these methods
var promise = webix.ajax("some.php");
var promise = webix.ajax().get("some.php");
var promise = webix.ajax().post("some.php");

//realdata - data that came from server
promise.then(function(realdata){
	...
});
~~~

See how it is implemented in [Webix data loading](desktop/data_loading.md#promiseapiindataloading) pattern.

####Forming a chain of requests with Promises

~~~js
webix.ajax("someA.php").then(function(realdataA){
	return webix.ajax("someB.php");
}).then(function(realdataB){
	return webix.ajax("someC.php")
}).then(function(realdataC){
	...
});
~~~

####Error handling with Promise objects

**then()** method can be used to treat errors: 

~~~js
var promise = webix.ajax("some.php")
promise.then(function success(realdata){}, function error(err){});
~~~

Additionally, the **fail()** method can be used for error handling: 

~~~js
var promise = webix.ajax("a.php");
...
promise.then(function(realdata){ /*success*/});
promise.fail(function(err){/*error*/});
~~~

Or, you can do it in one and the same function: 

~~~js
promise.then(function(realdata){
	//success
}).fail(function(err){
	//error
});
~~~

All the **methods of the promise object** come from the **Promiz.js** library and can be found [there](https://github.com/zolmeister/promiz). 

####webix.promise interface

Webix offers an interface for working with promise objects - **[webix.promise](api/refs/promise.md)** - featuring a set of methods that duplicate 
[Promise object methods](https://github.com/zolmeister/promiz).

It can be used, for instance, to treat several Ajax requests and perform some action when callbacks are received from all of them:

~~~js
a = webix.ajax("someA.php");
b = webix.ajax("someB.php");
c = webix.ajax("someC.php");


webix.promise.all([a,b,c]).then(function(results){
	var a_result = results[0];
    var b_result = results[1];
    var c_result = results[2];
    // do something
	...
});
~~~

@complexity:2