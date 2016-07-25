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
For instance, you can add new functions with the help of the *addMethod()* method and call them on the client side.

You need to pass two parameters to addMethod(): 

- name - (string) the name of a new function
- function - (function/object) the method/methods that will be created under the given name

Let's create two functions: one of them will sum up two values and the second one will return an error message.

~~~php
// the "add" function
$api->addMethod("add", function($a, $b){
 return $a + $b;
});

// the "error" function
$api->addMethod("error", function(){
 throw new \Exception("Dummy");
});
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

Then you need to create an instance of the DataDao class using the *addClass()* method.
You should pass two arguments to the *addClass()* method:

- name - (string) the name of a new class instance
- constructor - (function) the constructor function

~~~php
$api->addClass("data", new DataDao());
~~~

To refer to a function inside of a class, you will need to specify the name of the object (instance of the class) and the name of the function.
Thus, you can refer to the *mul* function through *data.mul* notation.


##Adding a Static Value

You can add some static value on the server side and then make use of it on the client side. 
Static data can store user data and will be useful for processing user sessions.

To set some static data, use the *addData()* method. It takes two parameters:

- name - (string) the name of parameter that will be set as static
- value - (string) the value that will be set for the static parameter

~~~php
$api->addData("user", "1");
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
