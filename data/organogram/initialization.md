Initializing Organogram on a page
==============================

A new HTML file and related code files
------------------------------------------

To begin with, create a new HTML file and include the related Webix code files in it.

Required code files are:

- webix.css
- webix.js

{{snippet
A basic html page with the included code files
}}

~~~html
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Organogram</title>
    <script src="../codebase/webix.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="../codebase/webix.css" type="text/css" charset="utf-8">
</head>
<body>
    <script>
        //here you will place your JavaScript code
    </script>
</body>
</html>
~~~

Placing Organogram on a page
--------------------------

Next, you should create a div container to place your organogram into.

~~~html
<div id="box" style="width:900px;height:450px;"></div>
~~~

Object constructor
---------------------

Now you can initialize the component.
To create a new Organogram object, you need to use the next constructor:

{{snippet
Organogram constructor
}}
~~~js
orgChart = new webix.ui({view:"organogram"});
~~~

If you want to place the component into the container, you should specify the container property inside of the view constructor:


{{snippet
Basic Organogram configuration
}}
~~~js
orgChart = new webix.ui({
	container:"box",
    view:"organogram"
});
~~~

{{sample
60_pro/07_organogram/01_basic.html
}}