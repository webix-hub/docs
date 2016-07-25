Using Webix Remote with PHP
==============================

You can easily integrate the Webix UI library with PHP. You will find all the necessary instructions in this tutorial.


##Installation Note

To install Webix Remote, you just need to call the following command:

~~~php
composer require webix/remote
~~~


##Server Side Initialization

You should start with creating a server. To ensure safe connection with the server, you should set a CSRF-key (any check line).
Pass this key to the newly-created server. 

~~~php
<?php
//api.php
$key = $_SESSION["csrf-key"];
$api = new Webix\Remote\Server($key);
~~~

Once the server is ready, you will have access to the server-side API. 
For instance, you can add new functions with the help of the *setMethod()* method and call them on the client side.

You need to pass two parameters to setMethod(): 

- name - (string) the name of a new function
- function - (function/object) the method/methods that will be created under the given name

Let's create two functions: one of them will sum up two values and the second one will return an error message.

~~~php
// the "add" function
$api->setMethod("add", function($a, $b){
	return $a + $b;
});

// the "error" function
$api->setMethod("error", function(){
	throw new \Exception("Dummy");
});
~~~

##Client Side Implementation

On the client side you need to include the path to the server-side API after the *webix.js* file:

~~~html
<script src="webix.js"></script>
<script src="api.php"></script>
~~~

To call a server-side method you need to use the **webix.remote.(className).methodName** call.

By default, Webix Remote loads data asynchronously.The client side will get a promise of data first, while real data will come later.

Let's send a request to the server and ask the *mul* function to multiply two numbers and return the result:

~~~js
var result = webix.remote.data.mul(2, 4);
result.then((data) => alert(data));  // 8
~~~

The *result* in the above example is a promise of data.

If you need, you can also use the synchronous data loading. 
For example, you can make use of the *add* function that was described above and get the sum of two numbers like this:

~~~js
var sum = webix.remote.add(2, 4); 
alert(sum); // 6
~~~


##Adding a Class

It is also possible to create a new class and declare the necessary functions inside of it. For example, let's create a class DataDao and 
declare the *mul* function inside of it:

~~~php
class DataDao{
	public function mul($a, $b){
		return $a * $b;
	}
}
~~~

Then you need to create an instance of the DataDao class using the *setClass()* method.
You should pass two arguments to the *setClass()* method:

- name - (string) the name of a new class instance
- constructor - (function) the constructor function

~~~php
$api->setClass("data", new DataDao());
~~~

To refer to a function inside of a class, you will need to specify the name of the object (instance of the class) and the name of the function.
Thus, you can refer to the *mul* function through *data.mul* notation.


##Adding a Static Value

You can add some static value on the server side and then make use of it on the client side. 
Static data can store user data and will be useful for processing user sessions.

To set some static data, use the *setData()* method. It takes two parameters:

- name - (string) the name of parameter that will be set as static
- value - (string) the value that will be set for the static parameter

~~~php
$api->setData("user", "1");
~~~

##API Access Levels

Webix Remote provides the possibility to limit access to API according to the user's access level. 
It means that the user will be able to use this or that method
depending on his/her predefined role.

To implement such a limitation, you need to specify the role that allows using the method during the method's creation like this:

~~~js
$api->setMethod("role@method_name", function(){
   // some code
});
~~~

For example, you can limit access to the "add" method by the "admin" role. 

~~~js
$api->setMethod("admin@add", function($a, $b){
    return $a + $b;
});
~~~

The access levels are defined by the access modificator specified with the *$_SESSION* object:

- all methods for which the access modificator isn't set are allowed by default
- if *$_SESSION["user"]* exists, methods for which the "user" modificator is set are allowed
- if *$_SESSION["user"]["role"]* exists, methods for which the modificator of a partucular role is set are allowed

Let's assume that we have the following rule:

~~~js
$_SESSION["user"]["role"] =  "admin,levelB";
~~~

In this case the *add* function will be allowed for users with the *"user"*, *"user.role=admin"* and *"user.role=levelB"* access modificators. 
For a user with a different role the method will be unavailable:

~~~js
$api->setMethod("user@add1", (a,b) => a+b ); //allowed
$api->setMethod("admin@add2", (a,b) => a+b ); //allowed
$api->setMethod("levelC@add3", (a,b) => a+b ); //blocked
~~~

###Custom Logic for Access Levels

Instead of setting several user verification rules, you can define one access level rule by using the *setAccessHandler* method. For example:

~~~js
$api->setAccessHandler(function(){
	return [ 
		"user" => $_SESSION["loggedin"] ? true : false,
		"admin" => true
	];
});
~~~

The above code will check whether a user exists and whether he/she possesses the admin role. 


