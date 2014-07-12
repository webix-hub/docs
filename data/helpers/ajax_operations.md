Ajax operations
==================

Sending data
------------ 

Simplest ajax call can be done as

~~~js
webix.ajax("some.php", function(text){
	webix.message(text); //show server side response
});
~~~

Above code makes async. get request to the some.php and shows it response through callback function. 


### Passing parameters

You can pass extra parameters by including them in the request string
~~~js
webix.ajax("some.php?action=info&id=123");
~~~

or by using separate object 

~~~js
webix.ajax("some.php",{ action:"info", id:123 });
~~~

in case of object notation, lib will escape values automatically. 


### Post mode

Same function can be used to make post requests

~~~js
webix.ajax().post("some.php");
~~~

here you can also use two methods to provide extra params 


~~~js
//GET: some.php; POST: action=info,  id=123
webix.ajax().post("some.php","action=info&id=123"); //GET: some.php
webix.ajax().post("some.php", { action:"info", id:123 }); 
~~~



### Sync mode 


There are two ways that Ajax can access the server:

- synchronous (before continuing, script waits for the server back reply).
- asynchronous (script continues page processing and handles reply as it comes).

By default all request done in async. mode, but there is a sync. alternative

~~~js
webix.ajax().sync().get("some.php");
webix.ajax().sync().post("some.php");
~~~


### Callback

For async ajax calls, last parameter of method is a callback function

~~~js
webix.ajax("some.php", function(text, xml, XmlHttpRequest){
	// text - full text of response 
	// xml - response parsed as xml , if applicable
	// XmlHttpRequest - loader object
}); 
~~~

For sync requests, there is no callback, because there is no need for waiting


~~~js
var xhr = webix.ajax().sync().get("some.php");
var text = xhr.responseText;
~~~

It's possible to define two callback methods, one for valid server side response and second for the error response
~~~js
webix.ajax("some.php",{
	error:function(text, xml, XmlHttpRequest){
		alert("error");
	},
	success:function(text, xml, XmlHttpRequest){
		alert("success");
	}
});
~~~


If you need to trigger multiple callbacks after method finishing, you can define an array of callbacks as last parameter

~~~js
webix.ajax.get("some.php", [callback1, callback2]);
~~~


In some case you may need to provide some extra data for callback, it can be done in the next way
~~~js
function after_call(text){
	 alert("Call: "+this.data+", response: "+text);
};
webix.ajax.get("some.php", after_call, { data:"my ajax"});
~~~
Basically, the parameter after callback will be accessible as "this" in the callback method

### Extra headers

If server side code requires some extra headers you can send them as 

~~~js
webix.ajax().header({
	"Sent-by":"My Script" //any custom headers can be define in such way
}).get("./data.php");
~~~

You can use header in combination with async, get and post methods

### JSON sending

If you are working with websirvice, you may need to send json content to the server side, it can be done as

~~~js
webix.ajax().header({
	"Content-type":"application/json"
}).post("./data.php", JSON.stringify(payload), function(text){
	//optional callback here
});
~~~


Incoming data parsing 
---------------------

#### Plain response

In common case you can use text parameter of callback to access the data

~~~js 
webix.ajax("./data.php", function(text){
	webix.message(text);
})
~~~

#### JSON response

While you can use the above code to access raw text response, there is a more neat solution

~~~js
webix.ajax.get("some.php", function(text,data){
	//text = '{ some :"abc"}'
	alert(data.json().some); //abc
});
~~~

the second parameter of response can provide you with a ready-to-use json object 

#### XML response

Same as above, you can use

~~~js
webix.ajax.get("some.php", function(text,xml){
	//text = '<data some='abc'></data>'
	alert(obj.xml().some); //abc
});
~~~

if necessary you can access raw xml object by using  data.rawxml();


#### Other formats

{{snippet CVS }}
~~~js
webix.ajax.get("some.php", function(text,xml){
	var obj = webix.DataDriver.csv.toObject(text,xml);
	alert(obj[0][0]); //row and column indexes
});
~~~

{{snippet JSArray }}
~~~js
webix.ajax.get("some.php", function(text,xml){
	var obj = webix.DataDriver.jsarray.toObject(text,xml);
	alert(obj[0][0]); //row and column indexes
});
~~~
  

{{snippet HTML}}
~~~js
webix.ajax.get("some.php", function(text,xml){
	//text = '<ul><li some='abc'></ul>'
	var obj = webix.DataDriver.html.toObject(text,xml);
	alert(obj[0].some); //abc
});
~~~

#### Extra parameters

If all above is not enough you can access raw xmlHttpRequest and poll it for additional data

~~~js
webix.ajax.get("some.php", function(text,xml, ajax){
	alert(ajax.status);
});
~~~

@complexity:2