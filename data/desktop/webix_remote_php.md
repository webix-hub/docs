Using Webix Remote with PHP
==============================

You can easily integrate the Webix UI library with PHP. You will find all the necessary instructions in this tutorial.


##Installation Note

You can grab package from GitHub at [https://github.com/webix-hub/remote-php](https://github.com/webix-hub/remote-php).


##Server Side Initialization

You should start with creating a server: 

~~~php
$api = new Webix\Remote\Server();
~~~

After that you can add new functions with the help of the *setMethod()* method and then call them on the client side.

You need to pass two parameters to setMethod(): 

- name - (string) the name of a new function
- function - (function/object) the method/methods that will be created under the given name

Let's define a function that will sum up two values:

~~~php
// the "add" function
$api->setMethod("add", function($a, $b){
	return $a + $b;
});
~~~

Then you can refer to the registered method from the client side.

##Adding a Class

It is also possible to define a new class and declare the necessary functions inside of it. 
For example, let's set a class DataDao and declare the *multiply* function inside of it:

~~~php
class DataDao{
	public function multiply($a, $b){
		return $a * $b;
	}
}
~~~

Then you need to create an instance of the DataDao class using the *setClass()* method.
You should pass two arguments to the *setClass()* method:

- name - (string) the name of a new class object
- class_object - (object) the class object

~~~php
$api->setClass("data", new DataDao());
~~~

To refer to a function inside of a class on the client side, you will need to specify the name of the object and the name of the function.<br>
Thus, you can refer to the *multiply* function through *data.multiply* notation.



##Client Side Implementation

On the client side you need to include the file with the server-side API after the *webix.js* file:

~~~html
<script src="webix.js"></script>
<script src="api.php"></script>
~~~

To call a server-side method you need to use the **webix.remote.(className).methodName** call.

By default, Webix Remote loads data asynchronously.The client side will get a promise of data first, while real data will come later.

Let's send a request to the server and ask the *multiply* function to multiply two numbers and return the result:

~~~js
var result = webix.remote.data.multiply(2, 4);
result.then((data) => alert(data));  // 8
~~~

The *result* in the above example is a promise of data.

If you need, you can also use the synchronous data loading. 
For example, you can make use of the *add* function that was described above and get the sum of two numbers like this:

~~~js
var sum = webix.remote.add(2, 4); 
alert(sum); // 6
~~~

##Adding a Static Value

You can add some static value on the server side and then make use of it on the client side. 
Static data can store user data and will be useful for processing user sessions.

To set some static data, use the *setData()* method. It takes two parameters:

- name - (string) the name of parameter that will be set as static
- value - (string) the value that will be set for the static parameter

~~~php
$api->setData("user", "1");
~~~

##Setting CSRF-security

To ensure safe connection with the server, you should set a CSRF-key (any unique line) as the first parameter during the server creation:

~~~php
//api.php
$key = $_SESSION["csrf-key"];
$api = new Webix\Remote\Server($key);
~~~


##API Access Levels

Webix Remote provides the possibility to limit access to API according to the user's access level.<br>
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

The access levels are defined by the second parameter of the constructor used for server creation:

~~~php
$api = new Webix\Remote\Server($key, $user);
~~~

- all methods for which the access modifier isn't set are allowed by default
- if any access modifier is set, methods for which this modifier is set are allowed
- if any access modifier with a particular role is set, methods for which the modifier of this role is set are allowed


Let's assume that we have the following rule:

~~~php
$user = ["role" => "admin,levelB"];
~~~

In this case the *add* function will be allowed for users with the *"user"*, *"user.role=admin"* and *"user.role=levelB"* access modifiers. 
For a user with a different role the method will be unavailable:

~~~php
$api->setMethod("user@add1", (a,b) => a+b ); //allowed
$api->setMethod("admin@add2", (a,b) => a+b ); //allowed
$api->setMethod("levelC@add3", (a,b) => a+b ); //blocked
~~~




