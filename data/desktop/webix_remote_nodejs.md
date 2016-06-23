Using Webix Remote with Node.js
==============================

This guide will give you the idea of how you can use Webix Remote for integrating the Webix library with Node.js.

##Installation note

To install Webix Remote, simply run the command below in the command line:

~~~js
npm install webix-remote
~~~
 
After that you need to add the necessary client logic and describe the server script.


##Server-side code

On the server side we include "webix-remote" dependency. 
Then we make connection to the *server* function which describes the server-side API, and put it into a variable to
address to it later.

~~~js
var remote = require("webix-remote");
var api = remote.server();
~~~

After that we will be able to apply server-side API in our code.
For example, we can use the setMethod() method that registers new methods to use them later in the code. Let's apply it and add the save function that will save 
changes for an element by its id.
We will pass two parameters to this method:

- name - the function's name
- function -  the function's description 

~~~js
// adding a "save" function
api.setMethod("save", function(){
	// saving logic
});
~~~
 

##Client-side code

On the client side we describe operations that should be performed with data and get the result. To address to the server we need to use **webix.remote** object.

In the example below we use the save function that was added on the server and send a request for saving changes in the element with the id=12. 
The result of the operation will be written into the *result* variable.

~~~js
var result = webix.remote.save("12");
~~~

To process operations on the server, we need to provide the path to the server-side API after the *webix.js* file on the page.

~~~html
<script src='webix.js'></script>
<script src='/api'></script>
<script>
   // actions' description
</script>
~~~

##Passing special parameters

You can pass some additional parameters to the functions created on the server. For example, a request object:

~~~js
api.setMethod("add", function(a,b,$req){
    return a+b+$req.session.userBonus;
});
~~~

The $req parameter on the client will look like this:

~~~js
webix.remote.add(1,2);
~~~

##Setting static data

You can specify some static data on the server which will be available on the client.