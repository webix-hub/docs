Cross-Domain Data Loading
==============================

It's quite uncommun that your app may require data from domain different to the one it's hosted on. Take for instance that you app is hosted at *http://app.mydomain.com*, data is located at *http://data.mydomain.com* 
and the [data-loading](desktop/data_loading.md) script is called *"data.php"*.

Standard loading will fail in this case as all browsers block all cross-domain operations for the sake of safety even if you try using a different port. 

Nevertheless, there're technoques to overcome this problems. With Webix lib, you can use two of them:

- Cross-Origin Resource Sharing to perform types of requests;
- JSONP Loading for GETting data only.

In both cases you cannot load data with api/link/dataloader_load.md method that data components normally use for external data. On the contrary, you issue data requests and api/link/dataloader_parse.md the returned data in callback.

##Cross-Origin Resource Sharing or CORS

CORS requires additional server configuration, namely you need to configure data server so that it allows any program from the app's domain (and hence, the app itself) to get data from it.

When you issue such **Ajax request** with [Webix ajax function](helpers/ajax_operations.md) like this: 

~~~js
webix.ajax("http://data.mydomain.com/data.php", function(text, data){
   	table.parse(data.json());
});
~~~

The browser sends the following header with the HTTP request:

~~~js
Origin: http://app.mydomain.com
~~~

You need to make data server (http://data.mydomain.com:) to respond with a specific "allowing" header as well. Like here, app's server is allowed to get data from data server:

~~~js
Access-Control-Allow-Origin: http://app.mydomain.com
~~~

This can be done in three ways:

- You  configure the server’s settings;
- You adjust the code of your app to output the header as a part of server response;
- You use some thirdparty API with server already already set for CORS protocol.

More detailed information about CORS in the [Wiki article](https://developer.mozilla.org/en-US/docs/HTTP/Access_control_CORS).

**Advantages**

CORS technique is standard based, safe and can be used with any kind of data (structured or not) while supporting all types of requests – GET, POST, PUT, DELETE, etc.

**Drawbacks**  

CORS protocol can't be used in IE8 and IE9. 

##JSON with Padding or JSONP

In frames of Webix JSONP technique requires changes in client-side code, namely you get data with a special **webix.jsonp()** method that hides all technical details of JSONP handling but at the same time you need to do some coding:

~~~js
//client-side pattern
webix.jsonp("http://data.mydomain.com/data.php", {}, function(data){
     table.parse(data);
});
~~~

Note that in comparison to **Ajax**, **JSONP** always provides **structured data**, not a raw response text.Thta's why the server script must return encoded data:

~~~js
//server-side pattern
$data = get_data_in_some_way();
$json_data = json_encode($data);

$jsonpname = $_GET["jsonp"];

header('content-type: application/json; charset=utf-8');
echo $jsonpname."(".$json_data.")";
~~~

As you can see, the response data is wrapped, encoded as JSON and is sent back combined with “jsonp” parameter. 

[Wikipedia article about JSONP](http://en.wikipedia.org/wiki/JSONP).

**Advantages**:

JSONP works in all browsers and doesn’t require server reconfiguration.

**Drawbacks**:

JSONP requires extra coding but is limited to work only with structured data as well as suitable only for GET requests. At the same time, it is prone to XSS attacks. It's recommended to resort to JSONP only if you need to support
IE8 and IE9 browsers. 










