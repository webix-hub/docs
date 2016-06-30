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

On the server side you need to include the "webix-remote" dependency. 
Then you should make connection to the *server* function which describes the server-side API, and put it into a variable to
address to it later.

~~~js
var remote = require("webix-remote");
var api = remote.server();
~~~

After that you will be able to apply server-side API in your code.
For example, you can use the setMethod() method that registers new methods to use them later in the code. 

Let's apply it and add the *save* function that will save changes for an element by its id.
You need to pass two parameters to the setMethod() method:

- name - the function's name
- function -  the function's description 

~~~js
// adding a "save" function
api.setMethod("save", function(){
	// saving logic
});
~~~
 

##Client-side code

On the client side you can describe operations that should be performed with data and get the result. To address to the server you need to use **webix.remote** object.

In the example below we use the *save* function that was added on the server and send a request for saving changes in the element with the id=12. 
The result of the operation will be written into the *result* variable.

~~~js
var result = webix.remote.save("12");
~~~

Webix Remote defines that the client-side will get a promise of data first, while real data will come later. The *result* in our example is a promise.
It allows avoiding delays in the page rendering.

To process operations on the server, you need to provide the path to the server-side API after the *webix.js* file on the page.

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

The client-side code can look like this:

~~~js
webix.remote.add(1,2);
~~~

##Setting static data

You can specify some static data on the server which will be available on the client. It can be useful during sessions for storing user data 
and sharing it with the client side. To specify static data, you need to use the setData() method and pass two parameters to it:

- parameter - (string) the parameter that will be set as static
- function - (function) the function that will take the request object and return the result

For example, on the server side we set the "$user" parameter. The function specified as the second parameter will get a request with the *$req* parameter and
return the *$user* parameter that contains the user id:

~~~js
api.setData("$user", function($req){
    return $req.user.id;
});
~~~

On the client the received user id will be assigned to the *user* variable.

~~~js
var user = webix.remote.$user;
~~~

Pay attention that the data generation method will be called just once - during the API initialization.

##API Access Levels

Webix Remote provides the possibility to limit access to API according to the user's access level. It means that the user will be able to use this or that method
depending on his/her predefined role.

To implement such a limitation, you need to specify the role that allows using the method during the method's creation like this:

~~~js
api.setMethod("role@method_name", function(){
   // some code
});
~~~

For example, you can limit access to the "add" method by the "admin" role. 

~~~js
api.setMethod("admin@add", function(a,b){
    return a+b;
});
~~~

The rules of defining access levels are the following:

- all methods for which the access modificator isn't set are allowed by default
- if *req.session.user* exists, methods for which the "user" modificator is set are allowed
- if *req.session.user.role* exists, methods for which the modificator of a partucular role is set are allowed

Let's assume that we have the following rule:

~~~js
req.session = { user: { role:"admin,levelB"}}
~~~

In this case methods will be allowed for users with the *user* and *user.role* access modificators:

~~~js
api.setMethod("user@add1", (a,b) => a+b ); //allowed
api.setMethod("admin@add2", (a,b) => a+b ); //allowed
api.setMethod("levelC@add3", (a,b) => a+b ); //blocked
~~~

###Setting custom logic for access levels

You can define your own access level rule by using the *$access* parameter:

~~~js
api.$access = function(){
    return { 
        user : !!req.user,
        admin: req.user && req.user.id == 1 
    };
};
~~~

